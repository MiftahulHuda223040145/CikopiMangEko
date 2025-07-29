<nav class="nav font-lato lg:bg-transparent md:bg-transparent w-screen top-0 z-20 fixed transition-colors max-[767px]:bg-[#966727] duration-500">
    <div class="max-w-screen flex flex-wrap items-center justify-between min-lg:px-25 md:px-10 sm:px-5 max-[640px]:px-5 py-4">
        <a href="/" class="flex gap-2 items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('image/cikopilogo.png')}}" class="w-12 min-2xl:w-20" alt="Cikopi Mang Eko Logo" />
            <span class="text-white self-center lg:text-xl md-text-xl sm:text-base lato-regular min-2xl:text-2xl">Cikopi Mang Eko</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="lato-bold flex text-shadow-lg flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 ">
            <li>
            <a href="/" class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 {{ request()->is('/') ? 'text-[#fde0bd]' : 'text-white hover:text-[#fde0bd]'}} min-2xl:text-2xl">Home</a>
            </li>
            <li>
            <a href="/about-us" class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 {{ request()->is('about-us') ? 'text-[#fde0bd]' : 'text-white hover:text-[#fde0bd]'}} min-2xl:text-2xl">About Us</a>
            </li>
            <li>
            <a href="/product" class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 {{ request()->is('product') ? 'text-[#fde0bd]' : 'text-white hover:text-[#fde0bd]'}} min-2xl:text-2xl">Product</a>
            </li>
            <li>
            <a href="/ecommerce" class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 {{ request()->is('ecommerce') ? 'text-[#fde0bd]' : 'text-white hover:text-[#fde0bd]'}} min-2xl:text-2xl">Ecommerce</a>
            </li>
            <li>
            <a href="/news" class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0  {{ request()->is('news') ? 'text-[#fde0bd]' : 'text-white hover:text-[#fde0bd]'}} min-2xl:text-2xl">News</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

<script>
    const nav = document.querySelector('.nav');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.className = "nav font-lato bg-[#966727] w-screen top-0 left-0 z-20 fixed transition-colors duration-500";
        }else {
            nav.className = "nav font-lato lg:bg-transparent md:bg-transparent w-screen top-0 left-0 z-20 fixed transition-colors max-[767px]:bg-[#966727] duration-500";
        }
    });
</script>
