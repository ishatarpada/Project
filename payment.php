<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>

    <!-- css bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- bootstrap icon link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- main css style link -->
    <link rel="stylesheet" href="Style/style.css">

    <!-- account css style link -->
    <link rel="stylesheet" href="Style/account.css">

    <!-- header css style link -->
    <link rel="stylesheet" href="Style/header.css">

    <!-- css for large screen -->
    <link rel="stylesheet" href="Style/media-query.css">

    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

    <!-- header section -->
    <?php
    include 'header.php';
    ?>

    <div class="account-container
         mt-2">
        <p class="fs-4 fw-bold text-center account text-info-emphasis">My Account</p>
        <div class="container-fluid">
            <div class="account-tabMenu d-flex justify-content-center
                align-items-center mt-1">
                <ul class="list-unstyled d-flex">
                    <li class="mx-3">
                        <a href="profile.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Profile</a>
                    </li>
                    <li class="mx-3">
                        <a href="personalization.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Personalization</a>
                    </li>
                    <li class="mx-3">
                        <a href="payment.php" class="text-decoration-none fs-5 text-dark fw-bold p-1  border-bottom border-danger border-3">Payment Methods</a>
                    </li>
                    <li class="mx-3">
                        <a href="payment-details.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Payment-history</a>
                    </li>
                    <li class="mx-3">
                        <a href="notification.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Notifications</a>
                    </li>
                    <li class="mx-3">
                        <a href="reminder.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Reminder</a>
                    </li>
                </ul>
            </div>

            <!-- payment course -->
            <!-- checkout page -->
            <div class="checkout-container container mt-5">
                <p class="p-0 m-0 fw-medium fs-4 text-dark fw-bold text-center">Payment Method</p>


                <div class="city-box container">
                    <form action="#" class="w-50 mt-4 mb-2">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="city" class="form-label fs-5 text-dark fw-bolder"><span class="fw-bolder fs-4 fw-bold text-dark container">Billing Address</span>City</label>
                            </div>
                            <div class="col-auto">
                                <select class="form-select text-secondary bg-light fs-5" aria-label="Default select example" name="city" id="cityDropdown">
                                    <option selected>Open this select menu</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="payment-container container rounded px-3 py-1">
                    <div class="title d-flex justify-content-between align-items-center flex-wrap p-2">
                        <p class="p-0 m-0 fw-bolder fs-5 text-dark">Payment Method</p>
                        <a href="#" class="btn btn-sm add-btn fw-bold mb-0" data-bs-toggle="modal" data-bs-target="#addNewCard">Add new card</a>
                        <div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">
                                        <h5 class="modal-title text-white" id="addNewcardLabel">Add card</h5>
                                        <button type="button" class="btn-close btn btn-outline-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row text-start g-3">

                                            <!-- Card number -->
                                            <div class="col-12">
                                                <label class="form-label">Card Number <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" maxlength="16" placeholder="xxxx xxxx xxxx xxxx">
                                                    <img src="Assests/visa.svg" class="position-absolute top-50 end-0 translate-middle-y me-2" alt="">
                                                </div>
                                            </div>
                                            <!-- Expiration Date -->
                                            <div class="col-md-6">
                                                <label class="form-label">Expire date <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" maxlength="2" placeholder="Month">
                                                    <input type="text" class="form-control" maxlength="4" placeholder="Year">
                                                </div>
                                            </div>
                                            <!--Cvv code  -->
                                            <div class="col-md-6">
                                                <label class="form-label">CVV / CVC <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" maxlength="3" placeholder="xxx">
                                            </div>
                                            <!-- Card name -->
                                            <div class="col-12">
                                                <label class="form-label">Name on Card <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" aria-label="name of card holder" placeholder="Name of card holder">
                                            </div>
                                            <!-- Check box -->
                                            <div class="col-md-12">
                                                <div class="form-check mb-0">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Secuarely save card
                                                        and details</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger my-0" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success my-0">Save Card</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="accordion accordion-circle" id="accordioncircle">

                            <!-- Credit or debit card START -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="heading-1">
                                    <button class="accordion-button bg-white rounded fw-bold fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        <i class="bi bi-credit-card me-3"></i>Credit or Debit Card
                                    </button>
                                </h6>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordioncircle">
                                    <!-- Accordion body -->
                                    <div class="accordion-body">
                                        <!-- Form START -->
                                        <form class="row text-start g-3">
                                            <!-- card name -->
                                            <div class="col-12">
                                                <label class="form-label fw-bold fs-5">Card Name <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Name on card">
                                                </div>
                                            </div>
                                            <!-- Card number -->
                                            <div class="col-12">
                                                <label class="form-label  fw-bold fs-5">Card Number <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="xxxx xxxx xxxx xxxx">
                                                    <img src="Assests/visa.svg" class="img-fluid position-absolute top-50 end-0 translate-middle-y me-2 d-none d-sm-block" alt="">
                                                </div>
                                            </div>
                                            <!-- Expiration Date -->
                                            <div class="col-md-6">
                                                <label class="form-label fw-bold fs-5">Expiration date <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" maxlength="2" placeholder="Month">
                                                    <input type="text" class="form-control" maxlength="4" placeholder="Year">
                                                </div>
                                            </div>
                                            <!--Cvv code  -->
                                            <div class="col-md-6">
                                                <label class="form-label fw-bold fs-5">CVV / CVC <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" maxlength="3" placeholder="xxx">
                                            </div>
                                        </form>
                                        <!-- Form END -->
                                    </div>
                                </div>
                            </div>
                            <!-- Credit or debit card END -->

                            <!-- Net banking START -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-2">
                                    <button class="accordion-button bg-white rounded collapsed fw-bold fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"><i class="bi bi-bank me-3"></i>
                                        Pay with Net Banking
                                    </button>
                                </h6>
                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordioncircle">
                                    <!-- Accordion body -->
                                    <div class="accordion-body">
                                        <!-- Form START -->
                                        <form class="row text-start g-3">
                                            <p class="mb-1 fw-bolder fs-5">In order to complete your transaction, we will
                                                transfer you
                                                over to Eduport secure servers.</p>
                                            <p class="my-0 fw-bolder fs-5">Select your bank from the drop-down list and click
                                                proceed
                                                to continue with your payment.</p>
                                            <!-- Select bank -->
                                            <div class="col-md-6">
                                                <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                    <div class="choices-inner">
                                                        <select class="form-select fw-bold fs-5" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">Bank Of Baroda</option>
                                                            <option value="2">Bank Of India</option>
                                                            <option value="3">Kotak Mahindra bank</option>
                                                            <option value="4">HDFC bank</option>
                                                            <option value="5">state bank of India</option>
                                                            <option value="6">ICICI bank</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Form END -->
                                    </div>
                                </div>
                            </div>
                            <!-- Net banking END -->

                            <!-- UPI START -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-2">
                                    <button class="accordion-button bg-white rounded collapsed fw-bold fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"><img src="Assests/upi-icon.svg" class="me-2" alt=""></i>
                                        UPI
                                    </button>
                                </h6>
                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordioncircle">
                                    <!-- Accordion body -->
                                    <div class="accordion-body">
                                        <p>Make a selection on how you would like to use UPI.</p>
                                        <!-- Form START -->
                                        <form class="row text-start g-3">
                                            <!-- card name -->
                                            <div class="col-12">
                                                <label class="form-label fw-bold fs-5">Virtual Payment Address<span class="text-danger ms-1">*</span></label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="UPI ID">
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Form END -->
                                    </div>
                                </div>
                            </div>
                            <!-- UPI END -->

                            <!-- Mobile Wallet START -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-2">
                                    <button class="accordion-button bg-white rounded collapsed fw-bold fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4"><i class="bi bi-wallet-fill me-3"></i>
                                        Pay with Mobile Wallet
                                    </button>
                                </h6>
                                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordioncircle">
                                    <!-- Accordion body -->
                                    <div class="accordion-body">
                                        <!-- Form START -->
                                        <form class="row text-start g-3">
                                            <p class="mb-1 fw-medium fs-5">In order to complete your transaction, we will
                                                transfer you
                                                over to Eduport secure servers.</p>
                                            <p class="my-0 fw-medium fs-5">Select your bank from the drop-down list and click
                                                proceed
                                                to continue with your payment.</p>
                                            <!-- Select bank -->
                                            <div class="col-md-6">
                                                <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                    <div class="choices-inner">
                                                        <select class="form-select fw-bold fs-5" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">Bank Of Baroda</option>
                                                            <option value="2">Bank Of India</option>
                                                            <option value="3">Kotak Mahindra bank</option>
                                                            <option value="4">HDFC bank</option>
                                                            <option value="5">state bank of India</option>
                                                            <option value="6">ICICI bank</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Form END -->
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Wallet END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php
    include 'footer.php';
    ?>


    <!-- js external link -->
    <script src="Script/main.js"></script>
    <!-- script file link -->
    <script src="Script/city.js"></script>
    <script src="Script/login.js"></script>

    <!-- js bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>