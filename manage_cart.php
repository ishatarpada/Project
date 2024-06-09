<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Cart</title>

    <!-- SweetAlert script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    session_start();

    include "config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['addCart'])) {
            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];
                if (!isset($_SESSION['cart'])) {
                    $_SESSION['cart'] = array();
                }

                $itemToAdd = array(
                    'Item_ID' => $_POST['course_ID'] ?? '',
                    'Item_Name' => $_POST['course_title'] ?? '',
                    'Item_description' => $_POST['course_description'] ?? '',
                    'course_category' => $_POST['course_category'] ?? '',
                    'Item_Level' => $_POST['course_level'] ?? '',
                    'Item_language' => $_POST['course_language'] ?? '',
                    'Item_time' => $_POST['course_time'] ?? '',
                    'Item_total_lecture' => $_POST['total_lecture'] ?? '',
                    'instructor' => $_POST['instructor'] ?? '',
                    'Item_channelName' => $_POST['channel_name'] ?? '',
                    'instructor_img' => $_POST['instructor_img'] ?? '',
                    'Item_prise' => $_POST['course_price'] ?? '',
                    'Item_del_prise' => $_POST['course_discount_price'] ?? '',
                    'Item_Img' => $_POST['course_img'] ?? '',
                    'Item_ratting' => $_POST['course_rating'] ?? ''
                );

                // Check if the item is already in the cart
                $itemExists = false;
                foreach ($_SESSION['cart'] as $cartItem) {
                    if ($cartItem['Item_ID'] == $itemToAdd['Item_ID']) {
                        $itemExists = true;
                        break;
                    }
                }

                if (!$itemExists) {
                    // Item is not in cart, proceed with insertion
                    $sql = "INSERT INTO course_cart (user_id , course_ID , ID , course_name, course_channel_name, course_time , course_language ,course_rating, price, delete_price, course_description, course_category, course_level, total_lecture, instructor, instructor_img, course_img) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? , ? , ? , ? , ? , ? , ?)
                    ";

                    $stmt = $conn->prepare($sql);

                    // Check if the statement was prepared successfully
                    if ($stmt) {
                        $stmt->bind_param(
                            "dddssssssssssssss",
                            $user_id,
                            $itemToAdd['Item_ID'],
                            $itemToAdd['Item_ID'],
                            $itemToAdd['Item_Name'],
                            $itemToAdd['Item_channelName'],
                            $itemToAdd['Item_time'],
                            $itemToAdd['Item_language'],
                            $itemToAdd['Item_ratting'],
                            $itemToAdd['Item_prise'],
                            $itemToAdd['Item_del_prise'],
                            $itemToAdd['Item_description'],
                            $itemToAdd['course_category'],
                            $itemToAdd['Item_Level'],
                            $itemToAdd['Item_total_lecture'],
                            $itemToAdd['instructor'],
                            $itemToAdd['instructor_img'],
                            $itemToAdd['Item_Img']
                        );


                        // Execute the statement
                        $result = $stmt->execute();
                        // Check if the database insertion was successful
                        if ($result) {
                            // Add the item to the session cart
                            $_SESSION['cart'][] = $itemToAdd;
                            echo '<script>
                            Swal.fire({
                                title: "Good job!",
                                text: "Item added to cart successfully!",
                                icon: "success"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "cart.php";
                                }
                            });
                        </script>';
                        } else {
                            // Handle the SQL error gracefully
                            echo '<script>
                            Swal.fire({
                                title: "Oops!",
                                text: "Failed to add item to cart. Please try again.",
                                icon: "error"
                            });
                        </script>';
                        }
                    }
                } else {
                    // Item is already in cart, show alert
                    echo '<script>
                    Swal.fire({
                        title: "Oops!",
                        text: "Item is already added to cart.",
                        icon: "info"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "cart.php";
                        }
                    });
                </script>';
                }
            } else {
                // User is not logged in, redirect to login page
                echo '<script>
                Swal.fire({
                    title: "Oops!",
                    text: "Please log in to add courses to your cart.",
                    icon: "info"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "login.html";
                    }
                });
                </script>';
            }
        }

        if (isset($_POST['Remove_course'])) {
            // Check if the item_id is set in the form data
            if (isset($_POST['Item_Name'])) {
                $item_name = $_POST['Item_Name'];

                // Prepare the SQL statement to delete the course row by item_name
                $sql = "DELETE FROM course_cart WHERE course_name = ?";

                // Prepare and bind the statement
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $item_name);

                // Execute the statement
                $result = $stmt->execute();

                // Check if the database deletion was successful
                if ($result) {
                    // Remove the item from the session cart based on item_name
                    foreach ($_SESSION['cart'] as $key => $item) {
                        if ($item['Item_Name'] == $item_name) {
                            unset($_SESSION['cart'][$key]);
                            break; // Exit the loop after removing the item
                        }
                    }

                    // Return a success response
                    $response = json_encode(array('success' => true, 'redirect' => 'cart.php'));
                    echo "<script>
                            const response = $response;
                            Swal.fire({
                                title: 'Good job!',
                                text: 'Item removed successfully!',
                                icon: 'success'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = 'cart.php';
                                }
                            });
                        </script>";
                } else {
                    // Handle the SQL error if needed
                    echo "Error: " . $conn->error;
                }
            } else {
                // Handle missing Item_Name
                echo "Error: Missing item name.";
            }
        }

        if (isset($_POST['wishlistBtn'])) {
            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];

                // Check if the session wishlist is set, if not, initialize it
                if (!isset($_SESSION['wishlist'])) {
                    $_SESSION['wishlist'] = array();
                }

                // Check if the required fields are set in the form data
                if (isset($_POST['course_title']) && !empty($_POST['course_title'])) {
                    // Prepare the item details to add to the wishlist and database
                    $itemToAdd = array(
                        'Item_ID' => $_POST['course_ID'] ?? '',
                        'Item_Name' => $_POST['course_title'] ?? '',
                        'Item_description' => $_POST['course_description'] ?? '',
                        'course_category' => $_POST['course_category'] ?? '',
                        'Item_Level' => $_POST['course_level'] ?? '',
                        'Item_language' => $_POST['course_language'] ?? '',
                        'Item_time' => $_POST['course_time'] ?? '',
                        'Item_total_lecture' => $_POST['total_lecture'] ?? '',
                        'instructor' => $_POST['instructor'] ?? '',
                        'Item_channelName' => $_POST['channel_name'] ?? '',
                        'instructor_img' => $_POST['instructor_img'] ?? '',
                        'Item_prise' => $_POST['course_price'] ?? '',
                        'Item_del_prise' => $_POST['course_discount_price'] ?? '',
                        'Item_Img' => $_POST['course_img'] ?? '',
                        'Item_ratting' => $_POST['course_rating'] ?? ''
                    );

                    // Check if the item is already in the wishlist
                    $itemExists = false;
                    foreach ($_SESSION['wishlist'] as $wishlistItem) {
                        if ($wishlistItem['Item_ID'] == $itemToAdd['Item_ID']) {
                            $itemExists = true;
                            break;
                        }
                    }

                    if (!$itemExists) {
                        // Prepare the SQL statement with placeholders
                        $sql = "INSERT INTO wishlist_course (user_id , course_ID , ID ,course_name, course_channel_name, course_time , course_language ,course_rating, price, delete_price, course_description, course_category, course_level, total_lecture, instructor, instructor_img, course_img) 
                            VALUES (?, ?, ? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                        // Prepare and bind the statement
                        $stmt = $conn->prepare($sql);
                        if ($stmt) {
                            $stmt->bind_param(
                                "sddsdssssssssssss",
                                $user_id,
                                $itemToAdd['Item_ID'],
                                $itemToAdd['Item_ID'],
                                $itemToAdd['Item_Name'],
                                $itemToAdd['Item_channelName'],
                                $itemToAdd['Item_time'],
                                $itemToAdd['Item_language'],
                                $itemToAdd['Item_ratting'],
                                $itemToAdd['Item_prise'],
                                $itemToAdd['Item_del_prise'],
                                $itemToAdd['Item_description'],
                                $itemToAdd['course_category'],
                                $itemToAdd['Item_Level'],
                                $itemToAdd['Item_total_lecture'],
                                $itemToAdd['instructor'],
                                $itemToAdd['instructor_img'],
                                $itemToAdd['Item_Img']
                            );

                            // Execute the statement
                            $result = $stmt->execute();

                            // Check if the database insertion was successful
                            if ($result) {
                                // Add the item to the session wishlist
                                $_SESSION['wishlist'][] = $itemToAdd;
                                echo '<script>
                                Swal.fire({
                                    title: "Good job!",
                                    text: "Item added to wishlist successfully!",
                                    icon: "success"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "wishlist-course.php";
                                    }
                                });
                            </script>';
                            } else {
                                // Handle the SQL error if needed
                                echo "Error: " . $conn->error;
                            }
                        } else {
                            // Handle the statement preparation error
                            echo "Error preparing statement: " . $conn->error;
                        }
                    } else {
                        // Item is already in wishlist, show alert
                        echo '<script>
                        Swal.fire({
                            title: "Oops!",
                            text: "Item is already added to wishlist.",
                            icon: "info"
                        });
                    </script>';
                    }
                } else {
                    // Handle missing or empty course_name field
                    echo '<script>
                    Swal.fire({
                        title: "Oops!",
                        text: "Course name is required!",
                        icon: "error"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "wishlist-course.php";
                        }
                    });
                </script>';
                }
            } else {
                // User is not logged in, redirect to login page
                echo '<script>
                    Swal.fire({
                        title: "Oops!",
                        text: "Please log in to add courses to your wishlist.",
                        icon: "info"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "login.html";
                        }
                    });
                </script>';
            }
        }

        if (isset($_POST['checkout'])) {
            // Check if the checkout button was clicked
            if (!isset($_SESSION['checkout'])) {
                $_SESSION['checkout'] = array();
            }

            $itemToAdd = array(
                'Item_Img' => $_POST['course_img'],
                'Item_Name' => $_POST['course_name'],
                'instructor' => $_POST['instructor'],
                'Item_channelName' => $_POST['course_channel_name'],
                'Item_prise' => $_POST['course_prise'],
                'Item_del_prise' => $_POST['del_prise']
            );

            $_SESSION['checkout'][] = $itemToAdd;

            // Redirect to checkout.php immediately without showing the warning message
            header("Location: checkout.php");
            exit(); // Make sure to exit after redirection to prevent further execution of the script
        }

        if (isset($_POST['removeCourse'])) {
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['Item_Name'] == $_POST['item_name']) {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    $response = json_encode(array('success' => true, 'redirect' => 'checkout.php'));
                    echo '<script>
            Swal.fire({
                title: "Good job!",
                text: "Item removed successfully!",
                icon: "success"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "checkout.php";
                }
            });
            </script>';
                }
            }
        }

        if (isset($_POST['removeBtn'])) {
            foreach ($_SESSION['wishlist'] as $key => $value) {
                if ($value['Item_Name'] == $_POST['course_name']) {
                    // Prepare the SQL statement to delete the course row by item_name
                    $sql = "DELETE FROM wishlist_course WHERE course_name = ?";

                    // Prepare and bind the statement
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("s", $value['Item_Name']); // Bind the item name

                    // Execute the statement
                    $result = $stmt->execute();

                    if ($result) {
                        // If deletion from the database is successful, remove from session
                        unset($_SESSION['wishlist'][$key]);
                        $_SESSION['wishlist'] = array_values($_SESSION['wishlist']);

                        // Display success message and redirect
                        echo '<script>
                                Swal.fire({
                                    title: "Good job!",
                                    text: "Item removed successfully!",
                                    icon: "success"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "wishlist-course.php";
                                    }
                                });
                             </script>';
                    } else {
                        // Handle deletion error
                        echo "Error: Unable to remove item from database.";
                    }

                    break; // Exit the loop after finding and processing the item
                }
            }
        }
    }


    function isItemInCart($item, $cart)
    {
        foreach ($cart as $cartItem) {
            if ($cartItem['Item_Name'] == $item['Item_Name']) {
                return true;
            }
        }
        return false;
    }

    ?>
</body>

</html>