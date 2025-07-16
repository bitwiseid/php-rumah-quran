<div class="mt-14 sm:ml-60 p-6 bg-blue-900 min-h-screen overflow-hidden">
    <div class="p-5 bg-gray-100 shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-4 text-blue-900">Target</h1>
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

            <!-- Button Tambah -->
            <div class="button-container">
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" id="add-btn"
                    class="flex items-center gap-2 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2">
                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Tambah</span>
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
                        <th class="p-3"><span class="flex items-center">
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
                                Target Bulanan
                                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        </th>
                        <th class="p-3">
                            <span class="flex items-center">
                                Bulan
                                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        </th>
                        <th class="p-3">
                            <span class="flex items-center">
                                Tahun
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
                    <?php foreach ($data['target'] as $index => $target): ?>
                        <tr class="hover:bg-blue-100 cursor-pointer text-gray-700">
                            <td class="p-3"><?= $index + 1 ?></td>
                            <td class="p-3"><?= $target['nama_santri'] ?></td>
                            <td class="p-3"><?= $target['target_bulanan'] ?></td>
                            <td class="p-3"><?= $target['bulan'] ?></td>
                            <td class="p-3"><?= $target['tahun'] ?></td>
                            <td class="p-3">
                                <div class="flex space-x-2">
                                    <!-- Tombol Edit -->
                                    <button
                                        onclick="editTarget('<?= $target['id_target'] ?>', '<?= $target['id_santri'] ?>', '<?= $target['target_bulanan'] ?>', '<?= $target['bulan'] ?>', '<?= $target['tahun'] ?>')"
                                        data-modal-target="crud-modal" data-modal-toggle="crud-modal"
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
                                    <button onclick="deleteTarget('<?= $target['id_target'] ?>')"
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
        <!-- Charts Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
            <!-- Bar Chart - Target per Bulan -->
            <div class="w-full bg-white rounded-lg shadow-lg p-6">
                <div class="flex justify-between pb-4 mb-4 border-b border-gray-200">
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-lg bg-blue-600 flex items-center justify-center me-3">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold leading-none text-gray-900">Target per Bulan</h5>
                            <p class="text-sm font-normal text-gray-500">Distribusi target bulanan santri</p>
                        </div>
                    </div>
                </div>
                <div class="overflow-auto">
                    <div id="column-chart"></div>
                </div>
            </div>

            <!-- Pie Chart - Target per Santri -->
            <div class="w-full bg-white rounded-lg shadow-lg p-6">
                <div class="flex justify-between pb-4 mb-4 border-b border-gray-200">
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-lg bg-green-600 flex items-center justify-center me-3">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold leading-none text-gray-900">Target per Santri</h5>
                            <p class="text-sm font-normal text-gray-500">Distribusi target setiap santri</p>
                        </div>
                    </div>
                </div>
                <div id="pie-chart"></div>
            </div>
        </div>
    </div>
</div>

<!-- ApexCharts CDN -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script>

