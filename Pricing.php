<?php 
session_start();
?>

<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pricing</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <nav class="bg-white border-gray-200 dark:bg-gray-900 p-2 shadow">
    <div class=" flex flex-wrap items-center justify-between w-100 m-0">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="Assests/course.png" class="h-12" alt="Flowbite Logo" />
      </a>
      <div class="flex md:order-2">
        <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
          </svg>
          <span class="sr-only">Search</span>
        </button>
        <div class="relative hidden md:block">
          <div class="absolute inset-y-0 start-0 flex items-center px-3 pointer-events-none">
            <i class="bi bi-search me-3 fw-bold"></i>
          </div>
          <input type="text" id="search-navbar" class="block w-full px-5 py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for anything">
        </div>
        <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search-dropdown">
        <div class="relative mt-3 md:hidden">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <i class="bi bi-search me-3 fw-bold"></i>
          </div>
          <input type="text" id="search-navbar-mobile" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
        </div>
        <ul class="flex flex-col px-4 md:p-0 mt-4 rounded-lg md:space-x-8 md:flex-row md:mt-0 md:border-0 md:bg-white">
          <li>
            <div class="dropdown">
              <button class="btn btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
              </button>
              <ul class="dropdown-menu mt-2">
                <li><a class="dropdown-item" href="#">Introduction to Programming</a></li>
                <li><a class="dropdown-item" href="#">Web Development Basics</a></li>
                <li><a class="dropdown-item" href="#">Advanced JavaScript</a></li>
                <li><a class="dropdown-item" href="#">Database Management</a></li>
                <li><a class="dropdown-item" href="#">Python for Data Science</a></li>
                <li><a class="dropdown-item" href="#">Machine Learning Foundations</a></li>
                <li><a class="dropdown-item" href="#">Mobile App Development</a></li>
                <li><a class="dropdown-item" href="#">Cybersecurity Essentials</a></li>
                <li><a class="dropdown-item" href="#">Cloud Computing</a></li>
                <li><a class="dropdown-item" href="#">Software Engineering</a></li>
                <li><a class="dropdown-item" href="#">Data Structures and Algorithms</a></li>
                <li><a class="dropdown-item" href="#">Artificial Intelligence</a></li>
              </ul>
            </div>
          </li>
        </ul>
        <ul class="d-flex justify-between items-center mt-4">
          <li class="mx-3  fw-medium fs-5">myCourse.IO
            business</li>
          <li class="mx-3  fw-medium fs-5">Tech On
            myCourse.io</li>
          <li class="mx-3  fw-medium fs-5">My Learning</li>
        </ul>
        <ul class="d-flex justify-between items-center mt-4">
          <li class="mx-3 fw-bold fs-5"><a href="#" class="hover:text-green-500 text-black text-decoration-none bi bi-heart" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Get your team access to over 26,000 top Udemy courses, anytime, anywhere."></a></li>
          <li class="mx-3 fw-bold fs-5"><a href="#" class="hover:text-green-500 text-black text-decoration-none bi bi-cart" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Turn what you know into an opportunity and reach millions around the world."></a></li>
          <li class="mx-3 fw-bold fs-5"><a href="#" class="hover:text-green-500 text-black text-decoration-none bi bi-bell" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Learning  "></a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container my-5">
    <h1 class="display-3 font-serif fw-bold text-center">Choose a plan for success</h1>
    <p class="fw-medium text-center fs-5">Don't want to buy courses one by one? Pick a plan to help you, your team, or your organization achieve outcomes faster.</p>

    <div class="row mt-5">
      <div class="col-md-4">
        <div class="card p-0">
          <div class="bg-green-500 p-1 rounded-t-lg"></div>
          <div class="card-header">
            <h3 class="font-serif fw-bold my-0">Personal Plan</h3>
            <p class="fw-semibold my-0">for you</p>
            <p class="mt-1 text-gray-700 fw-medium"><i class="bi bi-person me-3"></i>Individual</p>
          </div>
          <div class="card-body">
            <p class="fw-bold mt-5 ms-3 m-0">Starting at ₹850 per month</p>
            <p class="fw-medium ms-3 text-gray-500">Billed monthly or annually. Cancel anytime.</p>
            <div class="bg-dark text-center d-flex justify-center items-center py-2 rounded mb-2"><a href="Subscription.php" class="btn text-center text-white border-0 outline-0">Start Subscription <i class="bi bi-arrow-right"></i></a></div>
            <ul>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i> Access to 11,000+ top courses</li>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i> Certification prep</li>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i> Goal-focused recommendations</li>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i> AI-powered coding exercises</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-0">
          <div class="bg-purple-500 p-1 rounded-t-lg"></div>
          <div class="card-header">
            <h3 class="font-serif fw-bold my-0">Team Plan</h3>
            <p class="fw-semibold my-0">for you</p>
            <p class="mt-1 text-gray-700 fw-medium"><i class="bi bi-person me-3"></i>2 to 20 people</p>
          </div>
          <div class="card-body">
            <p class="fw-bold mt-5 ms-3 m-0">₹1,167 a month per user</p>
            <p class="fw-medium ms-3 text-gray-500">Billed annually. Cancel anytime.</p>
            <div class="bg-dark text-center d-flex justify-center items-center py-2 rounded mb-2"><a href="teamSubscription.php" class="btn text-center text-white border-0 outline-0">Start Subscription <i class="bi bi-arrow-right"></i></a></div>
            <ul>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i> Access to 11,000+ top courses</li>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i> Certification prep</li>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i> Goal-focused recommendations</li>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i> AI-powered coding exercises</li>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i> Analytics and adoption reports</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-0">
          <div class="bg-green-500 p-1 rounded-t-lg"></div>
          <div class="card-header">
            <h3 class="font-serif fw-bold my-0">Enterprise Plan</h3>
            <p class="fw-semibold my-0">For your whole organization</p>
            <p class="mt-1 text-gray-700 fw-medium"><i class="bi bi-person me-3"></i>More than 20 people</p>
          </div>
          <div class="card-body">
            <p class="fw-bold mt-5 ms-3 mb-2">Contact sales for pricing</p>
            <div class="bg-dark text-center d-flex justify-center items-center py-2 rounded mb-2"><a href="requestDemo.php" class="btn text-center text-white border-0 outline-0">Start Subscription <i class="bi bi-arrow-right"></i></a></div>
            <ul>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i> Access to 11,000+ top courses</li>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i> Certification prep</li>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i> Goal-focused recommendations</li>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i> AI-powered coding exercises</li>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i> Advanced analytics and insights</li>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i> Dedicated customer success team</li>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i>International course collection featuring 15 languages</li>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i>Customizable content</li>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i>Hands-on tech training with add-on</li>
              <li><i class="bi bi-check-circle me-2 text-green-500"></i>Strategic implementation services with add-ont</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-center items-center text-green-500 fw-semibold fs-4 my-3">
      <p>Comapre palns and features<i class="bi bi-arrow-down"></i></p>
    </div>
  </div>

  <div class="container-fluid p-5 my-5 bg-secondary bg-opacity-10">
    <div class="partners-banner_wrapper mb-5">
      <div class="partners-banner_content">
        <h2 class="partners-banner_heading text-center font-serif fw-bold fs-2">Trusted by over 16,000 companies and millions of learners around the world</h2>
        <ul class="unstyled-list partner-logos_list d-flex justify-center items-center gap-5 mt-5 flex-wrap">
          <li class=""><img src="https://s.udemycdn.com/partner-logos/ou-v1/volkswagen.svg" alt="Volkswagen logo" width="48" height="48" loading="lazy"></li>
          <li class=""><img src="https://s.udemycdn.com/partner-logos/ou-v1/samsung.svg" alt="Samsung logo" width="101" height="34" loading="lazy"></li>
          <li class=""><img src="https://s.udemycdn.com/partner-logos/ou-v1/cisco.svg" alt="Cisco logo" width="87" height="40" loading="lazy"></li>
          <li class=""><img src="https://s.udemycdn.com/partner-logos/ou-v1/att.svg" alt="ATT&amp;T logo" width="97" height="40" loading="lazy"></li>
          <li class=""><img src="https://s.udemycdn.com/partner-logos/ou-v1/procter_gamble.svg" alt="Procter &amp; Gamble logo" width="48" height="48" loading="lazy"></li>
          <li class=""><img src="https://s.udemycdn.com/partner-logos/ou-v1/hewlett_packard_enterprise.svg" alt="Hewlett Packard Enterprise logo" width="94" height="40" loading="lazy"></li>
          <li class=""><img src="https://s.udemycdn.com/partner-logos/ou-v1/citi.svg" alt="Citi logo" width="62" height="40" loading="lazy"></li>
          <li class=""><img src="https://s.udemycdn.com/partner-logos/ou-v1/ericsson.svg" alt="Ericsson logo" width="55" height="48" loading="lazy"></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <h3 class="font-serif fw-bold">See what others are achieving through learning</h3>
    <div class="row my-3 items-center justify-center">
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <p><i class="bi bi-quote fs-3"></i></p>
            <p>Udemy was rated the <b>most popular online course or certification program</b> for learning how to code according to <u>StackOverflow’s 2023 Developer survey.</u></p>
            <img src="https://s.udemycdn.com/home/ub-case-studies/logo_stackoverflow.svg" alt="">
            <p class="fw-medium text-gray-600">37,076 responses collected</p>
            <a class="text-green-600 fw-bold text-decoration-none">view web development courses <i class="bi bi-arrow-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <p><i class="bi bi-quote fs-3"></i></p>
            <p>Udemy was truly<b>a game-changer and a great guide</b>for me as we brought Dimensional to life.</p>
            <div class="d-flex justify-start items-center">
              <img src="https://s.udemycdn.com/home/ub-case-studies/Alvin_Lim.jpeg" alt="" class="rounded-full h-12 w-12 me-2">
              <div class="mb-3">
                <p class="text-gray-600 m-0 text-sm">Alvin Lim</p>
                <p class="text-gray-600 m-0 text-sm">Technical Co-Founder, CTO at Dimensional</p>
              </div>
            </div>
            <a class="text-green-600 fw-bold text-decoration-none">view this ios & swift courses <i class="bi bi-arrow-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <p><i class="bi bi-quote fs-3"></i></p>
            <p>Udemy gives you the ability to be persistent. I learned exactly what I needed to know in the real world. It helped me sell myself to<b>get a new role</b></p>
            <div class="d-flex justify-start items-center">
              <img src="https://s.udemycdn.com/home/ub-case-studies/Alvin_Lim.jpeg" alt="" class="rounded-full h-12 w-12 me-2">
              <div class="mb-3">
                <p class="text-gray-600 m-0 text-sm">William A. Wachlin</p>
                <p class="text-gray-600 m-0 text-sm">Partner Account Manager at Amazon Web Services</p>
              </div>
            </div>
            <a class="text-green-600 fw-bold text-decoration-none">view this ios & AWS courses <i class="bi bi-arrow-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <p><i class="bi bi-quote fs-3"></i></p>
            <p>With Udemy Business employees were able to marry the two together, technology and consultant soft skills... to help <b>drive their careers forward.</b></p>
            <div class="d-flex justify-start items-center">
              <img src="https://s.udemycdn.com/home/ub-case-studies/Alvin_Lim.jpeg" alt="" class="rounded-full h-12 w-12 me-2">
              <div class="mb-3">
                <p class="text-gray-600 m-0 text-sm">Ian Stevens</p>
                <p class="text-gray-600 m-0 text-sm">Head of Capability Development, North America at Publicis Sapient</p>
              </div>
            </div>
            <a class="text-green-600 fw-bold text-decoration-none">Read Full story <i class="bi bi-arrow-right ms-2"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5 md:py-5 lg:py-5">
    <h1 class="font-serif">Compare plans and features</h1>
    <div class="row items-center justify-center mt-5">
      <div class="col-md-3">
        <div class="card py-5 ps-3 border-0">
          <p class="fw-bold text-green-600"><i class="bi bi-check-circle-fill me-2"></i> Included in plan</p>
          <p class="fw-bold text-green-600"><i class="bi bi-plus-circle me-2"></i>Available with add-on</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card bg-secondary bg-opacity-10 border-0 p-0">
          <div class="bg-green-500 p-1 rounded-t-lg"></div>
          <div class="card-header border-0 my-0 py-1">
            <h3 class="font-serif fw-bold my-0">Personal Plan</h3>
            <p class="fw-semibold my-0">for you</p>
            <p class="mt-1 text-gray-700 fw-medium"><i class="bi bi-person me-3"></i>Individual</p>
          </div>
          <div class="card-body border-0 my-0 py-1">
            <div class="bg-dark text-center d-flex justify-center items-center py-2 rounded mb-2"><button class="btn text-center text-white border-0 outline-0">Start Subscription <i class="bi bi-arrow-right"></i></button></div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card bg-secondary bg-opacity-10 border-0 p-0">
          <div class="bg-purple-500 p-1 rounded-t-lg"></div>
          <div class="card-header border-0 my-0 py-1">
            <h3 class="font-serif fw-bold my-0">Team Plan</h3>
            <p class="fw-semibold my-0">for you</p>
            <p class="mt-1 text-gray-700 fw-medium"><i class="bi bi-person me-3"></i>2 to 20 people</p>
          </div>
          <div class="card-body border-0 my-0 py-1">
            <div class="bg-dark text-center d-flex justify-center items-center py-2 rounded mb-2"><button class="btn text-center text-white border-0 outline-0">Start Subscription <i class="bi bi-arrow-right"></i></button></div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card bg-secondary bg-opacity-10 border-0 p-0">
          <div class="bg-green-500 p-1 rounded-t-lg"></div>
          <div class="card-header border-0 my-0 py-1">
            <h3 class="font-serif fw-bold my-0">Enterprise Plan</h3>
            <p class="fw-semibold my-0">For your whole organization</p>
            <p class="mt-1 text-gray-700 fw-medium"><i class="bi bi-person me-3"></i>More than 20 people</p>
          </div>
          <div class="card-body border-0 my-0 py-1">
            <div class="bg-dark text-center d-flex justify-center items-center py-2 rounded mb-2"><button class="btn text-center text-white border-0 outline-0">Start Subscription <i class="bi bi-arrow-right"></i></button></div>
          </div>
        </div>
      </div>
    </div>
    <table class="table table-hover">
      <div class="fw-bold py-3 ps-2 bg-secondary bg-opacity-10 my-1 fs-4">Learner Experience</div>
      <thead>
        <tr>
          <th scope="col">Top rated Course </th>
          <th scope="col">11,000+</th>
          <th scope="col">11,000+</th>
          <th scope="col">26,000+</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Certification prep courses and practice tests <i class="bi bi-info-circle ms-3"></i></th>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
        </tr>
        <tr>
          <th scope="row">AI-powered coding exercises <i class="bi bi-info-circle ms-3"></i></th>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
        </tr>
        <tr>
          <th scope="row">Goal-aligned recommendations <i class="bi bi-info-circle ms-3"></i></th>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
        </tr>
        <tr>
          <th scope="row">Instructor Q&A</th>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
        </tr>
        <tr>
          <th scope="row">Mobile app access</th>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
        </tr>
      </tbody>
    </table>
    <table class="table table-hover">
      <div class="fw-bold py-3 ps-2 bg-secondary bg-opacity-10 my-1 fs-4">Admin Experience</div>
      <thead>
        <tr>
          <th scope="col">Top rated Course </th>
          <th scope="col">11,000+</th>
          <th scope="col">11,000+</th>
          <th scope="col">26,000+</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">User adoption and engagement reports</th>
          <td></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
        </tr>
        <tr>
          <th scope="row">24/7 customer support</th>
          <td></i></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
        </tr>
        <tr>
          <th scope="row">Custom learning paths, courses, and user groups <i class="bi bi-info-circle ms-3"></i></th>
          <td></td>
          <td></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
        </tr>
        <tr>
          <th scope="row">User activity, learning trends, and benchmark insights <i class="bi bi-info-circle ms-3"></i></th>
          <td></td>
          <td></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
        </tr>
        <tr>
          <th scope="row">Integration capabilities <i class="bi bi-info-circle ms-3"></i></th>
          <td></td>
          <td></td>
          <td><i class="bi bi-check-circle-fill me-2 text-green-600"></i></td>
        </tr>
      </tbody>
    </table>
    <table class="table table-hover">
      <div class="fw-bold py-3 ps-2 bg-secondary bg-opacity-10 my-1 fs-4">Udemy Pro add-on for tech learners</div>
      <thead>
        <tr>
          <th scope="col">Top rated Course </th>
          <th scope="col">11,000+</th>
          <th scope="col">11,000+</th>
          <th scope="col">26,000+</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Skills assessments<i class="bi bi-info-circle ms-3"></i></th>
          <td></td>
          <td></td>
          <td><i class="bi bi-plus-circle me-2 text-green-600"></i></td>
        </tr>
        <tr>
          <th scope="row">Labs and technical workspaces <i class="bi bi-info-circle ms-3"></i></th>
          <td></td>
          <td></td>
          <td><i class="bi bi-plus-circle me-2 text-green-600"></i></td>
        </tr>
        <tr>
          <th scope="row">Pre-built paths<i class="bi bi-info-circle ms-3"></i></th>
          <td></td>
          <td></td>
          <td><i class="bi bi-plus-circle me-2 text-green-600"></i></td>
        </tr>
        <tr>
          <th scope="row">Advanced insights<i class="bi bi-info-circle ms-3"></i></th>
          <td></td>
          <td></td>
          <td><i class="bi bi-plus-circle me-2 text-green-600"></i></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="container-fluid p-5 bg-secondary bg-opacity-10">
    <div class="container my-5">
      <h1 class="text-center font-serif fw-bold">Frequently Asked Questions</h1>
      <div class="accordion mt-5 border-0 bg-transparent" id="accordionPanelsStayOpenExample">
        <div class="accordion-item bg-transparent border-0 border-bottom">
          <h2 class="accordion-header">
            <button class="accordion-button bg-transparent fw-bold fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              How are courses selected for the plans?
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionPanelsStayOpenExample">
            <div class="accordion-body">
              Each course included in our plans is curated from the 220,000+ courses in our overall catalog. Our content experts use insights from 70 million Udemy learners to identify top-rated, relevant courses on the most sought-after professional topics as well as a selection of personal development topics.
            </div>
          </div>
        </div>
        <div class="accordion-item bg-transparent border-0 border-bottom">
          <h2 class="accordion-header">
            <button class="accordion-button bg-transparent fw-bold fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
              How is Personal Plan different from buying a course?
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionPanelsStayOpenExample">
            <div class="accordion-body">
              With Personal Plan, your learning opportunities are endless. You’ll gain monthly access to our top-rated courses, coding exercises, and practice tests in a variety of professional and personal development categories. You can learn one skill or multiple skills at once. Alternatively, if you buy courses one at a time, you’ll get lifetime access to those courses only.
            </div>
          </div>
        </div>
        <div class="accordion-item bg-transparent border-0 border-bottom">
          <h2 class="accordion-header">
            <button class="accordion-button bg-transparent fw-bold fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
              What languages does Enterprise Plan have content for?
            </button>
          </h2>
          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionPanelsStayOpenExample">
            <div class="accordion-body">
              Enterprise Plan includes our international collection of original-language content in 15 languages, including English, Spanish, Portuguese, French, Italian, German, Indonesian, Japanese, Korean, Polish, Russian, Turkish, Arabic, Hindi, and simplified and traditional Chinese.
            </div>
          </div>
        </div>
        <div class="accordion-item bg-transparent border-0 border-bottom">
          <h2 class="accordion-header">
            <button class="accordion-button bg-transparent fw-bold fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true" aria-controls="panelsStayOpen-collapseFour">
              What is Udemy Business Pro?
            </button>
          </h2>
          <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show" data-bs-parent="#accordionPanelsStayOpenExample">
            <div class="accordion-body">
              With the Udemy Business Pro add-on for Enterprise Plan, you get access to a powerful combination of learning tools for your tech learners. In addition to the top-rated courses available with your plan, your employees can also take advantage of hands-on training features like assessments, labs, workspaces, and Udemy paths.
            </div>
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
                <div class="mb-4">
                  <a href="" class="hover:underdivne text-decoration-none text-white">PHP</a>
                </div>
                <div class="mb-4">
                  <a href="" class="hover:underdivne text-decoration-none text-white">PHP</a>
                </div>
                <div class="mb-4">
                  <a href="" class="hover:underdivne text-decoration-none text-white">PHP</a>
                </div>
                <div class="mb-4">
                  <a href="" class="hover:underdivne text-decoration-none text-white">PHP</a>
                </div>
              </ul>
            </div>
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase text-white">Follow us</h2>
              <ul class="text-gray-500 text-gray-400 font-medium">
                <div class="mb-4">
                  <a href="" class="hover:underdivne text-decoration-none text-white ">Github</a>
                </div>
                <div class="mb-4">
                  <a href="" class="hover:underdivne text-decoration-none text-white">Discord</a>
                </div>
                <div class="mb-4">
                  <a href="" class="hover:underdivne text-decoration-none text-white ">Github</a>
                </div>
                <div class="mb-4">
                  <a href="" class="hover:underdivne text-decoration-none text-white">Discord</a>
                </div>
              </ul>
            </div>
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase text-white">Legal</h2>
              <ul class="text-gray-500 text-gray-400 font-medium">
                <div class="mb-4">
                  <a href="#" class="hover:underdivne text-decoration-none text-white">Privacy Podivcy</a>
                </div>
                <div class="mb-4">
                  <a href="#" class="hover:underdivne text-decoration-none text-white">Terms &amp; Conditions</a>
                </div>
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
        <hr class="my-6-gray-200 sm:mx-auto-gray-700 lg:my-8" />
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize Bootstrap tooltips
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
      const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    });
  </script>
</body>

</html>