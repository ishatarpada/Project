<?php
include './config/config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Setting</title>

    <!-- css bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

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

        <div class="main bg-body-secondary">

            <!-- navbar -->
            <?php include 'navbar.php' ?>


            <div class="page-content-wrapper border m-3 p-3 bg-light">

                <!-- Title -->
                <div class="row">
                    <div class="col-12 mb-3">
                        <p class="mb-2 mb-sm-0 fw-bold fs-2">Admin Settings</p>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Left side START -->
                    <div class="col-xl-3">
                        <!-- Tab START -->
                        <ul class="nav nav-pills nav-tabs bg-dark flex-column p-3 rounded" role="tablist">
                            <li class="nav-item my-2" role="presentation">
                                <a class="nav-link fw-medium fs-5 text-light active" data-bs-toggle="tab" href="#tab-1"
                                    aria-selected="true" role="tab">
                                    <i class="bi bi-globe me-2"></i>
                                    Website Settings
                                </a>
                            </li>
                            <li class="nav-item my-2" role="presentation">
                                <a class="nav-link fw-medium fs-5 text-light" data-bs-toggle="tab" href="#tab-2" aria-selected="false"
                                    tabindex="-1" role="tab">
                                    <i class="bi bi-gear-fill me-2"></i>
                                    General Settings
                                </a>
                            </li>
                            <li class="nav-item my-2" role="presentation">
                                <a class="nav-link fw-medium fs-5 text-light" data-bs-toggle="tab" href="#tab-3" aria-selected="false"
                                    tabindex="-1" role="tab">
                                    <i class="bi bi-bell-fill me-2"></i>
                                    Notification Settings
                                </a>
                            </li>
                            <li class="nav-item my-2" role="presentation">
                                <a class="nav-link fw-medium fs-5 text-light" data-bs-toggle="tab" href="#tab-4" aria-selected="false"
                                    tabindex="-1" role="tab">
                                    <i class="bi bi-person-circle me-2"></i>
                                    Account Settings
                                </a>
                            </li>
                            <li class="nav-item my-2" role="presentation">
                                <a class="nav-link fw-medium fs-5 text-light" data-bs-toggle="tab" href="#tab-5" aria-selected="false"
                                    tabindex="-1" role="tab">
                                    <i class="bi bi-sliders me-2"></i>
                                    Social Settings
                                </a>
                            </li>
                        </ul>

                        <!-- Tab END -->
                    </div>
                    <!-- Left side END -->

                    <!-- Right side START -->
                    <div class="col-xl-9">

                        <!-- Tab Content START -->
                        <div class="tab-content">

                            <!-- Personal Information content START -->
                            <div class="tab-pane show active" id="tab-1" role="tabpanel">
                                <div class="card shadow p-2">

                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <h5 class="card-header-title fw-bold">Website Settings</h5>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <form class="row g-4 align-items-center">

                                            <!-- Input item -->
                                            <div class="col-lg-4">
                                                <label class="form-label fw-bold">Site Name</label>
                                                <input type="text" class="form-control" placeholder="Site Name">
                                                <div class="form-text">Enter Website Name. It Display in Website and Email.</div>
                                            </div>

                                            <!-- Input item -->
                                            <div class="col-lg-4">
                                                <label class="form-label fw-bold">Site Copyrights</label>
                                                <input type="text" class="form-control" placeholder="Site Copyrights">
                                                <div class="form-text">Using for Contact and Send Email</div>
                                            </div>

                                            <!-- Input item -->
                                            <div class="col-lg-4">
                                                <label class="form-label fw-bold">Site Email</label>
                                                <input type="email" class="form-control" placeholder="Site Email">
                                                <div class="form-text">For Copyrights Text</div>
                                            </div>

                                            <!-- Textarea item -->
                                            <div class="col-12">
                                                <label class="form-label fw-bold">Site Description</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                                <div class="form-text">For write brief description of your organization, or a Website.</div>
                                            </div>

                                            <!-- Input item -->
                                            <div class="col-lg-6">
                                                <label class="form-label fw-bold">Contact Phone</label>
                                                <input type="text" class="form-control" placeholder="Contact Phone">
                                                <div class="form-text">Using for Contact and Support</div>
                                            </div>

                                            <!-- Input item -->
                                            <div class="col-lg-6">
                                                <label class="form-label fw-bold">Support Email</label>
                                                <input type="email" class="form-control" placeholder="Support Email">
                                                <div class="form-text">For Support Email</div>
                                            </div>

                                            <!-- Radio items -->
                                            <div class="col-lg-6">
                                                <label class="form-label fw-bold">Allow Registration</label>
                                                <div class="d-sm-flex">
                                                    <!-- Radio -->
                                                    <div class="form-check radio-bg-light me-4">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                                                            checked="">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Enable
                                                        </label>
                                                    </div>
                                                    <!-- Radio -->
                                                    <div class="form-check radio-bg-light me-4">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Disable
                                                        </label>
                                                    </div>
                                                    <!-- Radio -->
                                                    <div class="form-check radio-bg-light">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                        <label class="form-check-label" for="flexRadioDefault3">
                                                            On Request
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Textarea item -->
                                            <div class="col-12">
                                                <label class="form-label fw-bold">Contact Address</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                                <div class="form-text">Enter support Address</div>
                                            </div>

                                            <!-- Save button -->
                                            <div class="d-sm-flex justify-content-end">
                                                <button type="button" class="btn btn-primary mb-0">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Card body END -->

                                </div>
                            </div>
                            <!-- Personal Information content END -->

                            <!-- General Settings content START -->
                            <div class="tab-pane" id="tab-2" role="tabpanel">

                                <div class="card shadow p-2">

                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <h5 class="card-header-title fw-bold">General Settings</h5>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <form class="row g-4">

                                            <!-- Input item -->
                                            <div class="col-12">
                                                <label class="form-label fw-bold">Main Site URL</label>
                                                <input type="text" class="form-control" placeholder="Site URL">
                                                <div class="form-text">Set your main website url.</div>
                                            </div>

                                            <!-- Choice item -->
                                            <div class="col-lg-6">
                                                <label class="form-label fw-bold">Select Currency</label>
                                                <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                    <div class="choices__inner">
                                                        <select class="form-select" aria-label=".form-select-sm" tabindex="-1" data-choice="active">
                                                            <option value="Select Currency">Select Currency</option>
                                                            <option value="British Pound">British Pound</option>
                                                            <option value="Euro">Euro</option>
                                                            <option value="Indian Rupee">Indian Rupee</option>
                                                            <option value="USD">USD</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-text">Select currency as per Country</div>
                                            </div>

                                            <!-- Choice item -->
                                            <div class="col-lg-6">
                                                <label class="form-label fw-bold">Select Language</label>
                                                <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                    <div class="choices__inner">
                                                        <select class="form-select" aria-label=".form-select-sm" tabindex="-1" data-choice="active">
                                                            <option value="Select Language">Select Language</option>
                                                            <option value="English">English</option>
                                                            <option value="German">German</option>
                                                            <option value="Hindi">Hindi</option>
                                                            <option value="Spanish">Spanish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-text">Select language as per Country</div>
                                            </div>

                                            <!-- Switch item -->
                                            <div class="col-lg-3">
                                                <label class="form-label fw-bold">Maintainance mode</label>
                                                <div class="form-check form-switch form-check-lg mb-0">
                                                    <input class="form-check-input mt-0 price-toggle me-2" type="checkbox"
                                                        id="flexSwitchCheckDefault">
                                                    <label class="form-check-label mt-1" for="flexSwitchCheckDefault">Make Site Offline</label>
                                                </div>
                                            </div>

                                            <!-- Textarea item -->
                                            <div class="col-lg-9">
                                                <label class="form-label fw-bold">Maintainance Text</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>

                                            <!-- Save button -->
                                            <div class="d-sm-flex justify-content-end">
                                                <button type="button" class="btn btn-primary mb-0">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Card body END -->

                                </div>
                            </div>
                            <!-- General Settings content END -->

                            <!-- Notification setting content START -->
                            <div class="tab-pane" id="tab-3" role="tabpanel">
                                <!-- Notification START -->
                                <div class="card shadow p-2">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <h5 class="card-header-title fw-bold">Notifications Settings</h5>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body">
                                        <!-- General nofification -->
                                        <h6 class="mb-2 fw-semibold">Choose type of notifications you want to receive</h6>
                                        <div class="form-check form-switch form-check-md mb-3">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy12" checked="">
                                            <label class="form-check-label" for="checkPrivacy12">Withdrawal activity</label>
                                        </div>
                                        <div class="form-check form-switch form-check-md mb-3">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy2">
                                            <label class="form-check-label" for="checkPrivacy2">Weekly report</label>
                                        </div>
                                        <div class="form-check form-switch form-check-md mb-3">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy3" checked="">
                                            <label class="form-check-label" for="checkPrivacy3">Password change</label>
                                        </div>
                                        <div class="form-check form-switch form-check-md mb-0">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy4">
                                            <label class="form-check-label" for="checkPrivacy4">Play sound on a message</label>
                                        </div>

                                        <!-- Instructor notification -->
                                        <h6 class="mb-2 mt-5 fw-semibold">Instructor Related Notification</h6>
                                        <div class="form-check form-switch form-check-md mb-3">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy11" checked="">
                                            <label class="form-check-label" for="checkPrivacy5">Joining new instructors</label>
                                        </div>
                                        <div class="form-check form-switch form-check-md mb-3">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy5">
                                            <label class="form-check-label" for="checkPrivacy5">Notify when the instructorss added new
                                                courses</label>
                                        </div>
                                        <div class="form-check form-switch form-check-md mb-3">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy6" checked="">
                                            <label class="form-check-label" for="checkPrivacy6">Notify when instructors update courses</label>
                                        </div>
                                        <div class="form-check form-switch form-check-md mb-0">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy7">
                                            <label class="form-check-label" for="checkPrivacy7">Course weekly report</label>
                                        </div>

                                        <!-- Student notification -->
                                        <h6 class="mb-2 mt-5 fw-semibold">Student Related Notification</h6>
                                        <div class="form-check form-switch form-check-md mb-3">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy8" checked="">
                                            <label class="form-check-label" for="checkPrivacy8">Joining new student</label>
                                        </div>
                                        <div class="form-check form-switch form-check-md mb-3">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy9">
                                            <label class="form-check-label" for="checkPrivacy9">Notify when students purchase new
                                                courses</label>
                                        </div>
                                        <div class="form-check form-switch form-check-md mb-0">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy10">
                                            <label class="form-check-label" for="checkPrivacy10">Course weekly report</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Notification START -->
                            </div>
                            <!-- Notification setting content END -->

                            <!-- Account setting content START -->
                            <div class="tab-pane" id="tab-4" role="tabpanel">
                                <!-- Activity logs -->
                                <div class="bg-body rounded-3 p-4 mb-3 shadow">
                                    <div class="d-md-flex justify-content-between align-items-center">
                                        <!-- Content -->
                                        <div>
                                            <h6 class="h5 fw-bold">Activity Logs</h6>
                                            <p class="mb-1 mb-md-0 text-secondary">You can save your all activity logs including unusual
                                                activity detected.</p>
                                        </div>
                                        <!-- Switch -->
                                        <div class="form-check form-switch form-check-md mb-0">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy1" checked="">
                                        </div>
                                    </div>
                                </div>

                                <!-- Change password -->
                                <div class="bg-light rounded-3 p-4 mb-3 shadow">
                                    <div class="d-md-flex justify-content-between align-items-center">
                                        <!-- Content -->
                                        <div>
                                            <h6 class="h5 fw-bold">Change Password</h6>
                                            <p class="mb-1 mb-md-0 text-secondary">Set a unique password to protect your account.</p>
                                        </div>
                                        <!-- Button -->
                                        <div>
                                            <a href="#" class="btn btn-primary mb-1" data-bs-toggle="modal"
                                                data-bs-target="#changePassword">Change Password</a>
                                            <p class="mb-0 small h6">Last change 10 Aug 2020</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2 Step Verification -->
                                <div class="bg-light rounded-3 p-4 shadow">
                                    <div class="d-md-flex justify-content-between align-items-center">
                                        <!-- Content -->
                                        <div>
                                            <h6 class="h5 fw-bold">2 Step Verification</h6>
                                            <p class="mb-1 mb-md-0">Secure your account with 2 Step security. When it is activated you will
                                                need to enter not only your password, but also a special code using app. You can receive this
                                                code by in mobile app.</p>
                                        </div>
                                        <!-- Switch -->
                                        <div class="form-check form-switch form-check-md mb-0">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy13" checked="">
                                        </div>
                                    </div>
                                </div>

                                <!-- Active Logs START -->
                                <div class="card border mt-4">

                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <h5 class="card-header-title">Active Logs</h5>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <!-- Table START -->
                                        <div class="table-responsive border-0">
                                            <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">

                                                <!-- Table head -->
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-0 bg-dark text-light fs-5 p-2 rounded-start">Browser</th>
                                                        <th scope="col" class="border-0 bg-dark text-light fs-5 p-2">IP</th>
                                                        <th scope="col" class="border-0 bg-dark text-light fs-5 p-2">Time</th>
                                                        <th scope="col" class="border-0 bg-dark text-light fs-5 p-2 rounded-end">Action</th>
                                                    </tr>
                                                </thead>

                                                <!-- Table body START -->
                                                <tbody>

                                                    <!-- Table row -->
                                                    <tr>
                                                        <!-- Table data -->
                                                        <td>Mozilla On Window</td>

                                                        <!-- Table data -->
                                                        <td>107.222.146.90</td>

                                                        <!-- Table data -->
                                                        <td>08 Nov 2021</td>

                                                        <!-- Table data -->
                                                        <td>
                                                            <button class="btn btn-md bg-danger bg-opacity-10 text-danger me-1 mb-1 mb-md-0">Sign
                                                                out</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!-- Table body END -->
                                            </table>
                                        </div>
                                        <!-- Table END -->
                                    </div>
                                    <!-- Card body END -->
                                </div>
                                <!-- Active Logs END -->
                            </div>
                            <!-- Account setting content END -->

                            <!-- Social Settings content START -->
                            <div class="tab-pane" id="tab-5" role="tabpanel">
                                <div class="card shadow">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom d-sm-flex justify-content-between align-items-center">
                                        <h5 class="card-header-title mb-0">Social Media Settings</h5>
                                        <a href="#" class="btn btn-lg btn-primary mb-0">Add new</a>
                                    </div>
                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <form class="row g-4">
                                            <!-- Input item -->
                                            <div class="col-sm-6">
                                                <label class="form-label fw-bold"><i class="bi bi-google text-google-icon me-2"></i>Enter google
                                                    client ID</label>
                                                <input class="form-control" type="text">
                                            </div>

                                            <!-- Input item -->
                                            <div class="col-sm-6">
                                                <label class="form-label fw-bold"><i class="bi bi-google text-google-icon me-2"></i>Enter google
                                                    API</label>
                                                <input class="form-control" type="text">
                                            </div>

                                            <!-- Input item -->
                                            <div class="col-sm-6">
                                                <label class="form-label fw-bold"><i class="bi bi-facebook text-primary me-2"></i>Enter facebook
                                                    client ID</label>
                                                <input class="form-control" type="text">
                                            </div>

                                            <!-- Input item -->
                                            <div class="col-sm-6">
                                                <label class="form-label fw-bold"><i class="bi bi-facebook text-primary me-2"></i>Enter facebook
                                                    API</label>
                                                <input class="form-control" type="text">
                                            </div>

                                            <!-- Button -->
                                            <div class="d-flex justify-content-end">
                                                <button type="button" class="btn btn-primary mb-0">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Card body END -->
                                </div>
                            </div>
                            <!-- Social Settings content END -->
                        </div>
                        <!-- Tab Content END -->
                    </div>
                    <!-- Right side END -->
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