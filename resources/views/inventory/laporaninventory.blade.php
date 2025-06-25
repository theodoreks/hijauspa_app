@extends('layouts.app') {{-- Pastikan layouts.app sudah tersedia --}}

@section('title', 'Laporan Inventory Barang')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-bold">Laporan</h1>
</div>

<!-- Card -->
<div class="bg-white shadow rounded-lg p-6">
  <h2 class="text-lg font-semibold mb-4">Laporan Inventory Barang</h2>

  <!-- Filter Tanggal -->
  <div class="flex items-center space-x-2 mb-4">
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
      <thead class="bg-gray-200 text-center">
        <tr>
          <th class="border px-4 py-2">No</th>
          <th class="border px-4 py-2">ID</th>
          <th class="border px-4 py-2">Tanggal</th>
          <th class="border px-4 py-2">Kode Barang</th>
          <th class="border px-4 py-2">Tipe</th>
          <th class="border px-4 py-2">Nama Produk</th>
          <th class="border px-4 py-2">Berat/Satuan</th>
          <th class="border px-4 py-2">Jumlah Masuk</th>
          <th class="border px-4 py-2">Jumlah Final</th>
          <th class="border px-4 py-2">Stok</th>
          <th class="border px-4 py-2">Harga Perolehan</th>
          <th class="border px-4 py-2">Opsi</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <tr class="odd:bg-white even:bg-gray-100">
          <td class="border px-4 py-2">1</td>
          <td class="border px-4 py-2">01</td>
          <td class="border px-4 py-2">28/05/2024</td>
          <td class="border px-4 py-2">ATL-112-UB</td>
          <td class="border px-4 py-2">Alat</td>
          <td class="border px-4 py-2">Lulur Premium</td>
          <td class="border px-4 py-2">5 kg</td>
          <td class="border px-4 py-2">2</td>
          <td class="border px-4 py-2">2</td>
          <td class="border px-4 py-2">1</td>
          <td class="border px-4 py-2">Rp72.000</td>
          <td class="px-4 py-2">
            <div class="flex justify-center space-x-2">
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
    <p class="text-gray-600 mb-4">Anda akan menghapus laporan inventory</p>
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
    alert("Inventory berhasil dihapus.");
    closeConfirm();
  }
</script>
@endsection
