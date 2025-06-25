@extends('layouts.app') {{-- Layout utama kamu --}}

@section('title', 'Aktivitas Diri Karyawan')

@section('content')
<div class="flex justify-between items-center mb-4">
  <h1 class="text-xl font-semibold"><i class="fas fa-briefcase mr-2"></i> Aktivitas Diri Karyawan</h1>
</div>

<div class="bg-white p-6 rounded-lg shadow font-playfair">
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-lg font-semibold">Daftar Aktivitas Mingguan</h2>
    <a href="{{ url('/aktivitas/tambahmingguan') }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 inline-flex items-center">
      <i class="fas fa-plus mr-1"></i> Tambah
    </a>
  </div>

  <div class="overflow-x-auto">
    <table class="w-full table-auto border border-gray-300 text-sm font-playfair">
      <thead class="bg-gray-100">
        <tr>
          <th class="border px-4 py-2 text-right">Tanggal</th>
          <th class="border px-4 py-2 text-right">Aktivitas</th>
          <th class="border px-4 py-2 text-right">Selesai</th>
          <th class="border px-4 py-2 text-right">Opsi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="border px-4 py-2 text-right">Senin, 7 April 2025</td>
          <td class="border px-4 py-2 text-right">Aku berhasil melakukan 1 perubahan baik.</td>
          <td class="border px-4 py-2 text-right"><input type="checkbox" checked></td>
          <td class="border px-4 py-2 text-right">
            <a href="{{ url('/aktivitas/editmingguan') }}" class="text-blue-600 hover:underline">
              <i class="fas fa-pen"></i>
            </a>
            <button onclick="openConfirm()" class="text-red-600 hover:underline ml-2">
              <i class="fas fa-trash-alt"></i>
            </button>
          </td>
        </tr>
        <!-- Tambah baris lainnya -->
      </tbody>
    </table>
  </div>
</div>

<!-- Modal Hapus -->
<div id="confirmModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50 font-playfair">
  <div class="bg-white rounded-lg shadow-lg p-6 text-center w-80">
    <div class="text-5xl text-black mb-4">
      <i class="fas fa-exclamation-circle"></i>
    </div>
    <h2 class="text-xl font-bold mb-2">Lanjutkan Hapus?</h2>
    <p class="text-gray-600 mb-4">Anda akan menghapus aktivitas ini</p>
    <div class="flex justify-center gap-4">
      <button onclick="confirmDelete()" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ok</button>
      <button onclick="closeConfirm()" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Batal</button>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
  function openConfirm() {
    document.getElementById('confirmModal').classList.remove('hidden');
  }
  function closeConfirm() {
    document.getElementById('confirmModal').classList.add('hidden');
  }
  function confirmDelete() {
    closeConfirm();
    alert("Data berhasil dihapus!");
  }
</script>
@endsection
