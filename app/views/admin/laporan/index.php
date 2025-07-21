<div class="mt-14 sm:ml-60 p-6 bg-blue-900 min-h-screen">
    <div class="p-5 bg-gray-100 shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-4 text-blue-900">Laporan</h1>
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
                    placeholder="Cari santri..." id="dataTableSearch">
            </div>

            <!-- Button Filter -->
            <div class="button-container flex items-center gap-4">
                <!-- Tombol Print -->
                <button onclick="printLaporan()"
                    class="flex items-center gap-2 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2">
                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M8 3a2 2 0 0 0-2 2v3h12V5a2 2 0 0 0-2-2H8Zm-3 7a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h1v-4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v4h1a2 2 0 0 0 2-2v-5a2 2 0 0 0-2-2H5Zm4 11a1 1 0 0 1-1-1v-4h8v4a1 1 0 0 1-1 1H9Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Print</span>
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
                            </span></th>
                        <th class="p-3">
                            <span class="flex items-center">
                                Total Pertemuan
                                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        </th>
                        <th class="p-3">
                            <span class="flex items-center">
                                Total Hafalan
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
                    <?php if (!empty($data['laporan'])): ?>
                        <?php $no = 1; ?>
                        <?php foreach ($data['laporan'] as $laporan): ?>
                            <tr class="hover:bg-blue-100 cursor-pointer text-gray-700">
                                <td class="p-3"><?= $no++; ?></td>
                                <td class="p-3"><?= htmlspecialchars($laporan['nama_santri']); ?></td>
                                <td class="p-3"><?= $laporan['total_pertemuan']; ?></td>
                                <td class="p-3"><?= $laporan['total_hafalan']; ?></td>
                                <td class="p-3">
                                    <div class="flex space-x-2">
                                        <!-- Tombol Lihat Detail -->
                                        <a href="<?= BASEURL; ?>/admin/hafalan/<?= $laporan['id_santri']; ?>"
                                            class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2"
                                            title="Lihat Detail Hafalan">
                                            <svg class="w-4 h-4 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <!-- Tombol Print Individual -->
                                        <button onclick="printIndividual(<?= $laporan['id_santri']; ?>)"
                                            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2"
                                            title="Print Laporan Santri">
                                            <svg class="w-4 h-4 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M8 3a2 2 0 0 0-2 2v3h12V5a2 2 0 0 0-2-2H8Zm-3 7a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h1v-4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v4h1a2 2 0 0 0 2-2v-5a2 2 0 0 0-2-2H5Zm4 11a1 1 0 0 1-1-1v-4h8v4a1 1 0 0 1-1 1H9Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="p-6 text-center text-gray-500">
                                Belum ada data laporan hafalan
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
    // Simpan konten asli halaman
    let originalContent = '';

    // Fungsi untuk print semua laporan
    function printLaporan() {
        fetchPrintData(null);
    }

    // Fungsi untuk print laporan individual
    function printIndividual(id_santri) {
        fetchPrintData(id_santri);
    }

    // Fungsi untuk mengambil data print via AJAX
    function fetchPrintData(id_santri) {
        const url = id_santri ?
            '<?= BASEURL; ?>/admin/laporan/getPrintData/' + id_santri :
            '<?= BASEURL; ?>/admin/laporan/getPrintData';

        fetch(url)
            .then(response => response.json())
            .then(data => {
                generatePrintContent(data);
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengambil data laporan');
            });
    }

    // Fungsi untuk generate konten print
    function generatePrintContent(data) {
        // Simpan konten asli
        originalContent = document.documentElement.innerHTML;

        let printContent = '';
        const currentDate = new Date().toLocaleDateString('id-ID', {
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        });

        if (data.type === 'individual') {
            // Laporan individual
            printContent = `
        <!DOCTYPE html>
        <html>
        <head>
            <title>Laporan Hafalan - ${data.santri.nama_santri}</title>
            <style>
                body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
                .header { text-align: center; margin-bottom: 30px; border-bottom: 2px solid #333; padding-bottom: 20px; }
                .header h1 { margin: 0; color: #333; font-size: 24px; }
                .header p { margin: 5px 0; color: #666; }
                .info-section { margin-bottom: 20px; }
                .info-section h3 { margin-bottom: 10px; color: #333; border-bottom: 1px solid #ddd; padding-bottom: 5px; }
                table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
                th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
                th { background-color: #f5f5f5; font-weight: bold; }
                .text-center { text-align: center; }
                @media print { body { margin: 0; } }
            </style>
        </head>
        <body>
            <div class="header">
                <h1>LAPORAN HAFALAN SANTRI</h1>
                <p>Rumah Quran</p>
                <p>Tanggal Cetak: ${currentDate}</p>
                <p><strong>Santri: ${data.santri.nama_santri}</strong></p>
            </div>
            
            <div class="info-section">
                <h3>Informasi Santri</h3>
                <table>
                    <tr><td width="200"><strong>Nama Santri</strong></td><td>${data.santri.nama_santri}</td></tr>
                    <tr><td><strong>Alamat</strong></td><td>${data.santri.alamat || '-'}</td></tr>
                </table>
            </div>
            
            <div class="info-section">
                <h3>Statistik Hafalan</h3>
                <table>
                    <tr><td width="200"><strong>Total Pertemuan</strong></td><td>${data.laporan.total_pertemuan} kali</td></tr>
                    <tr><td><strong>Total Hafalan Ayat</strong></td><td>${data.laporan.total_hafalan_ayat} ayat</td></tr>
                    <tr><td><strong>Total Hafalan</strong></td><td>${data.laporan.total_hafalan} ayat</td></tr>
                </table>
            </div>`;

            if (data.detail_hafalan && data.detail_hafalan.length > 0) {
                printContent += `
            <div class="info-section">
                <h3>Detail Hafalan</h3>
                <table>
                    <thead>
                        <tr>
                            <th width="50">No</th>
                            <th>Tanggal</th>

                            <th>Jumlah Ayat</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>`;

                data.detail_hafalan.forEach((hafalan, index) => {
                    printContent += `
                        <tr>
                            <td class="text-center">${index + 1}</td>
                            <td>${new Date(hafalan.tanggal).toLocaleDateString('id-ID')}</td>

                            <td class="text-center">${hafalan.jumlah_ayat}</td>
                            <td>${hafalan.keterangan || '-'}</td>
                        </tr>`;
                });

                printContent += `
                    </tbody>
                </table>
            </div>`;
            }

            printContent += `
            <div style="margin-top: 50px; text-align: right;">
                <p>Dicetak pada: ${new Date().toLocaleString('id-ID')}</p>
                <p>Rumah Quran</p>
            </div>
        </body>
        </html>`;

        } else {
            // Laporan semua santri
            printContent = `
        <!DOCTYPE html>
        <html>
        <head>
            <title>Laporan Hafalan Semua Santri</title>
            <style>
                body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
                .header { text-align: center; margin-bottom: 30px; border-bottom: 2px solid #333; padding-bottom: 20px; }
                .header h1 { margin: 0; color: #333; font-size: 24px; }
                .header p { margin: 5px 0; color: #666; }
                .info-section { margin-bottom: 20px; }
                .info-section h3 { margin-bottom: 10px; color: #333; border-bottom: 1px solid #ddd; padding-bottom: 5px; }
                table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
                th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
                th { background-color: #f5f5f5; font-weight: bold; }
                .text-center { text-align: center; }
                .summary { background-color: #f9f9f9; padding: 15px; border-radius: 5px; margin-top: 20px; }
                @media print { body { margin: 0; } }
            </style>
        </head>
        <body>
            <div class="header">
                <h1>LAPORAN HAFALAN SEMUA SANTRI</h1>
                <p>Rumah Quran</p>
                <p>Tanggal Cetak: ${currentDate}</p>
            </div>
            
            <div class="info-section">
                <h3>Laporan Hafalan Semua Santri</h3>`;

            if (data.laporan && data.laporan.length > 0) {
                printContent += `
                <table>
                    <thead>
                        <tr>
                            <th width="50">No</th>
                            <th>Nama Santri</th>
                            <th>Total Pertemuan</th>
                            <th>Total Hafalan Ayat</th>
                            <th>Total Hafalan</th>
                        </tr>
                    </thead>
                    <tbody>`;

                data.laporan.forEach((laporan, index) => {
                    printContent += `
                        <tr>
                            <td class="text-center">${index + 1}</td>
                            <td>${laporan.nama_santri}</td>
                            <td class="text-center">${laporan.total_pertemuan}</td>
                            <td class="text-center">${laporan.total_hafalan_ayat}</td>
                            <td class="text-center">${laporan.total_hafalan}</td>
                        </tr>`;
                });

                const totalHafalan = data.laporan.reduce((sum, item) => sum + parseInt(item.total_hafalan), 0);
                const avgHafalan = data.laporan.length > 0 ? (totalHafalan / data.laporan.length).toFixed(2) : 0;

                printContent += `
                    </tbody>
                </table>
                
                <div class="summary">
                    <h4>Ringkasan:</h4>
                    <p><strong>Total Santri:</strong> ${data.laporan.length} orang</p>
                    <p><strong>Total Hafalan Ayat:</strong> ${totalHafalan} ayat</p>
                    <p><strong>Rata-rata Hafalan per Santri:</strong> ${avgHafalan} ayat</p>
                </div>`;
            } else {
                printContent += '<p>Belum ada data laporan hafalan.</p>';
            }

            printContent += `
            </div>
            
            <div style="margin-top: 50px; text-align: right;">
                <p>Dicetak pada: ${new Date().toLocaleString('id-ID')}</p>
                <p>Rumah Quran</p>
            </div>
        </body>
        </html>`;
        }

        // Ganti konten halaman dengan konten print
        document.documentElement.innerHTML = printContent;

        // Print halaman
        setTimeout(() => {
            window.print();

            // Kembalikan konten asli setelah print
            setTimeout(() => {
                document.documentElement.innerHTML = originalContent;
                location.reload();
            }, 1000);
        }, 500);
    }

    // Fungsi search table
    document.getElementById('dataTableSearch').addEventListener('keyup', function() {
        const searchValue = this.value.toLowerCase();
        const tableRows = document.querySelectorAll('#admin-table tbody tr');

        tableRows.forEach(row => {
            const santriName = row.cells[1].textContent.toLowerCase();
            if (santriName.includes(searchValue)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });


</script>