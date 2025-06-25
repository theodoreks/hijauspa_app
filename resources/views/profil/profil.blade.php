@extends('layouts.app')

@section('title', 'Profil Karyawan')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow rounded-lg mt-6">
  <h1 class="text-2xl font-bold mb-4">Profil Karyawan</h1>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
      <label class="text-sm text-gray-600">Nama Lengkap</label>
      <div class="font-semibold text-gray-800">Amanda Putri</div>
    </div>
    <div>
      <label class="text-sm text-gray-600">Jabatan</label>
      <div class="font-semibold text-gray-800">Terapis Senior</div>
    </div>
    <div>
      <label class="text-sm text-gray-600">Email</label>
      <div class="font-semibold text-gray-800">amanda@example.com</div>
    </div>
    <div>
      <label class="text-sm text-gray-600">No. Telepon</label>
      <div class="font-semibold text-gray-800">0812-3456-7890</div>
    </div>
  </div>

  <div class="mt-6">
    <a href="#" class="text-blue-600 hover:underline">Edit Profil</a>
  </div>
</div>
@endsection
