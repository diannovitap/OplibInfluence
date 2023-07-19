<x-app-layout>
    <div class="p-10">
        <div class="">
            <h1 class="text-3xl font-bold">KATALOG</h1>
            <p class="text-[#FF4500]"><a href="/">Beranda</a> <span class="text-[#585654]">/</span> <a href="{{ route('katalog.index') }}">Katalog</a>  <span
                    class="text-[#585654]">/</span> <span class="text-[#938C8C]">Detail</span></p>
        </div>
        <div class="bg-[#F4F4F4] px-10 pt-10 pb-20 mt-10 rounded-md">
            <div class="flex justify-between">
                <div class="">
                    <h1 class="text-2xl font-bold">Sistem Informasi Manajemen</h1>
                    <p class="text-lg font-medium">Hari Sulaksono, S.E., M.M</p>
                </div>
                <div
                    class="bg-white border border-[#0E9302] flex items-center gap-2 h-fit font-bold py-1 px-2 rounded-md">
                    <i class="fa-solid fa-download"></i>
                    <p>Download / Flippingbook</p>
                </div>
            </div>
            <div class="flex">
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
            <div class="flex gap-8 justify-end mt-10">
                <div class="w-3/12">
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
                <div class="w-3/12">
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
                <div class="w-3/12">
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
    <div class="bg-[#F0AD4E]">
        <h1 class="flex items-center justify-center text-2xl font-bold text-white" style="height: 10vh;">
            Copyright@2023 - Telkom University Open Library</h1>
    </div>
</x-app-layout>
