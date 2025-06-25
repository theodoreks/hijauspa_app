@extends('layouts.app')

@section('title', 'Daftar Booking Masuk')

@section('content')
  <div class="flex justify-between items-center mb-4">
    <h1 class="text-xl font-semibold">Booking Masuk</h1>
  </div>

  <div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-lg font-semibold mb-4"><i class="fas fa-calendar-check mr-2"></i> Daftar Booking Masuk</h2>
    <table class="min-w-full table-auto border border-gray-300 text-sm">
      <thead class="bg-gray-100">
        <tr>
          <th class="border px-4 py-2">No</th>
          <th class="border px-4 py-2">ID Booking</th>
          <th class="border px-4 py-2">Nama Konsumen</th>
          <th class="border px-4 py-2">Jadwal Treatment</th>
          <th class="border px-4 py-2">Foto</th>
          <th class="border px-4 py-2">Opsi</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <tr>
          <td class="border px-4 py-2">1</td>
          <td class="border px-4 py-2">Booking-14</td>
          <td class="border px-4 py-2">Clara</td>
          <td class="border px-4 py-2">13 April 2025 | 15:45 WIB</td>
          <td class="border px-4 py-2">
            <img src="{{ asset('event-foto.png') }}" alt="Event" class="w-12 h-12 object-cover mx-auto" />
          </td>
          <td class="border px-4 py-2">
            <a href="{{ url('/detailboking') }}" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">Detail</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
