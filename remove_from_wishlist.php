<?php
session_start();

function isItemInWishlist($itemId, $wishlist)
{
    foreach ($wishlist as $item) {
        if ($item['Item_ID'] == $itemId) {
            return true;
        }
    }
    return false;
}

if (isset($_POST['course_name'])) {
    $courseNameToRemove = $_POST['course_name'];

    // Find and remove the item from the wishlist session array
    foreach ($_SESSION['wishlist'] as $key => $item) {
        if ($item['Item_ID'] == $courseNameToRemove) {
            unset($_SESSION['wishlist'][$key]);
            echo json_encode(['success' => true]);
            exit;
        }
    }
}

echo json_encode(['success' => false]);
