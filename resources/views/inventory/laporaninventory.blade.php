@extends('layouts.app')

@section('title', 'Laporan Inventory Barang')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-bold">Laporan</h1>
</div>

<div class="bg-white shadow rounded-lg p-6">
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-lg font-semibold">Laporan Booking Inventory</h2>
    <a href="{{ route('inventory.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
      + Tambah
    </a>
  </div>

  <!-- Filter Tanggal -->
  <form method="GET" action="{{ route('inventory.index') }}" class="flex items-center space-x-2 mb-4">
    <input type="date" name="filter_tanggal" value="{{ request('filter_tanggal') }}" class="border rounded p-2" />
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
      <i class="fas fa-search"></i>
    </button>
  </form>

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
        @forelse($data as $index => $item)
        <tr class="odd:bg-white even:bg-gray-100">
          <td class="border px-4 py-2">{{ $index + 1 }}</td>
          <td class="border px-4 py-2">{{ $item->id }}</td>
          <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d/m/Y') }}</td>
          <td class="border px-4 py-2">{{ $item->kode_barang }}</td>
          <td class="border px-4 py-2">{{ $item->tipe }}</td>
          <td class="border px-4 py-2">{{ $item->nama_produk }}</td>
          <td class="border px-4 py-2">{{ $item->berat_satuan ?? '-' }}</td>
          <td class="border px-4 py-2">{{ $item->jumlah_masuk }}</td>
          <td class="border px-4 py-2">{{ $item->jumlah_final }}</td>
          <td class="border px-4 py-2">{{ $item->stok }}</td>
          <td class="border px-4 py-2">Rp{{ number_format($item->harga_perolehan, 0, ',', '.') }}</td>
          <td class="px-4 py-2">
            <div class="flex justify-center space-x-2">
              <a href="{{ route('inventory.edit', $item->id) }}" class="text-blue-600 hover:text-blue-800">
                <i class="fas fa-pen"></i>
              </a>
              <form action="{{ route('inventory.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
          <td colspan="12" class="py-4 text-gray-500">Tidak ada data inventory</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
