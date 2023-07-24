<x-app-layout>
    <div class="p-16">
        <div class="">
            <h1 class="text-3xl font-bold">KATALOG</h1>
            <p class="text-[#FF4500]"><a href="/">Beranda</a> <span class="text-[#585654]">/</span> <a
                    href="{{ route('katalog.index') }}">Katalog</a> <span class="text-[#585654]">/</span> <span
                    class="text-[#938C8C]">Detail</span></p>
        </div>
        <div class="bg-[#F4F4F4] px-10 pt-10 pb-20 mt-10 rounded-md">
            <div class="flex justify-between">
                <div class="">
                    <h1 class="text-2xl font-bold">Sistem Informasi Manajemen</h1>
                    <p class="text-lg font-medium">Hari Sulaksono, S.E., M.M</p>
                </div>
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                    class="bg-white border border-[#0E9302] flex items-center gap-2 h-fit font-bold py-1 px-2 rounded-md">
                    <i class="fa-solid fa-download"></i>
                    <p>Download / Flippingbook</p>
                </button>

                <div id="popup-modal" tabindex="-1"
                    class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow border border-[#F0AD4E]">
                            <button type="button"
                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="popup-modal">
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-6 text-center">
                                <h3 class="mb-5 text-lg font-normal">Silahkan Sign Up / Login Terlebih Dahulu</h3>
                                <button data-modal-hide="popup-modal" type="button"
                                    class="border border-[#F0AD4E] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    OK
                                </button>
                                <button data-modal-hide="popup-modal" type="button"
                                    class="text-white focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-[#F0AD4E] bg-[#F0AD4E] text-sm font-medium px-5 py-2.5">
                                    Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex gap-2">
                <div class="w-2/12">
                    <div class="bg-white p-1 w-fit">
                        <img src="/assets/buku.png" alt="Photo of Buku">
                    </div>
                </div>
                <div class="w-3/12">
                    <div
                        class="bg-white border w-fit border-[#F0AD4E] flex items-center gap-2 h-fit font-bold py-1 px-2 rounded-md">
                        <p>Informasi Umum</p>
                    </div>
                    <div class="mt-3">
                        <div class="leading-tight">
                            <p class="font-medium">Kode</p>
                            <p>20.01.543</p>
                        </div>
                        <div class="leading-tight">
                            <p class="font-medium">Klasifikasi</p>
                            <p>552 - Machine Learning</p>
                        </div>
                        <div class="leading-tight">
                            <p class="font-medium">Jenis</p>
                            <p>Book - Circulation (Dapat Dipinjam)</p>
                        </div>
                        <div class="leading-tight">
                            <p class="font-medium">Subjek</p>
                            <p>Sistem Informasi</p>
                        </div>
                        <div class="leading-tight">
                            <p class="font-medium">No. Rak</p>
                            <p>14 C</p>
                        </div>
                    </div>
                </div>
                <div class="w-7/12">
                    <div
                        class="bg-white border w-fit border-[#F0AD4E] flex items-center gap-2 h-fit font-bold py-1 px-2 rounded-md">
                        <p>Informasi Lainnya</p>
                    </div>
                    <div class="mt-3">
                        <p>Abstraksi</p>
                        <div>
                            Berbagai jenis komputer yang dihasilkan dan dipasarkan harganya semakin terjangkau sehingga
                            menggunakan komputer tidak lagi dipandang sebagai kemewahan melainkan keharusan. Sistem
                            informasi yang dipelajari oleh buku ini juga membahas perkembangan teknologi informasi di
                            mana
                            sangat memperhatikan data, informasi, dan pengetahuan.
                            Pada SIM ada pula faktor-faktor yang nantinya akan menentukan SIM yang dibangun, misalnya
                            sentralisasi ataukah desentralisasi, seperlunya saja dan lain sebagainya. Otomatisasi kantor
                            yaitu penerapan teknologi untuk pekerjaan kantor, mencakup semua sistem elektronik formal
                            dan
                            informal, terutama yang berkaitan dengan komunikasi informasi ke dan dari orang-orang di
                            dalam
                            maupun di luar perusahaan.
                            Pemakaian otomatisasi kantor ini meningkatkan produktivitas mereka dan mampu menyediakan
                            informasi yang lebih baik bagi pengambilan keputusan. Semuanya itu dipelajari dan tersedia
                            dalam
                            penyajian buku ini.
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <div class="flex gap-8 justify-end mt-10 w-10/12">
                    <div class="w-4/12">
                        <div class="bg-[#F0AD4E] text-center font-bold py-1 rounded-t-md">
                            Pengarang
                        </div>
                        <div class="flex gap-4 bg-white p-4 shadow-lg rounded-b-md h-32">
                            <div class="font-bold">
                                <p>Nama</p>
                                <p>Jenis</p>
                                <p>Penyunting</p>
                                <p>Penerjemah</p>
                            </div>
                            <div class="font-medium">
                                <p>Hari Sulaksono, S.E., M.M</p>
                                <p>Perorangan</p>
                                <p>-</p>
                                <p>-</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-4/12">
                        <div class="bg-[#F0AD4E] text-center font-bold py-1 rounded-t-md">
                            Penerbit
                        </div>
                        <div class="flex gap-4 bg-white p-4 shadow-lg rounded-b-md h-32">
                            <div class="font-bold">
                                <p>Nama</p>
                                <p>Kota</p>
                                <p>Tahun</p>
                            </div>
                            <div class="font-medium">
                                <p>Deepublish</p>
                                <p>Jakarta</p>
                                <p>2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-4/12">
                        <div class="bg-[#F0AD4E] text-center font-bold py-1 rounded-t-md">
                            Sirkulasi
                        </div>
                        <div class="flex gap-4 bg-white p-4 shadow-lg rounded-b-md h-32">
                            <div class="font-bold">
                                <p>Harga Sewa</p>
                                <p>Denda Harian</p>
                                <p>Jenis</p>
                            </div>
                            <div class="font-medium">
                                <p>IDR 0,00</p>
                                <p>IDR 500,00</p>
                                <p>Sirkulasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#F0AD4E]">
        <h1 class="flex items-center justify-center text-2xl font-bold text-white" style="height: 10vh;">
            Copyright@2023 - Telkom University Open Library</h1>
    </div>
</x-app-layout>
