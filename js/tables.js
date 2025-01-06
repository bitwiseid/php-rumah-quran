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

// validasi radio tambah kategori
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

let selectedCategory = ""; // Variabel untuk menyimpan kategori yang dipilih

// Fungsi untuk memilih kategori
function selectCategory(id, name) {
  selectedCategory = category; // Simpan kategori yang dipilih
  document.getElementById("selected-category").innerText = name; // Update tampilan dropdown
  document.getElementById("category").value = id;
  closeDropdown(); // Tutup dropdown setelah memilih
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
