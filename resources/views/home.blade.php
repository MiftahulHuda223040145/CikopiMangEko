<x-layout>
@section('title', 'Home')
{{-- Hero --}} 
<section class="bg-center bg-no-repeat pb-10" style="background-image: url('{{ asset('storage/image/hero-image-home.png') }}')">
    <div class="px-4 max-w-screen-xl place-items-end text-left py-55 fade-hero">
        <div class="pr-24 pt-20">
            <h1 class="mb-4 text-4xl font-ppbold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Cikopi</h1>
            <h1 class="mb-4 text-4xl font-ppbold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Mang Eko</h1>
            <p class="mb-8 font-lato text-white lg:text-xl md-text-xl sm:text-base">Seduhan murni untuk jiwa yang berkembang</p>
            <div class="space-y-4 sm:flex-row sm:justify-end sm:space-y-0">
                <a href="https://api.whatsapp.com/send/?phone=6281350508811&text&type=phone_number&app_absent=0" class="inline-flex justify-end items-center py-5 px-5 text-center text-[#39312F] rounded-lg bg-[#FEFEF4] hover:bg-[#dfdfd5] font-lato font-bold lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs transition duration-500 ease-out hover:scale-105">
                    Hubungi Kami
                    <img class="ms-5" src="{{ asset('storage/image/arrow-brown.png') }}" alt="arrow-brown-icon">
                </a>
            </div>
        </div>
    </div>
</section>

{{-- About Us --}}
<div class="font-lato lg:px-25 md:px-10 sm:px-10 max-[640px]:px-10 max-w-screen-xl place-items-start text-left py-15 fade-in-up text-[#39312F]">
    <div class="">
        <h1 class="lg:text-4xl md:text-4xl sm:text-2xl max-[640px]:text-2xl font-bold">ABOUT US</h1>
        <p class="lg:w-140 md:w-140 sm:w-auto my-5 text-justify lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs">Cikopi mang eko merupakan tempat penyedia biji kopi, jasa roasting, dan distributor biji kopi. Cikopi mang eko ini berdiri pada tahun 2016 oleh Muchtar koswara di ciwastra dan pindah pada tahun 2018 ke kota Bandung tepatnya di Jl. Golf Dalam No.2 Blok G, Cisaranten Bina Harapan, Kec Arcamanik, Kota Bandung, Jawa Barat 40294.</p>
    </div>
    <div class="space-y-4 sm:flex-row sm:justify-end sm:space-y-0">
        <a href="/about-us" class="inline-flex justify-end items-center py-3 px-5 font-lato font-bold lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817] transition duration-500 ease-out hover:scale-105">
            Lebih Lanjut
            <img class="ms-3" src="{{ asset('storage/image/arrow-white.png') }}" alt="arrow-white-icon">
        </a>
    </div>
</div>

{{-- Product --}}
<div class="font-lato lg:gap-20 md:gap-20 max-[640px]:gap-10 sm:gap-10 justify-center place-items-start grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 max-w-screen text-left py-15 my-10 lg:px-30 md:px-10 sm:px-10 max-[640px]:px-10 fade-in-up">
    <div class="">
        <img class="w-auto rounded-3xl transform transition duration-500 ease-out hover:scale-105" src="{{ asset('storage/image/foto-acehgayo.png') }}" alt="foto-acehgayo">
    </div>
    <div class="text-[#39312F]">
        <h1 class="lg:text-4xl md:text-4xl sm:text-2xl max-[640px]:text-2xl font-bold">PRODUCT</h1>
        <p class="my-5 lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs">Cikopi mang eko menjual green bean, roasted bean, jasa roasting dan menggiling, alat-alat kopi, dan kopi susu yang siap minum.</p>
        <div class="space-y-4 sm:flex-row sm:justify-end sm:space-y-0 transform">
            <a href="/product" class="inline-flex justify-end items-center py-3 px-5 font-lato font-bold lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817] transition duration-500 ease-out hover:scale-105">
                Lebih Lanjut
                <img class="ms-3" src="{{ asset('storage/image/arrow-white.png') }}" alt="arrow-white-icon">
            </a>
        </div>
    </div>
</div>

