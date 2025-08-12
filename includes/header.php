<?php
/**
 * Header Fragment for GolfDraft Website
 * Contains the main navigation and branding
 */

// Include configuration if not already included
if (!defined('SITE_NAME')) {
    require_once 'config.php';
}
?>

<!-- GOLF COURSE BACKGROUND IMAGES -->
<div class="golf-bg-left"></div>
<div class="golf-bg-right"></div>

<!-- Header -->
<header class="header" role="banner">
    <div class="header-content">
        <!-- Logo Section -->
        <div class="logo">
            <div class="logo-circle" aria-hidden="true">
                <i class="fas fa-golf-ball"></i>
            </div>
            <div class="logo-text">
                <h1><?php echo SITE_NAME; ?></h1>
                <span><?php echo SITE_TAGLINE; ?></span>
            </div>
        </div>
            
            <!-- Main Navigation -->
            <nav class="navigation" role="navigation" aria-label="Main navigation">
                <ul class="nav-menu">
                    <?php foreach ($navigation_items as $key => $item): ?>
                        <li>
                            <a href="<?php echo htmlspecialchars($item['url']); ?>" 
                               <?php echo ($key === 'home') ? 'aria-current="page"' : ''; ?>>
                                <?php echo htmlspecialchars($item['title']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                
                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" aria-label="Toggle mobile menu" aria-expanded="false">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </button>
            </nav>
            
        <!-- Header Tagline -->
        <div class="header-tagline" role="complementary">
            <span>"<?php echo SITE_MOTTO; ?>"</span>
        </div>
    </div>
</header>