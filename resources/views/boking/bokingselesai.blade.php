@extends('layouts.app')

@section('title', 'Detail Booking Selesai')

@section('content')
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-xl font-bold text-gray-800">Booking Selesai</h1>
  </div>

  <div class="bg-white shadow rounded-lg p-4">
    <h2 class="text-lg font-semibold mb-4">Daftar Booking Selesai</h2>
    <div class="overflow-x-auto">
      <table class="min-w-full text-left text-sm">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-4 py-2 font-semibold">No</th>
            <th class="px-4 py-2 font-semibold">Nama Konsumen</th>
            <th class="px-4 py-2 font-semibold">Tanggal Booking</th>
            <th class="px-4 py-2 font-semibold">Tanggal Treatment</th>
            <th class="px-4 py-2 font-semibold text-center">Option</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $index => $item)
          <tr class="{{ $index % 2 == 0 ? 'bg-white' : 'bg-gray-100' }} border-t">
            <td class="px-4 py-2">{{ $index + 1 }}</td>
            <td class="px-4 py-2">{{ $item->nama_konsumen }}</td>
            <td class="px-4 py-2">{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y | H:i') }} WIB</td>
            <td class="px-4 py-2">{{ \Carbon\Carbon::parse($item->jadwal_treatment)->format('d M Y | H:i') }} WIB</td>
            <td class="px-4 py-2 text-center">
              <a href="{{ route('boking.detail', $item->id) }}"
                 class="inline-flex items-center justify-center bg-gray-100 text-blue-600 w-10 h-8 rounded hover:bg-blue-100 transition duration-200"
                 title="Lihat Detail">
                <i class="fas fa-eye text-base"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
