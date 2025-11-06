/**
 * Back to Top Button Functionality
 * Modern vanilla JavaScript implementation without jQuery
 */

(function() {
    'use strict';

    // Get the button element
    const backToTopBtn = document.getElementById('backToTopBtn');

    if (!backToTopBtn) {
        console.warn('Back to top button not found');
        return;
    }

    /**
     * Show or hide the button based on scroll position
     */
    function toggleButtonVisibility() {
        if (window.scrollY > 300) {
            backToTopBtn.style.display = 'block';
            // Trigger reflow to enable transition
            backToTopBtn.offsetHeight;
            backToTopBtn.style.opacity = '1';
        } else {
            backToTopBtn.style.opacity = '0';
            setTimeout(() => {
                if (window.scrollY <= 300) {
                    backToTopBtn.style.display = 'none';
                }
            }, 300); // Match CSS transition duration
        }
    }

    /**
     * Smooth scroll to top of page
     */
    function scrollToTop(e) {
        e.preventDefault();

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Add scroll event listener with throttling for better performance
    let isScrolling = false;
    window.addEventListener('scroll', function() {
        if (!isScrolling) {
            window.requestAnimationFrame(function() {
                toggleButtonVisibility();
                isScrolling = false;
            });
            isScrolling = true;
        }
    }, { passive: true });

    // Add click event listener to button
    backToTopBtn.addEventListener('click', scrollToTop);

    // Initial check on page load
    toggleButtonVisibility();

    // Set initial opacity for smooth transitions
    backToTopBtn.style.opacity = '0';
    backToTopBtn.style.transition = 'opacity 0.3s ease';

})();
