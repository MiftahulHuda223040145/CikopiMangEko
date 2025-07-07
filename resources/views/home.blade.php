<x-layout>
{{-- Hero --}}
<section class="bg-center bg-no-repeat pb-10" style="background-image: url('{{ asset('storage/image/hero-image-home.png') }}')">
    <div class="px-4 mx-auto max-w-screen-xl place-items-end text-left py-24 lg:py-56">
        <div class="pr-24 pt-20">
            <h1 class="mb-4 text-4xl font-ppwl-bold font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Cikopi</h1>
            <h1 class="mb-4 text-4xl font-ppbold font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Mang Eko</h1>
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
<div class="font-lato px-25 mx-auto max-w-screen-xl place-items-start text-left py-15">
    <div class="">
        <h1 class="text-3xl font-bold text-[#39312F]">ABOUT US</h1>
        <p class="w-140 my-5 text-justify">Cikopi mang eko merupakan tempat penyedia biji kopi, jasa roasting, dan distributor biji kopi. Cikopi mang eko ini berdiri pada tahun 2016 oleh Muchtar koswara di ciwastra dan pindah pada tahun 2018 ke kota Bandung tepatnya di Jl. Golf Dalam No.2 Blok G, Cisaranten Bina Harapan, Kec Arcamanik, Kota Bandung, Jawa Barat 40294.</p>
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
<div class="font-lato gap-40 justify-end flex place-items-start mx-auto max-w-screen-xl text-left py-15 my-10">
    <div class="">
        <img class="w-90 rounded-3xl" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
    </div>
    <div class="">
        <h1 class="text-3xl font-bold text-[#39312F]">PRODUCT</h1>
        <p class="w-150 my-5">Cikopi mang eko menjual green bean, roasted bean, jasa roasting dan menggiling, alat-alat kopi, dan kopi susu yang siap minum.</p>
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
<div class="container max-w-screen px-25">
    <div class="font-lato mx-auto max-w-screen-xl place-items-start text-left py-3">
        <div class="">
            <h1 class="text-3xl font-bold text-[#39312F]">ECOMMERCE</h1>
            <p class="w-140 my-5">Buat pesanan anda sekarang melalui Instagram dan Tokopedia untuk Luar kota dan dalam kota.</p>
        </div>
    </div>
    <div class="py-3 mx-auto max-w-screen grid grid-cols-2 place-items-center mb-25">
        <div class="">
            <img class="rounded-3xl" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
            <p class="w-95 py-9">Info lebih lanjut mengenai produk kunjungi sosial media instagram @cikopimangeko</p>
            <div class="space-y-4 sm:flex-row sm:justify-end sm:space-y-0">
                <a href="#" class="inline-flex justify-end items-center py-3 px-5 text-base font-medium text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817]">
                    Lebih Lanjut
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="">
            <img class="rounded-3xl" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
            <p class="w-95 py-9">Info lebih lanjut mengenai produk kunjungi sosial media instagram @cikopimangeko</p>
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

{{-- News --}}
<div class="container max-w-screen px-25">
    <div class="font-lato mx-auto max-w-screen-xl place-items-start text-left mt-15">
        <div class="">
            <h1 class="text-3xl font-bold text-[#39312F]">NEWS</h1>
            <p class="w-140 my-5">Berbagai Berita tentang Cikopi Mang Eko.</p>
        </div>
    </div>
    <div class="font-lato gap-40 justify-center flex place-items-start mx-auto max-w-screen-xl text-left py-3 mb-25">
        <div class="">
            <img class="w-90 rounded-3xl" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="">
        </div>
        <div class="">
            <h1 class="font-bold text-[#39312F]">Benefit mengkonsumsi kopi di pagi hari.</h1>
            <p class="w-150 my-5">Minum kopi di pagi hari dapat memberikan berbagai manfaat, seperti meningkatkan energi, meningkatkan fokus dan konsentrasi serta membantu menurun kan berat badan. Selain itu dapat meningkatkan kesehatan jantung, risiko diabetes, dan menurunkan resiko penyakit Alzheimer dan Parkinson.</p>
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