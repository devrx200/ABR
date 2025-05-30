
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link " href="index.php">Home</a>
                        <a class="btn btn-link" href="about">About-Us</a>
                        <a class="btn btn-link" href="services.php">Services</a>
                        <a class="btn btn-link" href="menu.php">Menu</a>
                        <a class="btn btn-link" href="booking.php">Booking</a>
                        <a class="btn btn-link" href="contact.php">Contact Us</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><span class="fw-bold text-white"><?=$website_address?></span></p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a class="fw-bold text-white" href="tel:<?=$website_mobile?>"><?=$website_mobile?></a></p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i><a class="fw-bold text-white" href="mailto:<?=$website_email?>"><?=$website_email?></a></p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="<?=$twitter_link?>"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="<?=$facebook_link?>"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="<?=$youtube_link?>"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="<?=$instagram_link?>"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Let me know if you have any other requests!.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; All Right Reserved By. <a class="border-bottom" href="<?=$domain_url?>"><?=$website_name?></a>                           
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <b>Developed By. <a class="border-bottom" href="https://www.cbktechnologies.com/" target="_blank">CBK-Technologies</a></b>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

       <!-- Sweet alerts Msg -->
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>


<!-- My JS -->
<script>

function validatePhoneNumber(input) {
    const pattern = /^[6789]\d{9}$/;
    input.classList.toggle('is-invalid', !pattern.test(input.value));
}


</script>

</body>

</html>