<div class="mt-14 sm:ml-60 p-6 bg-blue-900 min-h-screen">
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-4">
        <a href="#" class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow-xl hover:bg-gray-100">
            <div class="flex items-center">
                <div class="w-11 h-11 rounded-lg bg-blue-900 flex items-center justify-center me-3">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <h5 class="text-lg font-bold text-blue-900">User</h5>
                </div>
            </div>
            <h3 class="text-center text-3xl font-bold text-blue-900">
                <?= $data['TotalUser'] ?>
            </h3>
        </a>
        <a href="#" class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow-xl hover:bg-gray-100">
            <div class="flex items-center">
                <div class="w-11 h-11 rounded-lg bg-blue-900 flex items-center justify-center me-3">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <h5 class="text-lg font-bold text-blue-900">Santri</h5>
                </div>
            </div>
            <h3 class="text-center text-3xl font-bold text-blue-900">
                <?= $data['TotalSantri'] ?>
            </h3>
        </a>
        <a href="#" class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow-xl hover:bg-gray-100">
            <div class="flex items-center">
                <div class="w-11 h-11 rounded-lg bg-blue-900 flex items-center justify-center me-3">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <h5 class="text-lg font-bold text-blue-900">Guru</h5>
                </div>
            </div>
            <h3 class="text-center text-3xl font-bold text-blue-900">
                <?= $data['TotalGuru'] ?>
            </h3>
        </a>

        <a href="#" class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow-xl hover:bg-gray-100">
            <div class="flex items-center">
                <div class="w-11 h-11 rounded-lg bg-blue-900 flex items-center justify-center me-3">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Z" />
                        <path fill-rule="evenodd"
                            d="M11 7V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm4.707 5.707a1 1 0 0 0-1.414-1.414L11 14.586l-1.293-1.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <h5 class="text-lg font-bold text-blue-900">Pencapaian Target</h5>
            </div>
            <h3 class="text-center text-3xl font-bold text-blue-900">
                <?= $data['persentase_pencapaian'] ?>%
            </h3>
        </a>
    </div>
    <div class="grid frid-col-1 sm:grid-cols-2 gap-4 mb-4">
        <!-- CHART BATANG -->
        <div class="w-full bg-white rounded-lg shadow-xl p-4 md:p-3">
            <div class="flex justify-between pb-4 mb-4 border-b border-gray-200">
                <div class="flex items-center">
                    <div class="w-11 h-11 rounded-lg bg-blue-900 flex items-center justify-center me-3">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207" />
                        </svg>
                    </div>
                    <div>
                        <h5 class="text-lg font-bold text-blue-900">Hafalan Bulan Ini</h5>
                    </div>
                </div>
            </div>
            <!-- Grafik -->
            <div id="column-chart"></div>
        </div>
        <!-- PIE CHART -->
        <div class="w-full bg-white rounded-lg shadow-xl p-4 md:p-3">
            <!-- Header Section -->
            <div class="flex justify-between pb-4 mb-4 border-b border-gray-200">
                <div class="flex items-center">
                    <div class="w-11 h-11 rounded-lg bg-blue-900 flex items-center justify-center me-3">

                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z" />
                            <path
                                d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z" />
                        </svg>

                    </div>
                    <div>
                        <h5 class="text-lg font-bold text-blue-900">Target Santri</h5>
                    </div>
                </div>
            </div>
            <!-- Pie Chart Section -->
            <div id="pie-chart" class="mt-6"></div>
        </div>
    </div>

    <!-- TABEL REVIEW -->
    <div class="w-full bg-white rounded-lg shadow-xl p-4 md:p-3">
        <div class="flex justify-between pb-4 mb-4 border-b border-gray-200">
            <div class="flex items-center">
                <div class="w-11 h-11 rounded-lg bg-blue-900 flex items-center justify-center me-3">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
                            clip-rule="evenodd" />
                    </svg>

                </div>
                <div>
                    <h5 class="text-lg font-bold text-blue-900">Aktivitas</h5>
                </div>
            </div>
        </div>

        <!-- Tambahkan div pembungkus di sini -->

        <table class="w-full border-collapse bg-white shadow-lg rounded-lg" id="admin-table">
            <thead class="bg-blue-900 text-white rounded-t-lg">
                <tr class="text-left">
                    <th class="p-3"><span class="flex items-center">
                            No
                            <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span></th>
                    <th class="p-3"><span class="flex items-center">
                            Santri
                            <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span></th>
                    <th class="p-3">
                        <span class="flex items-center">
                            Guru
                            <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th class="p-3">
                        <span class="flex items-center">
                            Jumlah Ayat
                            <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th class="p-3">
                        <span class="flex items-center">
                            Tanggal
                            <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th class="p-3">
                        <span class="flex items-center">
                            Keterangan
                            <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody class="rounded-b-lg">
                <?php if (!empty($data['recent_hafalan'])): ?>
                    <?php $no = 1; foreach ($data['recent_hafalan'] as $hafalan): ?>
                        <tr class="hover:bg-blue-100 cursor-pointer text-gray-700">
                            <td class="p-3"><?= $no++; ?></td>
                            <td class="p-3"><?= htmlspecialchars($hafalan['nama_santri']); ?></td>
                            <td class="p-3"><?= htmlspecialchars($hafalan['nama_guru']); ?></td>
                            <td class="p-3"><?= $hafalan['jumlah_ayat']; ?> ayat</td>
                            <td class="p-3"><?= date('d/m/Y', strtotime($hafalan['tanggal'])); ?></td>
                            <td class="p-3"><?= htmlspecialchars(substr($hafalan['keterangan'], 0, 50)) . (strlen($hafalan['keterangan']) > 50 ? '...' : ''); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr class="text-gray-500">
                        <td colspan="6" class="p-3 text-center">Belum ada data hafalan</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

    </div>
