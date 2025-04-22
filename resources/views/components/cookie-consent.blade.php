<!-- Cookie Consent Banner -->
<div id="cookieConsent" class="cookie-consent">
    <div class="cookie-content">
        <div class="cookie-text">
            <h5 class="mb-2">Cookie Policy</h5>
            <p class="mb-0">We use cookies to enhance your browsing experience, serve personalized content, and analyze our traffic. By clicking "Accept All", you consent to our use of cookies.</p>
        </div>
        <div class="cookie-buttons">
            <button id="acceptCookies" class="btn btn-primary btn-sm">Accept All</button>
            <button id="rejectCookies" class="btn btn-outline-secondary btn-sm ms-2">Reject</button>
        </div>
    </div>
</div>

<style>
    .cookie-consent {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(255, 255, 255, 0.95);
        padding: 1rem;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        backdrop-filter: blur(10px);
        transform: translateY(100%);
        transition: transform 0.5s ease-out;
    }

    .cookie-consent.show {
        transform: translateY(0);
    }

    .cookie-content {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
    }

    .cookie-text {
        flex: 1;
    }

    .cookie-buttons {
        display: flex;
        gap: 0.5rem;
    }

    @media (max-width: 768px) {
        .cookie-content {
            flex-direction: column;
            text-align: center;
        }

        .cookie-buttons {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<script>
    // Function to show cookie consent
    function showCookieConsent() {
        const cookieConsent = document.getElementById('cookieConsent');
        if (cookieConsent) {
            // Add show class after a small delay to ensure the element is rendered
            setTimeout(() => {
                cookieConsent.classList.add('show');
            }, 100);
        }
    }

    // Function to hide cookie consent
    function hideCookieConsent() {
        const cookieConsent = document.getElementById('cookieConsent');
        if (cookieConsent) {
            cookieConsent.classList.remove('show');
        }
    }

    // Check if we're on the home page and show cookie consent
    document.addEventListener('DOMContentLoaded', function() {
        const currentPath = window.location.pathname;
        const isHomePage = currentPath === '/' || 
                          currentPath === '/home' || 
                          currentPath === '/index' ||
                          currentPath === '/welcome';

        if (isHomePage) {
            showCookieConsent();
        }

        // Add event listeners for buttons
        const acceptCookies = document.getElementById('acceptCookies');
        const rejectCookies = document.getElementById('rejectCookies');

        if (acceptCookies) {
            acceptCookies.addEventListener('click', hideCookieConsent);
        }

        if (rejectCookies) {
            rejectCookies.addEventListener('click', hideCookieConsent);
        }
    });
</script>
