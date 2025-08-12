<?php
/**
 * Footer Fragment for GolfDraft Website
 * Contains footer navigation and company information
 */

// Include configuration if not already included
if (!defined('SITE_NAME')) {
    require_once 'config.php';
}
?>

<footer class="footer" role="contentinfo">
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-section">
                <div class="footer-logo">
                    <div class="logo-circle">
                        <i class="fas fa-golf-ball"></i>
                    </div>
                    <div class="logo-text">
                        <h3><?php echo SITE_NAME; ?></h3>
                        <span><?php echo SITE_TAGLINE; ?></span>
                    </div>
                </div>
                <p class="footer-description">
                    Leading the industry in premium golf course design, renovation, and development services. 
                    Creating extraordinary golf experiences worldwide.
                </p>
            </div>
            
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-nav">
                    <?php foreach ($navigation_items as $item): ?>
                        <li>
                            <a href="<?php echo htmlspecialchars($item['url']); ?>">
                                <?php echo htmlspecialchars($item['title']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Services</h3>
                <ul class="footer-nav">
                    <li><a href="#golf-design">Golf Course Design</a></li>
                    <li><a href="#renovation">Renovation Services</a></li>
                    <li><a href="#consulting">Consulting</a></li>
                    <li><a href="#maintenance">Maintenance Programs</a></li>
                    <li><a href="#environmental">Environmental Assessment</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Company</h3>
                <ul class="footer-nav">
                    <li><a href="#team">Our Team</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#awards">Awards</a></li>
                    <li><a href="#careers">Careers</a></li>
                    <li><a href="#news">News</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Contact Info</h3>
                <div class="footer-contact">
                    <p>
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i> 
                        <?php echo COMPANY_ADDRESS; ?>
                    </p>
                    <p>
                        <i class="fas fa-phone" aria-hidden="true"></i> 
                        <a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', COMPANY_PHONE); ?>">
                            <?php echo COMPANY_PHONE; ?>
                        </a>
                    </p>
                    <p>
                        <i class="fas fa-envelope" aria-hidden="true"></i> 
                        <a href="mailto:<?php echo COMPANY_EMAIL; ?>">
                            <?php echo COMPANY_EMAIL; ?>
                        </a>
                    </p>
                </div>
                
                <div class="footer-social">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#" aria-label="Follow us on Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" aria-label="Follow us on Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" aria-label="Follow us on LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" aria-label="Follow us on Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
                <div class="footer-links">
                    <a href="#privacy">Privacy Policy</a>
                    <a href="#terms">Terms of Service</a>
                    <a href="#cookies">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
