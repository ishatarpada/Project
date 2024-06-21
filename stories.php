<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stories</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style/pages.css">
</head>

<body>
  <?php
  include 'pages-navbar.php'
  ?>

  <div class="container my-5">
    <div class="intro_content d-flex justify-content-between align-items-center flex-wrap">
      <div class="intro_description">
        <h5 class="fw-medium">Stories of Transformation</h5>
        <h1 class="fw-bold font-serif text-6xl">The right skills can rewrite your story</h1>
      </div>
      <div class="intro_tagline mb-5">
        <span class="fw-semibold fs-5">
          Discover the people who are creating possibilities for themselves with Udemy. </span>
      </div>
    </div>
    <div class="video-cta_content position-relative">
      <div class="cta_section position-absolute bg-white top-50 mx-5 rounded p-5">
        <div class="cta_item">
          <div class="cta-container--top">
            <h3 class="cta-title fw-bold fs-3">A recipe for conservation <br> and connection</h3>
            <div class="cta-desc fw-semibold">A chef and conservationist in the Amazon uses new<br> skills to shed light on the culinary<br> traditions of indigenous communities.</div>
          </div><a class="cta-link mt-3 text-green-600 fw-bold fs-5 text-decoration-none" href="https://about.udemy.com/story/roy-riquelme/">
            <div class="cta-link-text">Watch now</div>
          </a>
        </div>
      </div>
      <img class="stories-img-radius" src="https://about.udemy.com/wp-content/uploads/2024/04/Roy-header.jpg" class="position-absolute">
    </div>
  </div>

  <section class="more-stories__section">
    <div class="container">
      <h3 class="fw-bold fs-3">If you can dream it, you can learn to do it.</h3>
      <div class="nav-bar-stories mb-5 d-flex overflow-x-auto">
        <a href="#" data-content="content-all" class="active text-black text-nowrap fw-medium fs-5 text-decoration-none hove:underline mx-3">Featured stories</a>
        <a href="#" data-content="content-customers" class="text-black text-nowrap fw-medium fs-5 text-decoration-none hove:underline mx-3">Customers</a>
        <a href="#" data-content="content-instructors" class="text-black text-nowrap fw-medium fs-5 text-decoration-none hove:underline mx-3">Instructors</a>
        <a href="#" data-content="content-learners" class="text-black text-nowrap fw-medium fs-5 text-decoration-none hove:underline mx-3">Learners</a>
        <a href="#" data-content="content-udemy-employees" class="text-black text-nowrap fw-medium fs-5 text-decoration-none hove:underline mx-3">Udemy Employees</a>
      </div>
      <div class="container mx-auto py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
          <a href="#" class="relative overflow-hidden rounded-lg shadow-lg group">
            <img src="https://about.udemy.com/wp-content/uploads/2024/03/Simon-thumbnail.jpg" alt="" class="w-full transition-transform duration-300 transform group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <div class="absolute bottom-0 left-0 p-4 text-white">
                <span class="block text-lg font-semibold">SIMON R.</span>
                <span class="block mt-1 text-sm">The road to lifelong learning</span>
              </div>
            </div>
          </a>
          <a href="#" class="relative overflow-hidden rounded-lg shadow-lg group">
            <img src="https://about.udemy.com/wp-content/uploads/2024/04/Atlassian-thumbnail-V1-2.jpg" alt="" class="w-full transition-transform duration-300 transform group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <div class="absolute bottom-0 left-0 p-4 text-white">
                <span class="block text-lg font-semibold">TODD M.</span>
                <span class="block mt-1 text-sm">Learning’s forward momentum</span>
              </div>
            </div>
          </a>
          <a href="#" class="relative overflow-hidden rounded-lg shadow-lg group">
            <img src="https://about.udemy.com/wp-content/uploads/2024/06/Bryce-thumbnail.jpg" alt="" class="w-full transition-transform duration-300 transform group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <div class="absolute bottom-0 left-0 p-4 text-white">
                <span class="block text-lg font-semibold">BRYCE J.</span>
                <span class="block mt-1 text-sm">From $40K to $170K</span>
              </div>
            </div>
          </a>
          <a href="#" class="relative overflow-hidden rounded-lg shadow-lg group">
            <img src="https://about.udemy.com/wp-content/uploads/2024/03/Elise-thumbnail-3.jpg" alt="" class="w-full transition-transform duration-300 transform group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <div class="absolute bottom-0 left-0 p-4 text-white">
                <span class="block text-lg font-semibold">ELISE R.</span>
                <span class="block mt-1 text-sm">Echoes of transformation in the Amazon</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="about-you_section bg-green-600 p-5">
    <div class="container">
      <h3 class="title fw-bold font-sans text-white">What about you?</h3>
      <h1 class="font-serif fst-italic text-6xl w-75 mt-5 text-white">
        For learners, instructors, and organizations alike, <em>skills have the power to empower.</em> What possibilities have they opened for <em>you</em>? We want to hear your transformation story. </h1>
      <div class="hover-notes-image d-flex justify-content-start items-center">
        <a href="https://about.udemy.com/stories/share-your-story/" class="btn btn-lg btn-dark rounded px-5 my-3">Share your story</a>
        <img src="https://about.udemy.com/wp-content/themes/wp-about-v4/assets/images/stories/element-about-you-notes.png" class="h-48 w-48">
      </div>
      <div class="vertical-callout mt-3 fs-5 text-white">
        <strong>Skills learned. Stories transformed. </strong>
      </div><strong>
      </strong>
    </div><strong>
    </strong>
  </section>

  <section class="mt-5">
    <footer class="bg-gray-900">
      <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
            <a href="#" class="flex items-center text-decoration-none">
              <img src="Assests/course.png" class="h-8 me-3" alt="FlowBite Logo" />
              <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">myCourse.io</span>
            </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase text-white">Resources</h2>
              <ul class="text-gray-500 text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="" class="hover:underline text-decoration-none text-white">PHP</a>
                </li>
                <li class="mb-4">
                  <a href="" class="hover:underline text-decoration-none text-white">PHP</a>
                </li>
                <li class="mb-4">
                  <a href="" class="hover:underline text-decoration-none text-white">PHP</a>
                </li>
                <li class="mb-4">
                  <a href="" class="hover:underline text-decoration-none text-white">PHP</a>
                </li>
              </ul>
            </div>
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase text-white">Follow us</h2>
              <ul class="text-gray-500 text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="" class="hover:underline text-decoration-none text-white ">Github</a>
                </li>
                <li class="mb-4">
                  <a href="" class="hover:underline text-decoration-none text-white">Discord</a>
                </li>
                <li class="mb-4">
                  <a href="" class="hover:underline text-decoration-none text-white ">Github</a>
                </li>
                <li class="mb-4">
                  <a href="" class="hover:underline text-decoration-none text-white">Discord</a>
                </li>
              </ul>
            </div>
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase text-white">Legal</h2>
              <ul class="text-gray-500 text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="#" class="hover:underline text-decoration-none text-white">Privacy Policy</a>
                </li>
                <li class="mb-4">
                  <a href="#" class="hover:underline text-decoration-none text-white">Terms &amp; Conditions</a>
                </li>
                <li class="mb-4">
                  <a href="#" class="hover:underline text-decoration-none text-white">Privacy Policy</a>
                </li>
                <li class="mb-4">
                  <a href="#" class="hover:underline text-decoration-none text-white">Terms &amp; Conditions</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center text-gray-400">© 2024 <a href="" class="hover:underline fw-bold fs-5">myCourse.IO™</a>. All Rights Reserved.
          </span>
          <div class="flex mt-4 sm:justify-center sm:mt-0">
            <a href="#" class="text-gray-500 hover:text-gray-900 hover:text-white bi bi-facebook me-3 fw-semibold fs-5"></a>
            <a href="#" class="text-gray-500 hover:text-gray-900 hover:text-white bi bi-discord me-3 fw-semibold fs-5"></a>
            <a href="#" class="text-gray-500 hover:text-gray-900 hover:text-white bi bi-twitter me-3 fw-semibold fs-5"></a>
            <a href="#" class="text-gray-500 hover:text-gray-900 hover:text-white bi bi-github me-3 fw-semibold fs-5"></a>
            <a href="#" class="text-gray-500 hover:text-gray-900 hover:text-white bi bi-dribbble me-3 fw-semibold fs-5"></a>
          </div>
        </div>
      </div>
    </footer>

  </section>


  <script src="Script/swiper-bundle.min.js"></script>
</body>

</html>