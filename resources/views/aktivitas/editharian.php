@extends('layouts.app')

@section('title', 'Edit Aktivitas Harian')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-xl font-semibold">
            <i class="fas fa-calendar-day mr-2"></i> Edit Aktivitas Diri Karyawan - Harian
        </h1>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-4">
            <i class="fas fa-pen mr-2"></i> Edit Aktivitas Harian
        </h2>

        <form action="{{ route('aktivitas.update', $aktivitas->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Tanggal -->
            <div>
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" value="{{ $aktivitas->tanggal }}" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Jam -->
            <div>
                <label for="jam" class="block text-sm font-medium text-gray-700">Jam</label>
                <input type="time" name="jam" id="jam" value="{{ $aktivitas->jam }}" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Aktivitas -->
            <div>
                <label for="aktivitas" class="block text-sm font-medium text-gray-700">Aktivitas</label>
                <input type="text" name="aktivitas" id="aktivitas" value="{{ $aktivitas->aktivitas }}" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Tombol Simpan dan Batal -->
            <div class="flex justify-end space-x-4 mt-6">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
                    Simpan
                </button>
                <a href="{{ route('aktivitas.index') }}" class="bg-gray-400 text-white px-6 py-3 rounded-md hover:bg-gray-500 focus:ring-2 focus:ring-gray-500">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection
