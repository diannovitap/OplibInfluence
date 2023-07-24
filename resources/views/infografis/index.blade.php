<x-app-layout>
    <div class="p-16">
        <div>
            <h1 class="text-3xl font-bold">INFOGRAFIS</h1>
            <p class="text-[#FF4500]"><a href="/">Beranda</a> <span class="text-[#585654]">/</span> <a
                    href="{{ route('infografis.index') }}">Infografis</a></p>
        </div>

        <div class="bg-[#F4F4F4] mt-10 px-10 py-8 rounded-lg">
            <div class="flex justify-between font-medium">
                <div class="bg-[#F0AD4E] text-white py-1 px-7 rounded-md">Akses Online Karya Ilmiah</div>
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md">Akses Online E-book</div>
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md">Reservasi Online</div>
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md">Peminjaman Buku</div>
            </div>
            <div class="flex justify-around font-medium mt-5">
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md">Perpanjangan Buku Online</div>
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md">Pengembalian Buku</div>
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md">Prosedur Keterangan Bebas
                    Perpustakaan</div>
            </div>
            <div class="flex justify-between font-medium mt-5">
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md">Unggah File Artikel Tugas Akhir</div>
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md">Approval Tugas Akhir</div>
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md">Upload Buku Karya Dosen</div>
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md">Unggah Karya Akhir</div>
            </div>
        </div>

        <div class="bg-[#F0AD4E] rounded-lg py-5 px-10 mt-10">
            <h1 class="text-3xl font-bold text-center mb-5">Akses Online Karya Ilmiah</h1>
            <div class="flex justify-center">
                <img src="/assets/aksesonline.png" alt="">
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
