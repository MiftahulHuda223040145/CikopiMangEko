<x-layout>
{{-- Hero --}}
<section class="bg-center bg-no-repeat pb-10" style="background-image: url('{{ asset('storage/image/hero-image-ecommerce.png') }}')">
    <div class="px-4 mx-auto max-w-screen-xl place-items-start text-left pt-56">
        <div class="pr-24 pt-60 px-15">
            <h1 class="mb-4 text-4xl font-ppbold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Marketplace</h1>
            <h1 class="mb-4 text-4xl font-ppbold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">& Order</h1>
            <p class="w-100 mb-8 text-base font-normal font-lato text-white">Buat pesanan anda sekarang melalui Tokopedia dan Whatsapp untuk Luar kota dan dalam kota.</p>
        </div>
    </div>
</section>

{{-- Card --}}
<div class="container max-w-screen font-lato px-25 mt-15 mb-35 grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 place-items-center fade-in-up">
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
</x-layout>