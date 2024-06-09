<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>

    <!-- css bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- bootstrap icon link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- main css style link -->
    <link rel="stylesheet" href="Style/style.css">

    <!-- css for large screen -->
    <link rel="stylesheet" href="Style/media-query.css">

    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

    <!-- join us section -->
    <div class="join-section container my-5">
        <div class="join-part container-fluid position-relative my-2">
            <div class="mask-img position-absolute end-0 top-0">
                <img src="Assests/Mask Group.png" alt="" width="100%" height="100%">
            </div>
            <div class="row join-content position-absolute w-100">
                <div class="col-lg-6 m-auto">
                    <p class="text-light fw-bold fs-3 m-0">Join and get amazing discount</p>
                    <p class="fw-bolder fs-6 m-0">With our responsive themes and mobile and desktop apps</p>
                </div>
                <div class="col-lg-3 m-auto">
                    <form class="position-relative bg-primary-subtle rounded my-4">
                        <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
                        <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                            <i class="bi bi-search fs-6 text-light"></i>
                        </button>
                    </form>
                </div>
                <div class="col-lg-2 m-auto subscribeBtn">
                    <button type="button" class=" subscribe-button btn btn-secondary text-light border border-0">Subscribe</button>
                </div>
            </div>
        </div>
    </div>

    <!-- js external link -->
    <script src="Script/main.js"></script>

    <!-- js bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>