@extends('layouts.app')

@section('title', 'Absen Karyawan')

@section('content')
<div class="flex justify-between items-center mb-4">
  <h1 class="text-xl font-semibold">
    <i class="fas fa-user-check mr-2"></i> Absen Karyawan
  </h1>
</div>

<div class="bg-white p-6 rounded-lg shadow">
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-lg font-semibold">Daftar Kehadiran</h2>
    <a href="{{ route('absensi.create') }}"
       class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 inline-flex items-center">
      <i class="fas fa-plus mr-1"></i> Tambah Absen
    </a>
  </div>

  <!-- Tabel Absensi -->
  <div class="overflow-x-auto">
    <table class="w-full table-auto border border-gray-300 text-sm">
      <thead class="bg-gray-100">
        <tr>
          <th class="border px-4 py-2 text-center">No</th>
          <th class="border px-4 py-2 text-center">Nama Karyawan</th>
          <th class="border px-4 py-2 text-center">Tanggal</th>
          <th class="border px-4 py-2 text-center">Jam Masuk</th>
          <th class="border px-4 py-2 text-center">Jam Keluar</th>
          <th class="border px-4 py-2 text-center">Keterangan</th>
          <th class="border px-4 py-2 text-center">Opsi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($absensi as $index => $item)
        <tr>
          <td class="border px-4 py-2 text-center">{{ $index + 1 }}</td>
          <td class="border px-4 py-2 text-center">{{ $item->nama_karyawan }}</td>
          <td class="border px-4 py-2 text-center">{{ \Carbon\Carbon::parse($item->tanggal)->isoFormat('dddd, D MMMM Y') }}</td>
          <td class="border px-4 py-2 text-center">{{ $item->jam_masuk }}</td>
          <td class="border px-4 py-2 text-center">{{ $item->jam_keluar }}</td>
          <td class="border px-4 py-2 text-center">{{ $item->keterangan }}</td>
          <td class="border px-4 py-2 text-center">
            <a href="{{ route('absensi.edit', $item->id) }}" class="text-blue-600 hover:underline">
              <i class="fas fa-pen"></i>
            </a>
            <form action="{{ route('absensi.destroy', $item->id) }}" method="POST" class="inline">
              @csrf
              @method('DELETE')
              <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="ml-2 text-red-600 hover:underline">
                <i class="fas fa-trash"></i>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
