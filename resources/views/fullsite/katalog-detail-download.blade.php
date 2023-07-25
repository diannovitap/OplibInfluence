<x-fullsite-layout>
    <div class="p-16">
        <div class="">
            <h1 class="text-3xl font-bold">KATALOG</h1>
            <p class="text-[#FF4500]"><a href="{{ route('katalog.fullsite') }}">Beranda</a> <span
                    class="text-[#585654]">/</span> <a href="{{ route('katalog.fullsite') }}">Katalog</a> <span
                    class="text-[#585654]">/</span> <span class="text-[#938C8C]">Detail</span></p>
        </div>
        <div class="mt-10">
            <div class="bg-[#B22222] text-white text-xl font-bold py-5 pl-16 rounded-t-lg">
                Telkom University Open Library
            </div>
            <div class="bg-[#F4F4F4] px-10 pt-10 pb-20">
                <img src="/assets/dokumen.png" alt="Photo of Dokumen">
            </div>
            <div class="bg-[#B22222] text-white text-xl flex justify-center items-center gap-2 font-bold py-5 pl-16 rounded-b-lg">
                <img class="cursor-pointer" src="/assets/download/plus.png" alt="">
                <img class="cursor-pointer" src="/assets/download/minus.png" alt="">
                <img class="cursor-pointer" src="/assets/download/play.png" alt="">
                <img class="cursor-pointer" src="/assets/download/select.png" alt="">
                <img class="mx-1 cursor-pointer" src="/assets/download/save.png" alt="">
                <img class="cursor-pointer" src="/assets/download/list.png" alt="">
                <img class="mx-1 cursor-pointer" src="/assets/download/multiple.png" alt="">
                <img class="cursor-pointer" src="/assets/download/pdf.png" alt="">
                <img class="mx-1 cursor-pointer" src="/assets/download/volume.png" alt="">
                <img class="cursor-pointer" src="/assets/download/fullscreen.png" alt="">
            </div>
        </div>
    </div>
    <div class="bg-[#F0AD4E]">
        <h1 class="flex items-center justify-center text-2xl font-bold text-white" style="height: 10vh;">
            Copyright@2023 - Telkom University Open Library</h1>
    </div>
</x-fullsite-layout>
