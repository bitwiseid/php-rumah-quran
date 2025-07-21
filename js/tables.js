if (
  document.getElementById("admin-table") &&
  typeof simpleDatatables !== "undefined" &&
  typeof simpleDatatables.DataTable !== "undefined"
) {
  const dataTable = new simpleDatatables.DataTable("#admin-table", {
    searchable: false,
    perPageSelect: false,
    sortable: true,
  });
  const searchInput = document.getElementById("dataTableSearch");
  if (searchInput) {
    searchInput.addEventListener("input", function () {
      dataTable.search(searchInput.value);
    });
  }
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

  const statusWarning = document.getElementById("statusWarning");
  if (!isStatusSelected && statusWarning) {
    statusWarning.classList.remove("hidden");
    return false;
  } else if (statusWarning) {
    statusWarning.classList.add("hidden");
  }
  return true;
}

// Cek keberadaan form sebelum menambahkan event listener
const form = document.querySelector("form");
if (form) {
  form.addEventListener("submit", function (event) {
    if (!validateForm()) {
      event.preventDefault();
    }
  });
}

let selectedOrangTua = "";
// Fungsi untuk memilih orang tua
function selectOrangTua(id_orang_tua, nama) {
  const selectedOrangTuaEl = document.getElementById("selected-orang_tua");
  const orangTuaInput = document.getElementById("orang_tua");

  if (selectedOrangTuaEl) {
    selectedOrangTuaEl.innerText = nama || "Pilih Orang Tua"; // Tampilkan nama atau default
  }

  if (orangTuaInput) {
    orangTuaInput.value = id_orang_tua || ""; // Set nilai hidden input
  }

  closeDropdown(); // Tutup dropdown (jika ada fungsi closeDropdown)
}
//SAMPAI SINI BAGIAN TAMBAH SANTRI

//INI BAGIAN MENU USER TAMBAH SANTRI
function selectRole(element, role) {
  const roleInput = document.getElementById("role");
  const selectedRole = document.getElementById("selected-role");

  if (roleInput) {
    roleInput.value = element.getAttribute("id");
  }

  if (selectedRole) {
    selectedRole.innerHTML = role;
  }

  closeDropdown();
}
// Cek keberadaan elemen sebelum menambahkan event listener
const addBtn = document.getElementById("add-btn");
if (addBtn) {
  addBtn.addEventListener("click", function () {
    document.getElementById("modalLabelUser").innerText = "Tambah User";
    document.getElementById("form").reset();
    document.getElementById("id").value = "";
    document.getElementById("selected-role").innerText = "Pilih User";
  });
}

// Fungsi untuk menutup dropdown
function closeDropdown() {
  const dropdown = document.getElementById("dropdown");
  if (dropdown) {
    dropdown.classList.add("hidden");
  }
}

// Menampilkan dropdown saat tombol diklik
document.addEventListener("DOMContentLoaded", function () {
  const dropdownBtn = document.getElementById("dropdownDefaultButton");
  if (dropdownBtn) {
    dropdownBtn.addEventListener("click", function () {
      const dropdown = document.getElementById("dropdown");
      if (dropdown) {
        dropdown.classList.toggle("hidden");
      }
    });
  }
});
