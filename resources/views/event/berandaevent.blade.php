<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Event dan Kolaborasi</title>
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
    <button class="border border-white px-4 py-1 rounded hover:bg-white hover:text-[#889A78] transition">LOG OUT</button>
  </div>

  <!-- Navigasi -->
  <header class="bg-white shadow">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <div class="flex items-center space-x-3">
        <img src="{{ asset('hijauspa.png') }}" alt="Logo Hijau Spa" class="h-8">
        <span class="text-[#5A7A48] font-semibold text-md">Hijau Spa</span>
      </div>
      <nav class="hidden md:flex space-x-6 text-sm font-medium text-gray-700">
        <a href="/beranda" class="hover:text-[#5A7A48]">Beranda</a>
        <a href="/" class="hover:text-[#5A7A48]">Profil</a>
        <a href="/berandapromo" class="hover:text-[#5A7A48]">Promo</a>
        <a href="#" class="hover:text-[#5A7A48]">Riwayat Booking</a>
        <a href="/kritik" class="hover:text-[#5A7A48]">Kritik dan Saran</a>
        <a href="#" class="hover:text-[#5A7A48]">Event dan Kolaborasi</a>
      </nav>
      <a href="#" class="bg-[#5A7A48] text-white px-4 py-2 rounded hover:bg-[#47633B] transition text-sm">Booking Sekarang</a>
    </div>
  </header>

  <!-- Judul Halaman -->
  <main class="max-w-5xl mx-auto py-10 px-4">
    <h1 class="text-xl font-semibold mb-6 text-center border-b pb-2">Event dan Kolaborasi</h1>

    <!-- Section Event -->
    <section class="py-8 bg-white rounded-xl shadow-md">
      <div class="max-w-5xl mx-auto px-4 grid md:grid-cols-2 gap-8">
        
        <!-- Poster -->
        <div>
          <img src="poster.jpg" alt="Poster Self-Care Ramadhan" class="rounded-lg shadow w-full">
        </div>

        <!-- Detail Acara -->
        <div class="bg-white p-6 border rounded-xl text-sm leading-relaxed space-y-2 text-gray-800">
          <h2 class="text-base font-semibold">Tema: <span class="text-[#9A2B47]">Self-Care Ramadhan</span></h2>
          <p><span class="font-semibold">Tanggal:</span> Kamis, 27 Februari 2025</p>
          <p><span class="font-semibold">Lokasi:</span> Hijau Spa Tiban (Mekarsari B–03, Tiban)</p>
          <p><span class="font-semibold">Kolaborator:</span> Riawati, SE, SSA (Pakar Kecantikan B–Skin)</p>
          <div class="mt-3 space-y-2">
            <p class="font-semibold text-[#9A2B47]">Self-care adalah investasi, bukan kemewahan!</p>
            <p>Apa yang Anda dapatkan?</p>
            <ul class="list-disc pl-5 space-y-1">
              <li>Tips menjaga kecantikan & kesehatan kulit selama puasa</li>
              <li>Teknik sederhana menjaga keseimbangan mental</li>
              <li>Voucher Diskon Treatment (100k untuk 20 orang pertama!)</li>
              <li>Promo eksklusif B–Skin & door prize menarik</li>
              <li><strong>GRATIS!</strong></li>
            </ul>
          </div>
          <div class="pt-4 space-y-1">
            <p><span class="font-semibold">Link Pendaftaran:</span> 
              <a href="https://forms.gle/KpvreBf92g99W6Fj7" target="_blank" class="text-blue-600 underline">
                https://forms.gle/KpvreBf92g99W6Fj7
              </a>
            </p>
            <p><span class="font-semibold">Konfirmasi:</span> 082170568282</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-100 text-gray-800 py-10 border-t">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 px-4">

      <!-- Logo -->
      <div>
        <img src="{{ asset('hijauspa.png') }}" alt="Logo Hijau Spa" class="w-28 mb-4">
      </div>

      <!-- Link Navigasi -->
      <div>
        <h3 class="font-semibold mb-4">Link</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:underline">Beranda</a></li>
          <li><a href="#" class="hover:underline">Promo</a></li>
          <li><a href="#" class="hover:underline">Riwayat Booking</a></li>
          <li><a href="#" class="hover:underline">Event dan Kolaborasi</a></li>
          <li><a href="#" class="hover:underline">Kritik dan Saran</a></li>
        </ul>
      </div>

      <!-- Alamat -->
      <div>
        <h3 class="font-semibold mb-4">Alamat Hijau Spa</h3>
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0548221770523!2d104.02095711475327!3d1.0847313991615866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da3f1237e1b7ef%3A0xf8e710682d3e4172!2sHijau%20Spa%20Tiban!5e0!3m2!1sid!2sid!4v1717480000000!5m2!1sid!2sid" 
          width="100%" 
          height="180" 
          class="rounded mb-2 border"
          allowfullscreen 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <p>Perumahan Mekarsari, Jl. Tiban Raya No. B.03, Tiban.</p>
        <p class="mt-2"><strong>WhatsApp:</strong> 082875058282</p>
        <p><strong>Instagram:</strong> hijauspa</p>
      </div>

      <!-- Jadwal -->
      <div>
        <h3 class="font-semibold mb-4">Jadwal Buka Hijau Spa</h3>
        <div class="text-sm space-y-1">
          <p>Senin - Jumat<span class="float-right">08.00 – 20.00</span></p>
          <p>Sabtu<span class="float-right">08.00 – 20.00</span></p>
          <p>Minggu<span class="float-right">08.00 – 20.00</span></p>
        </div>
      </div>
    </div>

    <div class="text-center text-xs text-gray-600 mt-8">
      ©2025, All Right Reserved by Spa Hijau
    </div>
  </footer>

</body>
</html>
