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
            const faders = document.querySelectorAll('.fade-in-up');
            const options = {
                threshold: 0.1,
            };
            const appearOnScroll = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                    }
                });
            }, options);

            faders.forEach(fader => {
                appearOnScroll.observe(fader);
            });

            window.addEventListener('scroll', () => {
                if (window.scrollY === 0) {
                    faders.forEach(fader => {
                        fader.classList.remove('show');
                    });
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>