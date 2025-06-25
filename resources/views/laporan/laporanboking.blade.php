@extends('layouts.app') {{-- layout utama kamu, misalnya layouts/app.blade.php --}}

@section('title', 'Laporan Booking')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-bold">Laporan</h1>
</div>

<!-- Card -->
<div class="bg-white shadow rounded-lg p-6">
  <h2 class="text-lg font-semibold mb-4">Laporan Booking</h2>

  <!-- Filter Tanggal -->
  <div class="flex items-center space-x-2 mb-4">
    <input type="date" class="border rounded p-2" />
    <input type="date" class="border rounded p-2" />
    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
      <i class="fas fa-search"></i>
    </button>
    <a href="{{ url('/tambahlaporan') }}" 
       class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 ml-auto">
      + Tambah
    </a>
    <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
      <i class="fas fa-download"></i> Unduh
    </button>
  </div>

  <!-- Tabel -->
  <div class="overflow-x-auto">
    <table class="min-w-full border text-sm text-left">
      <thead class="bg-gray-200">
        <tr>
          <th class="px-4 py-2">No</th>
          <th class="px-4 py-2">ID</th>
          <th class="px-4 py-2">Tanggal</th>
          <th class="px-4 py-2">Nama</th>
          <th class="px-4 py-2">Treatment</th>
          <th class="px-4 py-2">Harga</th>
          <th class="px-4 py-2">Durasi</th>
          <th class="px-4 py-2">Options</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b">
          <td class="px-4 py-2">1</td>
          <td class="px-4 py-2">15</td>
          <td class="px-4 py-2">03 April 2025</td>
          <td class="px-4 py-2">Amanda</td>
          <td class="px-4 py-2">Paket Herbal Facial</td>
          <td class="px-4 py-2">Rp. 110.000</td>
          <td class="px-4 py-2">30 Menit</td>
          <td class="px-4 py-2 space-x-1">
            <div class="flex justify-center items-center space-x-2">
              <a href="{{ url('/editlaporan') }}" class="text-blue-600 hover:text-blue-800">
                <i class="fas fa-pen"></i>
              </a>
              <button onclick="openConfirm()" class="text-red-600 hover:text-red-800">
                <i class="fas fa-trash"></i>
              </button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div id="confirmModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
  <div class="bg-white rounded-lg shadow-lg p-6 text-center w-80">
    <div class="text-5xl text-black mb-4">
      <i class="fas fa-exclamation-circle"></i>
    </div>
    <h2 class="text-xl font-bold mb-2">Lanjutkan Hapus?</h2>
    <p class="text-gray-600 mb-4">Anda akan menghapus laporan booking</p>
    <div class="flex justify-center gap-4">
      <button onclick="confirmDelete()" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ok</button>
      <button onclick="closeConfirm()" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Batal</button>
    </div>
  </div>
</div>

<script>
  function openConfirm() {
    document.getElementById('confirmModal').classList.remove('hidden');
  }

  function closeConfirm() {
    document.getElementById('confirmModal').classList.add('hidden');
  }

  function confirmDelete() {
    alert("Laporan berhasil dihapus.");
    closeConfirm();
  }
</script>
@endsection