{{-- Ecommerce --}}
<div class="container max-w-screen lg:px-25 md:px-10 sm:px-10 max-[640px]:px-10 fade-in-up">
    <div class="font-lato max-w-screen-xl place-items-start text-left py-3">
        <div class="text-[#39312F]">
            <h1 class="lg:text-4xl md:text-4xl sm:text-2xl max-[640px]:text-2xl font-bold">ECOMMERCE</h1>
            <p class="lg:w-140 md:w-auto my-5 lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs">Buat pesanan anda sekarang melalui Instagram dan Tokopedia untuk Luar kota dan dalam kota.</p>
        </div>
    </div>
    <div class="max-w-full lg:mt-15 mb-35 grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 place-items-center lg:gap-30 md:gap-20 max-[640px]:gap-10 sm:gap-10">
        <div class="lg:h-130 md:h-auto max-w-sm bg-white rounded-3xl shadow-[0px_8px_15px_2px_rgba(0,0,0,0.25)] px-7 transform transition duration-500 ease-out hover:scale-105">
            <img class="py-5" src="{{ asset('storage/image/instagram2.png') }}" alt="logo-instagram-color" />
            <img class="rounded-3xl w-full " src="{{ asset('storage/image/ecommerce1.png') }}" alt="instagram" />
            <div class="py-5">
                <p class="text-[#39312F] my-5 font-lato lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs">Info lebih lanjut mengenai produk kunjungi sosial media instagram @cikopimangeko</p>
                <div class="space-y-4 mb-5 my-10 sm:flex-row sm:justify-end sm:space-y-0">
                    <a href="https://www.instagram.com/cikopimangeko?igsh=MWJlNTNmaHBoeHJ4dQ==" class="inline-flex justify-end items-center py-3 px-5 font-lato font-bold lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817] transition duration-500 ease-out hover:scale-105">
                        Lebih Lanjut
                        <img class="ms-3" src="{{ asset('storage/image/arrow-white.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="lg:h-130 md:h-auto max-w-sm bg-white rounded-3xl shadow-[0px_8px_15px_4px_rgba(0,0,0,0.25)] px-7 transform transition duration-500 ease-out hover:scale-105">
            <img class="py-5" src="{{ asset('storage/image/tokopedia2.png') }}" alt="logo-tokopedia-color" />
            <img class="rounded-3xl w-full" src="{{ asset('storage/image/ecommerce2.png') }}" alt="tokopedia-store" />
            <div class="py-5">
                <p class="text-[#39312F] my-5 text-justify w-full lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs">Temukan produk yang dibutuhkan di Tokopedia @cikopimangeko</p>
                <div class="space-y-4 mb-5 my-10 sm:flex-row sm:justify-end sm:space-y-0">
                    <a href="https://tk.tokopedia.com/ZSBm1JbXe/" class="inline-flex justify-end items-center py-3 px-5 font-lato font-bold lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817] transition duration-500 ease-out hover:scale-105">
                        Lebih Lanjut
                        <img class="ms-3" src="{{ asset('storage/image/arrow-white.png') }}" alt="arrow-white-icon">
                    </a>
                </div>
        </div>
    </div>
</div>

{{-- News --}}
<div class="container max-w-screen mb-40 fade-in-up">
    <div class="font-lato place-items-start text-left mt-15">
        <div class="text-[#39312F]">
            <h1 class="lg:text-4xl md:text-4xl sm:text-2xl max-[640px]:text-2xl font-bold">NEWS</h1>
            <p class="lg:w-140 md:w-140 sm:w-auto my-5">Berbagai Berita tentang Cikopi Mang Eko.</p>
        </div>
    </div>
    <div class="font-lato gap-10 justify-center grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 place-items-start text-left py-3">
        <div class="">
            <img class="w-auto rounded-3xl transform transition duration-500 ease-out hover:scale-105" src="{{ asset('storage/image/cikopi-news1.png') }}" alt="cikopi-news">
        </div>
        <div class="">
            <h1 class="font-bold text-[#39312F]">Benefit mengkonsumsi kopi di pagi hari.</h1>
            <p class="min-[1445px]:w-150 md:w-auto sm:w-auto my-5 text-justify lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs">Minum kopi di pagi hari dapat memberikan berbagai manfaat, seperti meningkatkan energi, meningkatkan fokus dan konsentrasi serta membantu menurun kan berat badan. Selain itu dapat meningkatkan kesehatan jantung, risiko diabetes, dan menurunkan resiko penyakit Alzheimer dan Parkinson.</p>
            <div class="space-y-4 sm:flex-row sm:justify-end sm:space-y-0">
                <a href="/news" class="inline-flex justify-end items-center py-3 px-5 font-lato font-bold lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817] transition duration-500 ease-out hover:scale-105">
                    Lebih Lanjut
                    <img class="ms-3" src="{{ asset('storage/image/arrow-white.png') }}" alt="arrow-white-icon">
                </a>
            </div>
        </div>
    </div>
</div>
</x-layout>