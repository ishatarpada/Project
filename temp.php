<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" href="Style/Page-navbar.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <nav class="pt-2 pb-1 z-10">
    <ul class="sidebar border">
      <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
            <path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z" />
          </svg></a></li>
      <li class="mb-3"><button type="button" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-xl font-medium px-5 w-56 py-2.5 text-center me-2 my-3 text-nowrap">Sign-up</button>
      </li>
      <li class="mb-3"><button type="button" class="text-gray-900 bg-white border-3 border-green-500 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium text-xl font-medium px-5 w-56 py-2.5 me-2 my-3 dark:bg-gray-800 dark:text-white dark:border-green-500 dark:hover:bg-gray-700 dark:hover:border-blue-600 dark:focus:ring-gray-700 text-nowrap">Login</button>
      </li>
      <li class="d-flex justify-content-between align-items-center ms-0 mt-3"><a href="about-us.php" class="font-medium text-xl">About Us</a> <i class="bi bi-caret-right-fill me-3"></i></li>
      <li class="d-flex justify-content-between align-items-center"><a href="esg.php" class="font-medium text-xl">ESG</a> <i class="bi bi-caret-right-fill me-3"></i></li>
      <li class="d-flex justify-content-between align-items-center"><a href="Blog.php" class="font-medium text-xl">Blog</a> <i class="bi bi-caret-right-fill me-3"></i></li>
      <li class="d-flex justify-content-between align-items-center"><a href="stories.php" class="font-medium text-xl">Stories</a> <i class="bi bi-caret-right-fill me-3"></i></li>
      <li class="d-flex justify-content-between align-items-center"><a href="Company.php" class="font-medium text-xl">Company</a> <i class="bi bi-caret-right-fill me-3"></i></li>
      <li class="d-flex justify-content-between align-items-center"><a href="carrers.php" class="font-medium text-xl">Career</a> <i class="bi bi-caret-right-fill me-3"></i></li>
      <li class="d-flex justify-content-between align-items-center"><a href="Press.php" class="font-medium text-xl">Press</a> <i class="bi bi-caret-right-fill me-3"></i></li>
      <li class="d-flex justify-content-between align-items-center"><a href="Invenstors.php" class="font-medium text-xl">Investor</a> <i class="bi bi-caret-right-fill me-3"></i></li>
      <li class="d-flex justify-content-between align-items-center"><a href="DEI.php" class="font-medium text-xl">DEI</a> <i class="bi bi-caret-right-fill me-3"></i></li>
    </ul>
    <ul>
      <li><a href="#" class="font-bold text-xl border-0"><img src="Assests/course.png" alt=""></a></li>
      <li class="hideOnMobile"><a href="about-us.php" class="font-bold text-xl text-nowrap">About Us</a></li>
      <li class="hideOnMobile"><a href="esg.php" class="font-bold text-xl text-nowrap">ESG</a></li>
      <li class="hideOnMobile"><a href="Blog.php" class="font-bold text-xl text-nowrap">Blog</a></li>
      <li class="hideOnMobile"><a href="stories.php" class="font-bold text-xl text-nowrap">Stories</a></li>
      <li class="hideOnMobile"><a href="Company.php" class="font-bold text-xl text-nowrap">Company</a></li>
      <li class="hideOnMobile"><a href="carrers.php" class="font-bold text-xl text-nowrap">Career</a></li>
      <li class="hideOnMobile"><a href="Press.php" class="font-bold text-xl text-nowrap">Press</a></li>
      <li class="hideOnMobile"><a href="Invenstors.php" class="font-bold text-xl text-nowrap">Investor</a></li>
      <li class="hideOnMobile"><a href="DEI.php" class="font-bold text-xl text-nowrap">DEI</a></li>
      <li class="hideOnMobile"><button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium text-xl font-semibold px-5 py-2.5 me-2 my-1 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 text-nowrap">Login</button>
      </li>
      <li class="hideOnMobile"><button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium text-xl font-semibold px-5 py-2.5 me-2 my-1 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 text-nowrap">Sign-up</button>
      </li>
      <li class="menu-button" onclick=showSidebar()><a href="#" class="font-bold text-xl border-0"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
            <path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z" />
          </svg></a></li>
    </ul>
  </nav>


  <div class="container-fluid px-0 z-0">
    <section class="pt-0 position-relative overflow-hidden px-0 mx-0 z-0" style="background-image:url(https://eduport.webestica.com/assets/images/bg/03.jpg); background-position: center; background-size: cover;">
      <div class="container-fluid z-index-9 position-relative">
        <div class="row py-0 py-md-5 align-items-center text-center text-sm-start">
          <div class="col-sm-10 col-lg-8 col-xl-6 all-text-white my-5 mt-md-0">
            <div class="py-0 py-md-5 my-5">
              <!-- Title -->
              <p class="text-white display-5 fw-semibold ms-3">Welcome to Where <br> <span class="text-emerald-400 fw-bold">Possibilities Design</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container-fluid bg-black text-center text-3xl text-white py-4 font-bold hover:underline">Checkout out our latest Company News !</div>
  </div>

  <div class="container py-11 px-11 mb-5 z-0">
    <p class="p-8 pb-2 text-center text-5xl fw-bold">"Online Learning Empowerment"</p>
    <p class="p-15 pt-0 container text-xl text-center fw-semibold">Unlock your potential with our cutting-edge online learning platform. Whether you're seeking to learn new skills, train your teams, or share your expertise, we're here to guide you. As leaders in the field, we empower you to achieve your goals and transform your life through personalized learning experiences. Join us and embark on a journey of growth, success, and fulfillment.</p>
  </div>

  <script>
    function showSidebar() {
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'flex'
    }

    function hideSidebar() {
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'none'
    }
  </script>
</body>

</html>