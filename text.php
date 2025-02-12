<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header-container {
            padding: 15px 0;
            background-color: #f8f9fa;
            /* Light background */
        }

        .header-row {
            display: flex;
            align-items: center;
            /* Align items to same height */
        }

        .header-item {
            display: flex;
            align-items: center;
            /* Align icon and text */
            gap: 10px;
            /* Space between icon and text */
        }

        .header_icons {
            width: 40px;
            /* Set icon size */
            height: auto;
        }

        .header-text {
            margin: 0;
            font-size: 14px;
        }

        .header-text strong {
            font-size: 16px;
        }

        /* Center Navbar */
        .navbar-nav {
            margin: auto;
        }

        /* Marquee */
        .marquee_content {
            background-color: #007bff;
            color: white;
            padding: 8px 0;
            font-size: 16px;
            font-weight: bold;
        }

        .marquee {
            white-space: nowrap;
        }
    </style>
</head>

<body>

    <!-- Marquee (Top Section) -->
    <section>
        <div class="marquee_content">
            <marquee behavior="scroll" direction="left" class="marquee">
                4700sq.ft &nbsp; | &nbsp;
                15 years of experience &nbsp; | &nbsp;
                7+ Doctor &nbsp; | &nbsp;
                High-end Equipment &nbsp; | &nbsp;
                EHS Available
            </marquee>
        </div>
    </section>

    <!-- Header Section (Logo & Contact Info) -->
    <section class="header-container">
        <div class="container">
            <div class="row header-row">
                <!-- Logo Section -->
                <div class="col-md-6 col-lg-3 d-flex align-items-center">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/images/brand/logo_navbar.png" alt="Logo" class="img-fluid" />
                    </a>
                </div>

                <!-- Contact Number -->
                <div class="col-md-6 col-lg-3 d-flex align-items-center">
                    <div class="header-item">
                        <img src="assets/imag" alt="Call Icon" class="header_icons">
                        <p class="header-text"><strong>Mobile No:</strong><br>7674824667, 9493782298</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-6 col-lg-3 d-flex align-items-center">
                    <div class="header-item">
                        <img src="assets/images/icon/email.png" alt="Email Icon" class="header_icons">
                        <p class="header-text"><strong>Email:</strong><br>leeladentalcare123@gmail.com</p>
                    </div>
                </div>

                <!-- Timing -->
                <div class="col-md-6 col-lg-3 d-flex align-items-center">
                    <div class="header-item">
                        <img src="assets/images/icon/time.png" alt="Time Icon" class="header_icons">
                        <p class="header-text"><strong>Working Hours:</strong><br>Mon-Sat: 10 AM - 8 PM | Sun: Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Navbar (Centered) -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light Navebar_content">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>

                        <!-- Services Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdown" role="button">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="services.php">Dental Treatment</a>
                                    <ul class="dropdown-menu submenu">
                                        <li><a class="dropdown-item" href="implants.php">Implants</a></li>
                                        <li><a class="dropdown-item" href="rootcanal.php">Root Canal</a></li>
                                        <li><a class="dropdown-item" href="tooth_aligners.php">Tooth Aligners</a></li>
                                        <li><a class="dropdown-item" href="bridges.php">Bridges</a></li>
                                        <li><a class="dropdown-item" href="gum_surgery.php">Gum Surgery</a></li>
                                        <li><a class="dropdown-item" href="maxillofacial_surgery.php">Maxillofacial Surgery</a></li>
                                        <li><a class="dropdown-item" href="lasers.php">Laser Treatment</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="cosmetic_services.php">Cosmetic Services</a>
                                    <ul class="dropdown-menu submenu">
                                        <li><a class="dropdown-item" href="teeth_whitening.php">Teeth Whitening</a></li>
                                        <li><a class="dropdown-item" href="veneers.php">Veneers</a></li>
                                        <li><a class="dropdown-item" href="composite_filler.php">Composite Filler</a></li>
                                        <li><a class="dropdown-item" href="teeth_jewellery.php">Teeth Jewellery</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- Equipment Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="equipment.php" id="equipmentDropdown" role="button">
                                Equipment
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="dental_ct_scan.php">Dental CT-Scan</a></li>
                                <li><a class="dropdown-item" href="ray.php">3D X-Ray</a></li>
                                <li><a class="dropdown-item" href="lasers.php">Laser</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="blogs.php">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>

                        <!-- Make Appointment Button -->
                        <li class="nav-item">
                            <a class="btn btn-primary nav-btn ms-lg-3" href="appointment.php">Make Appointment</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

</body>

</html>