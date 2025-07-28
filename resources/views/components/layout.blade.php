<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('./image/cikopilogo.png')}}" type="image/png">
    <title>@yield('title') - Cikopi Mang Eko</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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

        const style = document.createElement('style');
        style.textContent = `
            .hero-text {
                font-family: 'ppbold', sans-serif;
            }

            .lato-bold {
                font-family: "Lato", sans-serif;
                font-weight: 700;
                font-style: normal;
            }

            .lato-regular {
                font-family: "Lato", sans-serif;
                font-weight: 500;
                font-style: normal;
            }

            .fade-in-up {
                opacity: 0;
                transform: translateY(20px);
                transition: opacity 1s ease-out, transform 1s ease-out;
            }

            .fade-in-up.show {
                opacity: 1;
                transform: translateY(0);
            }

            .fade-hero {
                opacity: 0;
                transform: translateY(20px);
                transition: opacity 1s ease-out, transform 1s ease-out;
            }

            .fade-hero.show {
                opacity: 1;
                transform: translateY(0);
            }`
            // `.font-Lato {
            //     font-family: 'Lato', sans-serif;
            // }`,

            // `.fade-in-up {
            // opacity: 0;
            //     transform: translateY(20px);
            //     transition: opacity 1s ease-out, transform 1s ease-out;
            // }`,

            // `.fade-in-up.show {
            //     opacity: 1;
            //     transform: translateY(0);
            // }`,

            // `.fade-hero {
            //     opacity: 0;
            //     transform: translateY(20px);
            //     transition: opacity 1s ease-out, transform 1s ease-out;
            // }`,

            // `.fade-hero.show {
            //     opacity: 1;
            //     transform: translateY(0);
            // }`
        ;
        document.head.appendChild(style);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>