<div class="mt-14 sm:ml-60 p-6 bg-blue-900 min-h-screen">
    <div class="p-5 bg-gray-100 shadow-lg rounded-lg">
        <?php if (isset($data['id_santri_filter']) && $data['id_santri_filter']): ?>
            <!-- Header untuk filter santri -->
            <div class="mb-4">
                <a href="<?= BASEURL; ?>/admin/hafalan"
                    class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Kembali ke Semua Hafalan
                </a>
            </div>
            <h1 class="text-2xl font-bold mb-2 text-blue-900">Hafalan -
                <?= isset($data['santri_info']) && is_array($data['santri_info']) ? $data['santri_info']['nama_santri'] : 'Santri' ?>
            </h1>
            <?php if (isset($data['santri_info']) && is_array($data['santri_info'])): ?>
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-4">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-blue-900">
                                <?= $data['santri_info']['nama_santri'] ?? 'Nama tidak tersedia' ?></h3>
                            <p class="text-sm text-blue-700">Orang Tua:
                                <?= $data['santri_info']['nama_ayah'] ?? 'Tidak tersedia' ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <h1 class="text-2xl font-bold mb-4 text-blue-900">Hafalan</h1>
        <?php endif; ?>
        <div class="flex justify-between items-center mb-4 gap-4">
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
                    placeholder="Search..." id="dataTableSearch">
            </div>

            <!-- Button Catat Hafalan -->
            <div class="button-container flex items-center gap-4">
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" id="add-btn"
                    class="flex items-center w-36 gap-2 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21"
                        fill="none">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                    </svg>
                    <span>Catat Hafalan</span>
                </button>
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
                                Jumlah Ayat
                                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        </th>
                        <th class="p-3">
                            <span class="flex items-center">
                                Tanggal
                                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        </th>
                        <th class="p-3">
                            <span class="flex items-center">
                                Guru
                                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        </th>
                        <th class="p-3">
                            <span class="flex items-center">
                                Keterangan
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
                    <?php $no = 1; ?>
                    <?php foreach ($data['hafalan'] as $hafalan): ?>
                        <tr class="hover:bg-blue-100 cursor-pointer text-gray-700">
                            <td class="p-3"><?= $no++; ?></td>
                            <td class="p-3"><?= $hafalan['nama_santri']; ?></td>
                            <td class="p-3"><?= $hafalan['jumlah_ayat']; ?></td>
                            <td class="p-3"><?= date('d/m/Y', strtotime($hafalan['tanggal'])); ?></td>
                            <td class="p-3"><?= $hafalan['nama_guru']; ?></td>
                            <td class="p-3"><?= $hafalan['keterangan']; ?></td>
                            <td class="p-3">
                                <div class="flex space-x-2">
                                    <!-- Tombol Lihat -->
                                    <?php if (!isset($data['id_santri_filter'])): ?>
                                        <a href="<?= BASEURL; ?>/admin/hafalan/<?= $hafalan['id_santri']; ?>"
                                            class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2"
                                            title="Lihat hafalan santri ini">
                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M4.998 7.78C6.729 6.345 9.198 5 12 5s5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19s-5.27-1.345-7.002-2.78A12.712 12.712 0 0 1 2.902 13.637a6.6 6.6 0 0 1-.618-.997C2.144 12.354 2 11.986 2 11.5s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z"
                                                    clip-rule="evenodd" />
                                                <path fill-rule="evenodd" d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    <?php endif; ?>
                                    <!-- Tombol Edit -->
                                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                        onclick="editHafalan(<?= $hafalan['id_hafalan']; ?>, <?= $hafalan['id_santri']; ?>, <?= $hafalan['jumlah_ayat']; ?>, '<?= $hafalan['tanggal']; ?>', '<?= $hafalan['keterangan']; ?>', <?= $hafalan['id_guru']; ?>)"
                                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <!-- Tombol Hapus -->
                                    <button onclick="deleteHafalan(<?= $hafalan['id_hafalan']; ?>)"
                                        class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-sm p-2">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="grid frid-col-1  gap-4 mt-4">
            <!-- CHART BATANG -->
            <div class="w-full bg-white rounded-lg shadow-xl p-4 md:p-3">
                <div class="flex justify-between pb-4 mb-4 border-b border-gray-200">
                    <div class="flex items-center">
                        <div class="w-11 h-11 rounded-lg bg-blue-900 flex items-center justify-center me-3">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207" />
                            </svg>
                        </div>
                        <div>
                            <h5 class="text-lg font-bold text-blue-900">
                                Hafalan Bulan Ini (<?= date('F'); ?>)
                                <?php if (isset($data['id_santri_filter']) && $data['id_santri_filter'] && isset($data['santri_info']) && is_array($data['santri_info'])): ?>
                                    - <?= $data['santri_info']['nama_santri'] ?? 'Santri' ?>
                                <?php endif; ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- Grafik -->
                <div id="hafalan-chart"></div>
            </div>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk edit hafalan
    function editHafalan(id, id_santri, jumlah_ayat, tanggal, keterangan, id_guru) {
        document.getElementById('id_hafalan').value = id;
        document.getElementById('id_santri').value = id_santri;
        document.getElementById('jumlah_ayat').value = jumlah_ayat;
        document.getElementById('tanggal').value = tanggal;
        document.getElementById('keterangan').value = keterangan;
        document.getElementById('id_guru').value = id_guru;
        document.getElementById('modalLabel').textContent = 'Edit Hafalan';
        document.getElementById('submitText').textContent = 'Update Hafalan';

        // Update counter keterangan
        const currentLength = keterangan.length;
        document.getElementById('keterangan-count').textContent = currentLength;
        const counter = document.getElementById('keterangan-count');
        if (currentLength > 200) {
            counter.style.color = '#ef4444';
        } else if (currentLength > 150) {
            counter.style.color = '#f59e0b';
        } else {
            counter.style.color = '#6b7280';
        }
    }

    // Fungsi untuk reset form saat tambah baru
    function resetForm() {
        document.getElementById('hafalanForm').reset();
        document.getElementById('id_hafalan').value = '';
        document.getElementById('modalLabel').textContent = 'Catat Hafalan';
        document.getElementById('submitText').textContent = 'Catat Hafalan';
        document.getElementById('tanggal').value = '<?= date('Y-m-d'); ?>';
        // Reset counter keterangan
        document.getElementById('keterangan-count').textContent = '0';
        document.getElementById('keterangan-count').style.color = '#6b7280';
    }

    // Fungsi untuk hapus hafalan
    function deleteHafalan(id) {
        if (confirm('Apakah Anda yakin ingin menghapus data hafalan ini?')) {
            window.location.href = '<?= BASEURL; ?>/admin/hafalan/deleteHafalan/' + id;
        }
    }

    // Event listener untuk tombol "Catat Hafalan"
    document.querySelector('[data-modal-target="crud-modal"]').addEventListener('click', function() {
        resetForm();
    });


    // Chart Hafalan Bulan Ini
    document.addEventListener('DOMContentLoaded', function() { // Data hafalan bulan ini dari PHP
        const hafalanData = <?= json_encode($data['hafalan_bulan_ini']); ?>;
        const bulanNama = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus',
            'September', 'Oktober', 'November', 'Desember'
        ];
        const bulanSekarang = <?= date('n'); ?>;
        const tahunSekarang = <?= date('Y'); ?>;

        // Hitung jumlah minggu dalam bulan ini
        const firstDay = new Date(tahunSekarang, bulanSekarang - 1, 1);
        const lastDay = new Date(tahunSekarang, bulanSekarang, 0);
        const jumlahMinggu = Math.ceil((lastDay.getDate() + firstDay.getDay()) / 7);

        // Inisialisasi data untuk semua minggu dalam bulan
        const chartData = {};
        for (let i = 1; i <= jumlahMinggu; i++) {
            chartData[`Minggu ${i}`] = 0;
        }

        // Jika ada data hafalan, masukkan ke chartData
        if (hafalanData && hafalanData.length > 0) {
            hafalanData.forEach(item => {
                const minggu = `Minggu ${item.minggu}`;
                if (chartData.hasOwnProperty(minggu)) {
                    chartData[minggu] += parseInt(item.total_ayat);
                }
            });
        }

        const categories = Object.keys(chartData).sort((a, b) => {
            const numA = parseInt(a.split(' ')[1]);
            const numB = parseInt(b.split(' ')[1]);
            return numA - numB;
        });
        const series = categories.map(cat => chartData[cat]);

        console.log('Jumlah minggu dalam bulan:', jumlahMinggu); // Debug
        console.log('Categories:', categories); // Debug
        console.log('Series:', series); // Debug

        // Konfigurasi chart
        const options = {
            series: [{
                name: 'Jumlah Ayat',
                data: series
            }],
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded',
                    borderRadius: 4
                },
            },
            dataLabels: {
                enabled: true,
                formatter: function(val) {
                    return val > 0 ? val : '';
                }
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: categories,
                title: {
                    text: 'Minggu',
                    style: {
                        fontSize: '14px',
                        fontWeight: 600
                    }
                }
            },
            yaxis: {
                title: {
                    text: 'Jumlah Ayat',
                    style: {
                        fontSize: '14px',
                        fontWeight: 600
                    }
                },
                min: 0
            },
            fill: {
                opacity: 1,
                colors: ['#1e40af']
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + " ayat"
                    }
                }
            },
            grid: {
                borderColor: '#e7e7e7',
                row: {
                    colors: ['#f3f3f3', 'transparent'],
                    opacity: 0.5
                },
            },
            legend: {
                show: false
            },
            noData: {
                text: 'Belum ada data hafalan bulan ini',
                align: 'center',
                verticalAlign: 'middle',
                offsetX: 0,
                offsetY: 0,
                style: {
                    color: '#6b7280',
                    fontSize: '16px'
                }
            }
        };

        // Render chart
        if (typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.querySelector("#hafalan-chart"), options);
            chart.render();
        } else {
            console.error('ApexCharts library not loaded');
        }
    });
