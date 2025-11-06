/**
 * Smooth Scroll for Anchor Links
 * Modern vanilla JavaScript implementation without jQuery
 */

(function() {
    'use strict';

    /**
     * Smooth scroll to target element
     * @param {Element} target - The target element to scroll to
     * @param {Event} event - The click event
     */
    function smoothScrollToTarget(target, event) {
        if (!target) return;

        event.preventDefault();

        // Get the target position
        const targetPosition = target.offsetTop;

        // Smooth scroll to target
        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });

        // Update URL hash without jumping
        if (history.pushState) {
            history.pushState(null, null, target.id ? `#${target.id}` : window.location.pathname);
        }

        // Set focus to target for accessibility
        // Add tabindex if element is not naturally focusable
        const originalTabIndex = target.getAttribute('tabindex');
        if (!target.hasAttribute('tabindex')) {
            target.setAttribute('tabindex', '-1');
        }

        target.focus({ preventScroll: true });

        // Restore original tabindex after focus
        if (originalTabIndex === null) {
            target.removeAttribute('tabindex');
        } else {
            target.setAttribute('tabindex', originalTabIndex);
        }
    }

    /**
     * Initialize smooth scrolling for all anchor links
     */
    function initializeSmoothScroll() {
        // Select all links with hashes
        const anchorLinks = document.querySelectorAll('a[href*="#"]');

        anchorLinks.forEach(function(link) {
            // Skip links that don't actually link to anything
            const href = link.getAttribute('href');
            if (href === '#' || href === '#0') {
                return;
            }

            link.addEventListener('click', function(event) {
                // Check if it's an on-page link
                const linkPath = link.pathname.replace(/^\//, '');
                const currentPath = window.location.pathname.replace(/^\//, '');

                if (linkPath === currentPath && link.hostname === window.location.hostname) {
                    // Get the hash from the href
                    const hash = link.hash;
                    if (!hash) return;

                    // Try to find the target element
                    let target = document.querySelector(hash);

                    // If not found, try to find by name attribute (legacy support)
                    if (!target) {
                        target = document.querySelector(`[name="${hash.slice(1)}"]`);
                    }

                    // If target exists, perform smooth scroll
                    if (target) {
                        smoothScrollToTarget(target, event);
                    }
                }
            });
        });
    }

    // Initialize when DOM is fully loaded
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeSmoothScroll);
    } else {
        // DOM is already loaded
        initializeSmoothScroll();
    }

    // Re-initialize if new content is added dynamically (optional)
    // You can call initializeSmoothScroll() after adding new content

})();
