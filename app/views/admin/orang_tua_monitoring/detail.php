<div class="mt-14 sm:ml-60 p-6 bg-blue-900 min-h-screen">
    <div class="p-5 bg-gray-100 shadow-lg rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-blue-900">Detail Monitoring Santri</h1>
            <?php if (!isset($data['is_orang_tua']) || !$data['is_orang_tua']): ?>
            <a href="<?= BASEURL; ?>/admin/orang_tua/monitoring"
                class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 flex items-center gap-2">
                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
                <span>Kembali</span>
            </a>
            <?php endif; ?>
        </div>

        <?php if (isset($data['is_orang_tua']) && $data['is_orang_tua']): ?>
        <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 border border-blue-300" role="alert">
            <div class="flex items-center">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="font-medium">Selamat datang di Portal Monitoring Santri!</span>
            </div>
            <div class="pl-7">Di sini Anda dapat melihat detail perkembangan hafalan anak Anda.</div>
        </div>
        <?php elseif (isset($data['is_guru']) && $data['is_guru']): ?>
        <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 border border-blue-300" role="alert">
            <div class="flex items-center">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="font-medium">Detail Monitoring Santri</span>
            </div>
            <div class="pl-7">Di sini Anda dapat melihat detail perkembangan hafalan santri dari orang tua yang dipilih.
            </div>
        </div>
        <?php endif; ?>

        <!-- Informasi Orang Tua -->
        <div class="p-5 bg-white shadow-lg rounded-lg mb-6">
            <h2 class="text-xl font-semibold mb-4 text-blue-900 border-b pb-2">Informasi Orang Tua</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-gray-600 font-medium">Nama:</p>
                    <p class="text-gray-800"><?= htmlspecialchars($data['orang_tua']['nama']); ?></p>
                </div>
                <div>
                    <p class="text-gray-600 font-medium">Alamat:</p>
                    <p class="text-gray-800"><?= htmlspecialchars($data['orang_tua']['alamat']); ?></p>
                </div>
                <div>
                    <p class="text-gray-600 font-medium">Email:</p>
                    <p class="text-gray-800"><?= htmlspecialchars($data['orang_tua']['email']); ?></p>
                </div>
                <div>
                    <p class="text-gray-600 font-medium">Kontak:</p>
                    <p class="text-gray-800"><?= htmlspecialchars($data['orang_tua']['kontak'] ?? '-'); ?></p>
                </div>
            </div>
        </div>

        <!-- Daftar Santri -->
        <div class="p-5 bg-white shadow-lg rounded-lg">
            <h2 class="text-xl font-semibold mb-4 text-blue-900 border-b pb-2">Daftar Santri</h2>

            <?php if (empty($data['santri_list'])): ?>
            <div class="text-center p-4 text-gray-500">
                <p>Belum ada santri terdaftar untuk orang tua ini.</p>
            </div>
            <?php else: ?>
            <!-- Tabs untuk setiap santri -->
            <div class="mb-4 border-b border-gray-200">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="santriTabs" role="tablist">
                    <?php foreach ($data['santri_list'] as $index => $santri): ?>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg <?= $index === 0 ? 'text-blue-600 border-blue-600 active' : 'hover:text-gray-600 hover:border-gray-300 border-transparent' ?>"
                            id="santri-tab-<?= $santri['id_santri']; ?>"
                            data-tabs-target="#santri-<?= $santri['id_santri']; ?>" type="button" role="tab"
                            aria-controls="santri-<?= $santri['id_santri']; ?>"
                            aria-selected="<?= $index === 0 ? 'true' : 'false' ?>">
                            <?= htmlspecialchars($santri['nama_santri']); ?>
                        </button>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Tab content untuk setiap santri -->
            <div id="santriTabContent">
                <?php foreach ($data['santri_list'] as $index => $santri): ?>
                <div class="<?= $index === 0 ? 'block' : 'hidden' ?> p-4 rounded-lg bg-gray-50"
                    id="santri-<?= $santri['id_santri']; ?>" role="tabpanel"
                    aria-labelledby="santri-tab-<?= $santri['id_santri']; ?>">

                    <!-- Statistik Hafalan -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-3 text-blue-800">Statistik Hafalan</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-blue-500">
                                <p class="text-gray-500 text-sm">Total Pertemuan</p>
                                <p class="text-2xl font-bold text-blue-900">
                                    <?= $santri['laporan']['total_pertemuan'] ?? 0; ?></p>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-green-500">
                                <p class="text-gray-500 text-sm">Total Hafalan Ayat</p>
                                <p class="text-2xl font-bold text-green-700">
                                    <?= $santri['laporan']['total_hafalan_ayat'] ?? 0; ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Detail Hafalan -->
                    <div>
                        <h3 class="text-lg font-semibold mb-3 text-blue-800">Detail Hafalan</h3>
                        <?php if (empty($santri['detail_hafalan'])): ?>
                        <div class="text-center p-4 text-gray-500 bg-white rounded-lg shadow-md">
                            <p>Belum ada data hafalan untuk santri ini.</p>
                        </div>
                        <?php else: ?>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">No</th>
                                        <th scope="col" class="px-6 py-3">Tanggal</th>
                                        <th scope="col" class="px-6 py-3">Jumlah Ayat</th>
                                        <th scope="col" class="px-6 py-3">Guru</th>
                                        <th scope="col" class="px-6 py-3">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($santri['detail_hafalan'] as $hafalan): ?>
                                    <tr class="bg-white border-b hover:bg-gray-50">
                                        <td class="px-6 py-4"><?= $no++; ?></td>
                                        <td class="px-6 py-4"><?= date('d-m-Y', strtotime($hafalan['tanggal'])); ?></td>
                                        <td class="px-6 py-4"><?= $hafalan['jumlah_ayat']; ?></td>
                                        <td class="px-6 py-4"><?= htmlspecialchars($hafalan['nama_guru']); ?></td>
                                        <td class="px-6 py-4"><?= htmlspecialchars($hafalan['keterangan'] ?? '-'); ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
// Inisialisasi tabs
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('[data-tabs-target]');
    const tabContents = document.querySelectorAll('[role="tabpanel"]');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = document.querySelector(tab.dataset.tabsTarget);

            tabContents.forEach(tabContent => {
                tabContent.classList.add('hidden');
            });

            tabs.forEach(t => {
                t.classList.remove('text-blue-600', 'border-blue-600', 'active');
                t.classList.add('hover:text-gray-600', 'hover:border-gray-300',
                    'border-transparent');
                t.setAttribute('aria-selected', false);
            });

            tab.classList.add('text-blue-600', 'border-blue-600', 'active');
            tab.classList.remove('hover:text-gray-600', 'hover:border-gray-300',
                'border-transparent');
            tab.setAttribute('aria-selected', true);

            target.classList.remove('hidden');
        });
    });
});
</script>