<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Course Message</title>

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

            <div class="row">
                <!-- left -->
                <div class="col-12 col-lg-7 d-md-flex align-items-center justify-content-center bg-success bg-opacity-10 vh-lg-100">
                    <div class="p-3 p-lg-5">
                        <!-- Title -->
                        <div class="text-center">
                            <h2 class="fw-bold fs-1 text-success-emphasis">Connect and Inspire</h2>
                            <p class="mb-0 h6 w-bold fs-4 text-success-emphasis">Sending a Message</p>
                        </div>
                        <!-- SVG Image -->
                        <img src="Assests/messages.svg" class="mt-5 img-fluid" alt="">
                    </div>
                </div>

                <!-- Right -->
                <div class="col-12 col-lg-5 m-auto">
                    <div class="row my-5">
                        <div class="col-sm-10 col-xl-8 m-auto">
                            <!-- Title -->
                            <i class="bi bi-chat-left-text text-success fs-1"></i>
                            <h2>Send the Messages!</h2>
                            <p class="lead mb-4">Nice to see you! composes the message.</p>

                            <div class="container mt-5 border-0">
                                <form class="row text-start g-3" action="send_message.php" method="POST" onsubmit="setReceiverId()">
                                    <div class="form-group">
                                        <label for="messageTo" class="fw-bold mb-1 fs-5">To:</label>
                                        <select class="form-control" id="messageTo" name="messageTo" required>
                                            <option value="">-- Select Recipient --</option>
                                            <?php
                                            include 'config.php';
                                            // Fetch users from the database
                                            $sql = "SELECT * FROM user_registration";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<option value="' . $row["user_id"] . '">' . $row["user_name"] . '</option>';
                                                }
                                            }

                                            $conn->close();
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="messageSubject" class="fw-bold mb-1 fs-5">Subject:</label>
                                        <input type="text" class="form-control" id="messageSubject" name="subject" placeholder="Enter subject" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="messageBody" class="fw-bold mb-1 fs-5">Message:</label>
                                        <textarea class="form-control" id="messageBody" rows="5" name="message" placeholder="Enter message" required></textarea>
                                    </div>

                                    <div class="d-flex justify-content-center align-items-center bg-success text-light">
                                        <span><i class="bi bi-send text-light me-1"></i></span>
                                        <button type="submit" name="send_message" class="btn btn-lg fw-bold text-light my-0">Send Message</button>
                                    </div>
                                    <input type="hidden" name="receiver_id" id="receiver_id">
                                </form>
                            </div>

                            <script>
                                function setReceiverId() {
                                    const selectedRecipient = document.getElementById('messageTo').value;
                                    document.getElementById('receiver_id').value = selectedRecipient;
                                }
                            </script>

                        </div>
                    </div>
                </div>
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