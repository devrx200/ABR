     <?php
        $tblname = "inbox";
        $tblkey = "id";
        $page_name = basename($_SERVER['PHP_SELF']);

        // insert
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            $name = $_POST['name'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            // insert query
            $insert_query = "INSERT INTO $tblname (name, mobile, email, subject, message) VALUEs ('$name', '$mobile', '$email', '$subject', '$message')";

            if (mysqli_query($conn, $insert_query)) {
                echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Success!',
                text: 'Message Send Successfully.',
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
                // $msg = "<div class='msg-container'><b class='alert alert-success msg'>Contact Info Updated Successfully</b></div>";
            } else {
                // $msg = "<div class='msg-container'><b class='alert alert-danger msg'>Update Failed !..</b></div>";
                echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Oops!',
                text: 'Message Feiled....',
                icon: 'error',
                confirmButtonText: 'Okay',
                timer: 3000, // 3000 milliseconds = 3 seconds
                timerProgressBar: true,
                backdrop: true,
                allowOutsideClick: false,
                customClass: { confirmButton: 'custom-confirm-button' },
                willClose: () => {
                    // Redirect to a specific URL after the alert is closed
                   window.location.href = 'index.php';
                }
            });
        });
            </script>";
            }
        }
        ?>


     <!-- Contact Start -->
     <div class="container-xxl py-5">
         <div class="container">
             <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                 <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
                 <h1 class="mb-5">Contact For Any Query</h1>
             </div>
             <div class="row g-4">
                 <div class="col-12">
                     <div class="row gy-4 text-center ">
                         <div class="col-md-4">
                             <h5 class="section-title ff-secondary fw-normal text-primary">Address</h5>
                             <p><i class="fa fa-map text-primary me-2"></i><?= $website_address ?></p>
                         </div>
                         <div class="col-md-4">
                             <h5 class="section-title ff-secondary fw-normal  text-primary">Mobile</h5>
                             <p><i class="fa fa-phone text-primary me-2"></i><?= $website_mobile ?></p>
                         </div>
                         <div class="col-md-4">
                             <h5 class="section-title ff-secondary fw-normal  text-primary">Email</h5>
                             <p><i class="fa fa-envelope-open text-primary me-2"></i><?= $website_email ?></p>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                     <iframe class="position-relative rounded w-100 h-100"
                         src="<?= $map_url ?>"
                         frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                         tabindex="0"></iframe>
                 </div>
                 <div class="col-md-6">
                     <div class="wow fadeInUp" data-wow-delay="0.2s">
                         <form  method="post">
                             <div class="row g-3">
                                 <div class="col-md-6">
                                     <div class="form-floating">
                                         <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                         <label for="name">Your Name</label>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-floating">
                                         <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile Number" required>
                                         <label for="mobile">Your Mobile Number</label>
                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <div class="form-floating">
                                         <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                         <label for="email">Your Email</label>
                                     </div>
                                 </div>
                                 <div class="col-12">
                                     <div class="form-floating">
                                         <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                         <label for="subject">Subject</label>
                                     </div>
                                 </div>
                                 <div class="col-12">
                                     <div class="form-floating">
                                         <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 150px" required></textarea>
                                         <label for="message">Message</label>
                                     </div>
                                 </div>
                                 <div class="col-12">
                                     <button class="btn btn-primary w-100 py-3" id="submit" name="submit" type="submit">Send Message</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Contact End -->