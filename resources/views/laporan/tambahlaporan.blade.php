<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Laporan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Konfigurasi Tailwind -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            playfair: ['"Playfair Display"', 'serif']
          }
        }
      }
    }
  </script>
</head>
<body class="bg-gray-100 font-playfair">

  <!-- Header -->
  <header class="relative flex items-center justify-between px-4 py-3 shadow" style="background-color: #889A78;">
    <div class="flex items-center space-x-2">
      <img src="{{ asset('hijauspa.png') }}" alt="Logo Hijau Spa" class="h-8 w-auto">
      <span class="text-green-900 font-semibold text-md">Hijau Spa</span>
    </div>
    <div class="absolute -translate-x-1/2" style="left: 21%;">
      <button id="sidebarToggle" class="text-black hover:text-gray-700 focus:outline-none">
        <i class="fas fa-bars text-xl"></i>
      </button>
    </div>
    <div>
      <a href="/logout" class="bg-[#5C6F52] text-white px-4 py-1.5 rounded-full text-xs hover:bg-[#4f6046] transition">
        LOG OUT
      </a>
    </div>
  </header>

  <!-- Page Container -->
  <div class="flex min-h-screen">
    
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md min-h-screen">
      <nav class="p-4 text-sm">
        <ul class="space-y-2 text-gray-700">
          <li><span class="block hover:text-lime-500"><i class="fas fa-house mr-2"></i> Beranda</span></li>
          <li><span class="ml-6 text-gray-500 hover:text-lime-500"><i class="fas fa-user-check mr-2"></i> Absen Karyawan</span></li>
          <li><span><i class="fas fa-gift mr-2"></i> Promo</span></li>
          <li><span><i class="fas fa-book mr-2"></i> Info Booking</span></li>
          <li class="ml-6 text-gray-500"><i class="fas fa-pen-nib mr-2"></i> Booking</li>
          <li class="ml-6 text-gray-500"><i class="fas fa-check-square mr-2"></i> Selesai</li>
          <li><span><i class="fas fa-chart-bar mr-2"></i> Laporan</span></li>
          <li class="ml-6 text-gray-500"><i class="fas fa-money-bill-wave mr-2"></i> Keuangan</li>
          <li class="ml-6 text-gray-500"><i class="fas fa-boxes mr-2"></i> Inventory Barang</li>
          <li><span class="block hover:text-lime-500"><i class="fas fa-handshake mr-2"></i> Event dan Kolaborasi</span></li>
          <li><span class="block hover:text-lime-500"><i class="fas fa-briefcase mr-2"></i> Aktivitas Karyawan</span></li>
          <li class="ml-6 text-gray-500"><i class="fas fa-calendar-day mr-2"></i> Harian</li>
          <li class="ml-6 text-gray-500"><i class="fas fa-calendar-week mr-2"></i> Mingguan</li>
          <li class="ml-6 text-gray-500"><i class="fas fa-calendar-alt mr-2"></i> Bulanan</li>
          <li><a href="profil.html"><i class="fa-solid fa-user mr-2"></i> Profil</a></li>
        </ul>
      </nav>
    </aside>
<!-- Main Content -->
<main class="flex-1 p-6">
    <h2 class="text-xl font-bold mb-6">Laporan</h2>

    <div class="bg-white p-8 rounded shadow w-full">
        <h3 class="text-md font-semibold mb-4"><i class="fas fa-chart-bar mr-2"></i>Tambah Laporan Booking</h3>

        <form action="#" method="POST" class="space-y-6">
            <!-- Nomor -->
            <div>
                <label for="no" class="block text-sm font-medium text-gray-700">No</label>
                <input type="text" name="no" id="no" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- ID dan Tanggal -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="id" class="block text-sm font-medium text-gray-700">ID</label>
                    <input type="text" name="id" id="id" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
                </div>
            </div>

            <!-- Nama dan Treatment -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" name="nama" id="nama" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label for="treatment" class="block text-sm font-medium text-gray-700">Treatment</label>
                    <input type="text" name="treatment" id="treatment" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
                </div>
            </div>

            <!-- Therapist dan Harga -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="therapist" class="block text-sm font-medium text-gray-700">Therapist</label>
                    <input type="text" name="therapist" id="therapist" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                    <input type="text" name="harga" id="harga" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
                </div>
            </div>

            <!-- Durasi -->
            <div>
                <label for="durasi" class="block text-sm font-medium text-gray-700">Durasi</label>
                <input type="text" name="durasi" id="durasi" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Tombol Simpan dan Batal -->
            <div class="flex justify-end space-x-4 mt-6">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
                    Simpan
                </button>
                <a href="#" class="bg-gray-400 text-white px-6 py-3 rounded-md hover:bg-gray-500 focus:ring-2 focus:ring-gray-500">
                    Batal
                </a>
            </div>
        </form>
    </div>
</main>
