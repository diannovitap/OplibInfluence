<x-app-layout>
    <div class="p-16">
        <div>
            <h1 class="text-3xl font-bold">GALLERY</h1>
            <p class="text-[#FF4500]"><a href="/">Beranda</a> <span class="text-[#585654]">/</span> <a
                    href="{{ route('gallery.index') }}">Gallery</a></p>
        </div>
        <div>
            <h1 class="text-2xl font-bold text-center">Gallery Open Library</h1>
            <div class="grid grid-cols-3 gap-10 mt-10">
                <div class="bg-[#F0AD4E] flex flex-col items-center justify-center py-5">
                    <p class="text-center mb-1">Area Loker</p>
                    <img src="/assets/galeri1.png" alt="Photo of Gallery">
                </div>
                <div class="bg-[#F0AD4E] flex flex-col items-center justify-center py-5">
                    <p class="text-center mb-1">Area Alun-Alun</p>
                    <img src="/assets/galeri2.png" alt="Photo of Gallery">
                </div>
                <div class="bg-[#F0AD4E] flex flex-col items-center justify-center py-5">
                    <p class="text-center mb-1">Area Diskusi</p>
                    <img src="/assets/galeri3.png" alt="Photo of Gallery">
                </div>
                <div class="bg-[#F0AD4E] flex flex-col items-center justify-center py-5">
                    <p class="text-center mb-1">Mini Studio</p>
                    <img src="/assets/galeri4.png" alt="Photo of Gallery">
                </div>
                <div class="bg-[#F0AD4E] flex flex-col items-center justify-center py-5">
                    <p class="text-center mb-1">Digital Reading Area</p>
                    <img src="/assets/galeri5.png" alt="Photo of Gallery">
                </div>
                <div class="bg-[#F0AD4E] flex flex-col items-center justify-center py-5">
                    <p class="text-center mb-1">Collaboration Research</p>
                    <img src="/assets/galeri6.png" alt="Photo of Gallery">
                </div>
                <div class="bg-[#F0AD4E] flex flex-col items-center justify-center py-5">
                    <p class="text-center mb-1">Kunjungan Asesor IABEE</p>
                    <img src="/assets/galeri7.png" alt="Photo of Gallery">
                </div>
                <div class="bg-[#F0AD4E] flex flex-col items-center justify-center py-5">
                    <p class="text-center mb-1">Open House</p>
                    <img src="/assets/galeri8.png" alt="Photo of Gallery">
                </div>
                <div class="bg-[#F0AD4E] flex flex-col items-center justify-center py-5">
                    <p class="text-center mb-1">Kunjungan Univ Malaysia</p>
                    <img src="/assets/galeri9.png" alt="Photo of Gallery">
                </div>
            </div>
            <div class="flex items-center justify-center gap-2 mt-5">
                <button>Prev</button>
                <button class="border border-[#F0AD4E] px-3 rounded-md">1</button>
                <button class="bg-[#F0AD4E] border border-[#F0AD4E] px-3 rounded-md">2</button>
                <button class="border border-[#F0AD4E] px-3 rounded-md">3</button>
                <button>Next</button>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-10 mt-10">
            <div class="">
                <div class="flex gap-2 items-center bg-[#F4F4F4] shadow-md p-3">
                    <div class="p-1 rounded-sm w-fit bg-[#F0AD4E]">
                        <img src="/assets/lampiran1.png" alt="Photo of Gallery">
                    </div>
                    <h1 class="font-bold">Pengajuan Jadwal Kelas Literasi</h1>
                </div>
                <div class="flex gap-2 items-center bg-[#F4F4F4] shadow-md p-3 mt-5">
                    <div class="p-1 rounded-sm w-fit bg-[#F0AD4E]">
                        <img src="/assets/lampiran2.png" alt="Photo of Gallery">
                    </div>
                    <h1 class="font-bold">Ask A Librarian</h1>
                </div>
            </div>
            <div class="">
                <div class="flex gap-2 items-center bg-[#F4F4F4] shadow-md p-3">
                    <div class="p-1 rounded-sm w-fit bg-[#F0AD4E]">
                        <img src="/assets/lampiran3.png" alt="Photo of Gallery">
                    </div>
                    <h1 class="font-bold">Presensi Kelas Literasi</h1>
                </div>
                <div class="flex gap-2 items-center bg-[#F4F4F4] shadow-md p-3 mt-5">
                    <div class="p-1 rounded-sm w-fit bg-[#F0AD4E]">
                        <img src="/assets/lampiran4.png" alt="Photo of Gallery">
                    </div>
                    <h1 class="font-bold">Discussion Room Reservation</h1>
                </div>
                <div class="flex gap-2 items-center bg-[#F4F4F4] shadow-md p-3 mt-5">
                    <div class="p-1 rounded-sm w-fit bg-[#F0AD4E]">
                        <img src="/assets/lampiran5.png" alt="Photo of Gallery">
                    </div>
                    <h1 class="font-bold">E-CATALOGUE</h1>
                </div>

            </div>
            <div class="">
                <div class="flex gap-2 items-center bg-[#F4F4F4] shadow-md p-3">
                    <div class="p-1 rounded-sm w-fit bg-[#F0AD4E]">
                        <img src="/assets/lampiran6.png" alt="Photo of Gallery">
                    </div>
                    <h1 class="font-bold">Pengajuan Bimbingan Pemustaka</h1>
                </div>
                <div class="flex gap-2 items-center bg-[#F4F4F4] shadow-md p-3 mt-5">
                    <div class="p-1 rounded-sm w-fit bg-[#F0AD4E]">
                        <img src="/assets/lampiran7.png" alt="Photo of Gallery">
                    </div>
                    <h1 class="font-bold">FAQ</h1>
                </div>

            </div>
        </div>
        <div class="grid grid-cols-3 gap-10 mt-10">
            <div class="shadow-lg rounded-b-md">
                <div class="bg-[#F0AD4E] font-bold rounded-t-md text-center">SOSIAL MEDIA</div>
                <div class="flex justify-center items-center p-3 ">
                    <img src="/assets/sosialmedia.png" alt="Photo of Sosial Media">
                </div>
            </div>
            <div class="shadow-lg rounded-b-md">
                <div class="bg-[#F0AD4E] font-bold rounded-t-md text-center">VIDEO PROFILE</div>
                <div class="flex justify-center items-center p-3 ">
                    <img src="/assets/videoprofile.png" alt="Photo of Sosial Media">
                </div>
            </div>
            <div class="shadow-lg rounded-b-md">
                <div class="bg-[#F0AD4E] font-bold rounded-t-md text-center">VIDEO TESTIMONI</div>
                <div class="flex justify-center items-center p-3">
                    <img src="/assets/videotestimoni.png" alt="Photo of Sosial Media">
                </div>
            </div>
        </div>
        <div class="">
            <div class="shadow-lg mt-10 rounded-b-md">
                <div class="bg-[#F0AD4E] font-bold rounded-t-md text-center">VIRTUAL TOUR OPEN LIBRARY</div>
                <div class="flex justify-center items-center p-3">
                    <img src="/assets/virtual.png" alt="Photo of Sosial Media">
                </div>
            </div>
        </div>
        <hr class="items-center border-2 border-[#F0AD4E] mt-16 -mx-4">
    </div>
    @include('layouts.footer')
</x-app-layout>
