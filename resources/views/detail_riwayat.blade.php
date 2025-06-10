<x-app-layout>
@section('content')
<div class="min-h-screen">
    <div class=" min-h-screen py-10 px-4 sm:px-6 lg:px-8 font-poppins">
        {{-- Header --}}
        <div class="flex items-center space-x-3 mb-6">
            <button onclick="history.back()" class="text-gray-600 hover:text-gray-800">
                <i class="fa-solid fa-arrow-left text-lg"></i>
            </button>
            <div class="flex items-center space-x-2">
                <i class="fa-solid fa-receipt text-red-600"></i>
                <h1 class="text-2xl font-bold text-red-600">Detail Pesanan</h1>
            </div>
        </div>

        {{-- Main Content --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6">
            {{-- Alamat Pengiriman --}}
            <div class="mb-8">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-location-dot text-red-600"></i>
                        <h2 class="text-lg font-semibold text-red-600">Alamat Pengiriman</h2>
                    </div>
                    <button class="text-blue-600 hover:text-blue-800 font-medium">Edit</button>
                </div>
                <div class="ml-6 border-b px-6 py-4">
                    <p class="font-semibold text-gray-800 mb-1">Panji Petualang</p>
                    <div class="flex items-start space-x-2 text-gray-600">
                        <i class="fa-solid fa-map-pin text-sm mt-1"></i>
                        <p>Jl. Jend. Sudirman No.296, Pereng, Sokanegara, Kec. Purwokerto Tim, Kabupaten Banyumas, Jawa Tengah 53116</p>
                    </div>
                </div>
            </div>

            {{-- Produk Dipesan --}}
            <div class="mb-8">
                <h2 class="text-lg font-semibold text-gray-800 mb-6">Produk Dipesan</h2>
                
                {{-- Header Table --}}
                <div class="grid grid-cols-12 gap-4 mb-4 pb-3 border-b border-gray-200 text-sm font-medium text-gray-600">
                    <div class="col-span-6">Produk</div>
                    <div class="col-span-2 text-center">Harga Satuan</div>
                    <div class="col-span-2 text-center">Jumlah</div>
                    <div class="col-span-2 text-right">Subtotal</div>
                </div>

                {{-- Product Item 1 --}}
                <div class="grid grid-cols-12 gap-4 items-center py-4 border-b border-gray-100">
                    <div class="col-span-6 flex items-center space-x-4">
                        <input type="checkbox" class="w-4 h-4 text-red-600 border-gray-300 rounded focus:ring-red-500" checked disabled>
                        <img src="https://via.placeholder.com/60x60/4A90E2/FFFFFF?text=Xiaomi" 
                             alt="Snickers" class="w-15 h-15 object-cover rounded border">
                        <div>
                            <p class="font-medium text-gray-800">Snickers</p>
                        </div>
                    </div>
                    <div class="col-span-2 text-center">
                        <p class="font-medium text-gray-800">Rp 9.500</p>
                    </div>
                    <div class="col-span-2 text-center">
                        <p class="font-medium text-gray-800">1</p>
                    </div>
                    <div class="col-span-2 text-right">
                        <p class="font-bold text-red-600">Rp 9.500</p>
                    </div>
                </div>

                {{-- Product Item 2 --}}
                <div class="grid grid-cols-12 gap-4 items-center py-4 border-b border-gray-100">
                    <div class="col-span-6 flex items-center space-x-4">
                        <input type="checkbox" class="w-4 h-4 text-red-600 border-gray-300 rounded focus:ring-red-500" checked disabled>
                        <img src="https://via.placeholder.com/60x60/333333/FFFFFF?text=Xiaomi" 
                             alt="Kitkat 4 Fingers" class="w-15 h-15 object-cover rounded border">
                        <div>
                            <p class="font-medium text-gray-800">Kitkat 4 Fingers</p>
                        </div>
                    </div>
                    <div class="col-span-2 text-center">
                        <p class="font-medium text-gray-800">Rp 9.500</p>
                    </div>
                    <div class="col-span-2 text-center">
                        <p class="font-medium text-gray-800">1</p>
                    </div>
                    <div class="col-span-2 text-right">
                        <p class="font-bold text-red-600">Rp 9.500</p>
                    </div>
                </div>
            </div>

            {{-- Voucher Section --}}
            <div class="mb-8 ">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-ticket text-red-600"></i>
                        <h3 class="text-lg font-semibold text-red-600">Voucher</h3>
                    </div>
                    <button class="text-blue-600 hover:text-blue-800 font-medium">Pilih Voucher</button>
                </div>
            </div>

            {{-- Payment Summary --}}
            <div class="border-t pt-6">
                <div class="flex justify-end">
                    <div class="w-80 space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Subtotal Pesanan</span>
                            <span class="font-medium">Rp 19.000</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Subtotal Pengiriman</span>
                            <span class="font-medium">Rp 3.500</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Biaya Layanan</span>
                            <span class="font-medium">Rp 2.500</span>
                        </div>
                        <hr class="border-gray-200">
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-red-600">Total Pembayaran</span>
                            <span class="text-xl font-bold text-red-600">Rp 21.500</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Action Buttons --}}
            <div class="flex justify-end space-x-4 mt-8 pt-6 border-t">
                <button id="btn-kembali" class="px-8 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition-colors font-medium">
                    Kembali
                </button>
                <button id="btn-repeatbuy" class="px-8 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors font-medium">
                    Beli Lagi
                </button>
            </div>

            {{-- Order Info --}}
            <div class="mt-6 pt-6 border-t">
                <div class="flex justify-between items-center text-sm text-gray-600">
                    <div>
                        <p><span class="font-medium">Order ID:</span> #TR001</p>
                        <p><span class="font-medium">Tanggal Pesanan:</span> 04 Juni 2025, 15:21</p>
                    </div>
                    <div class="text-right">
                        <span class="inline-block bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full font-medium">
                            Pesanan Selesai
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const kembaliBtn = document.getElementById('btn-kembali');
        const beliLagiBtn = document.getElementById('btn-repeatbuy');

        if (kembaliBtn) {
            kembaliBtn.addEventListener('click', function (e) {
                e.preventDefault();
                window.history.back();
            });
        }

        if (beliLagiBtn) {
            beliLagiBtn.addEventListener('click', function (e) {
                e.preventDefault();
                window.location.href = "{{ route('cart') }}";
            });
        }
    });
</script>
@endpush
</x-app-layout>