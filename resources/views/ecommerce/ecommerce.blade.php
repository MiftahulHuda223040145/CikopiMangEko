<x-layout>
@section('title', 'Ecommerce')
{{-- Hero --}}
<section class="bg-center bg-no-repeat bg-cover min-h-[80vh] sm:min-h-[90vh] md:min-h-screen" style="background-image: url('{{ asset('image/hero-image-ecommerce.png') }}')">
    <div class="px-4 max-w-screen place-items-start text-left pt-76 pb-10 fade-hero">
        <div class="pt-60 lg:px-25 md:px-10 sm:px-10 max-[640px]:px-10">
            <h1 class="mb-4 font-ppbold tracking-tight leading-none text-white md:text-5xl lg:text-6xl hero-text min-2xl:text-9xl text-4xl">Marketplace</h1>
            <h1 class="mb-4 font-ppbold tracking-tight leading-none text-white md:text-5xl lg:text-6xl hero-text min-2xl:text-9xl text-4xl">& Order</h1>
            <p class="min-2xl:w-150 lg:w-100 md:w-100 sm:w-auto mb-8 lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs lato-regular font-lato text-white min-2xl:text-3xl">Buat pesanan anda sekarang melalui Tokopedia dan Whatsapp untuk Luar kota dan dalam kota.</p>
        </div>
    </div>
</section>

{{-- Card --}}
<div class="container max-w-screen lg:px-25 md:px-10 sm:px-10 max-[640px]:px-10 fade-in-up my-20">
    <div class="max-w-full lg:mt-15 mb-35 grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 place-items-center lg:gap-30 md:gap-20 max-[640px]:gap-10 sm:gap-10">
        <div class="min-2xl:h-160 lg:h-130 md:h-auto min-2xl:max-w-lg max-w-sm bg-white rounded-3xl shadow-[0px_8px_15px_2px_rgba(0,0,0,0.25)] px-7 transform transition duration-500 ease-out hover:scale-105">
            <img class="py-5" src="{{ asset('image/instagram2.png') }}" alt="logo-instagram-color" />
            <img class="rounded-3xl w-full " src="{{ asset('image/ecommerce1.png') }}" alt="instagram" />
            <div class="py-5">
                <p class="text-[#39312F] my-5 font-lato lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs min-2xl:text-2xl lato-regular">Info lebih lanjut mengenai produk kunjungi sosial media instagram @cikopimangeko</p>
                <div class="space-y-4 mb-5 my-10 sm:flex-row sm:justify-end sm:space-y-0">
                    <a href="https://www.instagram.com/cikopimangeko?igsh=MWJlNTNmaHBoeHJ4dQ==" class="inline-flex justify-end items-center py-3 px-5 font-lato lato-bold lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817] transition duration-500 ease-out hover:scale-105 min-2xl:text-2xl">
                        Lebih Lanjut
                        <img class="ms-3" src="{{ asset('image/arrow-white.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="min-2xl:h-160 min-2xl:max-w-lg lg:h-130 md:h-auto max-w-sm bg-white rounded-3xl shadow-[0px_8px_15px_4px_rgba(0,0,0,0.25)] px-7 transform transition duration-500 ease-out hover:scale-105">
            <img class="py-5" src="{{ asset('image/tokopedia2.png') }}" alt="logo-tokopedia-color" />
            <img class="rounded-3xl w-full" src="{{ asset('image/ecommerce2.png') }}" alt="tokopedia-store" />
            <div class="py-5">
                <p class="text-[#39312F] my-5 text-justify w-full lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs min-2xl:text-2xl lato-regular">Temukan produk yang dibutuhkan di Tokopedia @cikopimangeko</p>
                <div class="space-y-4 mb-5 my-10 sm:flex-row sm:justify-end sm:space-y-0">
                    <a href="https://tk.tokopedia.com/ZSBm1JbXe/" class="inline-flex justify-end items-center py-3 px-5 font-lato lato-bold lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817] transition duration-500 ease-out hover:scale-105 min-2xl:text-2xl">
                        Lebih Lanjut
                        <img class="ms-3" src="{{ asset('image/arrow-white.png') }}" alt="arrow-white-icon">
                    </a>
                </div>
        </div>
    </div>
</div>
</x-layout>