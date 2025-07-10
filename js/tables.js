if (
  document.getElementById("admin-table") &&
  typeof simpleDatatables.DataTable !== "undefined"
) {
  const dataTable = new simpleDatatables.DataTable("#admin-table", {
    searchable: false,
    perPageSelect: false,
    sortable: true,
  });
  const searchInput = document.getElementById("dataTableSearch");
  searchInput.addEventListener("input", function () {
    dataTable.search(searchInput.value);
  });
}

// validasi radio tambah santri
function validateForm() {
  const statusRadios = document.getElementsByName("showInMenu");
  let isStatusSelected = false;
  for (let i = 0; i < statusRadios.length; i++) {
    if (statusRadios[i].checked) {
      isStatusSelected = true;
      break;
    }
  }

  if (!isStatusSelected) {
    document.getElementById("statusWarning").classList.remove("hidden");
    return false;
  } else {
    document.getElementById("statusWarning").classList.add("hidden");
  }
  return true;
}

document.querySelector("form").addEventListener("submit", function (event) {
  if (!validateForm()) {
    event.preventDefault();
  }
});

let selectedSantri = ""; // Variabel untuk menyimpan santri yang dipilih

// BAGIAN MENU SANTRI TAMBAH SANTRI
// Fungsi untuk memilih Santri
function selectSantri(id, nama) {
  selectedSantri = santri; // Simpan santri yang dipilih
  document.getElementById("selected-santri").innerText = nama; // Update tampilan dropdown
  document.getElementById("santri").value = id;
  const dropdownSantri = document.getElementById('dropdown-santri');
  dropdownSantri.classList.add('hidden');
}
document.getElementById('add-btn')?.addEventListener('click', function() {
  document.getElementById('modalLabel').innerText = 'Tambah Data Santri';
  document.getElementById('form').reset();
  document.getElementById('id').value = '';
  document.getElementById('selected-santri').innerText = 'Pilih Santri';
  });

let selectedOrangTua = "";
// Fungsi untuk memilih orang tua 
function selectOrangTua(id_user, nama) {
  selectedOrangTua = orang_tua; // Simpan orang tua yang dipilih
  document.getElementById("selected-orang_tua").innerText = nama; // Update tampilan dropdown
  document.getElementById("orang_tua").value = id_user;
  closeDropdown(); // Tutup dropdown setelah memilih
}
//SAMPAI SINI BAGIAN TAMBAH SANTRI

//INI BAGIAN MENU SANTRI TAMBAH SANTRI
function selectRole(element, role) {
  document.getElementById('role').value = element.getAttribute('id');
  document.getElementById('selected-role').innerHTML = role;
  closeDropdown();
  }
document.getElementById('add-btn').addEventListener('click', function() {
  document.getElementById('modalLabel').innerText = 'Tambah User';
  document.getElementById('form').reset();
  document.getElementById('id').value = '';
  document.getElementById('selected-role').innerText = 'Pilih User';
  });

        //INI BAGIAN MENU ORANGTUA TAMBAH DATA ORANG TUA
function selectOrangTua(id_orang_tua, nama) {
  selectedOrangTua = orang_tua; // Simpan orang tua yang dipilih
  document.getElementById('orang_tua').value = id_orang_tua;
  document.getElementById('selected-orang_tua').innerText = nama;
  closeDropdown();
}
document.getElementById('add-btn')?.addEventListener('click', function() {
  document.getElementById('modalLabel').innerText = 'Tambah Data Orang Tua';
  document.getElementById('form').reset();
  document.getElementById('id').value = '';
  document.getElementById('selected-orang_tua').innerText = 'Pilih Orang Tua';
  });

function selectGuru(id_user, nama) {
  document.getElementById('guru').value = id_user;
  document.getElementById('selected-guru').innerText = nama;
  const dropdownGuru = document.getElementById('dropdown-guru');
  dropdownGuru.classList.add('hidden');
}
document.getElementById('add-btn')?.addEventListener('click', function() {
  document.getElementById('modalLabel').innerText = 'Tambah Data Guru';
  document.getElementById('form').reset();
  document.getElementById('id').value = '';
  document.getElementById('selected-guru').innerText = 'Pilih Guru';
  });

// Fungsi untuk menutup dropdown
function closeDropdown() {
  document.getElementById("dropdown").classList.add("hidden");
}

// Menampilkan dropdown saat tombol diklik
document
  .getElementById("dropdownDefaultButton")
  .addEventListener("click", function () {
    document.getElementById("dropdown").classList.toggle("hidden");
  });
