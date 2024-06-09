<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paid Webinar</title>

    <!-- main css style link -->
    <link rel="stylesheet" href="Style/style.css">

    <!-- webinar css -->
    <link rel="stylesheet" href="Style/webinar.css">

    <!-- paid-webinar video css style link -->
    <link rel="stylesheet" href="Style/paid-webinar.css">

    <!-- header css -->
    <link rel="stylesheet" href="Style/header.css">

    <!-- css for media query file  -->
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
    <div class="webinar-section container-fluid mt-2 p-0">

        <div class="webinar-part-1 p-1">
            <div class="row mx-auto">
                <div class="col-lg-8 webinar-video mx-auto position-relative p-0">
                    <img src="Assests/paid-webinar.png" alt="" class="position-absolute top-0 start-0" height="100%" width="100%">
                    <div class="webinar-img-title position-absolute p-0 top-0 start-0">
                        <div class="control position-relative">
                            <div class="bg-img position-absolute p-0 m-0 top-0 start-0"></div>
                            <div class="content position-absolute">
                                <h6 class="text-light fw-bold fs-4 text-center">Purchase to continue this webinar class
                                </h6>
                                <p class="text-light text-center fw-medium fs-6">You need buy package webinar to see
                                    full lessons
                                    this course, thank you.</p>
                                <div class="buy-btn text-center p-1 rounded">
                                    <a href="#" class="text-light text-decoration-none fw-bold">Buy Now</a>
                                </div>
                            </div>
                            <div class="live-control position-absolute bottom-0 start-0 d-flex  m-2 p-2 w-100">
                                <section class="d-flex live-btn">
                                    <button type="button" class="btn btn-danger live-control-btn fw-bold me-3"><i class="bi bi-play me-2 fw-bold"></i>Live Now</button>
                                    <p class="my-auto p-1"><i class="bi bi-volume-up-fill fw-bold text-secondary"></i>
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
                <div class="col-lg-3 m-auto mt-2 webinar-charge">
                    <div class="webinar-info ps-3">
                        <div class="video-prise">
                            <p class="fw-bold fs-4">US$22.40 <del class="text-secondary ms-2 fs-6 fw-normal">$30.13</del></p>
                        </div>
                        <div class="video-off rounded">
                            <p class="text-light text-center p-1 rounded fw-bolder">20% off</p>
                        </div>
                        <div class="buy-btn my-3 px-1 py-2 fw-bold rounded text-center mx-auto">
                            <a href="#" class="text-decoration-none text-light">Buy</a>
                        </div>
                        <div class="wishlist-btn my-3 px-1 py-2 fw-bold border border-secondary rounded text-center mx-auto">
                            <a href="#" class="text-decoration-none text-secondary">
                                <i class="bi bi-heart"></i><span class="ms-2">Wishlist</span>
                            </a>
                        </div>
                        <div class="video-info">
                            <p class="vdo-section text-secondary m-0 p-1"><i class="bi bi-layout-text-window-reverse me-3"></i>22 Section</p>
                            <p class="vdo-lectures text-secondary m-0 p-1"><i class="bi bi-person-workspace me-3"></i>152 Lectures</p>
                            <p class="vdo-duration text-secondary m-0 p-1"><i class="bi bi-collection-play-fill me-3"></i>21h 33m total length</p>
                            <p class="vdo-language text-secondary m-0 p-1"><i class="bi bi-volume-up-fill me-3"></i>English</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="webinar-part-2 mt-3">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="webinar-course-name">
                        <div class="name fs-4 fw-bold ms-3">Vue js Scratch Course <span class="text-end fs-6 fw-medium ms-2 text-danger"><i class="bi bi-eye-fill"></i>12.5k</span></div>
                        <div class="webinar-channel row m-auto p-1">
                            <div class="channel-logo col-6 d-flex p-0">
                                <div class="logo" style="height: 50px; width: 50px;">
                                    <img src="Assests/Channel-logo.png" class="img-fluid me-3" alt="" height="100%" width="100%">
                                </div>
                                <div class="name">
                                    <p class="m-0">Kitani Studio</p>
                                    <span class="m-0 text-secondary">Design Studio</span>
                                </div>
                            </div>
                            <div class="channel-reviews col-6 m-auto justify-content-end text-end">
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
                <div class="col-lg-3 mx-auto mt-5">
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