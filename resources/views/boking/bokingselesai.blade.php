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
            <th class="px-4 py-2 font-semibold">Option</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white border-t">
            <td class="px-4 py-2">1</td>
            <td class="px-4 py-2">Amanda</td>
            <td class="px-4 py-2">07 April 2025 | 14:45 WIB</td>
            <td class="px-4 py-2">08 April 2025 | 15:00 WIB</td>
            <td class="px-4 py-2">
              <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">👁️</a>
            </td>
          </tr>
          <tr class="bg-gray-100 border-t">
            <td class="px-4 py-2">2</td>
            <td class="px-4 py-2">Clara</td>
            <td class="px-4 py-2">10 April 2025 | 11:00 WIB</td>
            <td class="px-4 py-2">11 April 2025 | 15:45 WIB</td>
            <td class="px-4 py-2">
              <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">👁️</a>
            </td>
          </tr>
          <tr class="bg-white border-t">
            <td class="px-4 py-2">3</td>
            <td class="px-4 py-2">Farisa</td>
            <td class="px-4 py-2">18 April 2025 | 11:00 WIB</td>
            <td class="px-4 py-2">20 April 2025 | 11:45 WIB</td>
            <td class="px-4 py-2">
              <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">👁️</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
