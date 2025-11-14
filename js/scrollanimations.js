/**
 * Scroll Animations using Intersection Observer API
 * Animates elements as they enter the viewport
 */

(function() {
    'use strict';

    /**
     * Initialize scroll animations
     */
    function initScrollAnimations() {
        // Select all elements that should animate on scroll
        const animateElements = document.querySelectorAll('.animate-on-scroll');

        // If no elements found, exit
        if (animateElements.length === 0) {
            return;
        }

        // Intersection Observer options
        const options = {
            root: null, // viewport
            rootMargin: '0px 0px -100px 0px', // trigger 100px before element enters viewport
            threshold: 0.1 // trigger when 10% of element is visible
        };

        // Create the observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add animated class to trigger animation
                    entry.target.classList.add('animated');

                    // Optional: Stop observing after animation (performance optimization)
                    // observer.unobserve(entry.target);
                }
            });
        }, options);

        // Observe all elements
        animateElements.forEach(element => {
            observer.observe(element);
        });
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initScrollAnimations);
    } else {
        initScrollAnimations();
    }

})();
