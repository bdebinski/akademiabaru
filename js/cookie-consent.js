/**
 * Simple Cookie Consent Banner
 * GDPR Compliant
 */

(function() {
    'use strict';

    // Check if user has already consented
    function hasConsented() {
        return localStorage.getItem('cookieConsent') === 'true';
    }

    // Set consent
    function setConsent() {
        localStorage.setItem('cookieConsent', 'true');
        localStorage.setItem('cookieConsentDate', new Date().toISOString());
    }

    // Create banner HTML
    function createBanner() {
        const banner = document.createElement('div');
        banner.id = 'cookie-consent-banner';
        banner.className = 'cookie-consent-banner';
        banner.setAttribute('role', 'dialog');
        banner.setAttribute('aria-label', 'Powiadomienie o cookies');
        banner.setAttribute('aria-live', 'polite');

        banner.innerHTML = `
            <div class="cookie-consent-content">
                <div class="cookie-consent-text">
                    <p>
                        <strong>Ta strona używa plików cookies</strong><br>
                        Używamy plików cookies, aby zapewnić prawidłowe działanie strony, analizować ruch
                        i dostosowywać treści do Twoich preferencji.
                        <a href="privacy-policy.html" target="_blank" class="cookie-consent-link">Polityka prywatności</a>
                    </p>
                </div>
                <div class="cookie-consent-buttons">
                    <button type="button" id="cookie-accept" class="btn btn-primary cookie-btn-accept">
                        Akceptuję
                    </button>
                    <button type="button" id="cookie-settings" class="btn btn-secondary cookie-btn-settings">
                        Ustawienia
                    </button>
                </div>
            </div>
        `;

        return banner;
    }

    // Show banner
    function showBanner() {
        if (hasConsented()) {
            return;
        }

        const banner = createBanner();
        document.body.appendChild(banner);

        // Add event listeners
        document.getElementById('cookie-accept').addEventListener('click', function() {
            acceptCookies();
        });

        document.getElementById('cookie-settings').addEventListener('click', function() {
            window.location.href = 'privacy-policy.html';
        });

        // Show banner with animation
        setTimeout(function() {
            banner.classList.add('show');
        }, 500);
    }

    // Accept cookies
    function acceptCookies() {
        setConsent();
        const banner = document.getElementById('cookie-consent-banner');
        if (banner) {
            banner.classList.remove('show');
            setTimeout(function() {
                banner.remove();
            }, 300);
        }
    }

    // Initialize on page load
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', showBanner);
    } else {
        showBanner();
    }

})();
