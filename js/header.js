/**
 * Header JavaScript for GolfDraft Website
 * Handles mobile menu, scroll effects, and navigation
 */

class HeaderController {
    constructor() {
        this.header = document.querySelector('.header');
        this.mobileToggle = document.querySelector('.mobile-menu-toggle');
        this.navMenu = document.querySelector('.nav-menu');
        this.navLinks = document.querySelectorAll('.nav-menu a');
        
        this.init();
    }
    
    init() {
        this.setupMobileMenu();
        this.setupScrollEffects();
        this.setupSmoothScrolling();
        this.setupKeyboardNavigation();
    }
    
    /**
     * Mobile menu functionality
     */
    setupMobileMenu() {
        if (!this.mobileToggle || !this.navMenu) return;
        
        this.mobileToggle.addEventListener('click', (e) => {
            e.preventDefault();
            this.toggleMobileMenu();
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!this.header.contains(e.target) && this.navMenu.classList.contains('active')) {
                this.closeMobileMenu();
            }
        });
        
        // Close menu when pressing Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && this.navMenu.classList.contains('active')) {
                this.closeMobileMenu();
                this.mobileToggle.focus();
            }
        });
        
        // Close menu when clicking nav links
        this.navLinks.forEach(link => {
            link.addEventListener('click', () => {
                this.closeMobileMenu();
            });
        });
    }
    
    toggleMobileMenu() {
        const isExpanded = this.mobileToggle.getAttribute('aria-expanded') === 'true';
        
        this.mobileToggle.setAttribute('aria-expanded', !isExpanded);
        this.navMenu.classList.toggle('active');
        
        // Focus management
        if (!isExpanded) {
            // Menu opened - focus first link
            setTimeout(() => {
                const firstLink = this.navMenu.querySelector('a');
                if (firstLink) firstLink.focus();
            }, 100);
        }
    }
    
    closeMobileMenu() {
        this.mobileToggle.setAttribute('aria-expanded', 'false');
        this.navMenu.classList.remove('active');
    }
    
    /**
     * Header scroll effects
     */
    setupScrollEffects() {
        let lastScrollY = window.scrollY;
        let ticking = false;
        
        const updateHeader = () => {
            const scrollY = window.scrollY;
            
            // Add shadow when scrolled
            if (scrollY > 20) {
                this.header.classList.add('header--scrolled');
            } else {
                this.header.classList.remove('header--scrolled');
            }
            
            // Hide/show header on scroll (optional)
            if (Math.abs(scrollY - lastScrollY) > 10) {
                if (scrollY > lastScrollY && scrollY > 100) {
                    this.header.classList.add('header--hidden');
                } else {
                    this.header.classList.remove('header--hidden');
                }
                lastScrollY = scrollY;
            }
            
            ticking = false;
        };
        
        const requestTick = () => {
            if (!ticking) {
                requestAnimationFrame(updateHeader);
                ticking = true;
            }
        };
        
        window.addEventListener('scroll', requestTick, { passive: true });
    }
    
    /**
     * Smooth scrolling for anchor links
     */
    setupSmoothScrolling() {
        this.navLinks.forEach(link => {
            const href = link.getAttribute('href');
            
            if (href && href.startsWith('#')) {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.smoothScrollTo(href);
                });
            }
        });
    }
    
    smoothScrollTo(target) {
        const element = document.querySelector(target);
        
        if (element) {
            const headerHeight = this.header.offsetHeight;
            const elementPosition = element.offsetTop - headerHeight - 20;
            
            window.scrollTo({
                top: elementPosition,
                behavior: 'smooth'
            });
            
            // Update URL without jumping
            history.pushState(null, null, target);
            
            // Focus the target element for accessibility
            setTimeout(() => {
                element.setAttribute('tabindex', '-1');
                element.focus();
                element.addEventListener('blur', () => {
                    element.removeAttribute('tabindex');
                }, { once: true });
            }, 500);
        }
    }
    
    /**
     * Keyboard navigation improvements
     */
    setupKeyboardNavigation() {
        // Trap focus in mobile menu when open
        this.navMenu.addEventListener('keydown', (e) => {
            if (!this.navMenu.classList.contains('active')) return;
            
            if (e.key === 'Tab') {
                const focusableElements = this.navMenu.querySelectorAll('a');
                const firstElement = focusableElements[0];
                const lastElement = focusableElements[focusableElements.length - 1];
                
                if (e.shiftKey) {
                    if (document.activeElement === firstElement) {
                        e.preventDefault();
                        lastElement.focus();
                    }
                } else {
                    if (document.activeElement === lastElement) {
                        e.preventDefault();
                        firstElement.focus();
                    }
                }
            }
        });
    }
}

// Initialize header when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new HeaderController();
});

// Add CSS classes for scroll effects
const headerScrollStyles = `
    .header--scrolled {
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15) !important;
        backdrop-filter: blur(20px);
    }
    
    .header--hidden {
        transform: translateY(-100%);
    }
    
    .header {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
    }
`;

// Inject scroll styles
if (!document.querySelector('#header-scroll-styles')) {
    const style = document.createElement('style');
    style.id = 'header-scroll-styles';
    style.textContent = headerScrollStyles;
    document.head.appendChild(style);
}
