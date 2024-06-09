<?php
include('config.php');

session_start();

if (!empty($_GET)) {
    if (isset($_SESSION['cart'])) {
        $_SESSION['purchased_courses'] = []; // Initialize array to store purchased courses

        foreach ($_SESSION['cart'] as $key => $item) {
            $_SESSION['purchased_courses'][] = $item['Item_Name']; // Add each purchased course to the array
            $_SESSION['txn_id'] = $_GET['tx'];
            $_SESSION['amount'] = $_GET['amt'];
            $_SESSION['currency'] = $_GET['cc'];
            $_SESSION['status'] = $_GET['st'];
            $_SESSION['payer_id'] = $_GET['payer_id'];
            $_SESSION['payer_email'] = $_GET['payer_email'];
            $_SESSION['payer_name'] = $_GET['first_name'] . ' ' . $_GET['last_name'];
        }
    }

    date_default_timezone_set('Asia/Kolkata');

    $sql = "INSERT INTO payments (payment_id, payer_id, payer_name, payer_email, item_name, currency, amount, status, created_at) 
    VALUES ('" . $_SESSION['txn_id'] . "','" . $_SESSION['payer_id'] . "','" . $_SESSION['payer_name'] . "', '" . $_SESSION['payer_email'] . "','" . implode(", ", $_SESSION['purchased_courses']) . "','" . $_SESSION['currency'] . "','" . $_SESSION['amount'] . "','" . $_SESSION['status'] . "','" . date('Y-m-d H:i:s') . "')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:success.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Success</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">


        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>Transaction Id</td>
                    <td><?php echo isset($_SESSION['txn_id']) ? $_SESSION['txn_id'] : ''; ?></td>
                </tr>
                <tr>
                    <td>Product Name</td>
                    <td><?php echo isset($_SESSION['product']) ? $_SESSION['product'] : ''; ?></td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td><?php echo isset($_SESSION['amount']) ? $_SESSION['amount'] : ''; ?></td>
                </tr>

                <tr>
                    <td>Payment Status</td>
                    <td><?php echo isset($_SESSION['status']) ? $_SESSION['status'] : ''; ?></td>
                </tr>

            </tbody>
        </table>
    </div>

</body>

</html>