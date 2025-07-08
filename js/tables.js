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

// Fungsi untuk memilih Santri
function selectSantri(id, nama) {
  selectedSantri = santri; // Simpan santri yang dipilih
  document.getElementById("selected-santri").innerText = nama; // Update tampilan dropdown
  document.getElementById("santri").value = id;
  closeDropdown(); // Tutup dropdown setelah memilih
}

let selectedOrangTua = "";
// Fungsi untuk memilih orang tua
function selectOrangTua(id_user, nama) {
  selectedOrangTua = orang_tua; // Simpan orang tua yang dipilih
  document.getElementById("selected-orang_tua").innerText = nama; // Update tampilan dropdown
  document.getElementById("orang_tua").value = id_user;
  closeDropdown(); // Tutup dropdown setelah memilih
}

function selectSantri(id_user, nama) {
    document.getElementById('santri').value = id_user;
    document.getElementById('selected-santri').innerText = nama;
}

function selectOrangTua(id_orang_tua, nama) {
    document.getElementById('orang_tua').value = id_orang_tua;
    document.getElementById('selected-orang_tua').innerText = nama;
}

function selectGuru(id_user, nama) {
    document.getElementById('guru').value = id_user;
    document.getElementById('selected-guru').innerText = nama;
}

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
