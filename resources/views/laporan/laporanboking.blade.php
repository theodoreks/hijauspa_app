@extends('layouts.app')

@section('title', 'Laporan Booking')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-bold">Laporan Booking</h1>
</div>

<div class="bg-white shadow rounded-lg p-6">

  <!-- Judul & Tombol Tambah -->
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-lg font-semibold">Laporan Booking</h2>
    <a href="{{ route('laporan.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
      + Tambah
    </a>
  </div>

  <!-- Filter Kalender -->
  <form method="GET" action="{{ route('laporan.index') }}" class="flex flex-wrap items-center gap-2 mb-4">
    <input type="date" name="tanggal_awal" value="{{ request('tanggal_awal') }}" class="border rounded p-2" required>
    <input type="date" name="tanggal_akhir" value="{{ request('tanggal_akhir') }}" class="border rounded p-2" required>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
      <i class="fas fa-search"></i> Cari
    </button>
  </form>

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
          <th class="px-4 py-2">Therapist</th>
          <th class="px-4 py-2">Harga</th>
          <th class="px-4 py-2">Durasi</th>
          <th class="px-4 py-2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($laporans as $index => $laporan)
        <tr class="border-b">
          <td class="px-4 py-2">{{ $index + 1 }}</td>
          <td class="px-4 py-2">{{ $laporan->id }}</td>
          <td class="px-4 py-2">{{ \Carbon\Carbon::parse($laporan->tanggal)->translatedFormat('d M Y') }}</td>
          <td class="px-4 py-2">{{ $laporan->nama_konsumen }}</td>
          <td class="px-4 py-2">{{ $laporan->treatment }}</td>
          <td class="px-4 py-2">{{ $laporan->therapist }}</td>
          <td class="px-4 py-2">Rp {{ number_format($laporan->harga, 0, ',', '.') }}</td>
          <td class="px-4 py-2">{{ $laporan->durasi }}</td>
          <td class="px-4 py-2">
            <div class="flex items-center space-x-2 justify-end">
              <a href="{{ route('laporan.edit', $laporan->id) }}" class="text-blue-600 hover:text-blue-800">
                <i class="fas fa-pen"></i>
              </a>
              <form action="{{ route('laporan.destroy', $laporan->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus laporan ini?')">
                @csrf
                @method('DELETE')
                <button class="text-red-600 hover:text-red-800" type="submit">
                  <i class="fas fa-trash"></i>
                </button>
              </form>
            </div>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="9" class="text-center py-4 text-gray-500">Tidak ada data laporan</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
