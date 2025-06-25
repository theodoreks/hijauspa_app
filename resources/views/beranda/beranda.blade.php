<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Beranda | Hijau Spa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Bar Hijau Atas -->
<div class="bg-[#889A78] text-white text-sm px-4 py-2 flex justify-between items-center">
  <div class="flex items-center space-x-4">
    <span><i class="fab fa-instagram mr-1"></i>@hijauspa</span>
    <span><i class="fab fa-whatsapp mr-1"></i>0812-7906-582</span>
  </div>

  <!-- Tombol Logout -->
  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="border border-white px-4 py-1 rounded hover:bg-white hover:text-[#889A78] transition">
      LOG OUT
    </button>
  </form>
</div>


<!-- Bar Putih Bawah -->
<header class="bg-white shadow">
  <div class="container mx-auto px-4 py-2 flex justify-between items-center">
    <!-- Logo dan Judul -->
    <div class="flex items-center space-x-4">
      <img src="{{ asset('hijauspa.png') }}" alt="Logo Hijau Spa" class="h-8 w-auto">
      <span class="text-[#5A7A48] font-semibold text-md">Hijau Spa</span>
    </div>

    <!-- Navigasi -->
   <nav class="space-x-6 text-sm font-medium text-gray-700">
  <a href="http://127.0.0.1:8000/beranda" class="hover:text-[#5A7A48]">Beranda</a>
  <a href="http://127.0.0.1:8000/berandaprofil" class="hover:text-[#5A7A48]">Profil</a>
  <a href="http://127.0.0.1:8000/berandapromo" class="hover:text-[#5A7A48]">Promo</a>
  <a href="http://127.0.0.1:8000/riwayatboking" class="hover:text-[#5A7A48]">Riwayat Booking</a>
  <a href="http://127.0.0.1:8000/kritik" class="hover:text-[#5A7A48]">Kritik dan Saran</a>
  <a href="http://127.0.0.1:8000/berandaevent" class="hover:text-[#5A7A48]">Event dan Kolaborasi</a>
</nav>


    <a href="http://127.0.0.1:8000/berandaboking" class="bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</header>

<section class="relative h-[530px] bg-cover bg-center" style="background-image: url('hijauspa.png');">
  
  <div class="absolute inset-0 bg-black bg-opacity-0"></div>

<div class="relative z-10 flex flex-col items-start justify-center h-full px-6 md:px-20 text-white">
  <h1 class="text-3xl md:text-4xl font-bold mb-4">
    <span class="text-[#889A78]">Welcome</span>
    <br class="block md:hidden">
    The Hijau Spa.
  </h1>

  <div class="flex flex-wrap gap-4">
    <a href="http://127.0.0.1:8000/berandaboking" class="bg-[#889A78] text-white px-5 py-2 rounded hover:bg-[#768567] transition">
      Booking Sekarang
    </a>
    <a href="https://wa.me/628127905882" class="border border-white px-5 py-2 rounded hover:bg-white hover:text-green-900 transition">
      0812-7905-882
    </a>
  </div>
</div>



  <!-- PROMO Section -->
<section class="py-10 px-4 bg-white">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-2xl font-semibold text-center text-black mb-10">PROMO</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      
     <!-- Kartu Promo 1 -->

         <div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="{{ asset('faceherbal.png') }}"
       alt="Cool Mask Treatment"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Paket Herbal Facial</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 111.000 - 50 Menit</p>
    <a href=http://127.0.0.1:8000/berandaboking#" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">
      Booking Sekarang
    </a>
  </div>
</div>

 <!-- Promo 2 -->
<div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="promo2.jpg" alt="Promo 2"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Paket Cuci Muka + Masker Spiriluna</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 99.000 - 25 Menit</p>
    <a href="http://127.0.0.1:8000/berandaboking" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</div>

<!-- Promo 3 -->
<div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="promo3.jpg" alt="Promo 3"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Paket Facial Treatment</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 550.000 - 140 Menit</p>
    <a href="http://127.0.0.1:8000/berandaboking" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</div>

<!-- Promo 4 -->
<div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="promo4.jpg" alt="Promo 4"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Facial Treatment</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 99.000 - 30 Menit</p>
    <a href="http://127.0.0.1:8000/berandaboking" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</div>

<!-- Promo 5 -->
<div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="promo5.jpg" alt="Promo 5"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Serum Brightening</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 110.000 - 35 Menit</p>
    <a href="http://127.0.0.1:8000/berandaboking" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</div>     

<!-- Promo 6 -->
<div class="bg-[#889A78]/10 border rounded shadow overflow-hidden">
  <img src="promo6.jpg" alt="Promo 6"
       class="w-full object-contain transition-transform duration-200 hover:scale-105 active:scale-95 cursor-pointer bg-white" />
  <div class="p-4">
    <h3 class="font-semibold text-md mb-1">Body Treatment</h3>
    <p class="text-sm text-gray-600 mb-3">Rp 99.000 - 30 Menit</p>
    <a href="http://127.0.0.1:8000/berandaboking" class="block text-center bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition">Booking Sekarang</a>
  </div>
</div>


    </div>
  </div>
</section>

