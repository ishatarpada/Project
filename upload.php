<?php
session_start();

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Define the target directory
    $targetDir = "Assests/";

    // Get the names of the uploaded images
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];

    // Generate timestamps
    $timestamp1 = time(); // Example timestamp for image 1
    $timestamp2 = time(); // Example timestamp for image 2

    // Generate target file paths with timestamps
    $targetFile1 = $targetDir . $timestamp1 . '_' . basename($image1);
    $targetFile2 = $targetDir . $timestamp2 . '_' . basename($image2);

    // Check if form data is valid
    $uploadOk = 1;
    $imageFileType1 = strtolower(pathinfo($targetFile1, PATHINFO_EXTENSION));
    $imageFileType2 = strtolower(pathinfo($targetFile2, PATHINFO_EXTENSION));

    // Check if images are valid
    $check1 = getimagesize($_FILES["image1"]["tmp_name"]);
    $check2 = getimagesize($_FILES["image2"]["tmp_name"]);
    if ($check1 === false || $check2 === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image1"]["size"] > 500000 || $_FILES["image2"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
        && $imageFileType1 != "gif" && $imageFileType2 != "jpg" && $imageFileType2 != "png"
        && $imageFileType2 != "jpeg" && $imageFileType2 != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Upload files if everything is okay
        if (
            move_uploaded_file($_FILES["image1"]["tmp_name"], $targetFile1) &&
            move_uploaded_file($_FILES["image2"]["tmp_name"], $targetFile2)
        ) {
            // echo "The files have been uploaded successfully.";

            // Set the image paths for display
            $imagePath1 = $targetFile1;
            $imagePath2 = $targetFile2;
        } else {
            echo "Sorry, there was an error uploading your files.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Images</title>
</head>

<body>
    <?php
    // Display the uploaded images if the paths are set
    if (isset($imagePath1) && isset($imagePath2)) {
        echo "<img src='$imagePath1' alt='Uploaded Image 1'>";
        echo "<img src='$imagePath2' alt='Uploaded Image 2'>";
    }
    ?>
</body>

</html>
