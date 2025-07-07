<nav class="nav font-lato bg-transparent w-screen top-0 left-0 z-20 fixed transition-colors duration-500">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between px-30 mx-auto p-4">{{-- px --}}
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('storage/image/cikopilogo.png')}}" class="w-15" alt="Cikopi Logo" />
            <span class="self-center text-xl whitespace-nowrap dark:text-white">Cikopi Mang Eko</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-bold flex text-shadow-lg flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 ">
            <li>
            <a href="/" class="block py-2 px-3 text-[#fde0bd] rounded-sm md:bg-transparent md:p-0 " aria-current="page">Home</a>
            </li>
            <li>
            <a href="/about-us" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-transparent md:hover:bg-transparent md:border-0 hover:text-[#fde0bd] md:p-0 dark:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">About Us</a>
            </li>
            <li>
            <a href="/product" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-transparent md:hover:bg-transparent md:border-0 hover:text-[#fde0bd] md:p-0 dark:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Product</a>
            </li>
            <li>
            <a href="/ecommerce" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-transparent md:hover:bg-transparent md:border-0 hover:text-[#fde0bd] md:p-0 dark:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Ecommerce</a>
            </li>
            <li>
            <a href="/news" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-transparent md:hover:bg-transparent md:border-0 hover:text-[#fde0bd] md:p-0 dark:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">News</a>
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
            nav.className = "nav font-lato bg-transparent w-screen top-0 left-0 z-20 fixed transition-colors duration-500";
        }
    });
</script>
