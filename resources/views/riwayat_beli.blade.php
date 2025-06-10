<x-app-layout>
@section('content')
<div class="min-h-screen text-white">
    <div class="bg-white text-gray-900 max-w-6xl mx-auto p-6 mt-6 rounded shadow">
        {{-- Header --}}
        <div class="flex items-center space-x-2 mb-6">
            <i class="fa-solid fa-rotate-left text-red-600"></i>
            <h1 class="text-xl font-bold text-red-600">Riwayat Pembelian</h1>
        </div>

        {{-- Card Riwayat - Clickable --}}
        <div class="bg-gray-50 p-4 rounded-xl shadow-inner hover:shadow-lg transition-shadow duration-300 cursor-pointer border border-transparent hover:border-red-200"
             onclick="window.location.href='{{ route('detail_riwayat') }}'">
            <div class="flex items-center justify-between mb-4">
                {{-- Produk --}}
                <div class="flex items-center space-x-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Snickers-barpromo.png/320px-Snickers-barpromo.png"
                         alt="Snickers" class="w-20 h-20 object-contain border rounded" />
                    <div>
                        <p class="font-semibold">Snickers 45gr</p>
                        <p class="text-sm text-gray-600">x1</p>
                        <p class="text-xs text-gray-500 mt-1">Order #12345</p>
                        <p class="text-xs text-gray-500">15 Des 2024</p>
                    </div>
                </div>

                {{-- Status dan Harga --}}
                <div class="text-right">
                    <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full mb-2">
                        Selesai
                    </span>
                    <p class="text-sm line-through text-gray-500">Rp 6.000</p>
                    <p class="text-red-600 font-semibold">Rp 5.400</p>
                </div>
            </div>

            <hr class="border-gray-300 mb-4" />

            {{-- Total --}}
            <div class="flex justify-between items-center">
                <div class="text-sm text-gray-600">
                    <i class="fa-solid fa-eye mr-1"></i>
                    Klik untuk melihat detail
                </div>
                <div class="flex items-center space-x-4">
                    <span class="font-semibold">Total Pesanan:</span>
                    <span class="text-red-600 font-bold">Rp 5.400</span>
                </div>
            </div>

            {{-- Tombol --}}
            <div class="flex justify-end mt-4">
                <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-1 rounded shadow"
                        onclick="event.stopPropagation(); beliLagi(1)">
                    Beli Lagi
                </button>
            </div>
        </div>

        {{-- Card Riwayat Kedua - Contoh tambahan --}}
        <div class="bg-gray-50 p-4 rounded-xl shadow-inner hover:shadow-lg transition-shadow duration-300 cursor-pointer border border-transparent hover:border-red-200 mt-8"
             onclick="window.location.href='{{ route('detail_riwayat') }}'">
            <div class="flex items-center justify-between mb-4">
                {{-- Produk --}}
                <div class="flex items-center space-x-4">
                    <img src="https://via.placeholder.com/80x80/FF6B6B/FFFFFF?text=Kitkat"
                         alt="Kitkat" class="w-20 h-20 object-contain border rounded" />
                    <div>
                        <p class="font-semibold">KitKat 4 Fingers</p>
                        <p class="text-sm text-gray-600">x2</p>
                        <p class="text-xs text-gray-500 mt-1">Order #12344</p>
                        <p class="text-xs text-gray-500">14 Des 2024</p>
                    </div>
                </div>

                {{-- Status dan Harga --}}
                <div class="text-right">
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full mb-2">
                        Dikirim
                    </span>
                    <p class="text-sm line-through text-gray-500">Rp 12.000</p>
                    <p class="text-red-600 font-semibold">Rp 10.800</p>
                </div>
            </div>

            <hr class="border-gray-300 mb-4" />

            {{-- Total --}}
            <div class="flex justify-between items-center">
                <div class="text-sm text-gray-600">
                    <i class="fa-solid fa-eye mr-1"></i>
                    Klik untuk melihat detail
                </div>
                <div class="flex items-center space-x-4">
                    <span class="font-semibold">Total Pesanan:</span>
                    <span class="text-red-600 font-bold">Rp 10.800</span>
                </div>
            </div>

            {{-- Tombol --}}
            <div class="flex justify-end mt-4">
                <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-1 rounded shadow"
                        onclick="event.stopPropagation(); beliLagi(2)">
                    Beli Lagi
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function beliLagi(productId) {
    // Redirect ke halaman produk atau keranjang
    window.location.href = `/produk/${productId}`;
}
</script>

@endsection
</x-app-layout>