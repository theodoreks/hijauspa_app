<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventKegiatanController;
use App\Http\Controllers\AbsensiKaryawanController;
use App\Http\Controllers\AktivitasKaryawanController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\MingguanController;
use App\Http\Controllers\BulananController;
use App\Http\Controllers\AktivitasMingguanController;
use App\Http\Controllers\AktivitasBulananController;
use App\Http\Controllers\BookingSelesaiController;
use App\Http\Controllers\BookingTreatmentController;
use App\Http\Controllers\InventoryController;

// Login & Logout
Route::get('/', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Register
Route::get('/register', [AuthController::class, 'registerForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Beranda setelah login
Route::get('/beranda', function () {
    return view('beranda.beranda'); // Ganti dengan view yang sesuai
})->name('beranda.beranda');

Route::get('/berandakaryawan', function () {
    return view('berandakaryawan.karyawan'); // Ganti dengan view yang sesuai
})->name('berandakaryawan.karyawan');

// Untuk semua fitur CRUD Event Kegiatan
Route::get('/event', [EventKegiatanController::class, 'index'])->name('event.index');
Route::get('/event/tambah', [EventKegiatanController::class, 'create'])->name('event.tambah');
Route::post('/event', [EventKegiatanController::class, 'store'])->name('event.store');
Route::get('/event/edit/{id}', [EventKegiatanController::class, 'edit'])->name('event.edit');
Route::put('/event/update/{id}', [EventKegiatanController::class, 'update'])->name('event.update');
Route::delete('/event/hapus/{id}', [EventKegiatanController::class, 'destroy'])->name('event.hapus');

// Untuk semua fitur CRUD Absensi Karyawan
Route::get('/absensi', [AbsensiKaryawanController::class, 'index'])->name('absensi.index');
Route::get('/absensi/create', [AbsensiKaryawanController::class, 'create'])->name('absensi.create');
Route::post('/absensi', [AbsensiKaryawanController::class, 'store'])->name('absensi.store');
Route::get('/absensi/{id}/edit', [AbsensiKaryawanController::class, 'edit'])->name('absensi.edit');
Route::put('/absensi/{id}', [AbsensiKaryawanController::class, 'update'])->name('absensi.update');
Route::delete('/absensi/{id}', [AbsensiKaryawanController::class, 'destroy'])->name('absensi.destroy');

// Route CRUD untuk Paket
Route::get('/paket', [PaketController::class, 'index'])->name('paket.index');
Route::get('/paket/create', [PaketController::class, 'create'])->name('paket.create');
Route::post('/paket', [PaketController::class, 'store'])->name('paket.store');
Route::get('/paket/{id}/edit', [PaketController::class, 'edit'])->name('paket.edit');
Route::put('/paket/{id}', [PaketController::class, 'update'])->name('paket.update');
Route::delete('/paket/{id}', [PaketController::class, 'destroy'])->name('paket.destroy');

// ROUTE CROUD UNTUK AKTIVITAS KARYAWAN HARIAN
Route::get('/aktivitas', [AktivitasKaryawanController::class, 'index'])->name('aktivitas.index');
Route::get('/aktivitas/tambah', [AktivitasKaryawanController::class, 'create'])->name('aktivitas.create');
Route::post('/aktivitas', [AktivitasKaryawanController::class, 'store'])->name('aktivitas.store');
Route::get('/aktivitas/{id}/edit', [AktivitasKaryawanController::class, 'edit'])->name('aktivitas.edit');
Route::put('/aktivitas/{id}', [AktivitasKaryawanController::class, 'update'])->name('aktivitas.update');
Route::delete('/aktivitas/{id}', [AktivitasKaryawanController::class, 'destroy'])->name('aktivitas.destroy');

// ROUTE AKTIVITAS MINGGUAN
Route::prefix('aktivitas')->group(function () {
    Route::get('/mingguan', [AktivitasMingguanController::class, 'index'])->name('aktivitas.mingguan.index');
    Route::get('/tambahmingguan', [AktivitasMingguanController::class, 'create'])->name('aktivitas.mingguan.create');
    Route::post('/mingguan', [AktivitasMingguanController::class, 'store'])->name('aktivitas.mingguan.store');
    Route::get('/editmingguan/{id}', [AktivitasMingguanController::class, 'edit'])->name('aktivitas.mingguan.edit');
    Route::put('/mingguan/{id}', [AktivitasMingguanController::class, 'update'])->name('aktivitas.mingguan.update');
    Route::delete('/mingguan/{id}', [AktivitasMingguanController::class, 'destroy'])->name('aktivitas.mingguan.destroy');
});

// ROUTE AKTIVITAS BULANAN
Route::prefix('aktivitas')->group(function () {
    Route::get('/bulanan', [AktivitasBulananController::class, 'index'])->name('aktivitas.bulanan.index');
    Route::get('/tambahbulanan', [AktivitasBulananController::class, 'create'])->name('aktivitas.bulanan.create');
    Route::post('/bulanan', [AktivitasBulananController::class, 'store'])->name('aktivitas.bulanan.store');
    Route::get('/editbulanan/{id}', [AktivitasBulananController::class, 'edit'])->name('aktivitas.bulanan.edit');
    Route::put('/bulanan/{id}', [AktivitasBulananController::class, 'update'])->name('aktivitas.bulanan.update');
    Route::delete('/bulanan/{id}', [AktivitasBulananController::class, 'destroy'])->name('aktivitas.bulanan.destroy');
});

// ROUTE LAPORAN
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/laporan/{id}/edit', [LaporanController::class, 'edit'])->name('laporan.edit');
Route::put('/laporan/{id}', [LaporanController::class, 'update'])->name('laporan.update');
Route::delete('/laporan/{id}', [LaporanController::class, 'destroy'])->name('laporan.destroy');

// ROUTE LAPORAN INVENTORY
Route::prefix('inventory')->name('inventory.')->group(function () {
    Route::get('/', [InventoryController::class, 'index'])->name('index');
    Route::get('/create', [InventoryController::class, 'create'])->name('create');
    Route::post('/', [InventoryController::class, 'store'])->name('store');
    Route::get('/{inventory}', [InventoryController::class, 'show'])->name('show');
    Route::get('/{inventory}/edit', [InventoryController::class, 'edit'])->name('edit');
    Route::put('/{inventory}', [InventoryController::class, 'update'])->name('update');
    Route::delete('/{inventory}', [InventoryController::class, 'destroy'])->name('destroy');
});

// ROUTE PROFIL
Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');

// ROUTE BOOKINGTREATMENT
Route::get('/boking', [BookingTreatmentController::class, 'index'])->name('boking.index');
Route::get('/boking/{id}', [BookingTreatmentController::class, 'show'])->name('boking.detail');
Route::get('/booking/selesai', [BookingSelesaiController::class, 'selesai'])->name('boking.selesai');
Route::get('/booking/{id}/detail', [BookingTreatmentController::class, 'show'])->name('boking.detail');

/////////////////////////////////////////////

Route::get('/berandaevent', function () {
    return view('event.berandaevent'); 
});

Route::get('/berandaboking', function () {
    return view('daftarboking.berandaboking');
});

Route::get('/daftarboking', function () {
    return view('boking.boking');
});

Route::get('/riwayatboking', function () {
    return view('boking.riwayatboking');
});

Route::get('/detailboking', function () {
    return view('boking.detailboking');
});

Route::get('/tambahlaporan', function () {
    return view('laporan.tambahlaporan');
});

Route::get('/editlaporan', function () {
    return view('laporan.editlaporan');
});

Route::get('/berandaprofil', function () {
    return view('profil.berandaprofil');
});

Route::get('/kritik', function () {
    return view('kritik.kritikdansaran');
});

Route::get('/laporaninventory', function () {
    return view('inventory.laporaninventory');
});

Route::get('/tambahinventory', function () {
    return view('inventory.tambahinventory');
});

Route::get('/editinventory', function () {
    return view('inventory.editinventory');
});