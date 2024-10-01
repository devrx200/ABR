<?php
        $tblname = "reservations";
        $tblkey = "id";
        $page_name = basename($_SERVER['PHP_SELF']);

// Process form data
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['book_now'])) {
   
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $datetime = $_POST["datetime"];
    $noOfPeople = $_POST["noOfPeople"];
    $message = $_POST["message"];

// Insert data into database 
$sql = "INSERT INTO $tblname (name, mobile, email, datetime, no_of_people, message) VALUES ('$name', '$mobile', '$email', '$datetime', '$noOfPeople', '$message')"; 
// echo $sql;die;
if ($conn->query($sql) === TRUE) {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: 'Table Reservations Successfully.',
                    icon: 'success',
                    confirmButtonText: 'Done',
                    timer: 3000,
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    willClose: () => {
                        window.location.href = 'index.php';
                    }
                });
            });
        </script>";
    } else {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Oops!',
                    text: 'Message Failed....',
                    icon: 'error',
                    confirmButtonText: 'Okay',
                    timer: 3000,
                    timerProgressBar: true,
                    backdrop: true,
                    allowOutsideClick: false,
                    customClass: { confirmButton: 'custom-confirm-button' },
                    willClose: () => {
                        window.location.href = 'index.php';
                    }
                });
            });
        </script>";
    }
}
?>

<!-- Reservation Start -->
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="video">
                <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                <h1 class="text-white mb-4">Book A Table Online</h1>
                <form id="reservation-form"  method="post">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required />
                                <label for="name">Your Name <span class="text-danger">*</span></label>
                                <div class="invalid-feedback">Please enter your name. </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="mobile" id="mobile" maxlength="10" name="mobile" pattern="^[6789]\d{9}$" title="Please enter a valid 10-digit Indian phone number starting with 6, 7, 8, or 9"
                                oninput="validatePhoneNumber(this)" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Your Mobile" required/>
                                <label for="mobile">Your Mobile <span class="text-danger">*</span></label>
                                <div class="invalid-feedback">Please enter a valid 10-digit mobile number starting with 6789.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
                                <label for="email">Your Email <span class="text-danger">*</span></label>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="datetime-local" class="form-control" name="datetime" id="datetime"  placeholder="Date & Time" required />
                                <label for="datetime">Date & Time <span class="text-danger">*</span></label>
                                <div class="invalid-feedback">Please select a date and time.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="noOfPeople" id="noOfPeople" value="1" min="1" required />
                                <label for="noOfPeople">No Of People <span class="text-danger">*</span></label>
                                <div class="invalid-feedback">Please enter the number of people.</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" name="message" id="message" style="height: 100px"></textarea>
                                <label for="message">Special Request <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" name="book_now" id="book_now" type="submit">Book Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reservation Start -->
