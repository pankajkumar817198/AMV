<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransLogix - Fast & Reliable Logistics Solutions</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Swiper CSS for Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- ==================== TOP NAVBAR ==================== -->
    <div class="top-navbar">
        <div class="container">
            <div class="top-navbar-content">
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="contact-info">
                    <span><i class="fa-solid fa-phone"></i></i> +1 234 567 8900</span>
                    <span><i class="fas fa-envelope"></i> info@translogix.com</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== MAIN NAVBAR (CENTERED) ==================== -->
    <nav class="main-navbar">
        <div class="container">
            <div class="nav-container">
                <a href="#" class="logo">Trans<span>Logix</span></a>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#fumigation">Fumigation</a></li>
                    <li><a href="#freight">Freight Forwarder</a></li>
                    <li><a href="#transporter">Transporter</a></li>
                    <li><a href="#trader">Trader</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- ==================== HERO SECTION WITH IMAGE SLIDER ==================== -->
    <section id="home" class="hero">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="slide-bg" style="background-image: url('images/ima1.jfif');"></div>
                    <div class="hero-content">
                        <h1 data-aos="fade-up">Delivering Beyond Distance</h1>
                        <p data-aos="fade-up" data-aos-delay="100">End-to-end logistics solutions with real-time tracking, fast delivery, and global coverage you can trust.</p>
                        <div data-aos="fade-up" data-aos-delay="200">
                            <a href="#contact" class="btn btn-primary">Get Quote</a>
                            <a href="#services" class="btn btn-outline">Our Services</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="slide-bg" style="background-image: url('images/ima2.jfif');"></div>
                    <div class="hero-content">
                        <h1 data-aos="fade-up">Fast & Secure Delivery</h1>
                        <p data-aos="fade-up" data-aos-delay="100">Your trusted partner for logistics and transportation solutions worldwide.</p>
                        <div data-aos="fade-up" data-aos-delay="200">
                            <a href="#contact" class="btn btn-primary">Get Quote</a>
                            <a href="#services" class="btn btn-outline">Our Services</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="slide-bg" style="background-image: url('images/ima3.jfif');"></div>
                    <div class="hero-content">
                        <h1 data-aos="fade-up">Global Logistics Network</h1>
                        <p data-aos="fade-up" data-aos-delay="100">Connecting businesses worldwide with reliable and efficient cargo solutions.</p>
                        <div data-aos="fade-up" data-aos-delay="200">
                            <a href="#contact" class="btn btn-primary">Get Quote</a>
                            <a href="#services" class="btn btn-outline">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- ==================== ABOUT SECTION ==================== -->
    <section id="about">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>About Us</h2>
                <p>Driving Logistics Forward with Speed & Reliability</p>
            </div>
            <div class="about-grid">
                <div class="about-content" data-aos="fade-right">
                    <h3>Your Trusted Logistics Partner</h3>
                    <p>TransLogix is a modern logistics company delivering fast, secure, and efficient cargo solutions across regions. With advanced tracking technology and a dedicated operations team, we ensure every shipment arrives on time and in perfect condition.</p>
                    <p>We specialize in comprehensive logistics solutions including fumigation, freight forwarding, transportation, and trading services.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
                <div class="about-image" data-aos="fade-left">
                    <img src="images/image1.jpg" alt="About Us">
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== SERVICES SECTION ==================== -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Our Services</h2>
                <p>Reliable Logistics Solutions for Every Need</p>
            </div>
            <div class="services-grid">
                <div class="service-card" data-aos="fade-up" data-aos-delay="0">
                    <i class="fas fa-truck"></i>
                    <h3>Land Freight</h3>
                    <p>Fast and secure ground transportation for all cargo types across the country.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-ship"></i>
                    <h3>Sea Freight</h3>
                    <p>Cost-effective ocean freight solutions for international shipping.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-plane"></i>
                    <h3>Air Freight</h3>
                    <p>Express air cargo delivery for time-sensitive shipments worldwide.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-warehouse"></i>
                    <h3>Warehousing</h3>
                    <p>Secure storage facilities with inventory management systems.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                    <i class="fas fa-bolt"></i>
                    <h3>Express Delivery</h3>
                    <p>Same-day and next-day delivery for urgent shipments.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                    <i class="fas fa-chart-line"></i>
                    <h3>Logistics Management</h3>
                    <p>End-to-end supply chain solutions and optimization.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FUMIGATION SECTION ==================== -->
    <section id="fumigation" class="fumigation-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Fumigation Services</h2>
                <p>Professional Pest Control & Fumigation for Cargo</p>
            </div>
            <div class="fumigation-grid">
                <div class="fumigation-content" data-aos="fade-right">
                    <h3>Certified Fumigation Solutions</h3>
                    <p>We provide professional fumigation services for containers, warehouses, and cargo shipments. Our certified team ensures complete pest elimination as per international standards.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Container Fumigation</li>
                        <li><i class="fas fa-check-circle"></i> Warehouse Fumigation</li>
                        <li><i class="fas fa-check-circle"></i> Wood Packaging Treatment</li>
                        <li><i class="fas fa-check-circle"></i> ISPM-15 Certification</li>
                        <li><i class="fas fa-check-circle"></i> Methyl Bromide Treatment</li>
                        <li><i class="fas fa-check-circle"></i> Heat Treatment</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary">Get Fumigation Quote</a>
                </div>
                <div class="fumigation-image" data-aos="fade-left">
                    <img src="images/image2.jpg" alt="Fumigation Services">
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FREIGHT FORWARDER SECTION ==================== -->
    <section id="freight" class="freight-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Freight Forwarder</h2>
                <p>End-to-End Freight Management Solutions</p>
            </div>
            <div class="freight-grid">
                <div class="freight-image" data-aos="fade-right">
                    <img src="images/image3.jpg" alt="Freight Forwarder">
                </div>
                <div class="freight-content" data-aos="fade-left">
                    <h3>Global Freight Forwarding</h3>
                    <p>As a leading freight forwarder, we manage international shipments from origin to destination. We handle documentation, customs clearance, and transportation coordination.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Door-to-Door Delivery</li>
                        <li><i class="fas fa-check-circle"></i> Customs Clearance</li>
                        <li><i class="fas fa-check-circle"></i> Documentation Support</li>
                        <li><i class="fas fa-check-circle"></i> Cargo Insurance</li>
                        <li><i class="fas fa-check-circle"></i> Consolidation Services</li>
                        <li><i class="fas fa-check-circle"></i> Supply Chain Management</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary">Get Freight Quote</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== TRANSPORTER SECTION ==================== -->
    <section id="transporter" class="transporter-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Transporter</h2>
                <p>Reliable Transportation Services Nationwide</p>
            </div>
            <div class="transporter-grid">
                <div class="transporter-content" data-aos="fade-right">
                    <h3>Professional Transportation Network</h3>
                    <p>Our extensive fleet of vehicles ensures timely delivery of your cargo across the country. We offer specialized transport solutions for different types of goods.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Full Truck Load (FTL)</li>
                        <li><i class="fas fa-check-circle"></i> Less Than Truck Load (LTL)</li>
                        <li><i class="fas fa-check-circle"></i> Temperature Controlled Transport</li>
                        <li><i class="fas fa-check-circle"></i> Hazardous Material Transport</li>
                        <li><i class="fas fa-check-circle"></i> Over-Dimensional Cargo</li>
                        <li><i class="fas fa-check-circle"></i> Real-Time GPS Tracking</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary">Get Transport Quote</a>
                </div>
                <div class="transporter-image" data-aos="fade-left">
                    <img src="images/image1.jpg" alt="Transporter Services">
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== TRADER SECTION ==================== -->
    <section id="trader" class="trader-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Trader</h2>
                <p>Global Trading & Commodity Solutions</p>
            </div>
            <div class="trader-grid">
                <div class="trader-image" data-aos="fade-right">
                    <img src="images/image2.jpg" alt="Trading Services">
                </div>
                <div class="trader-content" data-aos="fade-left">
                    <h3>International Trading Services</h3>
                    <p>We facilitate global trade by connecting buyers and sellers worldwide. Our trading division handles procurement, sales, and logistics for various commodities.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Agricultural Products</li>
                        <li><i class="fas fa-check-circle"></i> Industrial Raw Materials</li>
                        <li><i class="fas fa-check-circle"></i> Consumer Goods</li>
                        <li><i class="fas fa-check-circle"></i> Import & Export Services</li>
                        <li><i class="fas fa-check-circle"></i> Supplier Sourcing</li>
                        <li><i class="fas fa-check-circle"></i> Quality Assurance</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary">Get Trading Quote</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== HOW IT WORKS ==================== -->
    <section id="how-it-works">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>How It Works</h2>
                <p>Simple Shipping Process from Start to Delivery</p>
            </div>
            <div class="steps-grid">
                <div class="step" data-aos="zoom-in" data-aos-delay="0">
                    <div class="step-number">01</div>
                    <h3>Request a Quote</h3>
                    <p>Tell us your shipment details and get an instant price.</p>
                </div>
                <div class="step" data-aos="zoom-in" data-aos-delay="100">
                    <div class="step-number">02</div>
                    <h3>Confirm Booking</h3>
                    <p>Schedule pickup and confirm your shipment booking.</p>
                </div>
                <div class="step" data-aos="zoom-in" data-aos-delay="200">
                    <div class="step-number">03</div>
                    <h3>Track in Real Time</h3>
                    <p>Monitor your shipment status with live tracking.</p>
                </div>
                <div class="step" data-aos="zoom-in" data-aos-delay="300">
                    <div class="step-number">04</div>
                    <h3>Safe Delivery</h3>
                    <p>Receive your cargo safely at the destination.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== STATS SECTION ==================== -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item" data-aos="fade-up">
                    <h3><span class="counter" data-target="15280">0</span>+</h3>
                    <p>Shipments Delivered</p>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                    <h3><span class="counter" data-target="124">0</span>+</h3>
                    <p>Cities Covered</p>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                    <h3><span class="counter" data-target="99">0</span>%</h3>
                    <p>On-Time Delivery</p>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                    <h3><span class="counter" data-target="247">0</span>/7</h3>
                    <p>Customer Support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== PRICING SECTION ==================== -->
    <section id="pricing">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Pricing Plans</h2>
                <p>Flexible Shipping Plans for Every Business</p>
            </div>
            <div class="pricing-grid">
                <div class="pricing-card" data-aos="flip-left" data-aos-delay="0">
                    <h3>Basic Plan</h3>
                    <div class="price">$49</div>
                    <p>Perfect for small businesses</p>
                    <ul>
                        <li>Local Delivery Support</li>
                        <li>Standard Tracking</li>
                        <li>Basic Customer Support</li>
                        <li>Up to 100kg Cargo</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
                <div class="pricing-card" data-aos="flip-left" data-aos-delay="100">
                    <h3>Standard Plan</h3>
                    <div class="price">$99</div>
                    <p>Ideal for growing businesses</p>
                    <ul>
                        <li>Nationwide Delivery</li>
                        <li>Real-Time Tracking</li>
                        <li>Priority Support</li>
                        <li>Up to 500kg Cargo</li>
                        <li>Delivery Insurance</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
                <div class="pricing-card" data-aos="flip-left" data-aos-delay="200">
                    <h3>Premium Plan</h3>
                    <div class="price">$199</div>
                    <p>Best for large operations</p>
                    <ul>
                        <li>International Freight</li>
                        <li>Advanced Live Tracking</li>
                        <li>24/7 Dedicated Support</li>
                        <li>Unlimited Cargo</li>
                        <li>Full Cargo Insurance</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== TESTIMONIALS SLIDER ==================== -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>What Our Clients Say</h2>
                <p>Trusted by businesses worldwide</p>
            </div>
            <div class="swiper testimonials-slider" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <i class="fas fa-quote-left"></i>
                            <p>Excellent service! Our shipment arrived ahead of schedule and the tracking was very accurate.</p>
                            <h4>John Smith</h4>
                            <p>CEO, TechCorp</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <i class="fas fa-quote-left"></i>
                            <p>Professional team and seamless logistics. Highly recommend for international shipping needs.</p>
                            <h4>Sarah Johnson</h4>
                            <p>Operations Manager</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <i class="fas fa-quote-left"></i>
                            <p>Cost-effective solutions with great customer support. Will continue using their services.</p>
                            <h4>Michael Brown</h4>
                            <p>Logistics Director</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <i class="fas fa-quote-left"></i>
                            <p>Fast delivery and excellent tracking system. Best logistics partner we've worked with.</p>
                            <h4>Emily Davis</h4>
                            <p>Supply Chain Manager</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- ==================== FAQ SECTION ==================== -->
    <section id="faq">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p>Find quick answers to common questions</p>
            </div>
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    How can I track my shipment?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    You can track your shipment by entering your tracking number on our Tracking Page. Real-time updates will show your cargo status from pickup to final delivery.
                </div>
            </div>
            <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                <div class="faq-question">
                    What types of cargo do you transport?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    We provide Land Freight, Sea Freight, Air Freight, Express Delivery, and Warehousing solutions depending on your business needs.
                </div>
            </div>
            <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-question">
                    Do you offer international shipping?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Yes, we support international freight services including sea freight and air freight for global cargo transportation.
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CONTACT / QUOTE SECTION ==================== -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Request a Quote</h2>
                <p>Get a free shipping estimate for your cargo</p>
            </div>
            <div class="contact-form" data-aos="fade-up">
                <form id="quoteForm">
                    <div class="form-group">
                        <input type="text" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <select>
                            <option>Select Service</option>
                            <option>Fumigation</option>
                            <option>Freight Forwarder</option>
                            <option>Transporter</option>
                            <option>Trader</option>
                            <option>Land Freight</option>
                            <option>Sea Freight</option>
                            <option>Air Freight</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Weight (kg)">
                    </div>
                    <div class="form-group">
                        <textarea rows="4" placeholder="Delivery details..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Get Quote Now</button>
                </form>
            </div>
        </div>
    </section>

    <!-- ==================== FOOTER ==================== -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div data-aos="fade-up">
                    <a href="#" class="logo">Trans<span style="color: white;">Logix</span></a>
                    <p>Fast, secure, and reliable logistics solutions built for modern businesses.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#fumigation">Fumigation</a></li>
                        <li><a href="#freight">Freight Forwarder</a></li>
                        <li><a href="#transporter">Transporter</a></li>
                        <li><a href="#trader">Trader</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <h4>Contact Info</h4>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Logistics Street, NY 10001</p>
                    <p><i class="fa-solid fa-phone"></i> +1 234 567 8900</p>
                    <p><i class="fas fa-envelope"></i> info@translogix.com</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 TransLogix. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS Animation
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Initialize Hero Slider
        const heroSlider = new Swiper('.hero-slider', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            }
        });

        // Initialize Testimonials Slider
        const testimonialsSlider = new Swiper('.testimonials-slider', {
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });

        // Mobile Menu Toggle
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');
        
        if(menuToggle) {
            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
        }

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if(target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
                navLinks.classList.remove('active');
            });
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                faqItem.classList.toggle('active');
            });
        });

        // Counter Animation
        const counters = document.querySelectorAll('.counter');
        let animated = false;
        
        const animateCounters = () => {
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                let count = 0;
                const increment = Math.ceil(target / 80);
                
                const updateCounter = () => {
                    count += increment;
                    if(count >= target) {
                        counter.innerText = target;
                    } else {
                        counter.innerText = count;
                        requestAnimationFrame(updateCounter);
                    }
                };
                updateCounter();
            });
        };
        
        const statsSection = document.querySelector('.stats-section');
        
        const checkCounter = () => {
            if(statsSection) {
                const sectionPos = statsSection.getBoundingClientRect().top;
                const screenPos = window.innerHeight / 1.2;
                
                if(sectionPos < screenPos && !animated) {
                    animateCounters();
                    animated = true;
                }
            }
        };
        
        window.addEventListener('scroll', checkCounter);
        checkCounter();

        // Form submission
        const quoteForm = document.getElementById('quoteForm');
        if(quoteForm) {
            quoteForm.addEventListener('submit', (e) => {
                e.preventDefault();
                alert('Thank you! We will contact you shortly with your quote.');
                quoteForm.reset();
            });
        }

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const mainNavbar = document.querySelector('.main-navbar');
            if(window.scrollY > 100) {
                mainNavbar.classList.add('scrolled');
            } else {
                mainNavbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>