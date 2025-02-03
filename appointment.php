<?php include 'header.php'; ?>








        <div class="section bg-cover page-banner-area d-flex align-items-center" style="background-image: url(assets/images/slides/appoitnment.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--  Page Banner Title Start -->
                        <div class="page-banner-title text-center">
                            <h2 class="title">Appointment</h2>
                            <!--  Page Banner Breadcrumb Start -->
                            <ul class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                            </ul>
                            <!--  Page Banner Breadcrumb End -->
                        </div>
                        <!--  Page Banner Title End -->
                    </div>
                </div>
            </div>
        </div>
        <!--  Page Banner Area End -->
        <div class="section contact-area section-padding">
    <div class="container">
        <!--  Contact Wrapper Start -->
        <div class="contact-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <!--  Contact Title Start -->
                        <div class="contact-title">
                            <h3 class="title">Book Your Appointment</h3>
                        </div>
                        <!--  Contact Tilte End -->
                        <!--  Contact Form Start -->
                        <form id="contact-form" action="assets/contact.php" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-form">
                                        <label>Your Name :</label>
                                        <input id="name" name="name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-form">
                                        <label>Email Address :</label>
                                        <input name="email" id="email" type="email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-form">
                                        <label>Subject :</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-form">
                                        <label>Number :</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-form">
                                        <label>Write a message :</label>
                                        <textarea name="message" id="message"></textarea>
                                    </div>
                                </div>
                                <p class="form-message mt-3 alert-danger"></p>
                                <div class="col-lg-12">
                                    <div class="single-form">
                                        <button class="btn" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--  Contact Form End -->
                    </div>
                </div>

               




                <div class="col-lg-4">
                    <!--  Contact Info Start -->
                    <div class="contact-info">
                        <ul>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <i class="ri-map-pin-fill"></i>
                                    </div>
                                    <div class="info-text">
                                        <p>S.P office opposite road, <br>near RMC ground kakinada</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <i class="ri-mail-fill"></i>
                                    </div>
                                    <div class="info-text">
                                        <p>leeladentalandwomenshealthcare@gmail.com</p>
                                         
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <i class="ri-phone-fill"></i>
                                    </div>
                                    <div class="info-text">
                                        <p>+91-91006 86678 </p>
                                        <p>+91-94937 82298</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--  Contact Info End -->
                    <!--  Contact Map Start -->
                    <div class="contact-map">
                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                    </div>
                    <!--  Contact Map End -->
                </div>
            </div>
        </div>
        <!--  Contact Wrapper End -->
    </div>
</div>
        <?php include 'footer.php'; ?>