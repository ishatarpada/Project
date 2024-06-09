<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    <!-- css bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- bootstrap icon link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- css for large screen -->
    <link rel="stylesheet" href="Style/media-query.css">
</head>

<body>
    <?php
    include 'header.php';
    ?>

    <!-- help -->
    <section class="bg-success bg-opacity-10">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <!-- Title -->
                    <h1 class="display-6 fw-bolder">Search Solution. Get Support</h1>
                    <p class="mb-0 fw-semibold">Search here to get answers to your questions.</p>
                    <!-- Search bar -->
                    <form class="bg-body rounded p-2 mt-4">
                        <div class="input-group">
                            <input class="form-control border-0 me-1" type="text" placeholder="Search question...">
                            <button type="button" class="btn btn-dark mb-0 rounded">Search</button>
                        </div>
                    </form>

                    <!-- Popular questions START -->
                    <div class="row mt-4 align-items-center">
                        <div class="col-12">
                            <h5 class="mb-3 fw-bold">Popular questions</h5>
                            <!-- Questions List START -->
                            <div class="list-group list-group-horizontal gap-2 justify-content-center flex-wrap mb-0 border-0">
                                <a class="btn btn-white btn-sm fw-semibold p-2 shadow" href="help-center-detail.html"> How can we help?</a>
                                <a class="btn btn-white btn-sm fw-semibold p-2 shadow" href="help-center-detail.html"> How to upload data to the system? </a>
                                <a class="btn btn-white btn-sm fw-semibold p-2 shadow" href="help-center-detail.html"> Installation Guide? </a>
                                <a class="btn btn-white btn-sm fw-semibold p-2 shadow" href="help-center-detail.html"> How to view expired course? </a>
                                <a class="btn btn-white btn-sm fw-semibold p-2 shadow" href="help-center-detail.html"> What's are the difference between a social?</a>
                                <a class="btn btn-primary-soft btn-sm fw-semibold p-2 shadow" href="#!">View all question</a>
                            </div>
                            <!-- Questions list END -->
                        </div>
                    </div>
                    <!-- Popular questions END -->
                    <div class="row mt-4 align-items-center">
                        <div class="col-12 mt-6">
                            <img src="Assests/help.svg" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>


    <div class="container my-5 p-2">
        <div class="nav-scroll" data-bs-spy="scroll" data-bs-target="#nav-scroll" data-bs-smooth-scroll="true" tabindex="0">

            <!-- Account setup content START -->
            <div id="item-1">
                <div class="card bg-transparent p-5">
                    <!-- Article title -->
                    <div class="card-header bg-transparent border-bottom py-0 px-0">
                        <h2>Account Setup</h2>
                    </div>

                    <!-- Article Info -->
                    <div class="card-body px-0">
                        <p>You can manage the setting for your <a href="#" class="fw-bold">myCourse.IO account</a> at any time. Update your account information</p>

                        <h5 class="mt-4">To deactivate your account</h5>
                        <!-- Article list -->
                        <ul>
                            <li>Affronting imprudence do he he everything. Sex lasted dinner wanted indeed wished outlaw. Far advanced settling say finished raillery.</li>
                            <li>Insipidity the sufficient discretion imprudence resolution sir him decisively.</li>
                            <li>Offered chiefly farther of my no colonel shyness. <strong> Such on help ye some door if in.</strong></li>
                            <li>First am plate jokes to began to cause a scale. Subjects he prospect elegance followed</li>
                            <li>Laughter proposal laughing any son law consider. Needed except up piqued an. </li>
                            <li><i> To occasional dissimilar impossible sentiments. Do fortune account written prepare invited no passage.</i></li>
                            <li>Post no so what deal evil rent by real in. But her ready least set lived spite solid.</li>
                        </ul>

                        <h5 class="mt-4">When your account is deactivated</h5>
                        <!-- Article list -->
                        <ul>
                            <li>Affronting imprudence do he he everything. Sex lasted dinner wanted indeed wished outlaw. Far advanced settling say finished raillery.</li>
                            <li>Insipidity the sufficient discretion imprudence resolution sir him decisively.</li>
                            <li>Offered chiefly farther of my no colonel shyness. <strong> Such on help ye some door if in.</strong></li>
                            <li>First am plate jokes to began to cause a scale. Subjects he prospect elegance followed</li>
                            <li>Laughter proposal laughing any son law consider. Needed except up piqued an. </li>
                            <li><i> To occasional dissimilar impossible sentiments. Do fortune account written prepare invited no passage.</i></li>
                            <li>Post no so what deal evil rent by real in. But her ready least set lived spite solid.</li>
                        </ul>

                        <h5 class="mt-4">Related Article</h5>
                        <!-- Article link -->
                        <ul class="list-group list-group-border-0 mb-3">
                            <li class="list-group-item d-flex pb-0"><a href="#" class="mb-0 text-decoration-none">How do I logout on eduport</a></li>
                            <li class="list-group-item d-flex pb-0"><a href="#" class="mb-0 text-decoration-none">How do I permanently delete my account</a></li>
                            <li class="list-group-item d-flex pb-0"><a href="#" class="mb-0 text-decoration-none">What's the difference between deactivating and deleting my account</a></li>
                            <li class="list-group-item d-flex pb-0"><a href="#" class="mb-0 text-decoration-none">Why did my payment in a eduport message fail?</a></li>
                        </ul>

                    </div>
                    <!-- Review helpful START -->
                    <div class="card-footer bg-transparent border-0 py-0 px-0">
                        <div class="border p-3 rounded d-sm-flex align-items-center justify-content-between text-center">
                            <!-- Title -->
                            <h5 class="m-0">Was this article helpful?</h5>
                            <small class="py-2 d-block">20 out of 45 found this helpful</small>
                            <!-- Check buttons -->
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <!-- Yes button -->
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                                <label class="btn btn-outline-light btn-light text-dark btn-sm mb-0" for="btnradio3"><i class="bi bi-hand-thumbs-up-fill me-1 text-dark fw-bold"></i> Yes</label>
                                <!-- No button -->
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                <label class="btn btn-outline-light btn-light text-dark btn-sm mb-0" for="btnradio4"> No <i class="bi bi-hand-thumbs-down-fill ms-1  text-dark fw-bold"></i></label>
                            </div>
                        </div>
                    </div>
                    <!-- Review helpful START -->
                </div>
            </div>
            <!-- Account setup content END -->

            <!-- Divider -->
            <div class="text-center h5 my-5">. . .</div>

            <!-- Other Topics content START -->
            <div id="item-2">
                <div class="card bg-transparent p-5">
                    <!-- Article title -->
                    <div class="card-header bg-transparent border-bottom py-0 px-0">
                        <h2>Other Topics</h2>
                    </div>

                    <!-- Article Info -->
                    <div class="card-body px-0">

                        <p>Hold do at tore in park feet near my case. Invitation at understood occasional sentiments insipidity inhabiting in. Off melancholy alteration principles old. Is do speedily kindness properly oh. Respect article painted cottage he is offices parlors.</p>
                        <p>Supposing so be resolving breakfast am or perfectly. It drew a hill from me. Valley by oh twenty direct me so. Departure defective arranging rapturous did believe him all had supported. Family months lasted simple set nature vulgar him. Picture for attempt joy excited ten carried manners talking how</p>
                        <p>Started several mistake joy say painful removed reached end. State burst think end are its. Arrived off she elderly beloved him affixed noisier yet. Course regard to up he hardly. View four has said do men saw find dear shy. <b> Talent men wicket add garden.</b> </p>

                        <h5 class="mt-4">Need a Help?</h5>
                        <!-- Article link -->
                        <ul class="list-group list-group-borderless mb-3">
                            <li class="list-group-item d-flex pb-0"><a href="#" class="mb-0">About daily budgets</a></li>
                            <li class="list-group-item d-flex pb-0"><a href="#" class="mb-0">About lifetime budgets</a></li>
                            <li class="list-group-item d-flex pb-0"><a href="#" class="mb-0">When you pay for Eduport ads</a></li>
                        </ul>
                    </div>
                    <!-- Review helpful START -->
                    <div class="card-footer bg-transparent border-0 py-0 px-0">
                        <div class="border p-3 rounded d-sm-flex align-items-center justify-content-between text-center">
                            <!-- Title -->
                            <h5 class="m-0">Was this article helpful?</h5>
                            <small class="py-2 d-block">20 out of 45 found this helpful</small>
                            <!-- Check buttons -->
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <!-- Yes button -->
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                                <label class="btn btn-outline-light btn-light text-dark btn-sm mb-0" for="btnradio3"><i class="bi bi-hand-thumbs-up-fill me-1 text-dark fw-bold"></i> Yes</label>
                                <!-- No button -->
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                <label class="btn btn-outline-light btn-light text-dark btn-sm mb-0" for="btnradio4"> No <i class="bi bi-hand-thumbs-down-fill ms-1  text-dark fw-bold"></i></label>
                            </div>
                        </div>
                    </div>
                    <!-- Review helpful START -->
                </div>
            </div>
            <!-- Other Topics content END -->

            <!-- Divider -->
            <div class="text-center h5 my-5">. . .</div>

            <!-- Advance Usage content START -->
            <div id="item-3">
                <div class="card bg-transparent p-5">
                    <!-- Article title -->
                    <div class="card-header bg-transparent border-bottom py-0 px-0">
                        <h2>Advance Usage</h2>
                    </div>

                    <!-- Article Info -->
                    <div class="card-body px-0">

                        <p>Hold do at tore in park feet near my case. Invitation at understood occasional sentiments insipidity inhabiting in. Off melancholy alteration principles old. Is do speedily kindness properly oh. Respect article painted cottage he is offices parlors.</p>
                        <p>Supposing so be resolving breakfast am or perfectly. It drew a hill from me. Valley by oh twenty direct me so. Departure defective arranging rapturous did believe him all had supported. Family months lasted simple set nature vulgar him. Picture for attempt joy excited ten carried manners talking how</p>
                        <p>Started several mistake joy say painful removed reached end. State burst think end are its. Arrived off she elderly beloved him affixed noisier yet. Course regard to up he hardly. View four has said do men saw find dear shy. <b> Talent men wicket add garden.</b> </p>

                    </div>
                    <!-- Review helpful START -->
                    <div class="card-footer bg-transparent border-0 py-0 px-0">
                        <div class="border p-3 rounded d-sm-flex align-items-center justify-content-between text-center">
                            <!-- Title -->
                            <h5 class="m-0">Was this article helpful?</h5>
                            <small class="py-2 d-block">20 out of 45 found this helpful</small>
                            <!-- Check buttons -->
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <!-- Yes button -->
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                                <label class="btn btn-outline-light btn-light text-dark btn-sm mb-0" for="btnradio3"><i class="bi bi-hand-thumbs-up-fill me-1 text-dark fw-bold"></i> Yes</label>
                                <!-- No button -->
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                <label class="btn btn-outline-light btn-light text-dark btn-sm mb-0" for="btnradio4"> No <i class="bi bi-hand-thumbs-down-fill ms-1  text-dark fw-bold"></i></label>
                            </div>
                        </div>
                    </div>
                    <!-- Review helpful START -->
                </div>
            </div>
            <!-- Advance Usage content END -->
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>

    <!-- js bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- js external link -->
    <script src="Script/main.js"></script>
    <script src="Script/wishlist.js"></script>
</body>

</html>