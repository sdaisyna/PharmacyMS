<?php include 'header.php'; ?>
<?php include 'nav.php';  ?>

<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Contact Us</h1>
                <a href="index.php">Home</a> <span>|</span> <a href="contact.php">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->




    <!-- Contact Form Starts -->
    <section class="contact-form section-padding3" style="margin-top:40px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="info-text">
                            <h3>Maharajgunj, Nepal</h3>
                            <p>16-Chandol, Kathmandu</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-text">
                            <h3>00 (01) 4385316  </h3>
                            <h3>00 (01) 4385317  </h3>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="info-text">
                            <h3>medinocare@gmail.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form action="#">
                        <div class="left">
                            <input type="text" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required>
                            <input type="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required>
                            <input type="text" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" required>
                        </div>
                        <div class="right">
                            <textarea name="message" cols="20" rows="7"  placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required></textarea>
                        </div>
                        <button type="submit" class="template-btn">send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->

    <?php include 'footer.php';  ?>




</body>
</html>
