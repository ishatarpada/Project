<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Search</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <!-- Search Box -->

  <form id="search-form" class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Search for courses" aria-label="Search" id="search-input" required>
    <button type="button" class="btn btn-primary" id="search-Btn">Search</button>
  </form>

  <!-- Modal -->
  <div class="modal fade" id="courseModal" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="courseModalLabel">Course Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="modal-body">
          <!-- Course details will be loaded here -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      const searchBtn = $('#search-Btn');
      const searchInput = $('#search-input');
      const courseModal = new bootstrap.Modal($('#courseModal'));
      const modalBody = $('#modal-body');
      const loadingIndicator = $('<div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>');

      function showCourseDetails(courseId) {
        $.get('fetch_course_details.php', {
          course_id: courseId
        }, function(data) {
          try {
            const details = typeof data === 'string' ? JSON.parse(data) : data;
            modalBody.html(`
              <div class="bg-white rounded-lg overflow-hidden">
                <img src="${details.course_img}" alt="${details.course_title}" class="w-full mx-3 h-72 object-fit">
                <div class="p-4">
                  <h2 class="text-xl font-semibold text-gray-800 mb-2">${details.course_title}</h2>
                  <p class="text-gray-600 mb-4">${details.course_description}</p>
                  <div class="flex flex-col space-y-2">
                    <div class="flex justify-between">
                      <span class="font-semibold text-gray-800">Category:</span>
                      <span class="text-gray-600">${details.course_category}</span>
                    </div>
                    <div class="flex justify-between">
                      <span class="font-semibold text-gray-800">Level:</span>
                      <span class="text-gray-600">${details.course_level}</span>
                    </div>
                    <div class="flex justify-between">
                      <span class="font-semibold text-gray-800">Language:</span>
                      <span class="text-gray-600">${details.course_language}</span>
                    </div>
                    <div class="flex justify-between">
                      <span class="font-semibold text-gray-800">Instructor:</span>
                      <span class="text-gray-600">${details.instructor}</span>
                    </div>
                    <div class="flex justify-between mt-4">
                      <span class="font-semibold text-gray-800">Price:</span>
                      <span class="text-gray-600">$ ${details.course_price}</span>
                    </div>
                  </div>
                </div>
              </div>
            `);
            courseModal.show();
          } catch (e) {
            console.error('Error parsing course details:', e);
          }
        }).fail(function() {
          console.error('Failed to fetch course details.');
        });
      }

      function searchCourses(query) {
        modalBody.html(loadingIndicator); // Show loading indicator
        $.get('fetch_courses.php', {
          query
        }, function(data) {
          try {
            const courses = typeof data === 'string' ? JSON.parse(data) : data;
            if (courses.length > 0) {
              // Assuming you want to display the first course for demo purposes
              showCourseDetails(courses[0].course_ID);
            } else {
              modalBody.html('<p>No courses found for the search query.</p>');
              courseModal.show();
            }
          } catch (e) {
            console.error('Error parsing courses:', e);
          }
        }).fail(function() {
          console.error('Failed to search for courses.');
        });
      }

      searchBtn.click(function() {
        const query = searchInput.val().trim();
        if (query) {
          searchCourses(query);
        } else {
          alert('Please enter a search term.');
        }
      });
    });
  </script>
</body>

</html>