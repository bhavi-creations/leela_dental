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
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
                        <form action="appointmentform.php" method="post" role="form" class="php-email-form"
                            data-aos-delay="100">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-form">
                                        <label>Your Name :</label>
                                        <input id="name" name="name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-form">
                                        <label>Phone :</label>
                                        <input type="text" name="number">
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="single-form">
                                        <label>Date :</label>
                                        <input type="date" name="date">
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="single-form">
                                        <label>Write a message :</label>
                                        <input type="text" name="message" id="message">
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
                                    D.NO: 2-18-9/1, opposite to old SP Office Road Near RMC Ground Madhavnagar,Kakinada-533003                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <i class="ri-mail-fill"></i>
                                    </div>
                                    <div class="info-text">
                                    <p>leeladentalcare123@gmail.com</p>
                                         
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <i class="ri-phone-fill"></i>
                                    </div>
                                    <div class="info-text">
                                    <p>+91-9493782298, &nbsp;7674824667  </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--  Contact Info End -->
                    <!--  Contact Map Start -->
                    
                    <!--  Contact Map End -->
                </div>
            </div>
        </div>
        <!--  Contact Wrapper End -->
    </div>
</div>


<section >
    <div class="container ">
        <div class="row">
            <div class="appointment_map" >
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d4135.043051429366!2d82.23027846937303!3d16.961447026145862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3a382814c71abf81%3A0xe2ceca2bc87008ab!2sD%2C%20No.%202-18-9%2F1%2C%20opposite%20to%20SP%20OFFICE%20ROAD%2C%20near%20RMC%20GROUND%2C%20Madhav%20Nagar%2C%20Dwaraka%20Nagar%2C%20Kakinada%2C%20Andhra%20Pradesh%20533001!3m2!1d16.9753224!2d82.24061119999999!5e0!3m2!1sen!2sin!4v1738581300683!5m2!1sen!2sin"></iframe>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>