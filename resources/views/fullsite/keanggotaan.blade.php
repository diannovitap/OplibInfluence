<x-fullsite-layout>
    <div class="p-16">

        <div>
            <h1 class="text-3xl font-bold">KEANGGOTAAN</h1>
            <p class="text-[#FF4500]"><a href="{{ route('katalog.fullsite') }}">Beranda</a> <span
                    class="text-[#585654]">/</span> <a href="{{ route('keanggotaan.fullsite') }}">Keanggotaan</a></p>
        </div>
        <div class="bg-[#F4F4F4] px-10 pt-10 pb-20 mt-10 rounded-md">
            <h1 class="text-2xl font-bold text-center">Notifikasi Anggota</h1>
            <div class="mt-5">

                <label for="countries" class="block mb-2 text-sm font-medium">No Result</label>
                <div class="flex gap-2 items-center">

                    <select id="countries"
                    class="bg-gray-50 border font-medium border-[#F0AD4E] text-gray-900 text-sm rounded-lg focus:ring-[#F0AD4E] focus:border-[#F0AD4E] block w-2/12 px-2.5 py-1">
                    <option selected>Choose an Action</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
                <button class="bg-[#F0AD4E] px-2 py-1 rounded-lg">Go</button>
            </div>
                
            </div>

        </div>
    </div>
</x-fullsite-layout>
