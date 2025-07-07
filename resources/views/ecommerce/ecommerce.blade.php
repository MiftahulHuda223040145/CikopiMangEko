<x-layout>
{{-- Hero --}}
<section class="bg-center bg-no-repeat pb-10" style="background-image: url('{{ asset('storage/image/hero-image-ecommerce.png') }}')">
    <div class="px-4 mx-auto max-w-screen-xl place-items-start text-left pt-56">
        <div class="pr-24 pt-60 px-15">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Marketplace</h1>
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">& Order</h1>
            <p class="w-100 mb-8 text-base font-normal text-white">Buat pesanan anda sekarang melalui Tokopedia dan Whatsapp untuk Luar kota dan dalam kota.</p>
        </div>
    </div>
</section>

<div class="container max-w-screen px-25 my-15 grid grid-cols-2 place-items-center">
    <div class="max-w-full h-[350px] bg-center bg-no-repeat rounded-lg p-6" style="background-image: url('{{ asset('storage/image/foto-acehgayo.png') }}')">
        <div class="rounded-4xl place-content-end h-full pr-25">
            <a href="#" class="inline-flex justify-end items-center py-3 px-5 text-base font-medium text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817]">
                Lebih Lanjut
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="max-w-full h-[350px] bg-center bg-no-repeat rounded-lg p-6" style="background-image: url('{{ asset('storage/image/foto-acehgayo.png') }}')">
        <div class="rounded-4xl place-content-end h-full pr-25">
            <a href="#" class="inline-flex justify-end items-center py-3 px-5 text-base font-medium text-center text-[#FFFEF4] rounded-lg bg-[#39312F] hover:bg-[#1c1817]">
                Lebih Lanjut
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
</div>
</x-layout>