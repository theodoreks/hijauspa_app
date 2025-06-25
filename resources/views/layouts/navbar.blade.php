<header
    class="relative flex items-center justify-between px-4 py-3 shadow"
    style="background-color: #889A78;">
    <!-- Logo dan teks -->
    <div class="flex items-center space-x-2">
        <img src="{{ asset('hijauspa.png') }}" alt="Logo Hijau Spa" class="h-8 w-auto">
            <span class="text-green-900 font-semibold text-md">Hijau Spa</span>
        </div>

        <!-- Tombol Sidebar -->
        <div class="absolute -translate-x-1/2" style="left: 21%;">
            <button
                id="sidebarToggle"
                class="text-black hover:text-gray-700 focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>

        <!-- Tombol Logout -->

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button
                type="submit"
                class="border border-white px-4 py-1 rounded hover:bg-white hover:text-[#889A78] transition">
                LOG OUT
            </button>
        </form>

    </header>