 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Admin Dashboard</title>

   <!-- css bootstrap link -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

   <!-- bootstrap icon link -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

   <!-- main css style link -->
   <link rel="stylesheet" href="Style/side-navbar.css" />

   <!-- css for large screen -->
   <link rel="stylesheet" href="Style/media-query.css" />

   <!-- font awesome cdn -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
 </head>

 <body>
   <div class="wrapper">
     <?php include 'sidebar.php' ?>

     <div class="main">

       <!-- navbar -->
       <?php include 'navbar.php' ?>

       <!-- table -->
       <div class="row g-4 container-fluid m-2">
         <!-- Top instructors START -->
         <div class="col-lg-6 col-xxl-4">
           <div class="card shadow">
             <!-- Card header -->
             <div class="card-header border-bottom d-flex justify-content-between align-items-center p-4">
               <h5 class="card-header-title fw-bold fs-4">Top Instructors</h5>
               <a href="#" class="btn btn-primary btn-lg px-2 mb-0 text-decoration-none fw-bold btn-primary fs-5">View all</a>
             </div>

             <?php
              // Include database connection
              include 'config.php';

              // SQL query to fetch user details
              $sql = "SELECT * FROM Instructors";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                  $profile_img = $row['ProfilePicture'];
                  $user_name = $row['Instructor_Username'];
                  $user_id = $row['InstructorID'];
                  $city = $row['city'];

                  $sql1 = "SELECT course_title FROM instructor_course WHERE instructor_ID = $user_id";
                  $result1 = mysqli_query($conn, $sql1);
                  
                  // Count the number of rows (courses) returned by the query
                  $count = mysqli_num_rows($result1);
              ?>
                     <!-- Card body START -->
                     <div class="card-body px-4">
                       <!-- Instructor item START -->
                       <div class="d-sm-flex justify-content-between align-items-center">
                         <!-- Avatar and info -->
                         <div class="d-sm-flex align-items-center">
                           <!-- Avatar -->
                           <div class="avatar avatar-md flex-shrink-0 me-3" style="height: 50px; width: 50px">
                             <img class="avatar-img rounded-circle" src="<?php echo $profile_img ?>" style="height: 50px; width: 50px" alt="avatar" />
                           </div>
                           <!-- Info -->
                           <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                             <h6 class="mb-1 fw-bold">
                               <?php echo $user_name ?><i class="bi bi-patch-check-fill text-info small ms-1"></i>
                             </h6>
                             <ul class="list-inline mb-0 small">
                               <li class="list-inline-item text-secondary fw-bolder me-2 mb-1 mb-sm-0">
                                 <i class="bi bi-journal-text text-danger-emphasis me-1"></i><?php echo $count ?> Courses
                               </li>
                               <!-- <li class="list-inline-item text-secondary fw-bolder me-2 mb-1 mb-sm-0">
                                 <i class="bi bi-star-fill text-warning me-1"></i>4.5/5.0
                               </li> -->
                             </ul>
                           </div>
                         </div>
                         <!-- Button -->
                         <a href="instructor_view_details.php?id=<?php echo $row['InstructorID'] ?>" class="btn btn-sm btn-dark mb-0 fw-bolder">View</a>
                       </div>
                       <!-- Instructor item END -->

                       <hr />
                       <!-- Divider -->
                       <!-- Card body END -->
                     </div>
             <?php }
                  }
              ?>
           </div>
         </div>
         <!-- Top instructors END -->

         <!-- Notice Board START -->
         <div class="col-lg-6 col-xxl-4">
           <div class="card shadow">
             <!-- Card header -->
             <div class="card-header border-bottom p-4">
               <h5 class="card-header-title fw-bold fs-4">Notice board</h5>
             </div>

             <?php
              // Include database connection
              include 'config.php';

              // SQL query to fetch user details
              $sql = "SELECT * FROM course WHERE course_status = 'pending'";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                  $course_img = $row['course_img'];
                  $course_name = $row['course_title'];
                  $instructor = $row['instructor'];

                  $reg_date = $row['created_at'];
                  $reg_time = date('H:i', strtotime($reg_date));
              ?>
                 <!-- Card body START -->
                 <div class="card-body p-4">
                   <!-- Ticket item START -->
                   <div class="d-flex justify-content-between position-relative">
                     <div class="d-sm-flex">
                       <!-- Avatar -->
                       <div class="avatar avatar-md flex-shrink-0 me-2" style="height: 50px; width: 50px">
                         <img class="avatar-img rounded-circle" style="height: 50px; width: 50px" src="<?php echo $course_img ?>" alt="avatar" />
                       </div>
                       <!-- Info -->
                       <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                         <h6 class="mb-0">
                           <a href="#" class="stretched-link fw-bold text-dark"><?php echo $course_name ?></a>
                         </h6>
                         <p class="mb-0 text-secondary fw-bolder">
                           Approval course request by <?php echo $instructor ?>
                         </p>
                         <span class="small text-secondary fw-medium"><?php echo $reg_time; ?></span>
                       </div>
                     </div>
                   </div>
                   <!-- Ticket item END -->

                   <hr />
                   <!-- Divider -->
                 </div>
             <?php
                }
              }
              ?>
           </div>
         </div>
         <!-- Notice Board END -->

         <!-- Ticket START -->
         <div class="col-xxl-4 col-lg-6">
           <div class="card shadow">
             <!-- Card header -->
             <div class="card-header border-bottom d-flex justify-content-between align-items-center p-4">
               <h5 class="card-header-title fs-4 fw-bold">Support Requests</h5>
               <a href="#" class="btn btn-link text-primary text-decoration-none fw-bold fs-5 p-0 mb-0">View all</a>
             </div>
             <?php
              // Include database connection
              include 'config.php';

              // SQL query to fetch user details
              $sql = "SELECT * FROM Instructors WHERE approve_request = 0";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                  $profile_img = $row['ProfilePicture'];
                  $user_name = $row['Instructor_Username'];

                  // Assuming $row['JoinDate'] contains the registration date from the database
                  $reg_date = $row['JoinDate'];
                  $reg_time = date('H:i', strtotime($reg_date));
              ?>
                 <!-- Card body START -->
                 <div class="card-body p-4">
                   <!-- Ticket item START -->
                   <div class="d-flex justify-content-between position-relative">
                     <div class="d-sm-flex">
                       <!-- Avatar -->
                       <div class="avatar avatar-md flex-shrink-0 me-2" style="height: 50px; width: 50px">
                         <img class="avatar-img rounded-circle" style="height: 50px; width: 50px" src="<?php echo $profile_img ?>" alt="avatar" />
                       </div>
                       <!-- Info -->
                       <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                         <h6 class="mb-0">
                           <a href="#" class="stretched-link fw-bold text-dark"><?php echo $user_name ?></a>
                         </h6>
                         <p class="mb-0 text-secondary fw-bolder">
                           Approval request for instructor
                         </p>
                         <span class="small text-secondary fw-medium"><?php echo $reg_time; ?></span>
                       </div>
                     </div>
                   </div>
                   <!-- Ticket item END -->

                   <hr />
                   <!-- Divider -->
                 </div>
             <?php
                }
              }
              ?>

             <!-- Card body END -->
           </div>
         </div>
         <!-- Ticket END -->
       </div>

       <div class="container-fluid my-5">
         <div class="row g-4 container-fluid m-2">
           <?php include 'admin-earning-chart.php' ?>
           <?php include 'admin-courseSelling-chart.php' ?>
         </div>
       </div>
     </div>



   </div>
   </div>
   <script src="Script/sidebar.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
   <!-- Include jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <!-- Include Popper.js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
   <!-- Include Bootstrap bundle -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
   <!-- Your other scripts -->

   <script>
     // Initialize Bootstrap dropdowns
     var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
     var dropdownList = dropdownElementList.map(function(dropdownToggleEl) {
       return new bootstrap.Dropdown(dropdownToggleEl);
     });
   </script>
 </body>

 </html>