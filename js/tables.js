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


let selectedOrangTua = "";
// Fungsi untuk memilih orang tua 
function selectOrangTua(id_orang_tua, nama) {
    document.getElementById("selected-orang_tua").innerText = nama || 'Pilih Orang Tua'; // Tampilkan nama atau default
    document.getElementById("orang_tua").value = id_orang_tua || ''; // Set nilai hidden input
    closeDropdown(); // Tutup dropdown (jika ada fungsi closeDropdown)
}
//SAMPAI SINI BAGIAN TAMBAH SANTRI

//INI BAGIAN MENU USER TAMBAH SANTRI
function selectRole(element, role) {
  document.getElementById('role').value = element.getAttribute('id');
  document.getElementById('selected-role').innerHTML = role;
  closeDropdown();
  }
document.getElementById('add-btn').addEventListener('click', function() {
  document.getElementById('modalLabelUser').innerText = 'Tambah User';
  document.getElementById('form').reset();
  document.getElementById('id').value = '';
  document.getElementById('selected-role').innerText = 'Pilih User';
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
