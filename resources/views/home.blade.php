<x-layout>
{{-- Hero --}} 
<section class="bg-center bg-no-repeat pb-10" style="background-image: url('{{ asset('storage/image/hero-image-home.png') }}')">
    <div class="px-4 mx-auto max-w-screen-xl place-items-end text-left py-24 lg:py-56">
        <div class="pr-24 pt-20">
            <h1 class="mb-4 text-4xl font-ppbold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Cikopi</h1>
            <h1 class="mb-4 text-4xl font-ppbold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Mang Eko</h1>
            <p class="mb-8 text-lg font-normal text-white lg:text-xl">Seduhan murni untuk jiwa yang berkembang</p>
            <div class="space-y-4 sm:flex-row sm:justify-end sm:space-y-0">
                <a href="#" class="inline-flex justify-end items-center py-3 px-5 text-base font-medium text-center text-[#39312F] rounded-lg bg-[#FEFEF4] hover:bg-[#dfdfd5]">
                    Hubungi Kami
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- About Us --}}
<div class="font-lato lg:px-25 max-md:px-10 mx-auto max-w-screen-xl place-items-start text-left py-15 fade-in-up">
    <div class="">
        <h1 class="text-3xl font-bold text-[#39312F]">ABOUT US</h1>
        <p class="lg:w-140 md:w-140 sm:w-auto my-5 text-justify">Cikopi mang eko merupakan tempat penyedia biji kopi, jasa roasting, dan distributor biji kopi. Cikopi mang eko ini berdiri pada tahun 2016 oleh Muchtar koswara di ciwastra dan pindah pada tahun 2018 ke kota Bandung tepatnya di Jl. Golf Dalam No.2 Blok G, Cisaranten Bina Harapan, Kec Arcamanik, Kota Bandung, Jawa Barat 40294.</p>
    </div>
    <div class="space-y-4 sm:flex-row sm:justify-end sm:space-y-0">
        <a href="#" class="inline-flex justify-end items-center py-3 px-5 text-base font-medium text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817]">
            Lebih Lanjut
            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>

{{-- Product --}}
<div class="font-lato lg:gap-40 md:gap-20 max-sm:gap-20 justify-end place-items-center grid lg:grid-cols-2 sm:grid-cols-1 mx-auto max-w-screen-xl text-left py-15 my-10 lg:px-25 max-md:px-10 fade-in-up">
    <div class="">
        <img class="w-90 rounded-3xl" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
    </div>
    <div class="">
        <h1 class="text-3xl font-bold text-[#39312F]">PRODUCT</h1>
        <p class="lg:w-140 md:w-auto my-5">Cikopi mang eko menjual green bean, roasted bean, jasa roasting dan menggiling, alat-alat kopi, dan kopi susu yang siap minum.</p>
        <div class="space-y-4 sm:flex-row sm:justify-end sm:space-y-0">
            <a href="#" class="inline-flex justify-end items-center py-3 px-5 text-base font-medium text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817]">
                Lebih Lanjut
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
</div>

{{-- Ecommerce --}}
<div class="container max-w-screen lg:px-25 max-md:px-10 fade-in-up">
    <div class="font-lato mx-auto max-w-screen-xl place-items-start text-left py-3">
        <div class="">
            <h1 class="text-3xl font-bold text-[#39312F]">ECOMMERCE</h1>
            <p class="lg:w-140 md:w-auto my-5">Buat pesanan anda sekarang melalui Instagram dan Tokopedia untuk Luar kota dan dalam kota.</p>
        </div>
    </div>
    <div class="max-w-full mt-15 mb-35 grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 place-items-center gap-30">
    <div class="max-w-sm bg-white rounded-3xl shadow-[0px_8px_15px_2px_rgba(0,0,0,0.25)] px-7">
        <img class="py-5" src="{{ asset('storage/image/instagram2.png') }}" alt="" />
        <a href="#">
            <img class="rounded-3xl w-full " src="{{ asset('storage/image/ecommerce1.png') }}" alt="" />
        </a>
        <div class="py-5">
            <p class="my-5 font-normal">Info lebih lanjut mengenai produk kunjungi sosial media instagram @cikopimangeko</p>
            <div class="space-y-4 mb-5 my-10 sm:flex-row sm:justify-end sm:space-y-0">
                <a href="#" class="inline-flex justify-end items-center py-3 px-5 text-base font-medium text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817]">
                    Lebih Lanjut
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="max-w-sm bg-white rounded-3xl shadow-[0px_8px_15px_4px_rgba(0,0,0,0.25)] px-7">
        <img class="py-5" src="{{ asset('storage/image/tokopedia2.png') }}" alt="" />
        <a href="#">
            <img class="rounded-3xl w-full " src="{{ asset('storage/image/ecommerce2.png') }}" alt="" />
        </a>
        <div class="py-5">
            <p class="my-5 font-normal text-justify w-full">Temukan produk yang dibutuhkan di Tokopedia @cikopimangeko</p>
            <div class="space-y-4 mb-5 my-10 sm:flex-row sm:justify-end sm:space-y-0">
                <a href="#" class="inline-flex justify-end items-center py-3 px-5 text-base font-medium text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817]">
                    Lebih Lanjut
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
</div>

{{-- News --}}
<div class="container max-w-screen lg:px-25 max-md:px-10 fade-in-up">
    <div class="font-lato mx-auto place-items-start text-left mt-15">
        <div class="">
            <h1 class="text-3xl font-bold text-[#39312F]">NEWS</h1>
            <p class="lg:w-140 md:w-140 sm:w-auto my-5">Berbagai Berita tentang Cikopi Mang Eko.</p>
        </div>
    </div>
    <div class="font-lato md:gap-20 max-sm:gap-10 justify-center grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 place-items-start mx-auto text-left py-3 mb-25">
        <div class="">
            <img class="w-90 rounded-3xl" src="{{ asset('storage/image/cikopi-news1.png') }}" alt="">
        </div>
        <div class="">
            <h1 class="font-bold text-[#39312F]">Benefit mengkonsumsi kopi di pagi hari.</h1>
            <p class="lg:w-150 md:w-auto sm:w-auto my-5 text-justify">Minum kopi di pagi hari dapat memberikan berbagai manfaat, seperti meningkatkan energi, meningkatkan fokus dan konsentrasi serta membantu menurun kan berat badan. Selain itu dapat meningkatkan kesehatan jantung, risiko diabetes, dan menurunkan resiko penyakit Alzheimer dan Parkinson.</p>
            <div class="space-y-4 sm:flex-row sm:justify-end sm:space-y-0">
                <a href="#" class="inline-flex justify-end items-center py-3 px-5 text-base font-medium text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817]">
                    Lebih Lanjut
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
</x-layout>