<section class="py-10 bg-white">
  <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-6">

    <!-- Kolom Kiri (Dibagi 2 baris: Gambar Produk & Handuk) -->
    <div class="grid grid-rows-2 gap-6">
      <!-- Baris 1: Gambar Produk sejajar dengan Tentang Kami -->
      <div>
        <img src="produk.jpg" alt="Produk Spa" class="w-full h-full object-cover rounded shadow">
      </div>
      <!-- Baris 2: Gambar Handuk sejajar dengan Terapis -->
      <div>
        <img src="handuk.jpg" alt="Handuk dan Lilin" class="w-full h-full object-cover rounded shadow">
      </div>
    </div>

    <!-- Kolom Kanan (Tentang Kami dan Terapis) -->
    <div class="grid grid-rows-2 gap-6">
      <!-- Baris 1: Tentang Kami -->
      <div class="bg-[#889A78] text-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Tentang Kami</h2>
        <p class="text-base leading-relaxed">
          Hijau Spa adalah spa khusus wanita dan anak-anak yang sangat menjaga nilai-nilai islami, baik dalam suasana, pelayanan, hingga penggunaan produk. Kami memberikan kenyamanan maksimal melalui kehalusan, ketenangan, dan keharuman.
          <br><br>
          Hijau Spa juga tempat untuk melepas lelah secara syar’i, meredakan stres, memperbaiki mood dan menjadikan tubuh lebih sehat. Ini tempat terapi alami dan relaksasi yang sehat dan nyaman.
          <br><br>
          Hijau Spa berdiri tanggal 10 Oktober 2021, Hijau Spa, "Nyari rileks? ke Nyaman."
        </p>
      </div>
<section class="py-10 bg-white text-center">
  <div class="max-w-4xl mx-auto px-4">
    <!-- Logo dan Judul -->
    <img src="hijauspa.png" alt="Logo Hijau Spa" class="mx-auto h-16 mb-4"> <!-- Ganti dengan path logo kamu -->
    <h1 class="text-4xl font-semibold font-cursive text-brown-700">Spa & Massage</h1>
    <p class="text-sm text-[#9b5e3b] font-medium mb-4">Khusus Wanita dan Anak</p>

    <!-- Judul Terapis -->
    <h2 class="text-xl font-semibold text-green-800 mt-6 mb-6">Yuk, kenalan...<br>sama Terapistnya Hijau Spa</h2>

    <!-- Terapis Cards -->
    <div class="flex justify-center gap-10 mt-6">
      <!-- Terapis 1 -->
      <div class="flex flex-col items-center">
        <div class="w-36 h-36 overflow-hidden rounded-full border-4 border-[#e0e0e0] mb-3">
          <img src="suci.jpg" alt="Suci" class="object-cover w-full h-full">
        </div>
        <p class="text-lg font-semibold">Suci</p>
        <p class="text-sm text-gray-600">Asal dari Aceh</p>
      </div>

      <!-- Terapis 2 -->
      <div class="flex flex-col items-center">
        <div class="w-36 h-36 overflow-hidden rounded-full border-4 border-[#e0e0e0] mb-3">
          <img src="dara.jpg" alt="Dara" class="object-cover w-full h-full">
        </div>
        <p class="text-lg font-semibold">Dara</p>
        <p class="text-sm text-gray-600">Asal dari Aceh</p>
      </div>
    </div>
  </div>
</section>

  </div>
</section>



<footer class="bg-gray-100 text-gray-800 py-10 px-6 text-sm">
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">

    <!-- Logo -->
    <div class="flex flex-col items-start">
      <img src="{{ asset('hijauspa.png') }}" alt="Logo Hijau Spa" class="w-28 mb-4">
    </div>

    <!-- Link Navigasi -->
    <div>
      <h3 class="font-semibold mb-4">Link</h3>
      <ul class="space-y-2">
        <li><a href="#" class="hover:underline">Beranda</a></li>
        <li><a href="#" class="hover:underline">Promo</a></li>
        <li><a href="#" class="hover:underline">Riwayat Booking</a></li>
        <li><a href="#" class="hover:underline">Event dan Kolaborasi</a></li>
        <li><a href="#" class="hover:underline">Kritik dan Saran</a></li>
      </ul>
    </div>

   <!-- Alamat Hijau Spa -->
    <div>
      <h3 class="font-semibold mb-4">Alamat Hijau Spa</h3>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0548221770523!2d104.02095711475327!3d1.0847313991615866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da3f1237e1b7ef%3A0xf8e710682d3e4172!2sHijau%20Spa%20Tiban!5e0!3m2!1sid!2sid!4v1717480000000!5m2!1sid!2sid" 
        width="100%" 
        height="180" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
        class="rounded mb-2">
      </iframe>
      <p>Perumahan Mekarsari, Jl. Tiban Raya No. B.03, Tiban.</p>
      <p class="mt-2"><strong>WhatsApp:</strong> 082875058282</p>
      <p><strong>Instagram:</strong> hijauspa</p>
    </div>


    <!-- Jadwal -->
    <div>
      <h3 class="font-semibold mb-4">Jadwal Buka Hijau Spa</h3>
      <div class="space-y-1">
        <p>Senin - Jumat<span class="float-right">08.00 – 20.00</span></p>
        <p>Sabtu<span class="float-right">08.00 – 20.00</span></p>
        <p>Minggu<span class="float-right">08.00 – 20.00</span></p>
      </div>
    </div>
  </div>

  <div class="border-t border-gray-300 mt-10 pt-4 text-center text-xs text-gray-600">
    ©2025, All Right Reserved by Spa Hijau
  </div>
</footer>
