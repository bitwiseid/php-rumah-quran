<div class="mt-14 sm:ml-60 p-6 bg-blue-900 min-h-screen">
    <div class="p-5 bg-gray-100 shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-4 text-blue-900">User</h1>
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
                    class="border rounded-lg p-2 ps-10 w-full bg-white text-gray-950 border-blue-300 focus:border-blue-500 focus:ring focus:ring-gray-200"
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
                                Username
                                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        </th>
                        <th class="p-3">
                            <span class="flex items-center">
                                Status
                                <svg class="w-4 h-4 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        </th>
                        <th class="p-3">
                            <span class="flex items-center">
                                Terakhir Aktif
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
                    <?php $no = 1;
                    foreach ($data['user'] as $user): ?>
                        <tr class="hover:bg-blue-100 cursor-pointer text-gray-700">
                            <td class="p-3"><?= $no++ ?></td>
                            <td class="p-3"><?= $user['username'] ?></td>
                            <td class="p-3"><?= $user['role'] ?></td>
                            <td class="p-3"><?= $user['login_at'] ?></td>
                            <td class="p-3">
                                <div class="flex space-x-2">
                                    <!-- Tombol Edit -->
                                    <button
                                        onclick="editUser(<?= $user['id_user'] ?>, '<?= addslashes($user['username']) ?>','<?= addslashes($user['email']) ?>', '<?= addslashes($user['password']) ?>', '<?= addslashes($user['nama']) ?>','<?= addslashes($user['role']) ?>', '<?= addslashes($user['alamat']) ?>', '<?= addslashes($user['kontak']) ?>', '<?= addslashes($user['login_at']) ?>')"
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
                                    <button
                                        class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-sm p-2"
                                        onclick="confirmDelete('user/delete', <?= $user['id_user'] ?>)">
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
                    <?php endforeach ?>
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
                <h3 id="modalLabel" class="text-lg font-semibold">Tambah User</h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8"
                    data-modal-toggle="crud-modal">
                    &times;
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL_ADMIN ?>/user/quran" method="POST" id="form" class="p-6">
                    <input type="hidden" name="id" id="id">

                    <!-- Username -->
                    <div class="mb-4">
                        <label for="username" class="block mb-2 text-sm font-medium">Username</label>
                        <input type="text" name="username" id="username"
                            class="bg-gray-50 border rounded-lg w-full p-3 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Masukkan Username Anda..." required>
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm font-medium">Email</label>
                        <input type="email" id="email" name="email" rows="4"
                            class="block w-full p-2.5 bg-gray-50 rounded-lg border focus:ring-blue-500 focus:border-blue-500"
                            placeholder="example@ex.com"></input>
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block mb-2 text-sm font-medium">Password</label>
                        <input type="password" name="password" id="password" placeholder="********"
                            class="bg-gray-50 border rounded-lg w-full p-3 focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>

                    <!-- Nama Lengkap -->
                    <div class="mb-4">
                        <label for="nama" class="block mb-2 text-sm font-medium">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama"
                            class="bg-gray-50 border rounded-lg w-full p-3 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Masukkan Nama Lengkap Anda..." required>
                    </div>

                    <!-- Role -->
                    <div class="mb-4">
                        <label for="role" class="block mb-2 text-sm font-medium">Role</label>
                        <!-- Input level (hidden) -->
                        <input type="hidden" name="role" id="role" value="">

                        <!-- Tombol Pilih Level -->
                        <button id="selected-role" data-dropdown-toggle="dropdown"
                            class="capitalize text-white mb-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full p-3 h-12 flex items-center justify-between"
                            type="button">
                            <span>Pilih Role</span>
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-xl w-96">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a id="guru" href="#" class="flex items-center px-4 py-2 hover:bg-gray-100"
                                        onclick="selectRole(this, 'Guru')">
                                        <span>Guru</span>
                                    </a>
                                </li>
                                <li>
                                    <a id="santri" href="#" class="flex items-center px-4 py-2 hover:bg-gray-100"
                                        onclick="selectRole(this, 'Santri')">
                                        <span>Santri</span>
                                    </a>
                                </li>
                                <li>
                                    <a id="orang tua" href="#" class="flex items-center px-4 py-2 hover:bg-gray-100"
                                        onclick="selectRole(this, 'Orang Tua')">
                                        <span>Orang Tua</span>
                                    </a>
                                </li>
                                <li>
                                    <a id="admin" href="#" class="flex items-center px-4 py-2 hover:bg-gray-100"
                                        onclick="selectRole(this, 'Admin')">
                                        <span>Admin</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- alamat -->
                    <div class="mb-4">
                        <label for="alamat" class="block mb-2 text-sm font-medium">Alamat</label>
                        <textarea name="alamat" id="alamat"
                            class="bg-gray-50 border rounded-lg w-full p-3 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Masukkan Alamat Anda..." required></textarea>
                    </div>
                    <!-- Kontak -->
                    <div class="mb-4">
                        <label for="kontak" class="block mb-2 text-sm font-medium">Kontak</label>
                        <input type="text" name="kontak" id="kontak"
                            class="bg-gray-50 border rounded-lg w-full p-3 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Masukkan Kontak Anda..." required>
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

<script>
    function editUser(id, username, email, password, nama, role, alamat, kontak) {
        $("#modalLabel").html("Ubah Data User");
        document.getElementById('id').value = id;
        document.getElementById('username').value = username;
        document.getElementById('email').value = email;
        document.getElementById('password').value = '';
        document.getElementById('password').required = false;
        document.getElementById('nama').value = nama;
        document.getElementById('role').value = role;
        document.getElementById('selected-role').innerHTML = role;
        document.getElementById('alamat').value = alamat;
        document.getElementById('kontak').value = kontak;
    }
</script>