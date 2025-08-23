<div class="mt-14 sm:ml-60 p-6 bg-blue-900 min-h-screen">
    <div class="p-5 bg-gray-100 shadow-lg rounded-lg">
        <?php if (isset($data['is_orang_tua']) && $data['is_orang_tua']): ?>
            <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 border border-blue-300" role="alert">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="font-medium">Selamat datang di Portal Monitoring Santri!</span>
                </div>
                <div class="pl-7">Anda dapat melihat perkembangan hafalan anak Anda di halaman ini.</div>
            </div>
        <?php elseif (isset($data['is_guru']) && $data['is_guru']): ?>
            <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 border border-blue-300" role="alert">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="font-medium">Selamat datang di Portal Monitoring Santri untuk Guru!</span>
                </div>
                <div class="pl-7">Anda dapat melihat daftar orang tua dan memonitor perkembangan hafalan santri di halaman ini.</div>
            </div>
        <?php endif; ?>
        <h1 class="text-2xl font-bold mb-4 text-blue-900">Monitoring Santri</h1>
        <div class="flex justify-between items-center mb-4 gap-2">
            <!-- Search Input -->
            <div class="search-container w-full max-w-xs relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>

                <input type="text"
                    class="border rounded-lg px-4 py-2 ps-10 w-full bg-white text-gray-950 border-blue-300 focus:border-blue-500 focus:ring focus:ring-gray-200"
                    placeholder="Cari orang tua..." id="dataTableSearch">
            </div>
        </div>
        <div class="p-5 bg-white shadow-lg rounded-lg">
            <table class="w-full border-collapse bg-white shadow-lg rounded-lg" id="admin-table">
                <thead class="bg-blue-900 text-white rounded-t-lg">
                    <tr class="text-left">
                        <th class="p-3"><span class="flex items-center">
                                No
                                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span></th>
                        <th class="p-3"><span class="flex items-center">
                                Nama Orang Tua
                                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span></th>
                        <th class="p-3">
                            <span class="flex items-center">
                                Alamat
                                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        </th>
                        <th class="p-3">
                            <span class="flex items-center">
                                Santri
                                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        </th>
                        <th class="p-3">
                            <span class="flex items-center">
                                Aksi
                                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody class="rounded-b-lg">
                    <?php if (!empty($data['orang_tua'])): ?>
                        <?php $no = 1; ?>
                        <?php foreach ($data['orang_tua'] as $orang_tua): ?>
                            <tr class="hover:bg-blue-100 cursor-pointer text-gray-700">
                                <td class="p-3"><?= $no++; ?></td>
                                <td class="p-3"><?= htmlspecialchars($orang_tua['nama_orang_tua']); ?></td>
                                <td class="p-3"><?= htmlspecialchars($orang_tua['alamat']); ?></td>
                                <td class="p-3">
                                    <?php if (!empty($orang_tua['santri'])): ?>
                                        <ul class="list-disc list-inside">
                                            <?php foreach ($orang_tua['santri'] as $santri): ?>
                                                <?php if ($santri): ?>
                                                    <li><?= htmlspecialchars($santri); ?></li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else: ?>
                                        <span class="text-gray-500">Belum ada santri</span>
                                    <?php endif; ?>
                                </td>
                                <td class="p-3">
                                    <div class="flex space-x-2">
                                        <!-- Tombol Lihat Detail -->
                                        <a href="<?= BASEURL; ?>/admin/Orang_tua_monitoring/detail/<?= $orang_tua['id_orang_tua']; ?>"
                                            class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2"
                                            title="Lihat Detail Monitoring">
                                            <svg class="w-4 h-4 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="p-6 text-center text-gray-500">
                                Belum ada data orang tua
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    // Fungsi search table
    const searchInput = document.getElementById('dataTableSearch');
    if (searchInput) {
        searchInput.addEventListener('keyup', function() {
            const searchValue = this.value.toLowerCase();
            const tableRows = document.querySelectorAll('#admin-table tbody tr');

            tableRows.forEach(row => {
                const orangTuaName = row.cells[1].textContent.toLowerCase();
                if (orangTuaName.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    }
</script>