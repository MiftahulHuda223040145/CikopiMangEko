import './bootstrap';
import 'flowbite';
import.meta.glob(['../fonts/**',]);

document.addEventListener('DOMContentLoaded', function () {
    const fadeInUpElements = document.querySelectorAll('.fade-in-up');
    const fadeHeroElements = document.querySelectorAll('.fade-hero');

    const options = { threshold: 0.1 };

    const observerFadeInUp = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, options);

    fadeInUpElements.forEach(el => {
        observerFadeInUp.observe(el);
    });

    window.addEventListener('scroll', () => {
        if (window.scrollY === 0) {
            fadeInUpElements.forEach(el => {
                el.classList.remove('show');
            });
        }
    });

    const observerFadeHero = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target);
            }
        });
    }, options);

    fadeHeroElements.forEach(el => {
        observerFadeHero.observe(el);
    });
});