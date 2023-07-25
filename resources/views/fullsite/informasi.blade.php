<x-fullsite-layout>
    <div class="p-16">

        <div>
            <h1 class="text-3xl font-bold">INFORMASI PENTING</h1>
            <p class="text-[#FF4500]"><a href="/">Beranda</a> <span class="text-[#585654]">/</span> <a
                    href="{{ route('informasi.index') }}">Informasi</a></p>
        </div>
        <div class="bg-[#F4F4F4] px-10 pt-10 pb-20 mt-10 rounded-md">
            <h1 class="text-2xl font-bold text-center">Laporan Magang & KP</h1>
            <div class="flex flex-col items-end gap-3">

                <div class="flex justify-end mt-5 gap-5 w-3/12">

                    <select id="countries"
                        class="w-2/5 bg-gray-50 border font-medium border-[#F0AD4E] text-gray-900 text-sm rounded-lg focus:ring-[#F0AD4E] focus:border-[#F0AD4E] block px-2.5 py-1">
                        <option selected>Unggah</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                    <button class="bg-white px-3 py-1 border border-[#07559F] rounded-lg w-3/5">Tambah Data</button>

                </div>

                <div class="flex items-center bg-white border w-3/12 border-[#757575] px-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#757575" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <input class="border-0 focus:ring-0 bg-transparent py-1 text-[#757575] w-full" placeholder="Search">
                </div>
            </div>
            <div>

                <div>

                    <div class="relative overflow-x-auto sm:rounded-lg mt-5">
                        <table class="w-full text-sm text-left">
                            <thead class="text-xs uppercase bg-[#F0AD4E]">
                                <tr>
                                    <th scope="col" class="px-6 py-3 ">
                                        Judul
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Berita
                                    </th>
                                    <th scope="col" class="px-6 py-3 w-2/12">
                                        Tanggal
                                    </th>
                            </thead>
                            <tbody>
                                <tr class="bg-white text-sm border-b border-[#938C8C]">
                                    <td scope="row" class="px-4 py-4">
                                        Library Newsletter | Tel-U Open Library, Mei 2023
                                    </td>
                                    <td class="px-4 py-4">
                                        Newsletter Open Library edisi bulan Mei dapat diunduh disini
                                    </td>
                                    <td class="px-4 py-4 text-center">
                                        30 June 2023
                                    </td>
                                </tr>
                                <tr class="bg-white text-sm border-b border-[#938C8C]">
                                    <td scope="row" class="px-4 py-4">
                                        Library Newsletter | Tel-U Open Library, Juni 2023
                                    </td>
                                    <td class="px-4 py-4">

                                    </td>
                                    <td class="px-4 py-4 text-center">
                                        30 June 2023
                                    </td>
                                </tr>
                                <tr class="bg-white text-sm border-b border-[#938C8C]">
                                    <td scope="row" class="px-4 py-4">
                                        Akses e-Journal menggunakan MyLOFT
                                    </td>
                                    <td class="px-4 py-4">
                                        English Version
                                    </td>
                                    <td class="px-4 py-4 text-center">
                                        30 June 2023
                                    </td>
                                </tr>
                                <tr class="bg-white text-sm border-b border-[#938C8C]">
                                    <td scope="row" class="px-4 py-4">
                                        Open Library Book Review Competition
                                    </td>
                                    <td class="px-4 py-4">
                                        Open Library Book Review Competition Hadiah Lomba Juara 1 : Trofi,...
                                    </td>
                                    <td class="px-4 py-4 text-center">
                                        30 June 2023
                                    </td>
                                </tr>
                                <tr class="bg-white text-sm border-b border-[#938C8C]">
                                    <td scope="row" class="px-4 py-4">
                                        Surat Bebas Kewajiban Perpustakaan (SBKP)
                                    </td>
                                    <td class="px-4 py-4">
                                        Surat Bebas Kewajiban Perpustakaan (SBKP) 1. Sosialisasi Tugas Akhir
                                        Mahasiswa...
                                    </td>
                                    <td class="px-4 py-4 text-center">
                                        30 June 2023
                                    </td>
                                </tr>
                                <tr class="bg-white text-sm border-b border-[#938C8C]">
                                    <td scope="row" class="px-4 py-4">
                                        About Us
                                    </td>
                                    <td class="px-4 py-4">
                                        Telkom University Open Library Telkom University Open Library adalah brand...
                                    </td>
                                    <td class="px-4 py-4 text-center">
                                        30 June 2023
                                    </td>
                                </tr>
                                <tr class="bg-white text-sm border-b border-[#938C8C]">
                                    <td scope="row" class="px-4 py-4">
                                        Aturan Umum Tugas Akhir Sebagai Penelitian dan Publikasi di Lingkungan
                                        Universitas Telkom
                                    </td>
                                    <td class="px-4 py-4">
                                        Dalam rangka melaksanakan ketentuan Pasal 46 Ayat (2) Undang-Undang...
                                    </td>
                                    <td class="px-4 py-4 text-center">
                                        30 June 2023
                                    </td>
                                </tr>
                                <tr class="bg-white text-sm border-b border-[#938C8C]">
                                    <td scope="row" class="px-4 py-4">
                                        Layanan Digital Reading Area (Akses Kindle)
                                    </td>
                                    <td class="px-4 py-4">
                                        Open Library Digital Reading AreaPada Digital Reading Area, Open...
                                    </td>
                                    <td class="px-4 py-4 text-center">
                                        30 June 2023
                                    </td>
                                </tr>
                                <tr class="bg-white text-sm border-b border-[#938C8C]">
                                    <td scope="row" class="px-4 py-4">
                                        Layanan Assistive Technology
                                    </td>
                                    <td class="px-4 py-4">
                                        Infografis Assistive Technology Service Layanan ini memiliki fitur yang dapat...
                                    </td>
                                    <td class="px-4 py-4 text-center">
                                        30 June 2023
                                    </td>
                                </tr>
                                <tr class="bg-white text-sm border-b border-[#938C8C] pb-10">
                                    <td scope="row" class="px-4 py-4">
                                        Library Newsletter | Tel-U Open Library, April 2023
                                    </td>
                                    <td class="px-4 py-4">
                                        Newsletter Open Library edisi bulan April dapat diunduh disini
                                    </td>
                                    <td class="px-4 py-4 text-center">
                                        30 June 2023
                                    </td>
                                </tr>
                                <tr class="bg-white text-sm">
                                    <td></td>
                                    <td></td>
                                    <td colspan="3" class="px-4 py-4 gap-2 justify-end margin-">

                                        Prev
                                        <button class="bg-white px-3 border border-[#F0AD4E] rounded-md">1</button>
                                        <button class="bg-[#F0AD4E] px-3 rounded-md">2</button>
                                        <button class="bg-white px-3 border border-[#F0AD4E] rounded-md">3</button>
                                        Next
                                    </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="bg-[#F0AD4E]">
        <h1 class="flex items-center justify-center text-2xl font-bold text-white" style="height: 10vh;">
            Copyright@2023 - Telkom University Open Library</h1>
    </div>
</x-fullsite-layout>
