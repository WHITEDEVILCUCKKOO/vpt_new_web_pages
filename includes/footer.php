
 <!-- whatsapp link -->
    <section class="derWhatsappIcone" style="padding: 0;">
        <div class="iconwhat" onclick="sendWhatsApp()">
            <span class="notifas1">
                <img class="wa-icon" src="/../img/logo/whatsapp-custom.png" alt="">
            </span>
        </div>
    </section>

    <script>
        function sendWhatsApp() {
                            const message = `Hello Sir.\nI visited your website and interested in your Products.\n\nPlease share details. \n\nThank you!`;
                            const url = `https://wa.me/918595734416?text=${encodeURIComponent(message)}`;
                            window.open(url, '_blank');
                        }
    </script>

    <style>
     /* Container */
.derWhatsappIcone {
    position: fixed;
    right: 20px;
    bottom: 20px;
    z-index: 999;
}

/* Main Button */
.iconwhat {
    width: 70px;
    height: 70px;
    background: transparent;
    /* background: linear-gradient(135deg, #25D366, #128C7E); */
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;

    /* Entrance animation */
    animation: slideInRight 1s ease forwards,
               floating 3s ease-in-out infinite 1s;

    /* box-shadow: 0 10px 25px rgba(0,0,0,0.25); */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Hover effect */
.iconwhat:hover {
    transform: scale(1.12) rotate(8deg);
    /* box-shadow: 0 15px 35px rgba(0,0,0,0.35); */
}

/* WhatsApp icon */
.wa-icon {
    width: 60px;
    height: 60px;
    animation: pulse 2s infinite;
}

/* Notification dot */
.notifas1::after {
    content: '';
    position: absolute;
    top: 5px;
    right: 5px;
    width: 14px;
    height: 14px;
    background: red;
    border-radius: 50%;
    border: 2px solid white;
    animation: blink 1s infinite;
}



/* Slide from right */
@keyframes slideInRight {
    from {
        transform: translateX(120px);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

/* Floating effect */
@keyframes floating {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-8px);
    }
    100% {
        transform: translateY(0px);
    }
}

/* Pulse effect */
@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.12);
    }
    100% {
        transform: scale(1);
    }
}

/* Notification blinking */
@keyframes blink {
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: 0.3;
    }
}

