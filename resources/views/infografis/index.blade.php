<x-app-layout>
    <div class="p-16">
        <div>
            <h1 class="text-3xl font-bold">INFOGRAFIS</h1>
            <p class="text-[#FF4500]"><a href="/">Beranda</a> <span class="text-[#585654]">/</span> <a
                    href="{{ route('infografis.index') }}">Infografis</a></p>
        </div>

        <div class="bg-[#F4F4F4] mt-10 px-10 py-8 rounded-lg">
            <div class="flex justify-between font-medium">
                <div class="bg-[#F0AD4E]  text-white border border-[#F0AD4E] py-1 px-7 rounded-md" id="aksesonlinekaryailmiahbutton">Akses Online Karya Ilmiah</div>
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md" id="aksesonlineebookbutton">Akses Online E-book</div>
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md" id="reservasionlinebutton">Reservasi Online</div>
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md" id="peminjamanbukubutton">Peminjaman Buku</div>
            </div>
            <div class="flex justify-around font-medium mt-5">
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md" id="perpanjanganbukuonlinebutton">Perpanjangan Buku Online</div>
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md" id="pengembalianbukubutton">Pengembalian Buku</div>
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md" id="prosedurketeranganbutton">Prosedur Keterangan Bebas
                    Perpustakaan</div>
            </div>
            <div class="flex justify-between font-medium mt-5">
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md" id="unggahfilebutton">Unggah File Artikel Tugas Akhir</div>
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md" id="approvalbutton">Approval Tugas Akhir</div>
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md" id="uploadbukubutton">Upload Buku Karya Dosen</div>
                <div class="bg-white border border-[#F0AD4E] py-1 px-7 rounded-md" id="unggahkaryabutton">Unggah Karya Akhir</div>
            </div>
        </div>

        <div class="bg-[#F0AD4E] rounded-lg py-5 px-10 mt-10">
            <!-- <h1 class="text-3xl font-bold text-center mb-5">Akses Online Karya Ilmiah</h1> -->
            <div class="flex justify-center">

                <div id="animation-carousel" class="relative w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden rounded-lg" style="height: 100vh;">
                        <!-- Item 1 -->
                        <div class="hidden duration-200 ease-linear" data-carousel-item="active" id="aksesonlinekaryailmiah">
                            <h1 class="text-3xl font-bold text-center mb-5">Akses Online Karya Ilmiah</h1>
                            <img src="/assets/aksesonline.png"
                                class="absolute block w-8/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-200 ease-linear" data-carousel-item id="aksesonlineebook">
                            <h1 class="text-3xl font-bold text-center mb-5">Akses Online E-book</h1>

                            <img src="/assets/aksesonline.png"
                                class="absolute block w-8/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-200 ease-linear" data-carousel-item id="reservasionline">
                            <h1 class="text-3xl font-bold text-center mb-5">Reservasi Online</h1>

                            <img src="/assets/aksesonline.png"
                                class="absolute block w-8/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-200 ease-linear" data-carousel-item id="peminjamanbuku">
                            <h1 class="text-3xl font-bold text-center mb-5">Peminjaman Buku</h1>

                            <img src="/assets/aksesonline.png"
                                class="absolute block w-8/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-200 ease-linear" data-carousel-item id="perpanjanganbukuonline">
                            <h1 class="text-3xl font-bold text-center mb-5">Perpanjangan Buku Online</h1>

                            <img src="/assets/aksesonline.png"
                                class="absolute block w-8/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 7 -->
                        <div class="hidden duration-200 ease-linear" data-carousel-item id="pengembalianbuku">
                            <h1 class="text-3xl font-bold text-center mb-5">Pengembalian Buku</h1>

                            <img src="/assets/aksesonline.png"
                                class="absolute block w-8/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-200 ease-linear" data-carousel-item id="prosedurketerangan">
                            <h1 class="text-3xl font-bold text-center mb-5">Prosedur Keterangan Bebas Perpustakaan</h1>

                            <img src="/assets/aksesonline.png"
                                class="absolute block w-8/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-200 ease-linear" data-carousel-item id="unggahfile">
                            <h1 class="text-3xl font-bold text-center mb-5">Unggah File Artikel Tugas Akhir</h1>

                            <img src="/assets/aksesonline.png"
                                class="absolute block w-8/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-200 ease-linear" data-carousel-item id="approval">
                            <h1 class="text-3xl font-bold text-center mb-5">Approval Tugas Akhir</h1>

                            <img src="/assets/aksesonline.png"
                                class="absolute block w-8/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-200 ease-linear" data-carousel-item id="uploadbuku">
                            <h1 class="text-3xl font-bold text-center mb-5">Uplaod Buku Karya Dosen</h1>

                            <img src="/assets/aksesonline.png"
                                class="absolute block w-8/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-200 ease-linear" data-carousel-item id="unggahkarya">
                            <h1 class="text-3xl font-bold text-center mb-5">Unggah Karya Akhir</h1>

                            <img src="/assets/aksesonline.png"
                                class="absolute block w-8/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" onclick="classCheckPrev()"
                        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" onclick="classCheckNext()"
                        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
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
<script>

    function classCheckPrev() {
        if(document.getElementById('aksesonlinekaryailmiah').classList.contains('z-20')){
            document.getElementById('unggahkaryabutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('unggahkaryabutton').classList.add("text-white");
            document.getElementById('unggahkaryabutton').classList.remove("bg-white");
            document.getElementById('aksesonlinekaryailmiahbutton').classList.remove("text-white");
            document.getElementById('aksesonlinekaryailmiahbutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('aksesonlinekaryailmiahbutton').classList.add("bg-white");
        }
        if(document.getElementById('aksesonlineebook').classList.contains('z-20')){
            document.getElementById('aksesonlinekaryailmiahbutton').classList.add("text-white");
            document.getElementById('aksesonlinekaryailmiahbutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('aksesonlinekaryailmiahbutton').classList.remove("bg-white");
            document.getElementById('aksesonlineebookbutton').classList.add("bg-white");
            document.getElementById('aksesonlineebookbutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('aksesonlineebookbutton').classList.remove("text-white");
        }
        if(document.getElementById('reservasionline').classList.contains('z-20')){
            document.getElementById('aksesonlineebookbutton').classList.remove("bg-white");
            document.getElementById('aksesonlineebookbutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('aksesonlineebookbutton').classList.add("text-white");
            document.getElementById('reservasionlinebutton').classList.remove("text-white");
            document.getElementById('reservasionlinebutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('reservasionlinebutton').classList.add("bg-white");
        }
        if(document.getElementById('peminjamanbuku').classList.contains('z-20')){
            document.getElementById('peminjamanbukubutton').classList.remove("text-white");
            document.getElementById('peminjamanbukubutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('peminjamanbukubutton').classList.add("bg-white");
            document.getElementById('reservasionlinebutton').classList.remove("bg-white");
            document.getElementById('reservasionlinebutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('reservasionlinebutton').classList.add("text-white");
        }
        if(document.getElementById('perpanjanganbukuonline').classList.contains('z-20')){
            document.getElementById('peminjamanbukubutton').classList.add("text-white");
            document.getElementById('peminjamanbukubutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('peminjamanbukubutton').classList.remove("bg-white");
            document.getElementById('perpanjanganbukuonlinebutton').classList.add("bg-white");
            document.getElementById('perpanjanganbukuonlinebutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('perpanjanganbukuonlinebutton').classList.remove("text-white");
        }
        if(document.getElementById('pengembalianbuku').classList.contains('z-20')){
            document.getElementById('perpanjanganbukuonlinebutton').classList.add("text-white");
            document.getElementById('perpanjanganbukuonlinebutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('perpanjanganbukuonlinebutton').classList.remove("bg-white");
            document.getElementById('pengembalianbukubutton').classList.add("bg-white");
            document.getElementById('pengembalianbukubutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('pengembalianbukubutton').classList.remove("text-white");
        }
        if(document.getElementById('prosedurketerangan').classList.contains('z-20')){
            document.getElementById('pengembalianbukubutton').classList.add("text-white");
            document.getElementById('pengembalianbukubutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('pengembalianbukubutton').classList.remove("bg-white");
            document.getElementById('prosedurketeranganbutton').classList.add("bg-white");
            document.getElementById('prosedurketeranganbutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('prosedurketeranganbutton').classList.remove("text-white");
        }
        if(document.getElementById('unggahfile').classList.contains('z-20')){
            document.getElementById('prosedurketeranganbutton').classList.add("text-white");
            document.getElementById('prosedurketeranganbutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('prosedurketeranganbutton').classList.remove("bg-white");
            document.getElementById('unggahfilebutton').classList.add("bg-white");
            document.getElementById('unggahfilebutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('unggahfilebutton').classList.remove("text-white");
        }
        if(document.getElementById('approval').classList.contains('z-20')){
            document.getElementById('unggahfilebutton').classList.add("text-white");
            document.getElementById('unggahfilebutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('unggahfilebutton').classList.remove("bg-white");
            document.getElementById('approvalbutton').classList.add("bg-white");
            document.getElementById('approvalbutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('approvalbutton').classList.remove("text-white");
        }
        if(document.getElementById('uploadbuku').classList.contains('z-20')){
            document.getElementById('approvalbutton').classList.add("text-white");
            document.getElementById('approvalbutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('approvalbutton').classList.remove("bg-white");
            document.getElementById('uploadbukubutton').classList.add("bg-white");
            document.getElementById('uploadbukubutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('uploadbukubutton').classList.remove("text-white");
        }
        if(document.getElementById('unggahkarya').classList.contains('z-20')){
            document.getElementById('uploadbukubutton').classList.add("text-white");
            document.getElementById('uploadbukubutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('uploadbukubutton').classList.remove("bg-white");
            document.getElementById('unggahkaryabutton').classList.add("bg-white");
            document.getElementById('unggahkaryabutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('unggahkaryabutton').classList.remove("text-white");
        } 
    }

    function classCheckNext() {
        if(document.getElementById('aksesonlinekaryailmiah').classList.contains('z-20')){
            document.getElementById('aksesonlineebookbutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('aksesonlineebookbutton').classList.add("text-white");
            document.getElementById('aksesonlineebookbutton').classList.remove("bg-white");
            document.getElementById('aksesonlinekaryailmiahbutton').classList.remove("text-white");
            document.getElementById('aksesonlinekaryailmiahbutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('aksesonlinekaryailmiahbutton').classList.add("bg-white");
        }
        if(document.getElementById('aksesonlineebook').classList.contains('z-20')){
            document.getElementById('reservasionlinebutton').classList.add("text-white");
            document.getElementById('reservasionlinebutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('reservasionlinebutton').classList.remove("bg-white");
            document.getElementById('aksesonlineebookbutton').classList.add("bg-white");
            document.getElementById('aksesonlineebookbutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('aksesonlineebookbutton').classList.remove("text-white");
        }
        if(document.getElementById('reservasionline').classList.contains('z-20')){
            document.getElementById('peminjamanbukubutton').classList.remove("bg-white");
            document.getElementById('peminjamanbukubutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('peminjamanbukubutton').classList.add("text-white");
            document.getElementById('reservasionlinebutton').classList.remove("text-white");
            document.getElementById('reservasionlinebutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('reservasionlinebutton').classList.add("bg-white");
        }
        if(document.getElementById('peminjamanbuku').classList.contains('z-20')){
            document.getElementById('peminjamanbukubutton').classList.remove("text-white");
            document.getElementById('peminjamanbukubutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('peminjamanbukubutton').classList.add("bg-white");
            document.getElementById('perpanjanganbukuonlinebutton').classList.remove("bg-white");
            document.getElementById('perpanjanganbukuonlinebutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('perpanjanganbukuonlinebutton').classList.add("text-white");
        }
        if(document.getElementById('perpanjanganbukuonline').classList.contains('z-20')){
            document.getElementById('pengembalianbukubutton').classList.add("text-white");
            document.getElementById('pengembalianbukubutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('pengembalianbukubutton').classList.remove("bg-white");
            document.getElementById('perpanjanganbukuonlinebutton').classList.add("bg-white");
            document.getElementById('perpanjanganbukuonlinebutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('perpanjanganbukuonlinebutton').classList.remove("text-white");
        }
        if(document.getElementById('pengembalianbuku').classList.contains('z-20')){
            document.getElementById('prosedurketeranganbutton').classList.add("text-white");
            document.getElementById('prosedurketeranganbutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('prosedurketeranganbutton').classList.remove("bg-white");
            document.getElementById('pengembalianbukubutton').classList.add("bg-white");
            document.getElementById('pengembalianbukubutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('pengembalianbukubutton').classList.remove("text-white");
        }
        if(document.getElementById('prosedurketerangan').classList.contains('z-20')){
            document.getElementById('unggahfilebutton').classList.add("text-white");
            document.getElementById('unggahfilebutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('unggahfilebutton').classList.remove("bg-white");
            document.getElementById('prosedurketeranganbutton').classList.add("bg-white");
            document.getElementById('prosedurketeranganbutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('prosedurketeranganbutton').classList.remove("text-white");
        }
        if(document.getElementById('unggahfile').classList.contains('z-20')){
            document.getElementById('approvalbutton').classList.add("text-white");
            document.getElementById('approvalbutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('approvalbutton').classList.remove("bg-white");
            document.getElementById('unggahfilebutton').classList.add("bg-white");
            document.getElementById('unggahfilebutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('unggahfilebutton').classList.remove("text-white");
        }
        if(document.getElementById('approval').classList.contains('z-20')){
            document.getElementById('uploadbukubutton').classList.add("text-white");
            document.getElementById('uploadbukubutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('uploadbukubutton').classList.remove("bg-white");
            document.getElementById('approvalbutton').classList.add("bg-white");
            document.getElementById('approvalbutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('approvalbutton').classList.remove("text-white");
        }
        if(document.getElementById('uploadbuku').classList.contains('z-20')){
            document.getElementById('unggahkaryabutton').classList.add("text-white");
            document.getElementById('unggahkaryabutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('unggahkaryabutton').classList.remove("bg-white");
            document.getElementById('uploadbukubutton').classList.add("bg-white");
            document.getElementById('uploadbukubutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('uploadbukubutton').classList.remove("text-white");
        }
        if(document.getElementById('unggahkarya').classList.contains('z-20')){
            document.getElementById('aksesonlinekaryailmiahbutton').classList.add("text-white");
            document.getElementById('aksesonlinekaryailmiahbutton').classList.add("bg-[#F0AD4E]");
            document.getElementById('aksesonlinekaryailmiahbutton').classList.remove("bg-white");
            document.getElementById('unggahkaryabutton').classList.add("bg-white");
            document.getElementById('unggahkaryabutton').classList.remove("bg-[#F0AD4E]");
            document.getElementById('unggahkaryabutton').classList.remove("text-white");
        } 
    }

</script>
