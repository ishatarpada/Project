<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unpaid Webinar</title>

    <!-- main css style link -->
    <link rel="stylesheet" href="Style/style.css">

    <!-- webinar css -->
    <link rel="stylesheet" href="Style/unpaid-webinar.css">

    <!-- paid-webinar video css style link -->
    <link rel="stylesheet" href="Style/webinar.css">

    <!-- header css -->
    <link rel="stylesheet" href="Style/header.css">

    <!-- css for media-query file -->
    <link rel="stylesheet" href="Style/media-query.css">

    <!-- css bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icon link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>


    <!-- header section -->
    <?php
    include 'header.php';
    ?>

    <!-- webinar section -->
    <div class="webinar-section container-fluid mt-2 mb-1 p-0">

        <div class="webinar-part-1">
            <div class="row mx-auto p-0">
                <div class="col-lg-7 p-0 webinar-video my-auto mx-auto py-2 position-relative rounded">
                    <img src="Assests/paid-webinar.png" alt="" class="position-absolute top-0 start-0" height="100%" width="100%">
                    <div class="webinar-img-title position-absolute  top-0 start-0">
                        <div class="control position-relative">
                            <div class="bg-img position-absolute top-0 start-0"></div>
                            <div class="professor-img position-absolute">
                                <img src="Assests/unpaid-webinar  (2).png" alt="" height="100%" width="100%">
                            </div>
                            <div class="live-control position-absolute bottom-0 start-0 d-flex  m-2 p-2 w-100">
                                <section class="d-flex live-btn">
                                    <button type="button" class="btn btn-danger live-control-btn fw-bold me-3"><i class="bi bi-play me-2 fw-bold"></i>Live Now</button>
                                    <p class="my-auto p-1"><i class="bi bi-volume-up-fill fw-bold fs-4 text-white"></i>
                                    </p>
                                </section>
                                <div class="control-icon text-end">
                                    <a href="#" class="text-decoration-none">
                                        <i class="bi bi-badge-hd-fill me-2 fw-bold text-light"></i>
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <i class="bi bi-badge-cc-fill me-2 fw-bold text-light"></i>
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <i class="bi bi-gear-fill me-2 fw-bold text-light"></i>
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <i class="bi bi-fullscreen me-2 fw-bold text-light"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0 m-auto my-auto webinar-progress">
                    <div class="webinar-progress-title d-flex justify-content-arround align-items-center p-0">
                        <section class="mx-auto my-1 p-0 ps-2 title">
                            <p class="fw-bold m-0">How to Become a Designer on 2020</p>
                            <span class="text-secondary m-0">Saturday, 18 Sep 2020 . Start on 01:00 PM</span>
                        </section>
                        <section class="m-auto pe-2 text-end follow">
                            <p>Follow</p>
                        </section>
                    </div>
                    <div class="progress-list mt-2 ms-2">
                        <ul class="list-unstyled px-3">
                            <li class="mt-3 mb-2">
                                <a href="#" class="row text-decoration-none text-secondary">
                                    <div class="col-9">
                                        <i class="bi bi-play-circle-fill me-3"></i>
                                        <span>1. Let's Get Started!</span>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span>4.27</span>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-3 mb-2">
                                <a href="#" class="row text-decoration-none text-secondary">
                                    <div class="col-9">
                                        <i class="bi bi-play-circle-fill me-3"></i>
                                        <span>2. What is Adobe Photoshop?</span>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span>14.27</span>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-3 mb-2">
                                <a href="#" class="row text-decoration-none text-secondary">
                                    <div class="col-9">
                                        <i class="bi bi-play-circle-fill me-3"></i>
                                        <span>3. Tools in Adobe</span>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span>49.27</span>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-3 mb-2">
                                <a href="#" class="row text-decoration-none text-secondary">
                                    <div class="col-9">
                                        <i class="bi bi-play-circle-fill me-3"></i>
                                        <span>4. Create Flower</span>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span>19.22</span>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-3 mb-2">
                                <a href="#" class="row text-decoration-none text-secondary">
                                    <div class="col-9">
                                        <i class="bi bi-play-circle-fill me-3"></i>
                                        <span>5. Easy Digital Painting</span>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span>7.25</span>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-3 mb-2">
                                <a href="#" class="row text-decoration-none text-secondary">
                                    <div class="col-9">
                                        <i class="bi bi-play-circle-fill me-3"></i>
                                        <span>6. Add Texture</span>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span>16.19</span>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-3 mb-2">
                                <a href="#" class="row text-decoration-none text-danger">
                                    <div class="col-9 live">
                                        <span class="liveBtn rounded p-1 me-1 text-light bg-danger">Live</span>
                                        <span>7. Painting Interaction</span>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span>3.17</span>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-3 mb-2">
                                <a href="#" class="row text-decoration-none text-body-tertiary">
                                    <div class="col-9">
                                        <i class="bi bi-clock-fill me-3"></i>
                                        <span>8. Digital Imaging phase1</span>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span>--:--</span>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-3 mb-2">
                                <a href="#" class="row text-decoration-none text-body-tertiary">
                                    <div class="col-9">
                                        <i class="bi bi-clock-fill me-3"></i>
                                        <span>9. Digital Imaging phase2</span>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span>--:--</span>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-3 mb-2">
                                <a href="#" class="row text-decoration-none text-body-tertiary">
                                    <div class="col-9">
                                        <i class="bi bi-clock-fill me-3"></i>
                                        <span>10. Save and Documentation</span>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span>--:--</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="webinar-part-2 p-0 mt-1">
            <div class="row m-0 p-0">
                <div class="col-lg-7 mx-auto my-0 p-0">
                    <div class="webinar-course-name my-3">
                        <div class="course-name fs-3 text-sm fw-bold d-flex justify-content-between align-items-center p-0">Vue js Scratch Course <span class="text-end fs-5 fw-medium ms-2 text-danger"><i class="bi bi-eye-fill"></i>12.5k</span></div>
                        <div class="webinar-channel d-flex justify-content-between align-items-center flex-nowrap py-1">
                            <div class="channel-logo col-lg-6 my-1 d-flex justify-content-start align-items-center">
                                <div class="logo me-3" style="height: 50px; width: 50px;">
                                    <img src="Assests/Channel-1-logo.png" class="img-fluid me-3" alt="" height="100%" width="100%">
                                </div>
                                <div class="name">
                                    <p class="m-0">Kitani Studio</p>
                                    <span class="m-0 text-secondary">Design Studio</span>
                                </div>
                            </div>
                            <div class="channel-reviews col-lg-6 my-1 text-end">
                                <a href="#" class="text-decoration-none person-watching me-2 text-secondary"><i class="bi bi-person-circle me-1"></i>2.3k</a>
                                <a href="#" class="text-decoration-none comment-review me-2 text-secondary"><i class="bi bi-chat-left-dots-fill me-1"></i>1.3k</a>
                            </div>
                        </div>
                    </div>
                    <nav class="m-2">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active text-dark fw-semibold" id="nav-About-tab" data-bs-toggle="tab" data-bs-target="#nav-About" type="button" role="tab" aria-controls="nav-About" aria-selected="true">About</button>
                            <button class="nav-link text-dark fw-semibold" id="nav-liveChat-tab" data-bs-toggle="tab" data-bs-target="#nav-liveChat" type="button" role="tab" aria-controls="nav-liveChat" aria-selected="false">Live chat</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-About" role="tabpanel" aria-labelledby="nav-About-tab" tabindex="0">
                            <div class="about-course-About my-3 px-5 py-2">
                                <p class="fs-6 text-secondary px-1">
                                    Vue (pronounced /vju:/, like view) is a progressive framework for building user interfaces.
                                    Unlike other monolithic frameworks, Vue is designed from the ground up to be incrementally
                                    adoptable. The core library is focused on the view layer only, and is easy to pick up and
                                    integrate with other libraries or existing projects. On the other hand, Vue is also
                                    perfectly capable of powering sophisticated Single-Page Applications when used in
                                    combination with modern tooling and supporting libraries.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-liveChat" role="tabpanel" aria-labelledby="nav-liveChat-tab" tabindex="0">
                            <ul>
                                <li class="d-flex justify-content-start align-items-center my-3">
                                    <div class="user-img me-2" style="height: 50px; width:50px;">
                                        <img src="Assests/review-1.png" alt="" class="img-fluid rounded-circle" style="height:100% ; width:100%;">
                                    </div>
                                    <div class="user-cmt">
                                        <p class="m-0 text-dark-emphasis fw-bolder">Addison rae</p>
                                        <p class="m-0 text-light-emphasis">is anyone else learning english?</p>
                                    </div>
                                </li>
                                <hr>
                                <li class="d-flex justify-content-start align-items-center my-3">
                                    <div class="user-img me-2" style="height: 50px; width:50px;">
                                        <img src="Assests/review-2.png" alt="" class="img-fluid rounded-circle" style="height:100% ; width:100%;">
                                    </div>
                                    <div class="user-cmt">
                                        <p class="m-0 text-dark-emphasis fw-bolder">Zion Brown</p>
                                        <p class="m-0 text-light-emphasis"><b>@Galaxa</b> Yeah me too. this is just to good.
                                        </p>
                                    </div>
                                </li>
                                <hr>
                                <li class="d-flex justify-content-start align-items-center my-3">
                                    <div class="user-img me-2" style="height: 50px; width:50px;">
                                        <img src="Assests/review-3.png" alt="" class="img-fluid rounded-circle" style="height:100% ; width:100%;">
                                    </div>
                                    <div class="user-cmt">
                                        <p class="m-0 text-dark-emphasis fw-bolder">Crystal moon</p>
                                        <p class="m-0 text-light-emphasis"><b>@Addison</b> rae yow youre not alone, me too
                                            here</p>
                                    </div>
                                </li>
                                <hr>
                                <li class="d-flex justify-content-start align-items-center my-3">
                                    <div class="user-img me-2" style="height: 50px; width:50px;">
                                        <img src="Assests/review-4.png" alt="" class="img-fluid rounded-circle" style="height:100% ; width:100%;">
                                    </div>
                                    <div class="user-cmt">
                                        <p class="m-0 text-dark-emphasis fw-bolder">Crystal moon</p>
                                        <p class="m-0 text-light-emphasis">Everything works well</p>
                                    </div>
                                </li>
                                <hr>
                                <li class="d-flex justify-content-start align-items-center my-3">
                                    <div class="user-img me-2" style="height: 50px; width:50px;">
                                        <img src="Assests/review-2.png" alt="" class="img-fluid rounded-circle" style="height:100% ; width:100%;">
                                    </div>
                                    <div class="user-cmt">
                                        <p class="m-0 text-dark-emphasis fw-bolder">Zion Brown</p>
                                        <p class="m-0 text-light-emphasis">Nice one.</p>
                                    </div>
                                </li>
                            </ul>
                            <form action="#" class="p-2">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Say Something....">
                                    <span class="input-group-text"><i class="bi bi-send"></i></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mx-auto mt-5">
                    <div class="webinar-promo row">
                        <div class="webinar-bg col-5 m-0  p-2">
                            <p class="m-0 ms-2 text-light">WEBINAR</p>
                            <span class="m-0 text-light ms-2">August 24, 2020</span>
                            <h4 class="my-2 ms-2 text-light fw-bolder">One Day Learn a Photo. </h4>
                            <p class="text-light">Sarah Molek</p>
                            <button type="button" class="btn btn-outline-light">Get it Now</button>
                        </div>
                        <div class="webinar-img col-7 m-0 ">
                            <img src="Assests/Instructor.png" alt="" height="100%" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- join us section -->
    <?php
    include 'join-us.php';
    ?>

    <!-- footer -->
    <?php
    include 'footer.php';
    ?>


    <!-- js external link -->
    <script src="Script/main.js"></script>

    <!-- js bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>