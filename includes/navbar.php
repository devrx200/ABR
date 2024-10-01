        <!-- Navbar Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <!-- <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1> -->
                    <img class="rounded bg-black" src="admin/dash/<?=$header_logo_location?>" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link  <?= ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>
                        <a href="about.php" class="nav-item nav-link <?= ($current_page == 'about.php') ? 'active' : ''; ?>">About-Us</a>
                        <a href="services.php" class="nav-item nav-link <?= ($current_page == 'services.php') ? 'active' : ''; ?>">Services</a>
                        <a href="menu.php" class="nav-item nav-link <?= ($current_page == 'menu.php') ? 'active' : ''; ?>">Menu</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.html" class="dropdown-item">Booking</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div> -->
                        <a href="contact.php" class="nav-item nav-link <?= ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact-Us</a>
                    </div>
                    <a href="booking.php" class="btn btn-outline-info py-2 px-4 <?= ($current_page == 'booking.php') ? 'btn-primary' : ''; ?>">Book A Table</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->