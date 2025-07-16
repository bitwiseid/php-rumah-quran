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
                    placeholder="Search..." id="dataTableSearch">
            </div>

            <!-- Button Filter -->
            <div class="button-container flex items-center gap-4">
                <!-- Tombol Print 1 -->
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" id="add-btn"
                    class="flex items-center gap-2 text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2">
                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M5.05 3C3.291 3 2.352 5.024 3.51 6.317l5.422 6.059v4.874c0 .472.227.917.613 1.2l3.069 2.25c1.01.742 2.454.036 2.454-1.2v-7.124l5.422-6.059C21.647 5.024 20.708 3 18.95 3H5.05Z" />
                    </svg>

                    <span>Filter</span>
                </button>

                <!-- Tombol Print -->
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" id="add-btn"
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
                                TOtal Pertemuan
                                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        </th>
                        <th class="p-3">
                            <span class="flex items-center">
                                Total Hafalan Ayat
                                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        </th>
                        <th class="p-3">
                            <span class="flex items-center">
                                Total Hafalan Surah
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
                                Juzz
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
                    <tr class="hover:bg-blue-100 cursor-pointer text-gray-700">
                        <td class="p-3">p</td>
                        <td class="p-3">p</td>
                        <td class="p-3">p</td>
                        <td class="p-3">p</td>
                        <td class="p-3">p</td>
                        <td class="p-3">p</td>
                        <td class="p-3">p</td>
                        <td class="p-3">
                            <div class="flex space-x-2">
                                <!-- Tombol Edit -->
                                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                    class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2">
                                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto fixed inset-0 z-50 justify-center items-center w-full h-full bg-gray-800 bg-opacity-50">
    <div class="relative w-full max-w-4xl max-h-full">
        <div class="relative bg-white rounded-lg shadow-lg">
            <div class="flex items-center justify-between p-4 border-b rounded-t">
                <h3 id="modalLabel" class="text-lg font-semibold">Tambah Produk</h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8"
                    data-modal-toggle="crud-modal">
                    &times;
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" id="form" class="p-6">
                    <input type="hidden" name="id" id="id">

                    <!-- Nama Produk -->
                    <div class="mb-4">
                        <label for="name" class="block mb-2 text-sm font-medium">Nama Produk</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border rounded-lg w-full p-3 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Masukkan nama produk" required>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-4">
                        <label for="description" class="block mb-2 text-sm font-medium">Deskripsi</label>
                        <textarea id="description" name="description" rows="4"
                            class="block w-full p-2.5 bg-gray-50 rounded-lg border focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Masukkan deskripsi produk..."></textarea>
                    </div>

                    <!-- Harga -->
                    <div class="mb-4">
                        <label for="price" class="block mb-2 text-sm font-medium">Harga</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1M2 5h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                                </svg>
                            </div>
                            <input type="number" id="price" name="price"
                                class="block w-full pl-10 p-2.5 bg-gray-50 rounded-lg border focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Masukkan harga produk" required />
                        </div>
                    </div>

                    <!-- Berat -->
                    <div class="mb-4">
                        <label for="weight" class="block mb-2 text-sm font-medium">Berat</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5.5 21h13M12 21V7m0 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm2-1.8c3.073.661 2.467 2.8 5 2.8M5 8c3.359 0 2.192-2.115 5.012-2.793M7 9.556V7.75m0 1.806-1.95 4.393a.773.773 0 0 0 .37.962.785.785 0 0 0 .362.089h2.436a.785.785 0 0 0 .643-.335.776.776 0 0 0 .09-.716L7 9.556Zm10 0V7.313m0 2.243-1.95 4.393a.773.773 0 0 0 .37.962.786.786 0 0 0 .362.089h2.436a.785.785 0 0 0 .643-.335.775.775 0 0 0 .09-.716L17 9.556Z" />
                                </svg>
                            </div>
                            <input type="number" id="weight" name="weight"
                                class="block w-full pl-10 p-2.5 bg-gray-50 rounded-lg border focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Masukkan berat produk" required />
                        </div>
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