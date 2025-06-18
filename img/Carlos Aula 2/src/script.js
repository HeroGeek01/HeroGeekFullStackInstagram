
// Custom JavaScript for Instagram layout functionality

document.addEventListener('DOMContentLoaded', function() {
    // Handle heart button toggle
    const heartButtons = document.querySelectorAll('.heart-btn[data-bs-toggle="button"]');
    
    heartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const heartOutline = this.querySelector('.bi-heart');
            const heartFilled = this.querySelector('.bi-heart-fill');
            
            if (this.getAttribute('aria-pressed') === 'true') {
                // Button is being activated
                heartOutline.classList.add('d-none');
                heartFilled.classList.remove('d-none');
            } else {
                // Button is being deactivated
                heartOutline.classList.remove('d-none');
                heartFilled.classList.add('d-none');
            }
        });
    });
    
    // Optional: Add smooth scrolling for better UX
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});
