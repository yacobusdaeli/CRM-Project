<x-app-layout>
@section('title', 'Notifikasi')


@section('content')
<div class=" min-h-screen py-10">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6 font-poppins">
        {{-- Header --}}
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-red-600">Notifikasi</h1>
        </div>

        {{-- Notifikasi Card 1 --}}
        <div class="mb-6 rounded border bg-gray-100">
            <div class="px-4 py-3 border-b bg-white text-gray-800 font-semibold">
                Tebus Murah dari Cadbury Dairy Milk🤯
            </div>
            <div class="p-4 text-sm text-gray-700">
                <p class="mb-1">Dapatkan Cadbury Dairy Milk 25 gr hanya Rp. 5.400 dan berlaku kelipatan</p>
                <p class="text-xs text-gray-500">10–25–2025 06:40</p>
            </div>
        </div>

        {{-- Notifikasi Card 2 --}}
        <div class="mb-6 rounded border bg-gray-100">
            <div class="px-4 py-3 border-b bg-white text-gray-800 font-semibold">
                Kejutan Spesial untuk Member Silver dan Golden Daily Mart 🧧🌾
            </div>
            <div class="p-4 text-sm text-gray-700">
                <p>
                    <span class="font-bold">SPESIAL!</span> untuk kamu yang telah menjadi member Silver dan Golden Daily Mart dapatkan cashback s/d 30.000 setiap belanja pada hari Senin di Bulan Mei.  
                    Cuss, kapan lagi dapet cashback di Daily Mart.
                </p>
                 <p class="text-xs text-gray-500">10–25–2025 06:40</p>
            </div>
        </div>

        {{-- Tambahkan notifikasi lain di sini jika perlu --}}
    </div>
</div>
@endsection
</x-app-layout>