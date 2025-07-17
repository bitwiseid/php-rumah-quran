<?php

class Hafalan extends Controller
{
    public function index($id_santri = null)
    {
        if ($id_santri) {
            // Filter berdasarkan santri tertentu
            $data['hafalan'] = $this->model('Hafalan_model')->getHafalanBySantri($id_santri);
            $data['hafalan_bulan_ini'] = $this->model('Hafalan_model')->getHafalanByMonthAndSantri(date('n'), date('Y'), $id_santri);
            $data['id_santri_filter'] = $id_santri;

            // Ambil informasi santri untuk ditampilkan
            $data['santri_info'] = $this->model('Santri_model')->getSantriById($id_santri);
        } else {
            // Tampilkan semua hafalan
            $data['hafalan'] = $this->model('Hafalan_model')->getHafalan();
            $data['hafalan_bulan_ini'] = $this->model('Hafalan_model')->getHafalanByMonth(date('n'), date('Y'));
            $data['selected_santri'] = null;
        }

        // Jika tidak ada data hafalan bulan ini, buat data dummy untuk testing
        if (empty($data['hafalan_bulan_ini'])) {
            $data['hafalan_bulan_ini'] = [
                ['minggu' => 1, 'total_ayat' => 25],
                ['minggu' => 2, 'total_ayat' => 30],
                ['minggu' => 3, 'total_ayat' => 20]
            ];
        }

        $data['santri'] = $this->model('Santri_model')->getSantri();
        $data['guru'] = $this->model('Guru_model')->getGuru();
        $data['id_santri_filter'] = $id_santri;
        $header['title'] = 'Hafalan';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/hafalan/index', $data);
        $this->view('templates/admin_footer');
    }

    public function createUpdateHafalan()
    {
        if ($_POST) {
            // Validasi panjang keterangan
            $keterangan = $_POST['keterangan'];
            if (strlen($keterangan) > 255) {
                Flasher::setFlash('Keterangan terlalu panjang! Maksimal 255 karakter.', 'error');
                header('Location: ' . BASEURL . '/admin/hafalan');
                exit;
            }

            $data = [
                'id_santri' => $_POST['id_santri'],
                'jumlah_ayat' => $_POST['jumlah_ayat'],
                'tanggal' => $_POST['tanggal'],
                'id_guru' => $_POST['id_guru'],
                'keterangan' => $keterangan
            ];

            if (isset($_POST['id_hafalan']) && !empty($_POST['id_hafalan'])) {
                // Update
                $data['id_hafalan'] = $_POST['id_hafalan'];
                if ($this->model('Hafalan_model')->updateHafalan($data) > 0) {
                    Flasher::setFlash('Hafalan berhasil diperbarui!', 'success');
                } else {
                    Flasher::setFlash('Gagal memperbarui hafalan!', 'error');
                }
            } else {
                // Create
                if ($this->model('Hafalan_model')->createHafalan($data) > 0) {
                    Flasher::setFlash('Hafalan berhasil ditambahkan!', 'success');
                } else {
                    Flasher::setFlash('Gagal menambahkan hafalan!', 'error');
                }
            }
        }
        header('Location: ' . BASEURL . '/admin/hafalan');
        exit;
    }

    public function deleteHafalan($id_hafalan)
    {
        if ($this->model('Hafalan_model')->deleteHafalan($id_hafalan) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
        }
        header('Location: ' . BASEURL . '/admin/hafalan');
        exit;
    }

    public function getById($id_hafalan)
    {
        echo json_encode($this->model('Hafalan_model')->getHafalanById($id_hafalan));
    }
}
