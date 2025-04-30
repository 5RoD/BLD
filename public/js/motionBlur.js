// Made with CHATGPT its a scroll motionblur effect
let lastScrollY = window.scrollY;

// Smooth transition for the blur effect
document.body.style.transition = 'filter 0.1s ease-out';

// Function to apply blur
const applyBlurEffect = () => {
    let blur = Math.min(Math.abs(lastScrollY - window.scrollY) / 10, 5);
    document.body.style.filter = `blur(${blur}px)`;
};

// Handle scrolling
window.addEventListener('scroll', () => {
    applyBlurEffect();
    lastScrollY = window.scrollY;
});

// Handle anchor link clicks for smooth scroll
document.addEventListener('click', (e) => {
    if (e.target.tagName === 'A') {
        e.preventDefault();
        let target = document.getElementById(e.target.getAttribute('href').slice(1));
        if (target) {
            window.scrollTo({ top: target.offsetTop, behavior: 'smooth' });
            applyBlurEffect();
        }
    }
});

// Remove blur after a brief delay
setInterval(() => {
    document.body.style.filter = 'blur(0)';
}, 100);
