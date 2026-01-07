/**
 * Main JS for IronPDF Beta Program Landing Page
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Handle Signup Forms
    const signupForms = document.querySelectorAll('.signup-form');

    signupForms.forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            const emailInput = form.querySelector('input[type="email"]');
            const email = emailInput.value.trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Reset validation state
            emailInput.classList.remove('is-invalid');

            // Check blank or invalid format
            if (!email || !emailPattern.test(email)) {
                emailInput.classList.add('is-invalid');
                emailInput.focus();
                // Optional: trigger browser native tooltip
                // emailInput.reportValidity(); 
                return;
            }

            // Valid - Show Success Modal
            // Assuming Bootstrap 5 is loaded as per existing script
            const successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();

            // Clear input
            emailInput.value = '';
            emailInput.classList.remove('is-invalid');
        });

        // Remove error class on input
        const emailInput = form.querySelector('input[type="email"]');
        if (emailInput) {
            emailInput.addEventListener('input', () => {
                emailInput.classList.remove('is-invalid');
            });
        }
    });

    // 2. Smooth Scrolling for internal links (if any)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // 3. Navbar background change on scroll
    const header = document.querySelector('.site-header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.3)';
        } else {
            header.style.boxShadow = 'none';
        }
    });
});
