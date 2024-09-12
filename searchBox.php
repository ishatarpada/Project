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
  <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <!-- Search Box -->
  <div class="container search-section bg-body-tertiary py-2 mt-4 border-rounded">
    <div class="row py-3 justify-content-center align-items-center">
      <div class="col-lg-4 my-auto categories">
        <form action="#" id="category-form">
          <select class="form-select mx-auto w-100 bg-transparent" aria-label="select example" id="category-select">
            <option value="">Categories</option>
            <!-- Categories will be dynamically loaded here -->
          </select>
        </form>
      </div>
      <div class="col-lg-4 my-auto topics">
        <select class="form-select mx-auto w-100 bg-transparent" aria-label="select example" id="topics-select">
          <option value="">Topics</option>
          <!-- Topics will be dynamically loaded here -->
        </select>
      </div>
      <div class="col-lg-3 my-auto search-btn d-flex justify-content-center align-items-center">
        <button type="button" class="btn fw-bolder fs-5 w-100" id="search-btn">Search</button>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md font-serif">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold font-serif" id="categoryModalLabel">Course Details</h5>
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
      const categorySelect = $('#category-select');
      const topicsSelect = $('#topics-select');
      const searchBtn = $('#search-btn');
      const categoryModal = new bootstrap.Modal($('#categoryModal'));
      const modalBody = $('#modal-body');

      // Fetch categories from the server and populate the select dropdown
      function loadCategories() {
        $.get('fetch_categories.php', function(data) {
          console.log('Raw data from fetch_categories.php:', data);

          // Check and parse data if necessary
          try {
            const categories = typeof data === 'string' ? JSON.parse(data) : data;
            console.log('Parsed categories:', categories);

            categorySelect.empty().append('<option value="">Categories</option>');
            categories.forEach(category => {
              categorySelect.append(`<option value="${category}">${category}</option>`);
            });
          } catch (e) {
            console.error('Error parsing categories:', e);
          }
        }).fail(function() {
          console.error('Failed to fetch categories.');
        });
      }

      // Load topics dynamically based on selected category
      function loadTopics(category) {
        $.get('fetch_topics.php', {
          category
        }, function(data) {
          console.log('Raw data from fetch_topics.php:', data);

          try {
            const topics = typeof data === 'string' ? JSON.parse(data) : data;
            console.log('Parsed topics:', topics);

            topicsSelect.empty().append('<option value="">Topics</option>');
            topics.forEach(topic => {
              topicsSelect.append(`<option value="${topic}">${topic}</option>`);
            });
          } catch (e) {
            console.error('Error parsing topics:', e);
          }
        }).fail(function() {
          console.error('Failed to fetch topics.');
        });
      }

      // Fetch and display course details in the modal
      function showCourseDetails(courseId) {
        $.get('fetch_course_details.php', {
          course_id: courseId
        }, function(data) {
          console.log('Raw data from fetch_course_details.php:', data);

          try {
            const details = typeof data === 'string' ? JSON.parse(data) : data;
            console.log('Parsed course details:', details);

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
            categoryModal.show();
          } catch (e) {
            console.error('Error parsing course details:', e);
          }
        }).fail(function() {
          console.error('Failed to fetch course details.');
        });
      }

      // Search functionality
      function searchCourses(category, topic) {
        $.get('fetch_courses.php', {
          category,
          topic
        }, function(data) {
          console.log('Raw data from fetch_courses.php:', data);

          try {
            const courses = typeof data === 'string' ? JSON.parse(data) : data;
            console.log('Parsed courses:', courses);

            if (courses.length > 0) {
              // Assuming you want to display the first course for demo purposes
              showCourseDetails(courses[0].course_ID);
            } else {
              modalBody.html('<p>No courses found for the selected category and topic.</p>');
              categoryModal.show();
            }
          } catch (e) {
            console.error('Error parsing courses:', e);
          }
        }).fail(function() {
          console.error('Failed to search for courses.');
        });
      }

      // Event listener for category selection
      categorySelect.change(function() {
        const selectedCategory = $(this).val();
        if (selectedCategory) {
          loadTopics(selectedCategory);
        }
      });

      // Event listener for search button
      searchBtn.click(function() {
        const selectedCategory = categorySelect.val();
        const selectedTopic = topicsSelect.val();
        searchCourses(selectedCategory, selectedTopic);
      });

      // Load categories on page load
      loadCategories();
    });
  </script>
</body>

</html>