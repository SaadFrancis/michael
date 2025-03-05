document.addEventListener('DOMContentLoaded', () => {
    fetch('header.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header-container').innerHTML = data;

            // Hamburger menu functionality
            const hamburger = document.getElementById('hamburger');
            const navLinks = document.querySelector('.nav-links');
            hamburger.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });

            // Scroll effect for the header
            const header = document.querySelector('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
        });
});