<script>
    // Prepare data for charts
    const targetData = <?= json_encode($data['target']) ?>;

    // Process data for column chart (Target per Bulan)
    const monthlyData = {};
    const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];

    targetData.forEach(target => {
        const monthKey = target.bulan;
        if (!monthlyData[monthKey]) {
            monthlyData[monthKey] = 0;
        }
        monthlyData[monthKey] += parseInt(target.target_bulanan);
    });

    const monthlyCategories = [];
    const monthlyValues = [];

    for (let i = 1; i <= 12; i++) {
        monthlyCategories.push(monthNames[i - 1]);
        monthlyValues.push(monthlyData[i] || 0);
    }

    // Process data for pie chart (Target per Santri)
    const santriData = {};
    targetData.forEach(target => {
        const santriName = target.nama_santri;
        if (!santriData[santriName]) {
            santriData[santriName] = 0;
        }
        santriData[santriName] += parseInt(target.target_bulanan);
    });

    const santriLabels = Object.keys(santriData);
    const santriValues = Object.values(santriData);

    // Column Chart Configuration
    const columnChartOptions = {
        colors: ["#1A56DB", "#FDBA8C"],
        series: [{
            name: "Target Bulanan",
            color: "#1A56DB",
            data: monthlyValues
        }],
        chart: {
            type: "bar",
            height: "320px",
            fontFamily: "Inter, sans-serif",
            toolbar: {
                show: false,
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "70%",
                borderRadiusApplication: "end",
                borderRadius: 8,
            },
        },
        tooltip: {
            shared: true,
            intersect: false,
            style: {
                fontFamily: "Inter, sans-serif",
            },
        },
        states: {
            hover: {
                filter: {
                    type: "darken",
                    value: 1,
                },
            },
        },
        stroke: {
            show: true,
            width: 0,
            colors: ["transparent"],
        },
        grid: {
            show: false,
            strokeDashArray: 4,
            padding: {
                left: 2,
                right: 2,
                top: -14
            },
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
        xaxis: {
            floating: false,
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                }
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            categories: monthlyCategories,
        },
        yaxis: {
            show: false,
        },
        fill: {
            opacity: 1,
        },
    };

    // Pie Chart Configuration
    const pieChartOptions = {
        series: santriValues,
        colors: ["#1C64F2", "#16BDCA", "#FDBA8C", "#E74694", "#9061F9", "#F59E0B", "#EF4444", "#10B981"],
        chart: {
            height: 320,
            width: "100%",
            type: "pie",
        },
        stroke: {
            colors: ["white"],
            lineCap: "",
        },
        plotOptions: {
            pie: {
                labels: {
                    show: true,
                },
                size: "100%",
                dataLabels: {
                    offset: -25
                }
            },
        },
        labels: santriLabels,
        dataLabels: {
            enabled: true,
            style: {
                fontFamily: "Inter, sans-serif",
            },
        },
        legend: {
            position: "bottom",
            fontFamily: "Inter, sans-serif",
        },
        yaxis: {
            labels: {
                formatter: function(value) {
                    return value + " target"
                },
            },
        },
        xaxis: {
            labels: {
                formatter: function(value) {
                    return value + " target"
                },
            },
            axisTicks: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
        },
    };

    // Render Charts
    if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
        const columnChart = new ApexCharts(document.getElementById("column-chart"), columnChartOptions);
        columnChart.render();
    }

    if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
        const pieChart = new ApexCharts(document.getElementById("pie-chart"), pieChartOptions);
        pieChart.render();
    }

    function editTarget(id_target, id_santri, target_bulanan, bulan, tahun) {
        document.getElementById('modalLabel').textContent = 'Edit Target';
        document.getElementById('id_target').value = id_target;
        document.getElementById('id_santri').value = id_santri;
        document.getElementById('target_bulanan').value = target_bulanan;
        document.getElementById('bulan').value = bulan;
        document.getElementById('tahun').value = tahun;
    }

    function deleteTarget(id_target) {
        if (confirm('Apakah Anda yakin ingin menghapus target ini?')) {
            window.location.href = '<?= BASEURL ?>/admin/target/deleteTarget/' + id_target;
        }
    }

    document.getElementById('add-btn').addEventListener('click', function() {
        document.getElementById('modalLabel').textContent = 'Tambah Target';
        document.getElementById('form').reset();
        document.getElementById('id_target').value = '';
        document.getElementById('tahun').value = new Date().getFullYear();
    });
</script>

<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto fixed inset-0 z-50 justify-center items-center w-full h-full bg-gray-800 bg-opacity-50">
    <div class="relative w-full max-w-4xl max-h-full">
        <div class="relative bg-white rounded-lg shadow-lg">
            <div class="flex items-center justify-between p-4 border-b rounded-t">
                <h3 id="modalLabel" class="text-lg font-semibold">Tambah Target</h3>

                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 flex items-center justify-center"
                    data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/admin/target/createUpdateTarget" method="POST" id="form" class="p-6">
                    <input type="hidden" name="id_target" id="id_target">

                    <!-- Santri -->
                    <div class="mb-4">
                        <label for="id_santri" class="block mb-2 text-sm font-medium">Santri</label>
                        <select name="id_santri" id="id_santri"
                            class="bg-gray-50 border rounded-lg w-full p-3 focus:ring-blue-500 focus:border-blue-500"
                            required>
                            <option value="">Pilih Santri</option>
                            <?php foreach ($data['santri'] as $santri): ?>
                                <option value="<?= $santri['id_santri'] ?>"><?= $santri['nama_santri'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Target Bulanan -->
                    <div class="mb-4">
                        <label for="target_bulanan" class="block mb-2 text-sm font-medium">Target Bulanan</label>
                        <input type="number" name="target_bulanan" id="target_bulanan"
                            class="bg-gray-50 border rounded-lg w-full p-3 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Masukkan target bulanan" required>
                    </div>

                    <!-- Bulan -->
                    <div class="mb-4">
                        <label for="bulan" class="block mb-2 text-sm font-medium">Bulan</label>
                        <select name="bulan" id="bulan"
                            class="bg-gray-50 border rounded-lg w-full p-3 focus:ring-blue-500 focus:border-blue-500"
                            required>
                            <option value="">Pilih Bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>

                    <!-- Tahun -->
                    <div class="mb-4">
                        <label for="tahun" class="block mb-2 text-sm font-medium">Tahun</label>
                        <input type="number" name="tahun" id="tahun"
                            class="bg-gray-50 border rounded-lg w-full p-3 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Masukkan tahun" required min="2000" max="2100" value="<?= date('Y') ?>">
                    </div>
                    <!-- Tombol Simpan -->
                    <button type="submit"
                        class="w-full text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm p-3">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>