<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laporan Inventory Barang</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome 6 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Tailwind Font Config -->
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
    <!-- Kiri: Logo + Teks -->
    <div class="flex items-center space-x-2">
      <img src="{{ asset('hijauspa.png') }}" alt="Logo Hijau Spa" class="h-8 w-auto">
      <span class="text-green-900 font-semibold text-md">Hijau Spa</span>
    </div>

    <!-- Tengah: Tombol Sidebar -->
    <div class="absolute -translate-x-1/2" style="left: 21%;">
      <button id="sidebarToggle" class="text-black hover:text-gray-700 focus:outline-none">
        <i class="fas fa-bars text-xl"></i>
      </button>
    </div>

    <!-- Kanan: Logout Button -->
    <div>
      <a href="/logout" class="bg-[#5C6F52] text-white px-4 py-1.5 rounded-full text-xs hover:bg-[#4f6046] transition">
        LOG OUT
      </a>
    </div>
  </header>

  <div class="flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md min-h-screen">
      <nav class="p-4 text-sm">
        <ul class="space-y-2 text-gray-700">
          <li><a href="#" class="block hover:text-lime-500"><i class="fas fa-house mr-2"></i> Beranda</a></li>
          <li><a href="http://127.0.0.1:8000/absen" class="ml-6 text-gray-500 hover:text-lime-500"><i class="fas fa-user-check mr-2"></i> Absen Karyawan</a></li>
          <li><a href="promo.html"><i class="fas fa-gift mr-2"></i> Promo</a></li>
          <li><a href="info-booking.html"><i class="fas fa-book mr-2"></i> Info Booking</a></li>
          <li class="ml-6 text-gray-500"><i class="fas fa-pen-nib mr-2"></i> Booking</li>
          <li class="ml-6 text-gray-500"><i class="fas fa-check-square mr-2"></i> Selesai</li>
          <li><a href="laporan.html"><i class="fas fa-chart-bar mr-2"></i> Laporan</a></li>
          <li class="ml-6 text-gray-500"><i class="fas fa-money-bill-wave mr-2"></i> Keuangan</li>
          <li class="ml-6 text-gray-500"><i class="fas fa-boxes mr-2"></i> Inventory Barang</li>
          <li><a href="http://127.0.0.1:8000/event/" class="block hover:text-lime-500"><i class="fas fa-handshake mr-2"></i> Event dan Kolaborasi</a></li>
          <li><a href="http://127.0.0.1:8000/aktivitasdirikaryawan" class="block hover:text-lime-500"><i class="fas fa-briefcase mr-2"></i> Aktivitas Karyawan</a></li>
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
        <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
                <label for="no" class="block text-sm font-medium text-gray-700">No</label>
                <input type="text" name="no" id="no" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-500" required>
            </div>
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

            <label class="block text-sm font-medium mb-1">Kode Barang</label>
            <input type="text" class="w-full border rounded p-2" />
          </div>

          <!-- Baris 3 -->
          <div>
            <label class="block text-sm font-medium mb-1">Merek</label>
            <input type="text" class="w-full border rounded p-2" />
          </div>
          <div>
            <label class="block text-sm font-medium mb-1">Nama Produk</label>
            <input type="text" class="w-full border rounded p-2" />
          </div>

          <!-- Baris 4 -->
          <div>
            <label class="block text-sm font-medium mb-1">Berat/Satuan</label>
            <input type="text" class="w-full border rounded p-2" />
          </div>
          <div>
            <label class="block text-sm font-medium mb-1">Jumlah (Pcs)</label>
            <input type="text" class="w-full border rounded p-2" />
          </div>

          <!-- Baris 5 -->
          <div>
            <label class="block text-sm font-medium mb-1">Sisa</label>
            <input type="text" class="w-full border rounded p-2" />
          </div>
          <div>
            <label class="block text-sm font-medium mb-1">Harga Persatuan</label>
            <input type="text" class="w-full border rounded p-2" />
          </div>

          <!-- Tombol -->
          <div class="md:col-span-2 flex justify-end gap-2 mt-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
              Simpan
            </button>
            <button type="button" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">
              Batal
            </button>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