</div>

<script>
// Chart Hafalan Bulan Ini
document.addEventListener('DOMContentLoaded', function() {
    // Data hafalan bulan ini dari PHP
    const hafalanData = <?= json_encode($data['hafalan_bulan_ini']); ?>;
    const bulanNama = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    const bulanSekarang = <?= date('n'); ?>;
    const tahunSekarang = <?= date('Y'); ?>;

    // Siapkan data untuk chart
    const categories = [];
    const seriesData = [];
    
    if (hafalanData && hafalanData.length > 0) {
        hafalanData.forEach(function(item) {
            categories.push('Minggu ' + item.minggu);
            seriesData.push(parseInt(item.total_ayat));
        });
    } else {
        // Data dummy jika tidak ada data
        categories.push('Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4');
        seriesData.push(0, 0, 0, 0);
    }

    const columnOptions = {
        series: [{
            name: 'Jumlah Ayat',
            data: seriesData
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
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: categories,
        },
        yaxis: {
            title: {
                text: 'Jumlah Ayat'
            },
            labels: {
                formatter: function (val) {
                    return val + " ayat"
                }
            }
        },
        fill: {
            opacity: 1,
            colors: ['#1e40af']
        },
        tooltip: {
            y: {
                formatter: function (val) {
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
            style: {
                color: '#6b7280',
                fontSize: '16px'
            }
        }
    };

    // Render column chart
    if (typeof ApexCharts !== 'undefined') {
        const columnChart = new ApexCharts(document.querySelector("#column-chart"), columnOptions);
        columnChart.render();
    }

    // Pie Chart untuk Target Santri
    const targetTercapai = <?= $data['target_tercapai']; ?>;
    const targetBelumTercapai = <?= $data['target_belum_tercapai']; ?>;
    const totalTarget = <?= $data['total_target']; ?>;

    const pieOptions = {
        series: [targetTercapai, targetBelumTercapai],
        chart: {
            type: 'pie',
            height: 350
        },
        labels: ['Target Tercapai', 'Belum Tercapai'],
        colors: ['#10b981', '#ef4444'],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }],
        legend: {
            position: 'bottom',
            horizontalAlign: 'center'
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return val + " santri"
                }
            }
        },
        noData: {
            text: 'Belum ada data target',
            align: 'center',
            verticalAlign: 'middle',
            style: {
                color: '#6b7280',
                fontSize: '16px'
            }
        }
    };

    // Render pie chart
    if (typeof ApexCharts !== 'undefined' && totalTarget > 0) {
        const pieChart = new ApexCharts(document.querySelector("#pie-chart"), pieOptions);
        pieChart.render();
    } else if (totalTarget === 0) {
        document.querySelector("#pie-chart").innerHTML = '<div class="text-center text-gray-500 py-8">Belum ada data target bulan ini</div>';
    }
});
</script>