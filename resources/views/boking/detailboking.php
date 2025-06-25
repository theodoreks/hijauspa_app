<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Detail Booking</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Google Fonts: Playfair Display -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet" />

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome 6 -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    rel="stylesheet"
  />

  <!-- Konfigurasi Tailwind untuk font -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            playfair: ['"Playfair Display"', 'serif'],
          },
        },
      },
    };
  </script>
</head>
<body class="bg-gray-100 font-playfair">

  <!-- Header -->
  <header
    class="relative flex items-center justify-between px-4 py-3 shadow"
    style="background-color: #889A78"
  >
    <!-- Kiri: Logo + Teks -->
    <div class="flex items-center space-x-2">
      <!-- Ganti src menjadi path lokal, pastikan hijauspa.png ada di folder yang sama -->
      <img src="hijauspa.png" alt="Logo Hijau Spa" class="h-8 w-auto" />
      <span class="text-green-900 font-semibold text-md">Hijau Spa</span>
    </div>

    <!-- Tengah (hamburger slightly shifted left) -->
    <div class="absolute -translate-x-1/2" style="left: 21%">
      <button id="sidebarToggle" class="text-black hover:text-gray-700 focus:outline-none">
        <i class="fas fa-bars text-xl"></i>
      </button>
    </div>

    <!-- Kanan: Logout Button -->
    <div>
      <a
        href="/logout"
        class="bg-[#5C6F52] text-white px-4 py-1.5 rounded-full text-xs hover:bg-[#4f6046] transition"
        >LOG OUT</a
      >
    </div>
  </header>

  <!-- Container -->
  <div class="flex min-h-screen font-playfair">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md min-h-screen">
      <nav class="p-4 text-sm">
        <ul class="space-y-2 text-gray-700">
          <li>
            <span class="block hover:text-lime-500"><i class="fas fa-house mr-2"></i> Beranda</span>
          </li>
          <li>
            <span class="ml-6 text-gray-500 hover:text-lime-500"
              ><i class="fas fa-user-check mr-2"></i> Absen Karyawan</span
            >
          </li>
          <li><span><i class="fas fa-gift mr-2"></i> Promo</span></li>
          <li><span><i class="fas fa-book mr-2"></i> Info Booking</span></li>
          <li class="ml-6 text-gray-500"><i class="fas fa-pen-nib mr-2"></i> Booking</li>
          <li class="ml-6 text-gray-500"><i class="fas fa-check-square mr-2"></i> Selesai</li>
          <li><span><i class="fas fa-chart-bar mr-2"></i> Laporan</span></li>
          <li class="ml-6 text-gray-500"><i class="fas fa-money-bill-wave mr-2"></i> Keuangan</li>
          <li class="ml-6 text-gray-500"><i class="fas fa-boxes mr-2"></i> Inventory Barang</li>
          <li>
            <span class="block hover:text-lime-500"
              ><i class="fas fa-handshake mr-2"></i> Event dan Kolaborasi</span
            >
          </li>
          <li>
            <span class="block hover:text-lime-500"
              ><i class="fas fa-briefcase mr-2"></i> Aktivitas Karyawan</span
            >
          </li>
          <li class="ml-6 text-gray-500"><i class="fas fa-calendar-day mr-2"></i> Harian</li>
          <li class="ml-6 text-gray-500"><i class="fas fa-calendar-week mr-2"></i> Mingguan</li>
          <li class="ml-6 text-gray-500"><i class="fas fa-calendar-alt mr-2"></i> Bulanan</li>
          <li><a href="profil.html"><i class="fa-solid fa-user mr-2"></i> Profil</a></li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <h1 class="text-xl font-semibold mb-4">Detail Booking</h1>

      <!-- Info Konsumen -->
      <div class="bg-white p-4 rounded shadow mb-4">
        <div class="grid grid-cols-2 gap-4 text-sm">
          <div>
            <p>Nama Konsumen : Amanda</p>
            <p>Jenis Kelamin : Wanita</p>
            <p>Username : Amanda</p>
          </div>
          <div>
            <p>ID Booking : 19</p>
            <p>Therapist : Suci</p>
            <p>Jadwal Treatment : 08 April 2025 | 15.00 WIB</p>
          </div>
        </div>
      </div>

      <!-- Tabel Booking -->
      <div class="bg-white p-4 rounded shadow">
        <table class="w-full text-sm text-left border border-gray-200">
          <thead class="bg-gray-100">
            <tr>
              <th class="border p-2">No</th>
              <th class="border p-2">Promo/Paket</th>
              <th class="border p-2">Harga</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border p-2">1</td>
              <td class="border p-2">Herbal Facial</td>
              <td class="border p-2">Rp. 111.000</td>
            </tr>
            <tr class="font-bold bg-gray-50">
              <td colspan="2" class="border p-2 text-right">Total Bayar</td>
              <td class="border p-2">Rp. 111.000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>
