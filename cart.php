<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>

    <!-- bootstrap css file link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icon link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- css file link -->
    <link rel="stylesheet" href="Style/style.css">

    <!-- header file link -->
    <link rel="stylesheet" href="Style/header.css">

    <!-- cart file link -->
    <link rel="stylesheet" href="Style/cart.css">

    <!-- media query file link -->
    <link rel="stylesheet" href="Style/media-query.css">
</head>

<body>

    <!-- header section -->
    <?php
    include 'header.php';
    ?>


    <!-- cart page -->
    <div class="cart-container mt-3">

        <div class="cart-title container text-center">
            <h1 class="fw-bold">Shopping Cart</h1>
        </div>

        <div class="cart-content d-flex justify-content-center flex-wrap">
            <div class="cart-section">
                <?php
                $total = 0;
                $del_total = 0;
                if (isset($_SESSION['cart']) && isset($_SESSION['user_id'])) {
                    foreach ($_SESSION['cart'] as $key => $item) {
                        $total = $total + (float) $item['Item_prise'];
                        $_SESSION['cart_total'] = $total;
                        $del_total = $del_total + (float) $item['Item_del_prise'];
                ?>
                        <div class="cart-part-1 d-flex justify-content-between align-items-center flex-wrap p-2 my-2">
                            <div class="course-img me-3" style="height: 180px; width:300px;">
                                <img src="<?php echo htmlspecialchars($item['Item_Img']); ?>" alt="" width="100%" height="100%" class=" rounded-3">
                            </div>
                            <div class="cart-info me-3">
                                <div class="course-title">
                                    <p class="course-name m-0 fw-bolder px-3 pt-1"><?php echo $item['Item_Name']; ?></p>
                                </div>
                                <div class="course-channel d-flex justify-content-start align-items-center ms-3 pt-1">
                                    <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                    <p class="instructor-name fs-6 fw-medium my-0 py-0"><?php echo $item['Item_channelName']; ?></p>
                                </div>
                                <div class="course-ratting d-flex m-0 py-0 px-3 pt-1">
                                    <div class="rating-icon d-flex py-1">
                                        <i class="bi bi-star-fill me-1 text-warning"></i>
                                        <i class="bi bi-star-fill me-1 text-warning"></i>
                                        <i class="bi bi-star-fill me-1 text-warning"></i>
                                        <i class="bi bi-star-fill me-1 text-warning"></i>
                                        <i class="bi bi-star-half me-1 text-warning"></i>
                                    </div>
                                    <p class="rating-ratio py-1 my-0">
                                        <?php echo $item['Item_ratting']; ?>
                                    </p>
                                </div>
                                <div class="cart-prise ms-3 p-1 d-flex justify-content-start align-items-center">
                                    <p class="m-0 fw-bold fs-5 me-2" style="color: #3dcbb1;">$<?php echo $item['Item_prise']; ?></p>
                                    <p class="m-0 text-center"><del>$<?php echo $item['Item_del_prise']; ?></del></p>
                                </div>
                                <div class="cart-details d-flex align-items-center my-1 ms-3">
                                    <form action="manage_cart.php" method="post">
                                        <button type="submit" class="text-decoration-none text-dark fw-bolder me-3 bg-transparent border-0" name="Remove_course">
                                            <li>Remove</li>
                                        </button>
                                        <input type="hidden" name="Item_Name" value="<?php echo $item['Item_Name']; ?>">
                                    </form>
                                    <a href="#" class="text-decoration-none text-dark fw-bolder me-3">
                                        <li> save for later </li>
                                    </a>
                                    <a href="#" class="text-decoration-none text-dark fw-bolder me-3">
                                        <li> wishlist </li>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
                <?php
                    }
                }
                ?>
            </div>

            <div class="cart-part-2 mx-5">
                <p class="m-0 text-secondary fs-4 fw-bold">Total :</p>
                <div class="prise">
                    <p class="m-0 fs-2 fw-bold"><?php echo number_format($total, 2); ?></p>
                    <p class="m-0 text-secondary"><del><?php echo number_format($del_total, 2); ?></del></p>
                </div>
                <div class="checkoutBtn px-5 my-1 rounded">
                    <form action="manage_cart.php" method="post">
                        <input type="hidden" name="course_img" value="<?php echo htmlspecialchars($item['Item_Img']); ?>">
                        <input type="hidden" name="course_name" value="<?php echo $item['Item_Name']; ?>">
                        <input type="hidden" name="instructor" value="<?php echo $item['instructor']; ?>">
                        <input type="hidden" name="course_channel_name" value="<?php echo $item['Item_channelName']; ?>">
                        <input type="hidden" name="course_prise" value="<?php echo '$' . $item['Item_prise']; ?>">
                        <input type="hidden" name="del_prise" value="<?php echo '$' . $item['Item_del_prise']; ?>">
                        <button class="btn text-center text-light fw-bold fs-4 w-100 outline-0 border-0" type="submit" name="checkout"><a href="checkout.php" class=" text-light text-decoration-none">Checkout</a></button>
                    </form>

                </div>
                <hr>
                <div class="promotion">
                    <p class="text-secondary-emphasis fw-bold">promotions</p>
                </div>
                <div class="coupon-no d-flex justify-content-between align-items-center mb-3 py-1 px-2">
                    <div class="nav-link">
                        <p class="m-0"><span class="text-secondary fw-bold fs-6">UPGRADE02223 </span>is applied</p>
                        <p class="m-0">MyCourse.io coupon</p>
                    </div>
                    <div>
                        <i class="bi bi-x-lg"></i>
                    </div>
                </div>
                <div class="coupon">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="enter coupon">
                        <span class="input-group-text px-3 fw-bold" id="basic-addon2"><a href="#" class=" text-light text-decoration-none">Apply</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- footer -->
    <?php
    include 'footer.php';
    ?>

    <!-- script file link -->
    <script src="Script/main.js"></script>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>