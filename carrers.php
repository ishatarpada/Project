<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Career</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php
  include 'pages-navbar.php'
  ?>


  <div class="container-fluid bg-secondary bg-opacity-10 m-0 p-0">
    <div class="d-flex justify-content-between align-items-center">
      <img src="https://about.udemy.com/wp-content/themes/wp-about-v4/assets/images/career-2023/udemy_triangle.svg" alt="">
      <p class="border-l-4 border-green-500 p-3 text-green-800">We are a certified <strong>Great Place <br> to Work</strong> (Ireland &amp; USA)</p>
    </div>
    <div class="container d-flex justify-content-center align-items-center p-5">
      <div class="section">
        <h1 class="fw-bold font-serif text-6xl">Let’s revolutionize learning</h1>
        <div class="fw-semibold fs-4">Individually, we bring our unique perspectives to reimagine the way knowledge is shared. Together, we can improve lives by empowering our employees, our learners, instructors, and businesses.</div>
      </div>
      <div class="img">
        <img src="https://about.udemy.com/wp-content/uploads/2023/06/DSC03391-1.jpg" alt="">
      </div>
    </div>
    <hr class="w-75 mx-auto">
    <form class="container p-5" role="search" action="#current-opportunities" method="get">
      <p class="fw-semibold font-sans fs-4">Explore career opportunities at Udemy.</p>
      <div class="row justify-content-between align-items-center">
        <div class="col-md-4 search-item">
          <label class="career-search-label ms-3 fw-semibold mb-3 fs-5" for="department-select">Department</label>
          <br>
          <select name="departments" class="career-select p-3" id="department-select">
            <option value="all">All departments</option>
            <option value="Corporate %26 Employee Communications">Corporate &amp; Employee Communications</option>
            <option value="Customer Success">Customer Success</option>
            <option value="Data">Data</option>
            <option value="Engineering">Engineering</option>
            <option value="Finance">Finance</option>
            <option value="Go-To-Market Strategy %26 Operations">Go-To-Market Strategy &amp; Operations</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Marketing">Marketing</option>
            <option value="New Ventures">New Ventures</option>
            <option value="People">People</option>
            <option value="Product Design %26 Research">Product Design &amp; Research</option>
            <option value="Product Management">Product Management</option>
            <option value="Sales">Sales</option>
            <option value="Strategy %26 Business Operations">Strategy &amp; Business Operations</option>
            <option value="Talent Community">Talent Community</option>
          </select>
        </div>
        <div class="col-md-4 search-item">
          <label class="career-search-label  ms-3 fw-semibold mb-3 fs-5" for="location-select">Location</label>
          <br>
          <select name="locations" class="career-select p-3" id="location-select">
            <option value="all">All locations</option>
            <option value="Ankara, Turkey">Ankara, Turkey</option>
            <option value="Atlanta, Georgia">Atlanta, Georgia</option>
            <option value="Austin, TX">Austin, TX</option>
            <option value="Chennai, Tamil Nadu, India">Chennai, Tamil Nadu, India</option>
            <option value="Denver, CO">Denver, CO</option>
            <option value="Dublin, Ireland">Dublin, Ireland</option>
            <option value="Global">Global</option>
            <option value="Istanbul, Turkey">Istanbul, Turkey</option>
            <option value="Melbourne, Australia">Melbourne, Australia</option>
            <option value="Remote, Canada">Remote, Canada</option>
            <option value="Remote, Japan">Remote, Japan</option>
            <option value="Remote, Sweden">Remote, Sweden</option>
            <option value="San Francisco, CA">San Francisco, CA</option>
          </select>
        </div>
        <div class="col-md-4 search-button-container">
          <button class="btn btn-lg btn-success px-5" type="submit">Search</button>
        </div>
      </div>
    </form>
  </div>

  <div class="container my-5">
    <h2 class="section-title text-center text-6xl font-serif font-bold">Why Udemy?</h2>
    <div class="section-desc text-center mx-auto w-75 font-semibold fs-5">We aspire to be as vibrant and dynamic as the communities we serve, as inquisitive as those who use our platform, and as revolutionary as the future we strive to open for everyone.</div>
    <p class="section-link text-center text-green-500 fw-bold text-decoration-none w-100 my-3">Learn more about our values</p>

    <div class="row">
      <div class="col-md-4 col-sm-12">
        <img class="img-fluid" src="https://about.udemy.com/wp-content/uploads/2023/06/why_udemy_inclusice_cropped@2x.jpg" alt="">
        <div class="border-l-4 border-green-500 p-3 my-2">
          <div class="fw-bold text-4xl font-serif">Inclusive</div>
          <div class="why-desc">When people feel supported, everyone benefits. We know that doesn’t just happen, but we’re dedicated to making it a reality. We’re building teams as diverse as the people who use our platform. That way, we learn to see things from every perspective.</div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <img class="img-fluid" src="https://about.udemy.com/wp-content/uploads/2023/06/DSC03348-1.jpg" alt="">
        <div class="border-l-4 border-green-500 p-3 my-2">
          <div class="fw-bold text-4xl font-serif">Curious</div>
          <div class="why-desc">Learning is who we are — inside and out. One reason we’re so motivated to continue to open up learning worldwide is because we recognize the power it has for us at Udemy. We never stop evolving, and neither do you.</div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <img class="img-fluid" src="https://about.udemy.com/wp-content/uploads/2023/06/why_udemy_revolutionary_cropped@2x.jpg" alt="">
        <div class="border-l-4 border-green-500 p-3 my-2">
          <div class="fw-bold text-4xl font-serif">Revolutionary</div>
          <div class="why-desc">Why keep knowledge to yourself? We’d rather share it with the people who need it most. We improve the lives of the learners and instructors we serve — using our talents to empower theirs.</div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-secondary bg-opacity-10 p-5 my-5">
    <div class="d-flex justify-content-center align-items-center mb-5">
      <img src="https://about.udemy.com/wp-content/uploads/2023/06/BEDI_illustration.png" alt="" class="img-fluid">
    </div>
    <div class="career-container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-6 mx-3 my-2 border-l-4 border-green-500 p-4 text-gray-800 fw-medium fs-5">Discover how Udemy is driving impactful change for belonging, equity, diversity, and inclusion (BEDI) <a class="text-green-500" target="_blank" rel="noopener">here</a>.</div>
        <div class="col-md-6 mx-3 my-2 border-l-4 border-green-500 p-3 text-gray-800 fw-medium fs-5">Read more about why Udemy is proud to showcase our programs and metrics about environmental, social, and corporate governance (ESG) <a class="text-green-500" target="_blank" rel="noopener">here</a>.</div>
      </div>
    </div>
  </div>

  <section class="contact-section" id="contact">
    <div class="container container--contact">
      <h2 class="contact-section-title text-center font-serif fw-bold text-5xl mb-2">Contact us</h2>
      <div class="text-center fw-semibold font-sans fs-3 mb-3">The quickest way to get in touch with us is by using the contact information below. </div>
      <div class="row">
        <div class="contact-item col-md-4 my-3 col-sm-12">
          <div class="contact-title fw-bold fs-4 mb-3">Learners</div>
          <div class="bg-black pt-1 mb-3 rounded w-100"></div>
          <div class="contact-desc">
            <p>Visit our <a href="https://support.udemy.com/hc/?type=learner" target="_blank" class="text-green-600 fw-semibold text-decoration-none" rel="noopener">Help Center</a><br>
              <a href="https://support.udemy.com/hc/articles/21521030699287-How-to-Contact-Udemy-Support" target="_blank" class="text-green-600 fw-semibold text-decoration-none" rel="noopener"><span style="font-weight: 400">How to reach our support team</span></a>
            </p>
          </div>
        </div>
        <div class="contact-item col-md-4 my-3 col-sm-12">
          <div class="contact-title fw-bold fs-4 mb-3">Udemy Business</div>
          <div class="bg-black pt-1 mb-3 rounded w-100"></div>
          <div class="contact-desc">
            <p>Visit our <a href="https://business-support.udemy.com/" target="_blank" class="text-green-600 fw-semibold text-decoration-none" rel="noopener">Help Center</a><br>
              Enterprise <a href="https://business.udemy.com/request-demo/" target="_blank" class="text-green-600 fw-semibold text-decoration-none" rel="noopener">New Customer Inquiry</a></p>
          </div>
        </div>
        <div class="contact-item col-md-4 my-3 col-sm-12">
          <div class="contact-title fw-bold fs-4 mb-3">Instructors</div>
          <div class="bg-black pt-1 mb-3 rounded w-100"></div>
          <div class="contact-desc">
            <p>Visit our <a href="https://support.udemy.com/hc/?type=instructor" target="_blank" class="text-green-600 fw-semibold text-decoration-none" rel="noopener">Help Center</a> and explore our <a href="https://teach.udemy.com/" target="_blank" class="text-green-600 fw-semibold text-decoration-none" rel="noopener">Teaching Center</a></p>
          </div>
        </div>
        <div class="contact-item col-md-4 my-3 col-sm-12">
          <div class="contact-title fw-bold fs-4 mb-3">Partners, Resellers &amp; Affiliates</div>
          <div class="bg-black pt-1 mb-3 rounded w-100"></div>
          <div class="contact-desc">
            <p>Visit our <a href="https://partnersupport.udemy.com/" target="_blank" class="text-green-600 fw-semibold text-decoration-none" rel="noopener">Help Center</a></p>
          </div>
        </div>
        <div class="contact-item col-md-4 my-3 col-sm-12">
          <div class="contact-title fw-bold fs-4 mb-3">Investors</div>
          <div class="bg-black pt-1 mb-3 rounded w-100"></div>
          <div class="contact-desc">
            <p>Learn more <a href="https://investors.udemy.com/" target="_blank" class="text-green-600 fw-semibold text-decoration-none" rel="noopener">here</a><br>
              Contact our <a href="https://investors.udemy.com/shareholder-resources/contact-ir" target="_blank" class="text-green-600 fw-semibold text-decoration-none" rel="noopener">Investor Relations team</a></p>
          </div>
        </div>
        <div class="contact-item col-md-4 my-3 col-sm-12">
          <div class="contact-title fw-bold fs-4 mb-3">Press</div>
          <div class="bg-black pt-1 mb-3 rounded w-100"></div>
          <div class="contact-desc">
            <p>View <a href="https://about.udemy.com/press/" target="_blank" class="text-green-600 fw-semibold text-decoration-none" rel="noopener">general information</a><br>
              Email <a href="mailto:press@udemy.com" target="_blank" class="text-green-600 fw-semibold text-decoration-none" rel="noopener">press@udemy.com</a></p>
          </div>
        </div>
        <div class="contact-item col-md-4 my-3 col-sm-12">
          <div class="contact-title fw-bold fs-4 mb-3">Privacy</div>
          <div class="bg-black pt-1 mb-3 rounded w-100"></div>
          <div class="contact-desc">
            <p>View <a href="https://www.udemy.com/terms/privacy/" target="_blank" class="text-green-600 fw-semibold text-decoration-none" rel="noopener">privacy policy</a><br>
              Email <a href="mailto:privacy@udemy.com" target="_blank" class="text-green-600 fw-semibold text-decoration-none" rel="noopener">privacy@udemy.com</a></p>
            <p>Mail:<br>
              Udemy, Inc.<br>
              Attn: Legal<br>
              600 Harrison Street, 3rd Floor<br>
              San Francisco, CA 94107</p>
          </div>
        </div>
        <div class="contact-item col-md-4 my-3 col-sm-12">
          <div class="contact-title fw-bold fs-4 mb-3">European Union Authorities &amp; Trusted Flaggers</div>
          <div class="bg-black pt-1 mb-3 rounded w-100"></div>
          <div class="contact-desc">
            <p>View <a href="https://support.udemy.com/hc/en-us/articles/17923655139095-Digital-Services-Act-Information" target="_blank" class="text-green-600 fw-semibold text-decoration-none" rel="noopener">Digital Services Act Information</a><br>
              <span style="font-weight: 400">Report </span><a href="https://support.udemy.com/hc/en-us/requests/new?ticket_form_id=21081863734167" target="_blank" class="text-green-600 fw-semibold text-decoration-none" rel="noopener"><span style="font-weight: 400">Illegal Content Form</span></a><br>
              Email <a href="mailto:dsacompliance@udemy.com" target="_blank" class="text-green-600 fw-semibold text-decoration-none" rel="noopener">dsacompliance@udemy.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div>
    <h1 class="font-serif text-center display-3 fw-bold">Employee Stories</h1>
    <p class="fw-bold w-50 text-center fs-4 mx-auto">The best way to learn about life at Udemy is to hear from our people. Each one brings their unique background, perspective, and experience — and Udemy is better for it.</p>
    <div id="testimonialCarousel" class="carousel slide testimonial-slider container-fluid p-0 my-5" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="relative bg-green-600 p-5 h-100">
            <div class="d-flex items-center justify-center w-full h-100 position-relative">
              <div class="d-flex flex-column flex-md-row container mx-auto items-center">
                <img src="https://about.udemy.com/wp-content/uploads/2023/06/Cyndia-Chambers-1.jpg" alt="" class="img-fluid h-64 w-64">
                <div class="ms-5 content text-center text-md-start">
                  <p class="text-2xl text-white md:text-4xl lg:text-6xl font-bold font-serif fs-1">Cyndia Chambers (She/her)</p>
                  <p class="text-xl text-white">Enterprise Customer Success Manager</p>
                  <button class="btn btn-lg btn-light fw-bold">view job</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="relative bg-green-600 p-5 h-100">
            <div class="d-flex items-center justify-center w-full h-100 position-relative">
              <div class="d-flex flex-column flex-md-row container mx-auto items-center">
                <img src="https://about.udemy.com/wp-content/uploads/2023/06/kerem_cropped@2x.jpg" alt="" class="img-fluid h-64 w-64">
                <div class="ms-5 content text-center text-md-start">
                  <p class="text-2xl text-white md:text-4xl lg:text-6xl font-bold font-serif fs-1">Kerem Daldal (He/him)</p>
                  <p class="text-xl text-white">Engineering Manager, Active Learning Portfolio</p>
                  <button class="btn btn-lg btn-light fw-bold">view job</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="relative bg-green-600 p-5 h-100">
            <div class="d-flex items-center justify-center w-full h-100 position-relative">
              <div class="d-flex flex-column flex-md-row container mx-auto items-center">
                <img src="https://about.udemy.com/wp-content/uploads/2023/06/ronny_cropped@2x.jpg" alt="" class="img-fluid h-64 w-64">
                <div class="ms-5 content text-center text-md-start">
                  <p class="text-2xl text-white md:text-4xl lg:text-6xl font-bold font-serif fs-1">Ronny Bierhals (He/him)</p>
                  <p class="text-xl text-white">Enterprise Account Executive DACH</p>
                  <button class="btn btn-lg btn-light fw-bold">view job</button>
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


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>