</script>

<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto fixed inset-0 z-50 justify-center items-center w-full h-full bg-gray-800 bg-opacity-50">
    <div class="relative w-full max-w-4xl max-h-full">
        <div class="relative bg-white rounded-lg shadow-lg">
            <div class="flex items-center justify-between p-4 border-b rounded-t">
                <h3 id="modalLabel" class="text-lg font-semibold">Catat Hafalan</h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8"
                    data-modal-toggle="crud-modal">
                    &times;
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/admin/hafalan/createUpdateHafalan" method="POST" id="hafalanForm"
                    class="p-6">
                    <input type="hidden" name="id_hafalan" id="id_hafalan">

                    <!-- Santri -->
                    <div class="mb-4">
                        <label for="id_santri" class="block mb-2 text-sm font-medium">Santri</label>
                        <select id="id_santri" name="id_santri" required
                            class="bg-gray-50 border rounded-lg w-full p-3 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Pilih Santri</option>
                            <?php foreach ($data['santri'] as $santri): ?>
                                <option value="<?= $santri['id_santri']; ?>"><?= $santri['nama_santri']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Guru -->
                    <div class="mb-4">
                        <label for="id_guru" class="block mb-2 text-sm font-medium">Guru</label>
                        <?php if ($data['is_guru'] && $data['guru_login']): ?>
                            <?php 
                            // Cari nama guru dari array guru
                            $nama_guru = '';
                            foreach ($data['guru'] as $guru) {
                                if ($guru['id_guru'] == $data['guru_login']['id_guru']) {
                                    $nama_guru = $guru['nama_guru'];
                                    break;
                                }
                            }
                            ?>
                            <input type="text" value="<?= $nama_guru ?>" class="bg-gray-100 border rounded-lg w-full p-3" readonly>
                            <input type="hidden" id="id_guru" name="id_guru" value="<?= $data['guru_login']['id_guru']; ?>">
                        <?php else: ?>
                            <select id="id_guru" name="id_guru" required
                                class="bg-gray-50 border rounded-lg w-full p-3 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Pilih Guru</option>
                                <?php foreach ($data['guru'] as $guru): ?>
                                    <option value="<?= $guru['id_guru']; ?>"><?= $guru['nama_guru']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        <?php endif; ?>
                    </div>

                    <!-- Jumlah Ayat -->
                    <div class="mb-4">
                        <label for="jumlah_ayat" class="block mb-2 text-sm font-medium">Jumlah Ayat</label>
                        <input type="number" name="jumlah_ayat" id="jumlah_ayat" min="1" required
                            class="bg-gray-50 border rounded-lg w-full p-3 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Jumlah ayat yang dihafal">
                    </div>

                    <!-- Tanggal -->
                    <div class="mb-4">
                        <label for="tanggal" class="block mb-2 text-sm font-medium">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" required
                            class="bg-gray-50 border rounded-lg w-full p-3 focus:ring-blue-500 focus:border-blue-500"
                            value="<?= date('Y-m-d'); ?>">
                    </div>

                    <!-- Keterangan -->
                    <div class="mb-4">
                        <label for="keterangan" class="block mb-2 text-sm font-medium">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" rows="3" maxlength="255"
                            class="bg-gray-50 border rounded-lg w-full p-3 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Keterangan tambahan (opsional, maksimal 255 karakter)"></textarea>
                        <div class="text-sm text-gray-500 mt-1">
                            <span id="keterangan-count">0</span>/255 karakter
                        </div>
                    </div>

                    <!-- Tombol Simpan -->
                    <button type="submit"
                        class="w-full text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm p-3">
                        <span id="submitText">Catat Hafalan</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>