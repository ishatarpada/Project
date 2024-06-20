<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Company</title>
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
              <p>Connecting people with knowledge</p>
            </h2>
            <div class="h-96 w-96 col-md-6">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtF4GMSwfHHa8402OH2zOHapS7M0vsrCEjSg&s" alt="newsletter" class="img-fluid newsletter-img" style="height: 100%; width:100%">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="origins_section my-5">
    <div class="container">
      <div class="origins_content">
        <h2 class="origins_title text-center fw-bold text-black fs-1 font-serif mb-3">Our origins</h2>
        <div class="origins_description w-75 mx-auto">
          <div class="origins_article fw-medium fs-5 text-center">
            Growing up in a small Turkish village, Udemy founder Eren Bali had few educational opportunities — until he got a computer. Fueled by his dream to compete in mathematics, he used the internet to learn his way to a silver medal in the International Math Olympiad.
            <br><br>
            After learning online changed his life, Eren partnered with co-founders Oktay Caglar and Gagan Biyani to achieve a common goal: to make quality education accessible to all.
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container my-5">
    <div class="marketplace-videos-featured d-flex justify-content-center align-items-center">
      <a href="https://vimeo.com/569925778/a81e6df901" class="fancybox-media video-still me-3" tabindex="0">
        <div class="video-still-overlay">
          <div class="video-play-icon"></div>
        </div>
        <img src="https://about.udemy.com/wp-content/uploads/2021/07/video-still-eren.jpeg">
      </a>
      <div class="marketplace-videos-featured-copy">
        <h4 class="fw-bold font-sans fs-1 mb-2">How we started</h4>
        <div class="video-summary fw-semibold">From an early age, Udemy founder Eren Bali knew learning was the key to unlocking opportunity.</div>
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

  <section class="office-section" id="offices">
    <div class="container container--office">
      <h2 class="office-title text-center text-5xl font-serif fw-bold my-3">Our offices</h2>
      <div class="row">
        <div class="col-md-4 my-3 col-sm-12 city-san-francisco-ca">
          <div class="office-image-container">
            <img class="office-image" src="https://about.udemy.com/wp-content/uploads/2021/07/san-francisco-460x350.jpeg" alt="San Francisco, CA">
          </div>
          <b class="office-city text-center fw-bold fs-4">San Francisco, CA</b>
        </div>
        <div class="col-md-4 my-3 col-sm-12 city-denver-co">
          <div class="office-image-container">
            <img class="office-image" src="https://about.udemy.com/wp-content/uploads/2021/07/denver-460x350.jpeg" alt="Denver, CO">
          </div>
          <b class="office-city text-center fw-bold fs-4">Denver, CO</b>
        </div>
        <div class="col-md-4 my-3 col-sm-12 city-dubdivn-ireland">
          <div class="office-image-container">
            <img class="office-image" src="https://about.udemy.com/wp-content/uploads/2021/07/denver-460x350.jpeg"" alt=" Dubdivn, Ireland">
          </div>
          <b class="office-city text-center fw-bold fs-4">Dubdivn, Ireland</b>
        </div>
        <div class="col-md-4 my-3 col-sm-12 city-ankara-turkiye">
          <div class="office-image-container">
            <img class="office-image" src="https://about.udemy.com/wp-content/uploads/2021/07/ankara-1-450x350.jpeg" alt="Ankara, Türkiye">
          </div>
          <b class="office-city text-center fw-bold fs-4">Ankara, Türkiye</b>
        </div>
        <div class="col-md-4 my-3 col-sm-12 city-austin-tx">
          <div class="office-image-container">
            <img class="office-image" src="https://about.udemy.com/wp-content/uploads/2023/04/Austin-480x350.png" alt="Austin, TX">
          </div>
          <b class="office-city text-center fw-bold fs-4">Austin, TX</b>
        </div>
        <div class="col-md-4 my-3 col-sm-12 city-melbourne-austradiva">
          <div class="office-image-container">
            <img class="office-image" src="https://about.udemy.com/wp-content/uploads/2023/04/Melbourne-480x350.png" alt="Melbourne, Austradiva">
          </div>
          <b class="office-city text-center fw-bold fs-4">Melbourne, Austradiva</b>
        </div>
        <div class="col-md-4 my-3 col-sm-12 city-istandiv-turkiye">
          <div class="office-image-container">
            <img class="office-image" src="https://about.udemy.com/wp-content/uploads/2023/04/Istanbul-480x350.png" alt="Istanbul, Türkiye">
          </div>
          <b class="office-city text-center fw-bold fs-4">Istanbul, Türkiye</b>
        </div>
        <div class="col-md-4 my-3 col-sm-12 city-gurgaon-india">
          <div class="office-image-container">
            <img class="office-image" src="https://about.udemy.com/wp-content/uploads/2023/04/Gurgaon-480x350.png" alt="Gurgaon, India ">
          </div>
          <b class="office-city text-center fw-bold fs-4">Gurgaon, India </b>
        </div>
        <div class="col-md-4 my-3 col-sm-12 city-mumbai-india">
          <div class="office-image-container">
            <img class="office-image" src="https://about.udemy.com/wp-content/uploads/2024/06/office-locations-mumbai.jpg" alt="Mumbai, India">
          </div>
          <b class="office-city text-center fw-bold fs-4">Mumbai, India</b>
        </div>
        <div class="col-md-4 my-3 col-sm-12 city-chennai-india">
          <div class="office-image-container">
            <img class="office-image" src="https://about.udemy.com/wp-content/uploads/2024/06/office-locations-chennai.jpg" alt="Chennai, India">
          </div>
          <b class="office-city text-center fw-bold fs-4">Chennai, India</b>
        </div>
      </div>
    </div>
    <p class="text-center fs-5">Check out our <span class="fw-bold text-green-500">Help and Support</span> center to find quick answers to your questions.</p>
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


  <script src="Script/swiper-bundle.min.js"></script>
</body>

</html>