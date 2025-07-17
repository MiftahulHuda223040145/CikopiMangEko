<x-layout>
@section('title', 'Ecommerce')
{{-- Hero --}}
<section class="bg-center bg-no-repeat pb-10" style="background-image: url('{{ asset('storage/image/hero-image-ecommerce.png') }}')">
    <div class="max-w-screen-xl place-items-start text-left pt-56 fade-hero">
        <div class="pt-60 lg:px-25 md:px-10 sm:px-10 max-[640px]:px-10">
            <h1 class="mb-4 text-4xl font-ppbold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Marketplace</h1>
            <h1 class="mb-4 text-4xl font-ppbold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">& Order</h1>
            <p class="lg:w-100 md:w-100 sm:w-auto mb-8 lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs font-normal font-lato text-white">Buat pesanan anda sekarang melalui Tokopedia dan Whatsapp untuk Luar kota dan dalam kota.</p>
        </div>
    </div>
</section>

{{-- Card --}}
<div class="container max-w-screen lg:px-25 md:px-10 sm:px-10 max-[640px]:px-10 fade-in-up my-20">
    <div class="max-w-full lg:mt-15 mb-35 grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 place-items-center lg:gap-30 md:gap-20 max-[640px]:gap-10 sm:gap-10">
        <div class="max-w-sm bg-white rounded-3xl shadow-[0px_8px_15px_2px_rgba(0,0,0,0.25)] px-7">
            <img class="py-5" src="{{ asset('storage/image/instagram2.png') }}" alt="" />
            <a href="#">
                <img class="rounded-3xl w-full " src="{{ asset('storage/image/ecommerce1.png') }}" alt="" />
            </a>
            <div class="py-5">
                <p class="my-5 font-lato lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs">Info lebih lanjut mengenai produk kunjungi sosial media instagram @cikopimangeko</p>
                <div class="space-y-4 mb-5 my-10 sm:flex-row sm:justify-end sm:space-y-0">
                    <a href="#" class="inline-flex justify-end items-center py-3 px-5 font-lato font-bold lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817]">
                        Lebih Lanjut
                        <img class="ms-3" src="{{ asset('storage/image/arrow-white.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="max-w-sm bg-white rounded-3xl shadow-[0px_8px_15px_4px_rgba(0,0,0,0.25)] px-7">
            <img class="py-5" src="{{ asset('storage/image/tokopedia2.png') }}" alt="" />
            <a href="#">
                <img class="rounded-3xl w-full" src="{{ asset('storage/image/ecommerce2.png') }}" alt="" />
            </a>
            <div class="py-5">
                <p class="my-5 text-justify w-full lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs">Temukan produk yang dibutuhkan di Tokopedia @cikopimangeko</p>
                <div class="space-y-4 mb-5 my-10 sm:flex-row sm:justify-end sm:space-y-0">
                    <a href="#" class="inline-flex justify-end items-center py-3 px-5 font-lato font-bold lg:text-base md:text-sm sm:text-sm max-[640px]:text-xs text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817]">
                        Lebih Lanjut
                        <img class="ms-3" src="{{ asset('storage/image/arrow-white.png') }}" alt="">
                    </a>
                </div>
        </div>
    </div>
</div>
</x-layout>