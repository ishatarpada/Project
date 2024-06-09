<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Course Reviews</title>

    <!-- css bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- bootstrap icon link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- main css style link -->
    <link rel="stylesheet" href="Style/side-navbar.css" />

    <link rel="stylesheet" href="Style/admin-course.css" />

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
    <div class="wrapper">

        <?php
        include 'sidebar.php'
        ?>

        <div class="main bg-body-tertiary">

            <!-- navbar -->
            <?php include 'navbar.php' ?>

            <div class="page-content-wrapper border mt-5 p-3">

                <!-- Title -->
                <div class="row mb-3">
                    <div class="col-12">
                        <h1 class="h3 mb-0 fw-bold">Reviews</h1>
                    </div>
                </div>

                <!-- All review table START -->
                <div class="card card-body bg-transparent pb-0 border mb-4">

                    <!-- Table START -->
                    <div class="table-responsive border-0">
                        <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                            <!-- Table head -->
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 fs-4 fw-bold bg-dark bg-opacity-10 text-light p-3 rounded-start">#</th>
                                    <th scope="col" class="border-0 fs-4 fw-bold bg-dark bg-opacity-10 text-light p-3">Student Name</th>
                                    <th scope="col" class="border-0 fs-4 fw-bold bg-dark bg-opacity-10 text-light p-3">Course Name</th>
                                    <th scope="col" class="border-0 fs-4 fw-bold bg-dark bg-opacity-10 text-light p-3">Rating</th>
                                    <th scope="col" class="border-0 fs-4 fw-bold bg-dark bg-opacity-10 text-light p-3">Hide/Show</th>
                                    <th scope="col" class="border-0 fs-4 fw-bold bg-dark bg-opacity-10 text-light p-3 rounded-end">Action</th>
                                </tr>
                            </thead>

                            <!-- Table body START -->
                            <tbody>

                                <!-- Table row -->
                                <tr>
                                    <!-- Table data -->
                                    <td class="text-secondary fw-bold fs-5 py-4">01</td>

                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->
                                            <div class="avatar avatar-xs mb-2 mb-md-0" style="width:50px; height:50px;">
                                                <img src="assests/i-1.jpg" class="rounded-circle" alt="" style="width:50px; height:50px;">
                                            </div>
                                            <div class="mb-0 ms-2">
                                                <!-- Title -->
                                                <h6 class="mb-0"><a href="#" class="stretched-link text-dark fw-bolder fs-5">Lori Stevens</a></h6>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>
                                        <h6 class="table-responsive-title mb-0"><a href="#" class="text-dark fw-medium fs-5">Building Scalable APIs with GraphQL</a></h6>
                                    </td>

                                    <!-- Table data -->
                                    <td>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                        </ul>
                                    </td>

                                    <!-- Table data -->
                                    <td>
                                        <div class="form-check form-switch form-check-md justify-content-center">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy1">
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>
                                        <a href="#" class="btn bg-success bg-opacity-10 text-success fw-bold btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit">
                                            <i class="bi bi-pencil-square fw-bold"></i>
                                        </a>
                                        <button class="btn bg-danger bg-opacity-10 text-danger btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                        <a href="#" class="btn btn-sm bg-info bg-opacity-10 text-info  mb-0" data-bs-toggle="modal" data-bs-target="#viewReview">View</a>
                                    </td>
                                </tr>

                                <!-- Table row -->
                                <tr>
                                    <!-- Table data -->
                                    <td class="fw-bold text-secondary fs-5 py-4">02</td>

                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->
                                            <div class="avatar avatar-xs mb-2 mb-md-0" style="width:50px; height:50px;">
                                                <img src="assests/i-1.jpg" class="rounded-circle" alt="" style="width:50px; height:50px;">
                                            </div>
                                            <div class="mb-0 ms-2">
                                                <!-- Title -->
                                                <h6 class="mb-0"><a href="#" class="stretched-link text-dark fw-bolder fs-5">Carolyn Ortiz</a></h6>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>
                                        <h6 class="table-responsive-title mb-0"><a href="#" class="text-dark fw-medium fs-5">Graphic Design Masterclass</a></h6>
                                    </td>

                                    <!-- Table data -->
                                    <td>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                        </ul>
                                    </td>

                                    <!-- Table data -->
                                    <td>
                                        <div class="form-check form-switch form-check-md">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy2">
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>
                                        <a href="#" class="btn bg-success bg-opacity-10 text-success fw-bold btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit">
                                            <i class="bi bi-pencil-square fw-bold"></i>
                                        </a>
                                        <button class="btn bg-danger bg-opacity-10 text-danger btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                        <a href="#" class="btn btn-sm bg-info bg-opacity-10 text-info  mb-0" data-bs-toggle="modal" data-bs-target="#viewReview">View</a>
                                    </td>
                                </tr>

                            </tbody>
                            <!-- Table body END -->
                        </table>
                    </div>
                    <!-- Table END -->

                    <!-- Card footer START -->
                    <div class="card-footer bg-transparent px-0">
                        <!-- Pagination START -->
                        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                            <!-- Content -->
                            <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                            <!-- Pagination -->
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination END -->
                    </div>
                    <!-- Card footer END -->
                </div>
                <!-- All review table END -->

                <div class="row g-4">
                    <!-- Top rated course table START -->
                    <div class="col-xxl-7">
                        <div class="card bg-transparent border">

                            <!-- Card header -->
                            <div class="card-header bg-light border-bottom">
                                <h5 class="mb-0 fw-bold fs-4">Top Rated Courses</h5>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body pb-0">
                                <!-- Table START -->
                                <div class="table-responsive border-0">
                                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">

                                        <!-- Table head -->
                                        <thead>
                                            <tr>
                                                <th scope="col" class="border-0 bg-opacity-10 bg-dark py-4 text-light fs-5 rounded-start">Course Name</th>
                                                <th scope="col" class="border-0 bg-opacity-10 bg-dark py-4 text-light fs-5">Enrolled</th>
                                                <th scope="col" class="border-0 bg-opacity-10 bg-dark py-4 text-light fs-5">Rating</th>
                                                <th scope="col" class="border-0 bg-opacity-10 bg-dark py-4 text-light fs-5 rounded-end">Action</th>
                                            </tr>
                                        </thead>

                                        <!-- Table body START -->
                                        <tbody>

                                            <!-- Table row -->
                                            <tr>
                                                <!-- Table data -->
                                                <td class="text-center text-sm-start d-flex align-items-center py-3">
                                                    <div class="me-2" style="width:50px; height:50px;"><img src="assests/i-4.jpg" class="rounded" alt="" style="width:50px; height:50px;"></div>
                                                    <h6 class="mb-0 ms-2"><a href="#" class="stretched-link fw-bolder text-dark">Building Scalable APIs with GraphQL</a></h6>
                                                </td>

                                                <!-- Table data -->
                                                <td class="fw-medium">2,568</td>

                                                <!-- Table data -->
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                                    </ul>
                                                </td>

                                                <!-- Table data -->
                                                <td>
                                                    <a href="#" class="btn bg-success bg-opacity-10 text-success fw-bold btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit">
                                                        <i class="bi bi-pencil-square fw-bold"></i>
                                                    </a>
                                                    <button class="btn bg-danger bg-opacity-10 text-danger btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                    <a href="#" class="btn btn-sm bg-info bg-opacity-10 text-info fw-bold mb-0" data-bs-toggle="modal" data-bs-target="#viewReview">View</a>
                                                </td>
                                            </tr>

                                            <!-- Table row -->
                                            <tr>
                                                <!-- Table data -->
                                                <td class="text-center text-sm-start d-flex align-items-center py-3">
                                                    <div class="me-2" style="width:50px; height:50px;"><img src="assests/i-4.jpg" class="rounded" alt="" style="width:50px; height:50px;"></div>
                                                    <h6 class="mb-0 ms-2"><a href="#" class="stretched-link fw-bolder text-dark">Building Scalable APIs with GraphQL</a></h6>
                                                </td>

                                                <!-- Table data -->
                                                <td class="fw-medium">2,568</td>

                                                <!-- Table data -->
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                                        <li class="list-inline-item me-0 small"><i class="bi bi-star-fill text-warning"></i></li>
                                                    </ul>
                                                </td>

                                                <!-- Table data -->
                                                <td>
                                                    <a href="#" class="btn bg-success bg-opacity-10 text-success fw-bold btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit">
                                                        <i class="bi bi-pencil-square fw-bold"></i>
                                                    </a>
                                                    <button class="btn bg-danger bg-opacity-10 text-danger btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                    <a href="#" class="btn btn-sm bg-info bg-opacity-10 text-info fw-bold mb-0" data-bs-toggle="modal" data-bs-target="#viewReview">View</a>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <!-- Table body END -->
                                    </table>
                                </div>
                                <!-- Table END -->
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer START -->
                            <div class="card-footer bg-transparent">
                                <!-- Pagination START -->
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                    <!-- Content -->
                                    <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item disabled">
                                                <a class="page-link">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Pagination END -->
                            </div>
                            <!-- Card footer END -->

                        </div>
                    </div>
                    <!-- Top rated course table END -->

                    <!-- Chart START -->
                    <div class="col-xxl-5">
                        <div class="card bg-transparent border">

                            <!-- Card header -->
                            <div class="card-header bg-light border-bottom">
                                <h5 class="mb-0 fw-bold fs-4">Reviews Analytics</h5>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body pb-0" style="position: relative;">

                                <!-- Chart detail -->
                                <div class="row">
                                    <div class="col-sm-6 mb-4">
                                        <div class="bg-success bg-opacity-10 p-4 rounded">
                                            <p class="mb-0 fw-bold">Total Positive Review</p>
                                            <h5 class="mb-0">85%</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-4">
                                        <div class="bg-danger bg-opacity-10 p-4 rounded">
                                            <p class="mb-0 fw-bold">Total Negative Review</p>
                                            <h5 class="mb-0">15%</h5>
                                        </div>
                                    </div>
                                </div>

                                <!-- Chart -->
                                <div class="mb-3 mb-xl-0 d-flex justify-content-center" id="apexChartPageViews" style="min-height: 296.9px;">
                                    <div id="apexchartsh0k0fx4w" class="apexcharts-canvas apexchartsh0k0fx4w apexcharts-theme-light" style="width: 300px; height: 296.9px;"><svg id="SvgjsSvg1062" width="300" height="296.9" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG1064" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1063">
                                                    <clipPath id="gridRectMaskh0k0fx4w">
                                                        <rect id="SvgjsRect1066" width="306" height="302" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskh0k0fx4w"></clipPath>
                                                    <clipPath id="nonForecastMaskh0k0fx4w"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskh0k0fx4w">
                                                        <rect id="SvgjsRect1067" width="304" height="304" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG1068" class="apexcharts-pie">
                                                    <g id="SvgjsG1069" transform="translate(0, 0) scale(1)">
                                                        <circle id="SvgjsCircle1070" r="93.82195121951219" cx="150" cy="150" fill="transparent"></circle>
                                                        <g id="SvgjsG1071" class="apexcharts-slices">
                                                            <g id="SvgjsG1072" class="apexcharts-series apexcharts-pie-series" seriesName="Positive" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1073" d="M 150 5.658536585365852 A 144.34146341463415 144.34146341463415 0 1 1 7.127724559722935 170.54193202198297 L 57.13302096381992 163.35225581428892 A 93.82195121951219 93.82195121951219 0 1 0 150 56.17804878048781 L 150 5.658536585365852 z" fill="rgba(12,188,135,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="261.8181818181818" data:startAngle="0" data:strokeWidth="2" data:value="80" data:pathOrig="M 150 5.658536585365852 A 144.34146341463415 144.34146341463415 0 1 1 7.127724559722935 170.54193202198297 L 57.13302096381992 163.35225581428892 A 93.82195121951219 93.82195121951219 0 1 0 150 56.17804878048781 L 150 5.658536585365852 z" stroke="transparent"></path>
                                                            </g>
                                                            <g id="SvgjsG1074" class="apexcharts-series apexcharts-pie-series" seriesName="Negative" rel="2" data:realIndex="1">
                                                                <path id="SvgjsPath1075" d="M 7.127724559722935 170.54193202198297 A 144.34146341463415 144.34146341463415 0 0 1 149.97480766229054 5.658538783812048 L 149.98362498048886 56.178050209477846 A 93.82195121951219 93.82195121951219 0 0 0 57.13302096381992 163.35225581428892 L 7.127724559722935 170.54193202198297 z" fill="rgba(214,41,62,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="98.18181818181819" data:startAngle="261.8181818181818" data:strokeWidth="2" data:value="30" data:pathOrig="M 7.127724559722935 170.54193202198297 A 144.34146341463415 144.34146341463415 0 0 1 149.97480766229054 5.658538783812048 L 149.98362498048886 56.178050209477846 A 93.82195121951219 93.82195121951219 0 0 0 57.13302096381992 163.35225581428892 L 7.127724559722935 170.54193202198297 z" stroke="transparent"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1076" x1="0" y1="0" x2="300" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1077" x1="0" y1="0" x2="300" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG1065" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(12, 188, 135);"></span>
                                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(214, 41, 62);"></span>
                                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card body START -->
                        </div>
                    </div>
                </div> <!-- Row END -->
            </div>


        </div>
    </div>

    <script src="Script/sidebar.js"></script>
    <!-- JavaScript libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>