<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Videos</title>

    <!-- css bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icon link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- main css style link -->
    <link rel="stylesheet" href="Style/style.css">

    <!-- unpaid-offline video css style link -->
    <link rel="stylesheet" href="Style/unpaid-offline.css">

    <!-- header css file -->
    <link rel="stylesheet" href="Style/header.css">

    <!-- media query css file -->
    <link rel="stylesheet" href="Style/media-query.css">

</head>

<body>


    <!-- header section -->
    <?php
    include 'header.php';
    ?>

    <!-- offline unpaid video section -->
    <?php
    $course_ID = $_GET['id'];
    // SQL query to fetch course details
    $sql = "SELECT * FROM course WHERE course_id = '{$course_ID}'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $course_ID = $row['course_ID'];
            $course_title = $row['course_title'];
            $course_description = $row['course_description'];
            $course_category = $row['course_category'];
            $course_level = $row['course_level'];
            $course_language = $row['course_language'];
            $course_time = $row['course_time'];
            $total_lecture = $row['total_lecture'];
            $instructor = $row['instructor'];
            $channel_name = $row['channel_name'];
            $instructor_img = $row['instructor_img'];
            $course_price = $row['course_price'];
            $course_discount_price = $row['course_discount_price'];
            $course_img = $row['course_img'];
            $course_ratting = '4.5';
            $course_section = '1';
            $video_url = $row['video_url'];
            // Extract YouTube video ID and create embed link
            $video_id = '';
            if (preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $video_url, $matches)) {
                $video_id = $matches[1];
            }

            $embed_url = "https://www.youtube.com/embed/$video_id";
            if (empty($video_id)) {
                echo "<p>Error: Invalid YouTube URL for topic: $topic_name</p>";
            }
    ?>
            <div class="offline-video-container my-2">
                <div class="row offline-course-details my-3 mx-auto w-100">
                    <div class="col-lg-8 offline-course-part1 mx-auto rounded p-0 border">
                        <div class="offline-course-video position-relative w-100 rounded">
                            <iframe id="main-video" width="100%" height="700" src="<?php echo $embed_url; ?>" frameborder="0" allowfullscreen class="rounded"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-4 offline-course-part2 mx-auto px-2 shadow-none">
                        <div class="offline-course-progress card p-0 m-0">
                            <div class="progress-info ps-3 p-0 card-header">
                                <div class="progress-chapter m-0">
                                    <p class="fw-bold fs-4 m-0"><?php echo $course_title; ?> Full Course</p>
                                </div>
                                <div class="complete-course my-1 me-2">
                                    <p class="fs-5 text-secondary m-0"><?php echo $channel_name ?> - <span class="text-warning"><?php echo $total_lecture ?></span></p>
                                </div>
                            </div>
                            <div class="accordion accordion-flush course-list-details" id="subtopicsAccordion">
                                <?php
                                // Assuming you have fetched course ID using $_GET['id']
                                $course_ID = $_GET['id'];

                                // SQL query to fetch topics related to the course
                                $sql_topics = "SELECT * FROM upload_topic WHERE course_id = '{$course_ID}'";
                                $result_topics = mysqli_query($conn, $sql_topics);

                                if (mysqli_num_rows($result_topics) > 0) {
                                    // Output data of each topic
                                    while ($topic_row = mysqli_fetch_assoc($result_topics)) {
                                        $topicID = $topic_row['topicID'];

                                        // SQL query to fetch subtopics related to the topic
                                        $sql_subtopics = "SELECT * FROM upload_subtopic WHERE topicID = '{$topicID}'";
                                        $result_subtopics = mysqli_query($conn, $sql_subtopics);

                                        if (mysqli_num_rows($result_subtopics) > 0) {
                                            // Output data of each subtopic
                                ?>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header fw-bold" id="heading-<?php echo $topicID; ?>">
                                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $topicID; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $topicID; ?>">
                                                        <?php echo $topic_row['course_name']; ?>
                                                    </button>
                                                </h2>
                                                <div id="collapse-<?php echo $topicID; ?>" class="accordion-collapse collapse show" aria-labelledby="heading-<?php echo $topicID; ?>" data-bs-parent="#subtopicsAccordion">
                                                    <div class="accordion-body">
                                                        <?php
                                                        while ($subtopic_row = mysqli_fetch_assoc($result_subtopics)) {
                                                            $topic_name = $subtopic_row['topic_name'];
                                                            $topic_video_link = $subtopic_row['topic_video_link'];
                                                            $description = $subtopic_row['description'];

                                                            // Extract YouTube video ID and create embed link
                                                            $video_id = '';
                                                            if (preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $topic_video_link, $matches)) {
                                                                $video_id = $matches[1];
                                                            }

                                                            $embed_link = "https://www.youtube.com/embed/$video_id";
                                                            if (empty($video_id)) {
                                                                echo "<p>Error: Invalid YouTube URL for topic: $topic_name</p>";
                                                            } else {
                                                                // Display the subtopic details
                                                        ?>
                                                                <div class="course-list-1 my-0 row gap-2">
                                                                    <div class="col-md-9 m-auto p-0 d-flex justify-content-start align-items-center flex-wrap">
                                                                        <iframe width="140" height="70" src="<?php echo $embed_link; ?>" frameborder="0" allowfullscreen class="rounded me-3"></iframe>
                                                                        <div>
                                                                            <p class="m-0 text-dark fw-bolder"><?php echo $topic_name; ?></p>
                                                                            <p class="m-0 text-dark fw-medium"><?php echo $channel_name ?></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2 m-auto">
                                                                        <a href="#" class="bi bi-download rounded-circle text-danger bg-danger bg-opacity-10 p-2 fs-3"></a>
                                                                    </div>
                                                                </div>
                                                                <!-- Divider -->
                                                                <hr>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                <?php
                                        } else {
                                            echo "<p>No subtopics found for topic ID: $topicID</p>";
                                        }
                                    }
                                } else {
                                    echo "<p>No topics found</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row course-modules my-3">

                    <div class="col-lg-8 about-course-module p-0">
                        <h1 class="vdo-name fs-4 fw-bold bg-body-tertiary px-3 py-2"><?php echo $course_title; ?></h1>
                        <div class="channel-info d-flex m-auto p-1">
                            <div class="channel-name d-flex flex-nowrap p-0">
                                <div class="channel-logo" style="height: 50px; width: 50px;">
                                    <img src="Assests/Channel-logo.png" class="img-fluid me-3" alt="" height="100%" width="100%">
                                </div>
                                <div class="name">
                                    <p class="m-0"><?php echo $channel_name; ?></p>
                                    <span class="m-0 text-secondary">Design Studio</span>
                                </div>
                            </div>
                            <div class="comment-icon m-auto justify-content-end text-end d-flex flex-nowrap ">
                                <p class="me-3 my-0 text-secondary"><i class="bi bi-person-circle me-2"></i>2.3k</p>
                                <p class="my-0 text-secondary"><i class="bi bi-chat-right-text-fill me-2"></i>1.4k</p>
                            </div>
                        </div>

                        <nav class="m-2">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active text-dark fw-semibold" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">Description</button>
                                <button class="nav-link text-dark fw-semibold" id="nav-course-tab" data-bs-toggle="tab" data-bs-target="#nav-course" type="button" role="tab" aria-controls="nav-course" aria-selected="false">Course</button>
                                <button class="nav-link text-dark fw-semibold" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Review</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab" tabindex="0">
                                <div class="about-course-description my-3 px-5 py-2">
                                    <?php

                                    $course_ID = $_GET['id'];
                                    // Include database connection
                                    include 'config.php';

                                    // SQL query to fetch course details
                                    $sql = "SELECT * FROM course WHERE course_ID = {$course_ID}";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        // Output data of each row
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <!-- course details -->
                                            <div class="card bg-light border rounded-3 my-3 container">

                                                <!-- Catd header -->
                                                <div class="card-header bg-light border-bottom d-flex justify-content-between flex-wrap align-items-center">
                                                    <h5 class="card-header-title fs-4 fw-semibold m-0 p-1">The Complete <?php echo $row["course_title"]; ?> Course
                                                    </h5>
                                                    <button class="btn btn-lg bg-success bg-opacity-10"><a href="certificate.php?id=<?php echo $row['course_ID'] ?>" class="text-success text-decoration-none">Generate Certificate</a></button>
                                                </div>

                                                <!-- Card body START -->
                                                <div class="card-body">

                                                    <!-- Course image and info START -->

                                                    <div class="row g-4">
                                                        <!-- Course image -->
                                                        <div class="col-md-6">

                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <img src='<?php echo $row['course_img']; ?>' class="rounded" alt="" style="height:300px; width:450px;">
                                                            </div>

                                                            <p class="my-3 fw-medium text-secondary" style="font-size:18px;"><?php echo $row["course_description"]; ?>
                                                            </p>
                                                        </div>

                                                        <!-- Course info and avatar -->
                                                        <div class="col-md-6">

                                                            <div class="d-flex align-items-center justify-content-between my-2">

                                                                <!-- avatar -->
                                                                <div class="d-flex align-items-center justify-content-start">
                                                                    <!-- Avatar image -->
                                                                    <div class="avatar avatar-md" style="height:70px; width:70px;">
                                                                        <img class="avatar-img rounded-circle" src='<?php echo $row['instructor_img']; ?>' alt="avatar" style="height:70px; width:70px;">
                                                                    </div>
                                                                    <div class="ms-sm-3 mt-2 mt-sm-0">
                                                                        <h6 class="mb-0 fw-bold"><a href="#" class="text-decoration-none text-dark fs-4 text-uppercase">By
                                                                                <?php echo $row["instructor"]; ?></a></h6>
                                                                        <p class="mb-0  fw-bolder fs-5"><?php echo $row["channel_name"]; ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Info -->
                                                            <ul class="list-group list-group-flush my-5 bg-body-tertiary">
                                                                <li class="list-group-item my-1 bg-transparent">
                                                                    <span class="text-secondary fw-medium me-2">Total Hour:</span>
                                                                    <span class="h6 mb-0 fw-semibold"><?php echo $row["course_time"]; ?></span>
                                                                </li>

                                                                <li class="list-group-item my-1 bg-transparent">
                                                                    <span class="text-secondary fw-medium me-2">Language:</span>
                                                                    <span class="h6 mb-0 fw-semibold"><?php echo $row["course_language"]; ?></span>
                                                                </li>
                                                                <li class="list-group-item my-1 bg-transparent">
                                                                    <span class="text-secondary fw-medium me-2">Total Lecture:</span>
                                                                    <span class="h6 mb-0 fw-semibold"><?php echo $row["total_lecture"]; ?></span>
                                                                </li>

                                                                <li class="list-group-item my-1 bg-transparent">
                                                                    <span class="text-secondary fw-medium me-2">Review:</span>
                                                                    <span class="h6 mb-0 fw-semibold">4.5<i class="bi bi-star-fill text-warning ms-1"></i></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Information END -->
                                                </div>
                                                <!-- Card body END -->
                                            </div>
                                    <?php }
                                    } ?>
                                </div>
                            </div>
                            <div class="tab-pane fade container px-2" id="nav-course" role="tabpanel" aria-labelledby="nav-course-tab" tabindex="0">
                                <div class="accordion accordion-flush about-course-list shadow-none border" id="subtopicsAccordion">
                                    <?php
                                    // Assuming you have fetched course ID using $_GET['id']
                                    $course_ID = $_GET['id'];

                                    // SQL query to fetch topics related to the course
                                    $sql_topics = "SELECT * FROM upload_topic WHERE course_id = '{$course_ID}'";
                                    $result_topics = mysqli_query($conn, $sql_topics);

                                    if (mysqli_num_rows($result_topics) > 0) {
                                        // Output data of each topic
                                        while ($topic_row = mysqli_fetch_assoc($result_topics)) {
                                            $topicID = $topic_row['topicID'];

                                            // SQL query to fetch subtopics related to the topic
                                            $sql_subtopics = "SELECT * FROM upload_subtopic WHERE topicID = '{$topicID}'";
                                            $result_subtopics = mysqli_query($conn, $sql_subtopics);

                                            if (mysqli_num_rows($result_subtopics) > 0) {
                                                // Output data of each subtopic
                                    ?>
                                                <div class="accordion-item shadow-none">
                                                    <h2 class="accordion-header fw-bold" id="heading-<?php echo $topicID; ?>">
                                                        <button class="accordion-button collapsed fw-bold fs-4 bg-dark text-light mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $topicID; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $topicID; ?>">
                                                            <?php echo $topic_row['course_name']; ?>
                                                        </button>
                                                    </h2>
                                                    <div id="collapse-<?php echo $topicID; ?>" class="accordion-collapse collapse show" aria-labelledby="heading-<?php echo $topicID; ?>" data-bs-parent="#subtopicsAccordion">
                                                        <div class="accordion-body p-0">
                                                            <?php
                                                            while ($subtopic_row = mysqli_fetch_assoc($result_subtopics)) {
                                                                $topic_name = $subtopic_row['topic_name'];
                                                                $topic_video_link = $subtopic_row['topic_video_link'];
                                                                $description = $subtopic_row['description'];

                                                                // Extract YouTube video ID and create embed link
                                                                $video_id = '';
                                                                if (preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $topic_video_link, $matches)) {
                                                                    $video_id = $matches[1];
                                                                }

                                                                $embed_link = "https://www.youtube.com/embed/$video_id";
                                                                if (empty($video_id)) {
                                                                    echo "<p>Error: Invalid YouTube URL for topic: $topic_name</p>";
                                                                } else {
                                                                    // Display the subtopic details
                                                            ?>
                                                                    <div class="course-list-1 my-0 row gap-2">
                                                                        <div class="col-md-9 m-auto p-0 d-flex justify-content-start align-items-center flex-wrap">
                                                                            <iframe width="140" height="70" src="<?php echo $embed_link; ?>" frameborder="0" allowfullscreen class="rounded me-3"></iframe>
                                                                            <div>
                                                                                <p class="m-0 text-dark fw-bolder"><?php echo $topic_name; ?></p>
                                                                                <p class="m-0 text-dark fw-medium"><?php echo $channel_name ?></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2 m-auto">
                                                                            <a href="#" class="bi bi-download rounded-circle text-danger bg-danger bg-opacity-10 p-2 fs-3"></a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Divider -->
                                                                    <hr>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                    <?php
                                            } else {
                                                echo "<p>No subtopics found for topic ID: $topicID</p>";
                                            }
                                        }
                                    } else {
                                        echo "<p>No topics found</p>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade p-2 m-2" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab" tabindex="0">
                                <div class="review d-flex mx-2">
                                    <div class="user-img me-3" style="height: 50px; width:50px;">
                                        <img src="Assests/review-1.png" alt="" class="rounded-circle img-fluid">
                                    </div>
                                    <div class="user-comment">
                                        <h6 class="fw-bold mb-0">Leonardo Da Vinci</h6>
                                        <span class="fw-medium">Today</span>
                                        <p class="text-secondary mb-0">Loved the course. I've learned some very subtle techniques, especially on leaves.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="review d-flex mx-2">
                                    <div class="user-img me-3" style="height: 50px; width:50px;">
                                        <img src="Assests/review-2.png" alt="" class="rounded-circle img-fluid">
                                    </div>
                                    <div class="user-comment">
                                        <h6 class="fw-bold mb-0">Titania S</h6>
                                        <span class="fw-medium">Today</span>
                                        <p class="text-secondary mb-0">I loved the course, it had been a long time since I had experimented with watercolors and now I will do it more often thanks to Kitani Studio</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="review d-flex mx-2">
                                    <div class="user-img me-3" style="height: 50px; width:50px;">
                                        <img src="Assests/review-3.png" alt="" class="rounded-circle img-fluid">
                                    </div>
                                    <div class="user-comment">
                                        <h6 class="fw-bold mb-0">Zhirkov</h6>
                                        <span class="fw-medium">Today</span>
                                        <p class="text-secondary mb-0">Yes. I just emphasize that the use of Photoshop, for non-users, becomes difficult to follow. What requires a course to master it. Safe and very didactic teacher.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="review d-flex mx-2">
                                    <div class="user-img me-3" style="height: 50px; width:50px;">
                                        <img src="Assests/review-3.png" alt="" class="rounded-circle img-fluid">
                                    </div>
                                    <div class="user-comment">
                                        <h6 class="fw-bold mb-0">Zhirkov</h6>
                                        <span class="fw-medium">Today</span>
                                        <p class="text-secondary mb-0">Yes. I just emphasize that the use of Photoshop, for non-users, becomes difficult to follow. What requires a course to master it. Safe and very didactic teacher.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 about-promo d-flex justify-content-center align-items-start">
                        <a href="unpaid-webinar.html">
                            <img src="Assests/promo.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
    <?php }
    } ?>


    <!-- join us section -->
    <?php
    include 'join-us.php';
    ?>

    <!-- footer -->
    <?php
    include 'footer.php';
    ?>


    <!-- js external link -->
    <script src="Script/main.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all video link elements
            var videoLinks = document.querySelectorAll('.video-link');
            // Get the main video iframe
            var mainVideo = document.getElementById('main-video');

            // Add click event listener to each video link
            videoLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent default anchor click behavior
                    // Get the video link from the data attribute
                    var videoLink = this.getAttribute('data-video-link');
                    // Update the src attribute of the main video iframe
                    mainVideo.src = videoLink;
                });
            });
        });
    </script>

    <!-- js bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>