@extends('layouts.app')

@section('title', 'Beranda Karyawan')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-xl font-semibold">
        <i class="fas fa-house mr-2"></i> Beranda Karyawan
    </h1>
</div>

<div class="bg-white p-6 rounded-lg shadow">
    <p>Selamat Datang, <strong>{{ Auth::user()->name ?? 'Nama Karyawan' }}</strong></p>
    <p>Anda login sebagai <strong>Karyawan</strong>.</p>
</div>

<!-- Card Absen -->
<div class="bg-gray-100 p-4 rounded shadow mt-4">
    <div class="flex justify-between items-center mb-2 text-sm text-gray-700">
        <i class="fas fa-calendar-alt mr-1"></i>
        {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
    </div>
    <p class="text-gray-700 mb-4">Anda belum melakukan absen hari ini.<br>
        Silakan absen terlebih dahulu untuk mengakses fitur lainnya.</p>
    <div class="flex justify-end">
        <a href="{{ route('absensi.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Absen Sekarang
        </a>
    </div>
</div>
@endsection
