<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl p-4">
        <h1 class="text-2xl font-bold mb-4">Selamat datang, {{ Auth::user()->name }}!</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Kotak statistik -->
            <div class="bg-white dark:bg-neutral-800 rounded-xl shadow p-6">
                <h2 class="text-lg font-semibold">Total Ruang</h2>
                <p class="text-3xl font-bold mt-2">{{ $totalRuang }}</p>
            </div>

            <div class="bg-white dark:bg-neutral-800 rounded-xl shadow p-6">
                <h2 class="text-lg font-semibold">Total Pegawai</h2>
                <p class="text-3xl font-bold mt-2">{{ $totalPegawai }}</p>
            </div>

            <div class="bg-white dark:bg-neutral-800 rounded-xl shadow p-6">
                <h2 class="text-lg font-semibold">Total Peminjaman</h2>
                <p class="text-3xl font-bold mt-2">{{ $totalPeminjaman }}</p>
            </div>
        </div>
    </div>
</x-layouts.app>
