<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main>
        <x-navbar></x-navbar>
        {{$slot}}
    </main>
    <x-footer></x-footer>
    <script>
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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>