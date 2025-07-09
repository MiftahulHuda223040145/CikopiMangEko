<x-layout>
{{-- Hero --}}
<section class="bg-center bg-no-repeat pb-10" style="background-image: url('{{ asset('storage/image/hero-image-news.png') }}')">
    <div class="px-4 mx-auto max-w-screen-xl place-items-start text-left pt-65">
        <div class="pr-24 pt-90 px-25">
            <h1 class="mb-10 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Cikopi Mang Eko News</h1>
            <p class="w-100 mb-8 text-base font-normal text-white">Berbagai berita tentang Cikopi Mang Eko.</p>
        </div>
    </div>
</section>

{{-- News --}}
<div class="container max-w-screen my-15">
    <div class="mx-auto px-25 grid grid-cols-2 gap-8 justify-center">
        <div class="">
            <img class="rounded-4xl mb-7" src="{{ asset('storage/image/cikopi-news1.png') }}" alt="">
            <h3 class="text-xl font-semibold pt-6 w-80">BENEFIT DARI MENGKONSUMSI KOPI DI PAGI HARI </h3>
            <p class="text-justify py-7">Dari penelitian yang dilakukan, kafein pada kopi memang bisa meningkatkan kewaspadaan dan konsentrasi, tetapi tidak berdampak langsung pada kreativitas seseorang. Selain itu, penelitian lain juga menyebut bahwa kopi tidak memiliki dampak pada kinerja otak, terutama pada memori. Namun, segelas kopi di pagi hari diketahui bisa membantu menjaga suasana hati tetap baik dan terhindar dari stres. Selain itu, ada beberapa manfaat lain yang bisa didapat dari konsumsi kopi pada pagi hari.</p>
            <p class="text-justify pt-3">Minum kopi di pagi hari dapat memberikan berbagai manfaat, seperti meningkatkan energi, meningkatkan fokus dan konsentrasi serta membantu menurun kan berat badan. Selain itu dapat meningkatkan kesehatan jantung, risiko diabetes, dan menurunkan resiko penyakit Alzheimer dan Parkinson.</p>
        </div>
        <div class="">
            <h1 class="text-4xl font-bold text-[#39312F] mb-5">Berita Terbaru</h1>
            <div class="mb-10">
                <img class="rounded-4xl" src="{{ asset('storage/image/cikopi-news3.png') }}" alt="">
                <h3 class="text-xl font-semibold pt-6">Cikopi Mang Eko AT Urban  Village 2025</h3>
                <p class="text-justify py-2">Cikopi Mang Eko dipercaya sebagai objek penilitian oleh Mahasiswa Telkom University, dalam rangka pengembangan businees model UMKM.</p>
            </div>
            <div class="">
                <img class="rounded-4xl" src="{{ asset('storage/image/cikopi-news2.png') }}" alt="">
                <h3 class="text-xl font-semibold pt-6 w-80">BANDUNG WEEK MARKET 2024</h3>
                <p class="text-justify py-2">Cikopi Mang Eko  mengikuti event yang di buat oleh dinas perdagangan dan perindustrian Kota Bandung, yang dilaksanakan di Bali pada tanggal 7-12 mei 2024.</p>
            </div>
        </div>
    </div>
</div>
</x-layout>