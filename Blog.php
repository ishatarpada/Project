<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style/pages.css">
</head>

<body>
  <?php
  include 'pages-navbar.php'
  ?>

  <div class="container-fluid m-0 bg-green-50">
    <div class="row m-0">
      <div class="col-lg-12 m-0">
        <div class="newsletter-inner h-96">
          <div class="newsletter-content row">
            <h2 class="font-serif font-bold text-6xl md:text-2xl sm:text-xl col-md-6 d-flex justify-content-center align-items-center p-2">
              <p>Insights, ideas, and stories</p>
            </h2>
            <div class="h-60 col-md-6">
              <img src="https://about.udemy.com/wp-content/uploads/2021/07/blog5-2.png" alt="newsletter" class="img-fluid newsletter-img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="testimonialCarousel" class="carousel slide testimonial-slider container-fluid p-0 my-5" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="relative bg-purple-200 p-5 h-100">
          <div class="d-flex items-center justify-center w-full h-100 position-relative">
            <div class="d-flex flex-column flex-md-row container mx-auto items-center">
              <img src="https://about.udemy.com/culture/intentional-impact-a-recap-of-udemy-at-afrotech/" alt="" class="img-fluid">
              <div class="ms-5 content text-center text-md-start">
                <p class="text-2xl md:text-4xl lg:text-6xl font-bold font-serif fs-1 text-white">Collaborative Innovation</p>
                <p class="text-xl text-white">We bring together diverse perspectives to foster collaborative innovation. By sharing insights and working together, we aim to create solutions that are greater than the sum of their parts.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="relative bg-purple-200 p-5 h-100">
          <div class="d-flex items-center justify-center w-full h-100 position-relative">
            <div class="d-flex flex-column flex-md-row container mx-auto items-center">
              <img src="https://about.udemy.com/culture/behind-the-scenes-of-udemy-businesss-success/" alt="" class="img-fluid">
              <div class="ms-5 content text-center text-md-start">
                <p class="text-2xl md:text-4xl lg:text-6xl font-bold font-serif fs-1 text-white">It Takes a Village</p>
                <p class="text-xl text-white">"It takes a village" signifies the collective effort of a community in nurturing and supporting its members. In times of need, everyone contributes, reflecting the strength and unity found in shared responsibilities and mutual care.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="relative bg-purple-200 p-5 h-100">
          <div class="d-flex items-center justify-center w-full h-100 position-relative">
            <div class="d-flex flex-column flex-md-row container mx-auto items-center">
              <img src="https://about.udemy.com/culture/from-workplace-ops-to-support-how-nino-grew-his-career-at-udemy/" alt="" class="img-fluid">
              <div class="ms-5 content text-center text-md-start">
                <p class="text-2xl md:text-4xl lg:text-6xl font-bold font-serif fs-1 text-white">Learning and Leading</p>
                <p class="text-xl text-white">Learning and leading go hand in hand, as effective leadership stems from a continuous quest for knowledge and personal growth. By embracing lifelong learning, leaders can inspire and guide others, fostering a culture of innovation and progress.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container my-5">
    <div class="row">
      <div class="col-md-6 col-sm-12 my-3">
        <div class="card border-0">
          <div class="relative inline-flex items-center justify-center w-full h-64 overflow-hidden bg-green-500 rounded dark:bg-green-600">
            <span class="text-4xl text-white font-bold">Mentor U</span>
          </div>
          <div class="card-body">
            <a href="#" class="text-green-500 text-decoration-none fw-bold fs-5">May 29, 2024</a>
            <h5 class="card-title fw-bold text-2xl font-serif">MentorU: Fostering Professional Development and Success in a Skills-Based Economy</h5>
            <p class="card-text fw-semibold">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 my-3">
        <div class="card border-0">
          <img src="https://about.udemy.com/wp-content/uploads/2024/05/IMG_2407-1-1024x421.jpg" class="card-img-top h-64 w-64 border-0" alt="...">
          <div class="card-body">
            <a href="#" class="text-green-500 text-decoration-none fw-bold fs-5">May 16, 2024</a>
            <h5 class="card-title fw-bold text-2xl font-serif">Embracing the Udemy Culture: A Journey of Collaboration and Growth in EMEA</h5>
            <p class="card-text fw-semibold">﻿ In 2014, Udemy established its EMEA headquarters in Dublin, Ireland The culture we've developed there is more than a mere concept; it's the...</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 my-3">
        <div class="card border-0">
          <div class="relative inline-flex items-center justify-center w-full h-64 overflow-hidden bg-slate-500 rounded dark:bg-slate-600">
            <span class="text-5xl text-green-500 font-bold">myCourse.io</span>
          </div>
          <div class="card-body">
            <a href="#" class="text-green-500 text-decoration-none fw-bold fs-5">April 16, 2024</a>
            <h5 class="card-title fw-bold text-2xl font-serif">Putting Impact into Practice: The Value of ESG Skills Development</h5>
            <p class="card-text fw-semibold">Transparency around companies’ carbon emissions, employee policies, and board makeup has become essential for organizations that want to perform</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 my-3">
        <div class="card border-0">
          <img src="https://about.udemy.com/wp-content/uploads/2024/04/IMG_2009-2-1024x536.jpg" class="card-img-top h-64 w-64 border-0" alt="...">
          <div class="card-body">
            <a href="#" class="text-green-500 text-decoration-none fw-bold fs-5">April 2, 2024</a>
            <h5 class="card-title fw-bold text-2xl font-serif">Udemy’s Revolutionary GenAI Driving the Skills-Based Economy Shift</h5>
            <p class="card-text fw-semibold">This piece was originally written by Olivia McClure on Built In Three team members involved in the product’s creation describe the work that has gone.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 my-3">
        <div class="card border-0">
          <img src="https://about.udemy.com/wp-content/uploads/2024/04/Elise-Body-Image-1-1-1024x536.jpg" class="card-img-top h-64 w-64 border-0" alt="...">
          <div class="card-body">
            <a href="#" class="text-green-500 text-decoration-none fw-bold fs-5">April 1, 2024</a>
            <h5 class="card-title fw-bold text-2xl font-serif">Echoes of Transformation in the Amazon</h5>
            <p class="card-text fw-semibold">This piece was originally written by Elise Rooney on Udemy's Stories page The funny thing about transformation is that you may not even realize it’s.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 my-3">
        <div class="card border-0">
          <img src="https://about.udemy.com/wp-content/uploads/2024/03/IMG_3441-1024x683.jpg" class="card-img-top h-64 w-64 border-0" alt="...">
          <div class="card-body">
            <a href="#" class="text-green-500 text-decoration-none fw-bold fs-5">May 26, 2024</a>
            <h5 class="card-title fw-bold text-2xl font-serif">MentorU: Fostering Professional Development and Success in a Skills-Based Economy</h5>
            <p class="card-text fw-semibold">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 my-3">
        <div class="card border-0">
          <img src="https://about.udemy.com/wp-content/uploads/2024/04/IMG_2009-2-1024x536.jpg" class="card-img-top h-64 w-64 border-0" alt="...">
          <div class="card-body">
            <a href="#" class="text-green-500 text-decoration-none fw-bold fs-5">May 29, 2024</a>
            <h5 class="card-title fw-bold text-2xl font-serif">MentorU: Fostering Professional Development and Success in a Skills-Based Economy</h5>
            <p class="card-text fw-semibold">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 my-3">
        <div class="card border-0">
          <img src="https://about.udemy.com/wp-content/uploads/2024/05/IMG_2407-1-1024x421.jpg" class="card-img-top h-64 w-64 border-0" alt="...">
          <div class="card-body">
            <a href="#" class="text-green-500 text-decoration-none fw-bold fs-5">May 29, 2024</a>
            <h5 class="card-title fw-bold text-2xl font-serif">MentorU: Fostering Professional Development and Success in a Skills-Based Economy</h5>
            <p class="card-text fw-semibold">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 my-3">
        <div class="card border-0">
          <img src="https://about.udemy.com/wp-content/uploads/2024/04/IMG_2009-2-1024x536.jpg" class="card-img-top h-64 w-64 border-0" alt="...">
          <div class="card-body">
            <a href="#" class="text-green-500 text-decoration-none fw-bold fs-5">April 2, 2024</a>
            <h5 class="card-title fw-bold text-2xl font-serif">Udemy’s Revolutionary GenAI Driving the Skills-Based Economy Shift</h5>
            <p class="card-text fw-semibold">This piece was originally written by Olivia McClure on Built In Three team members involved in the product’s creation describe the work that has gone.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 my-3">
        <div class="card border-0">
          <img src="https://about.udemy.com/wp-content/uploads/2024/04/Elise-Body-Image-1-1-1024x536.jpg" class="card-img-top h-64 w-64 border-0" alt="...">
          <div class="card-body">
            <a href="#" class="text-green-500 text-decoration-none fw-bold fs-5">April 1, 2024</a>
            <h5 class="card-title fw-bold text-2xl font-serif">Echoes of Transformation in the Amazon</h5>
            <p class="card-text fw-semibold">This piece was originally written by Elise Rooney on Udemy's Stories page The funny thing about transformation is that you may not even realize it’s.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 my-3">
        <div class="card border-0">
          <img src="https://about.udemy.com/wp-content/uploads/2024/03/IMG_3441-1024x683.jpg" class="card-img-top h-64 w-64 border-0" alt="...">
          <div class="card-body">
            <a href="#" class="text-green-500 text-decoration-none fw-bold fs-5">May 26, 2024</a>
            <h5 class="card-title fw-bold text-2xl font-serif">MentorU: Fostering Professional Development and Success in a Skills-Based Economy</h5>
            <p class="card-text fw-semibold">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 my-3">
        <div class="card border-0">
          <img src="https://about.udemy.com/wp-content/uploads/2024/04/IMG_2009-2-1024x536.jpg" class="card-img-top h-64 w-64 border-0" alt="...">
          <div class="card-body">
            <a href="#" class="text-green-500 text-decoration-none fw-bold fs-5">May 29, 2024</a>
            <h5 class="card-title fw-bold text-2xl font-serif">MentorU: Fostering Professional Development and Success in a Skills-Based Economy</h5>
            <p class="card-text fw-semibold">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


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


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>