.knadn{
        text-align: left !important;
}

    </style>


    
    <!-- Footer -->
    <footer class="footer-section" id="footer">
        <div class="section">
            <div class="container">
                <div class="footer-content pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 mb-50">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <img style="width: 80%;" src="/../img/logo/VPT-For-Blue.png" alt="Vicky Power Tools Logo">
                                </div>
                                <div class="footer-text">
                                    <p class="headparagraph">
                                        We are manufacturer and exporter of Armatures, Field Coils, Power Tools, Electric Tools in capital of India, New Delhi, under the Brand name PowerSpeed. <br />
                                        <a style="color: #fff;" href="/../about.php"> Read More...</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget" style="margin-right: 15px;">
                                <div class="footer-widget-heading">
                                    <h3 class="knadn">OFFICIAL INFO</h3>
                                </div>
                                <div class="single-cta" style="    display: flex;
    flex-direction: column;
    align-items: flex-start;">
                                    <div class="cta-text" style="    text-align: left;">
                                        <span style="text-align: left;"> <i class="fa fa-map-marker"></i> 71/2-A, Rama Road Industrial Area, Najafgarh Road, New Delhi 110015 India</span>
                                    </div>
                                    <div class="cta-text">
                                        <span><i class="fa fa-phone"></i> +91-011-45042377</span>
                                    </div>
                                    <div class="cta-text">
                                        <span><i class="fa fa-phone" aria-hidden="true"></i> +91-011-45052477</span>
                                    </div>
                                    <div class="cta-text">
                                        <span> <i class="fa fa-envelope-open"></i> vickypowertools@yahoo.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget footer-text-2" style="margin-right: 15px;">
                                <div class="footer-widget-heading">
                                    <h3 class="knadn">NEWSLETTER</h3>
                                </div>
                                <p>Subscribe Our Newsletter To Get Our Latest Update & News</p>
                                <div class="content">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="email" class="form-control" name="email" placeholder="Mail ID" required />
                                            <span class="input-group-btn">
                                                <button name="submit" class="btn" type="submit" style="    padding: 0px 11px;
    border-top-right-radius: 11px;
    border-bottom-right-radius: 11px;">Subscribe Now</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3 class="knadn">PRODUCTS</h3>
                                </div>
                                <p><a style="color: #fff; font-size: 15px;" href="armartures.php"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Armature</a></p>
                                <p><a style="color: #fff; font-size: 15px;" href="fieldcoil.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Field Coil</a></p>
                                <p><a style="color: #fff; font-size: 15px;" href="powertools.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Power Tools</a></p>
                                <p><a style="color: #fff; font-size: 15px;" href="abrasives.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Abrasives</a></p>
                                <p><a style="color: #fff; font-size: 15px;" href="construction-tool.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Construction Tool</a></p>
                                <p><a style="color: #fff; font-size: 15px;" href="spm.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Special Purpose Motors</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <hr />
                <div class="row">
                    <div class="col-md-12 col-md-offset-2 text-center m-auto">
                        <!-- footer social -->
                        <div class="footer-copyright">
                            <ul class="footer-social">
                                <li>
                                    <a href="https://www.facebook.com/vickypowertools"><img class="img-100" src="/../img/img-facebook.png" alt="Facebook"></a>
                                </li>

                                <li>
                                    <a href="https://youtube.com/channel/UCu2el_SlqEkljEHcaAeYXgQ"><img class="img-100" src="/../img/img-youtube.png" alt="YouTube"></a>
                                </li>

                                <li>
                                    <a href="https://twitter.com/VickyPowerTools"><img class="img-100" src="/../img/img-twitter.png" alt="Twitter"></a>
                                </li>

                                <li>
                                    <a href="https://instagram.com/vickypowertools"><img class="img-100" src="/../img/img-instagram.png" alt="Instagram"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /footer social -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center m-auto" style="padding-bottom: 23px;">
                        <!-- footer copyright -->
                        <div class="footer-copyright">
                            Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            Vicky Power Tools. All rights reserved.
                        </div>
                        <!-- /footer copyright -->
                    </div>
                </div>
            </div>
        </footer>

    <!-- JavaScript Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="/../js/script.js"></script>
    
    <script>
        // Initialize carousel
        $(document).ready(function(){
            // Initialize main carousel
            $('#mainCarousel').carousel({
                interval: 3000
            });
            
            // Initialize Owl Carousel
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobileMenuButton');
            const mobileMenu = document.getElementById('mobileMenu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', () => {
                    mobileMenuButton.classList.toggle('active');
                    mobileMenu.classList.toggle('active');
                });
            }
            
            // Mobile dropdown toggle
            const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
            
            mobileDropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', () => {
                    const dropdownContent = toggle.nextElementSibling;
                    const icon = toggle.querySelector('i');
                    
                    // Close other dropdowns
                    document.querySelectorAll('.mobile-dropdown-content').forEach(content => {
                        if (content !== dropdownContent) {
                            content.classList.remove('active');
                            const otherIcon = content.previousElementSibling.querySelector('i');
                            if (otherIcon) {
                                otherIcon.style.transform = 'rotate(0deg)';
                            }
                        }
                    });
                    
                    // Toggle current dropdown
                    dropdownContent.classList.toggle('active');
                    
                    // Rotate icon
                    if (icon) {
                        if (dropdownContent.classList.contains('active')) {
                            icon.style.transform = 'rotate(180deg)';
                        } else {
                            icon.style.transform = 'rotate(0deg)';
                        }
                    }
                });
            });
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', (event) => {
                if (mobileMenu && mobileMenu.classList.contains('active')) {
                    if (!event.target.closest('.mobile-menu') && 
                        !event.target.closest('.mobile-menu-button')) {
                        mobileMenuButton.classList.remove('active');
                        mobileMenu.classList.remove('active');
                        
                        // Close all dropdowns
                        document.querySelectorAll('.mobile-dropdown-content').forEach(content => {
                            content.classList.remove('active');
                            const icon = content.previousElementSibling.querySelector('i');
                            if (icon) {
                                icon.style.transform = 'rotate(0deg)';
                            }
                        });
                    }
                }
            });
            
            // Close mobile menu when clicking on a link
            document.querySelectorAll('.mobile-menu a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenuButton.classList.remove('active');
                    mobileMenu.classList.remove('active');
                    
                    // Close all dropdowns
                    document.querySelectorAll('.mobile-dropdown-content').forEach(content => {
                        content.classList.remove('active');
                        const icon = content.previousElementSibling.querySelector('i');
                        if (icon) {
                            icon.style.transform = 'rotate(0deg)';
                        }
                    });
                });
            });
            
            // Add smooth scrolling for anchor links
            $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
                    && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top - 80
                        }, 1000);
                        return false;
                    }
                }
            });
            
            // Handle window resize
            $(window).resize(function() {
                // Close mobile menu on desktop
                if ($(window).width() > 1024) {
                    if (mobileMenuButton && mobileMenuButton.classList.contains('active')) {
                        mobileMenuButton.classList.remove('active');
                        mobileMenu.classList.remove('active');
                        
                        // Close all dropdowns
                        document.querySelectorAll('.mobile-dropdown-content').forEach(content => {
                            content.classList.remove('active');
                            const icon = content.previousElementSibling.querySelector('i');
                            if (icon) {
                                icon.style.transform = 'rotate(0deg)';
                            }
                        });
                    }
                }
            });
        });
    </script>


</body>
</html>