<?php
/**
 * Main Index Page for GolfDraft Website
 * Uses PHP fragmentation for better maintainability
 */

// Include configuration
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_config['title']); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_config['description']); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_config['keywords']); ?>">
    
    <!-- Preconnect to improve font loading performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="styles.css"> <!-- Legacy styles for content sections -->
    <link rel="stylesheet" href="<?php echo CSS_PATH; ?>main.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH; ?>header.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH; ?>footer.css">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_config['title']); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_config['description']); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "<?php echo SITE_NAME; ?>",
        "description": "<?php echo SITE_TAGLINE; ?>",
        "url": "<?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>",
        "telephone": "<?php echo COMPANY_PHONE; ?>",
        "email": "<?php echo COMPANY_EMAIL; ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?php echo COMPANY_ADDRESS; ?>"
        }
    }
    </script>
</head>
<body>
    <!-- Golf course background images for visual appeal -->
    <div class="golf-bg-left"></div>
    <div class="golf-bg-right"></div>
    
    <?php include 'includes/header.php'; ?>
    
    <main id="main-content" role="main">
        <!-- Hero Section -->
        <section class="hero" id="home">
            <div class="hero-background"></div>
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="container">
                    <div class="hero-text">
                        <h1>Premium Golf Course Design & Development</h1>
                        <p>Creating world-class golf experiences through innovative design, expert craftsmanship, and sustainable development practices.</p>
                        <div class="hero-buttons">
                            <a href="#services" class="btn btn-primary">Our Services</a>
                            <a href="#projects" class="btn btn-secondary">View Projects</a>
                        </div>
                    </div>
                    
                    <div class="hero-main">
                        <div class="services-overview">
                            <div class="service-column">
                                <div class="service-icon">
                                    <i class="fas fa-drafting-compass"></i>
                                </div>
                                <h3>Course Design</h3>
                                <p>Custom golf course architecture that maximizes natural terrain and creates memorable experiences.</p>
                                <ul class="service-list">
                                    <li>18-Hole Championship Courses</li>
                                    <li>Executive & Par-3 Layouts</li>
                                    <li>Practice Facility Design</li>
                                    <li>3D Visualization & Modeling</li>
                                </ul>
                            </div>
                            
                            <div class="service-column">
                                <div class="service-icon">
                                    <i class="fas fa-hammer"></i>
                                </div>
                                <h3>Construction</h3>
                                <p>Expert project management and construction services ensuring quality and timely delivery.</p>
                                <ul class="service-list">
                                    <li>Site Preparation & Grading</li>
                                    <li>Irrigation System Installation</li>
                                    <li>Green & Tee Construction</li>
                                    <li>Drainage Solutions</li>
                                </ul>
                            </div>
                            
                            <div class="service-column">
                                <div class="service-icon">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                <h3>Renovation</h3>
                                <p>Modernize and enhance existing courses with strategic improvements and updates.</p>
                                <ul class="service-list">
                                    <li>Green Reconstruction</li>
                                    <li>Bunker Renovation</li>
                                    <li>Course Modernization</li>
                                    <li>Environmental Restoration</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="hero-showcase">
                            <div class="showcase-content">
                                <h3>Recent Projects</h3>
                                <div class="client-list">
                                    <div class="client-item">Pebble Beach Golf Links</div>
                                    <div class="client-item">Augusta National Golf Club</div>
                                    <div class="client-item">St. Andrews Links Trust</div>
                                    <div class="client-item">Torrey Pines Golf Course</div>
                                    <div class="client-item">Bethpage Black Course</div>
                                    <div class="client-item">Whistling Straits</div>
                                    <div class="client-item">Kiawah Island Golf Resort</div>
                                    <div class="client-item">Bandon Dunes Golf Resort</div>
                                    <div class="client-item">Pinehurst Resort</div>
                                    <div class="client-item">Oakmont Country Club</div>
                                    <div class="client-item">Winged Foot Golf Club</div>
                                    <div class="client-item">Scanning Bay Hill Club and Lodge</div>
                                </div>
                            </div>
                            
                            <div class="course-map">
                                <div class="map-placeholder">
                                    <div class="map-content">
                                        <div class="map-lines">
                                            <svg viewBox="0 0 300 200" class="course-outline">
                                                <path d="M50 100 Q100 50 150 100 Q200 150 250 100" stroke="#2d5f4a" stroke-width="3" fill="none"/>
                                                <path d="M40 120 Q90 80 140 120 Q190 160 240 120" stroke="#4a7c59" stroke-width="2" fill="none"/>
                                                <circle cx="80" cy="90" r="8" fill="#d4af37"/>
                                                <circle cx="160" cy="110" r="6" fill="#228B22"/>
                                                <circle cx="220" cy="95" r="10" fill="#1a4f38"/>
                                            </svg>
                                        </div>
                                        <p>Course Layout Mapping</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="about-section" id="about">
            <div class="container">
                <div class="about-content">
                    <div class="about-text">
                        <span class="section-label">ABOUT GOLFDRAFT</span>
                        <h2>Excellence in Golf Course Design & Development</h2>
                        <p>With over two decades of experience in golf course architecture and development, GolfDraft has established itself as a leader in creating exceptional golfing destinations. Our team combines traditional craftsmanship with innovative design principles to deliver courses that challenge players while respecting the natural environment.</p>
                        
                        <div class="features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Award-Winning Designs</h3>
                                    <p>Recognized globally for innovative and sustainable golf course architecture</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Eco-Friendly Approach</h3>
                                    <p>Sustainable design practices that protect and enhance natural ecosystems</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Expert Team</h3>
                                    <p>Skilled architects, engineers, and course superintendents</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Global Experience</h3>
                                    <p>Projects completed across 25+ countries worldwide</p>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#contact" class="btn btn-primary">Start Your Project</a>
                    </div>
                    
                    <div class="about-image">
                        <div class="golf-image-placeholder">
                            <div class="image-content">
                                <i class="fas fa-golf-ball"></i>
                                <span>Professional Golf Course Design</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section" id="services">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">OUR SERVICES</span>
                    <h2>Comprehensive Golf Course Solutions</h2>
                    <p>From initial concept to final implementation, we provide end-to-end golf course development services</p>
                </div>
                
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-image">
                            <div class="service-placeholder">
                                <i class="fas fa-drafting-compass"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h3>Course Design & Architecture</h3>
                            <p>Custom golf course design that maximizes natural terrain features while creating challenging and memorable playing experiences for golfers of all skill levels.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Site Analysis & Planning</li>
                                <li><i class="fas fa-check"></i> 3D Course Visualization</li>
                                <li><i class="fas fa-check"></i> Environmental Integration</li>
                            </ul>
                            <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-image">
                            <div class="service-placeholder">
                                <i class="fas fa-hammer"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h3>Course Construction</h3>
                            <p>Expert construction management ensuring your golf course is built to the highest standards with attention to detail and quality craftsmanship throughout.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Project Management</li>
                                <li><i class="fas fa-check"></i> Quality Control</li>
                                <li><i class="fas fa-check"></i> Timeline Adherence</li>
                            </ul>
                            <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-image">
                            <div class="service-placeholder">
                                <i class="fas fa-seedling"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h3>Course Renovation</h3>
                            <p>Breathe new life into existing courses with our renovation services, updating layouts, improving drainage, and enhancing overall playability and aesthetics.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Course Assessment</li>
                                <li><i class="fas fa-check"></i> Modernization Plans</li>
                                <li><i class="fas fa-check"></i> Phased Implementation</li>
                            </ul>
                            <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-image">
                            <div class="service-placeholder">
                                <i class="fas fa-tint"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h3>Irrigation Systems</h3>
                            <p>State-of-the-art irrigation design and installation ensuring optimal water management for healthy turf and environmental sustainability.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Water Efficiency</li>
                                <li><i class="fas fa-check"></i> Smart Controllers</li>
                                <li><i class="fas fa-check"></i> Maintenance Support</li>
                            </ul>
                            <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-image">
                            <div class="service-placeholder">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h3>Consulting Services</h3>
                            <p>Strategic consulting for golf course operations, from feasibility studies to ongoing management advice for optimal performance and profitability.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Feasibility Studies</li>
                                <li><i class="fas fa-check"></i> Market Analysis</li>
                                <li><i class="fas fa-check"></i> Operations Optimization</li>
                            </ul>
                            <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-image">
                            <div class="service-placeholder">
                                <i class="fas fa-tools"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h3>Maintenance Planning</h3>
                            <p>Comprehensive maintenance programs designed to keep your golf course in pristine condition year-round while managing operational costs effectively.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Seasonal Planning</li>
                                <li><i class="fas fa-check"></i> Equipment Recommendations</li>
                                <li><i class="fas fa-check"></i> Staff Training</li>
                            </ul>
                            <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats-section">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="fas fa-golf-ball"></i>
                        </div>
                        <div class="stat-content">
                            <div class="stat-number">150+</div>
                            <div class="stat-label">Courses Designed</div>
                        </div>
                    </div>
                    
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="stat-content">
                            <div class="stat-number">25+</div>
                            <div class="stat-label">Awards Won</div>
                        </div>
                    </div>
                    
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="stat-content">
                            <div class="stat-number">30+</div>
                            <div class="stat-label">Countries</div>
                        </div>
                    </div>
                    
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="fas fa-calendar"></i>
                        </div>
                        <div class="stat-content">
                            <div class="stat-number">20+</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section class="projects-section" id="projects">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">FEATURED PROJECTS</span>
                    <h2>Our Latest Golf Course Developments</h2>
                    <p>Explore our recent projects showcasing innovative design and exceptional craftsmanship</p>
                </div>
                
                <div class="projects-grid">
                    <div class="project-card">
                        <div class="project-image">
                            <div class="project-placeholder">
                                <div class="project-overlay">
                                    <h3>Emerald Hills Championship</h3>
                                    <p>18-Hole Championship Course</p>
                                    <span class="project-location">California, USA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="project-card">
                        <div class="project-image">
                            <div class="project-placeholder">
                                <div class="project-overlay">
                                    <h3>Royal Oak Country Club</h3>
                                    <p>Course Renovation & Modernization</p>
                                    <span class="project-location">Texas, USA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="project-card">
                        <div class="project-image">
                            <div class="project-placeholder">
                                <div class="project-overlay">
                                    <h3>Sunset Ridge Resort</h3>
                                    <p>Resort Golf Course Design</p>
                                    <span class="project-location">Arizona, USA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="projects-cta">
                    <a href="#contact" class="btn btn-primary">View All Projects</a>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section" id="contact">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">GET IN TOUCH</span>
                    <h2>Ready to Start Your Golf Course Project?</h2>
                    <p>Contact our team of experts to discuss your vision and explore how we can bring it to life</p>
                </div>
                
                <div class="contact-content">
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Visit Our Office</h3>
                                <p>123 Golf Design Avenue<br>Suite 456<br>Beverly Hills, CA 90210</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Call Us</h3>
                                <p>Main: +1 (555) 123-4567<br>Emergency: +1 (555) 987-6543</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Email Us</h3>
                                <p>info@golfdraft.com<br>projects@golfdraft.com</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Business Hours</h3>
                                <p>Monday - Friday: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 4:00 PM</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-form">
                        <form>
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="text" id="firstName" name="firstName" required>
                                    <label for="firstName">First Name</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="lastName" name="lastName" required>
                                    <label for="lastName">Last Name</label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <input type="email" id="email" name="email" required>
                                <label for="email">Email Address</label>
                            </div>
                            
                            <div class="form-group">
                                <input type="tel" id="phone" name="phone">
                                <label for="phone">Phone Number</label>
                            </div>
                            
                            <div class="form-group">
                                <select id="service" name="service" required>
                                    <option value="">Select a Service</option>
                                    <option value="design">Course Design</option>
                                    <option value="construction">Construction</option>
                                    <option value="renovation">Renovation</option>
                                    <option value="irrigation">Irrigation</option>
                                    <option value="consulting">Consulting</option>
                                    <option value="maintenance">Maintenance</option>
                                </select>
                                <label for="service">Service Interest</label>
                            </div>
                            
                            <div class="form-group">
                                <textarea id="message" name="message" rows="5" required></textarea>
                                <label for="message">Project Details</label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">
                                <span>Send Message</span>
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <!-- JavaScript -->
    <script src="js/header.js"></script>
    <script src="script.js"></script>
    
    <!-- Mobile menu functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileToggle = document.querySelector('.mobile-menu-toggle');
            const navMenu = document.querySelector('.nav-menu');
            
            if (mobileToggle && navMenu) {
                mobileToggle.addEventListener('click', function() {
                    const isExpanded = this.getAttribute('aria-expanded') === 'true';
                    this.setAttribute('aria-expanded', !isExpanded);
                    navMenu.classList.toggle('active');
                });
            }
        });
    </script>
</body>
</html>
