<?php
/**
 * Configuration file for GolfDraft website
 * Contains site-wide settings and constants
 */

// Site Configuration
define('SITE_NAME', 'GeoGolf');
define('SITE_TAGLINE', 'Golf Course Design & Renovation');
define('SITE_MOTTO', 'Our service, expertise and price simply cannot be matched.');

// Contact Information
define('COMPANY_PHONE', '+1 (555) 123-4567');
define('COMPANY_EMAIL', 'info@golfdraft.com');
define('COMPANY_ADDRESS', '123 Golf Design Avenue, Beverly Hills, CA 90210');

// Navigation Menu Items
$navigation_items = [
    'home' => ['url' => '#home', 'title' => 'Home'],
    'company' => ['url' => '#company', 'title' => 'Company'],
    'services' => ['url' => '#services', 'title' => 'Services'],
    'projects' => ['url' => '#projects', 'title' => 'Projects'],
    'clients' => ['url' => '#clients', 'title' => 'Clients'],
    'contact' => ['url' => '#contact', 'title' => 'Contact Us']
];

// Page Title and Meta Description
$page_config = [
    'title' => 'GolfDraft - Premium Golf Course Design & Development',
    'description' => 'Professional golf course design, renovation, and mapping services. Expert consultation for premier golf course development.',
    'keywords' => 'golf course design, golf course renovation, golf mapping, golf development, premium golf services'
];

// Asset Paths
define('CSS_PATH', 'css/');
define('JS_PATH', 'js/');
define('IMG_PATH', 'images/');
?>
