<?php

class Orang_tua extends Controller
{
    public function index()
    {
        $orang_tua = $this->model('Orang_tua_model')->getOrang_tua();
        $data['user'] = $this->model('User_model')->getNamaOrangTua();


        $data['orang_tua'] = array_reduce($orang_tua, function ($carry, $item) {
            $carry[$item['id_orang_tua']]['id_orang_tua'] = $item['id_orang_tua'];
            $carry[$item['id_orang_tua']]['nama_orang_tua'] = $item['nama_orang_tua'];
            $carry[$item['id_orang_tua']]['alamat'] = $item['alamat'];
            $carry[$item['id_orang_tua']]['role'] = $item['role'];
            $carry[$item['id_orang_tua']]['santri'][] = $item['nama_anak'];
            $carry[$item['id_orang_tua']]['id_user'] = $item['id_user'];

            return $carry;
        }, []);

        $header['title'] = 'Orang Tua';

        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/orang_tua/index', $data);
        $this->view('templates/admin_footer');
    }

    public function createUpdateOrangTua()
    {
        $issetId = $_POST['id'] !== "";


        $isSuccess = ($issetId ? $this->model('Orang_tua_model')->editOrangTua($_POST) : $this->model('Orang_tua_model')->createOrangTua($_POST)) > 0;
        Flasher::setFlash($isSuccess, $issetId ? "Diubah" : 'Ditambahkan');
        header('Location: ' . BASEURL_ADMIN . '/orang_tua');
        exit;
    }

    public function deleteOrangTua($id_orang_tua)
    {
        $isSuccess = $this->model('Orang_tua_model')->deleteOrangTua($id_orang_tua) > 0;
        Flasher::setFlash($isSuccess, "Dihapus");
        header('Location: ' . BASEURL_ADMIN . '/orang_tua');
        exit;
    }

    public function monitoring()
    {
        // Cek role user
        $user_role = $_SESSION['role'] ?? '';
        $is_orang_tua = $user_role === 'orang tua';
        $is_guru = $user_role === 'guru';
        $is_admin = $user_role === 'admin' || $user_role === 'superadmin';
        if ($is_orang_tua) {
            // Jika user adalah orang tua, ambil id_user dari session
            $username = $_SESSION['username'];
            $user = $this->model('User_model')->getUserByUsername($username);

            if (!$user) {
                $this->pageAdminNotFound();
                return;
            }

            // Ambil data orang tua berdasarkan id_user
            $orang_tua_data = $this->model('Orang_tua_model')->getOrangTuaByUserId($user['id_user']);
            if (!$orang_tua_data) {
                $this->pageAdminNotFound();
                return;
            }

            // Redirect langsung ke halaman detail
            $this->monitoring_detail($orang_tua_data['id_orang_tua']);
            return;
        } else if ($is_guru || $is_admin) {
            // Jika user adalah guru, admin atau superadmin, tampilkan semua data orang tua
            $orang_tua = $this->model('Orang_tua_model')->getOrang_tua();

            // Restrukturisasi data orang tua dan anak-anaknya
            $data['orang_tua'] = array_reduce($orang_tua, function ($carry, $item) {
                $carry[$item['id_orang_tua']]['id_orang_tua'] = $item['id_orang_tua'];
                $carry[$item['id_orang_tua']]['nama_orang_tua'] = $item['nama_orang_tua'];
                $carry[$item['id_orang_tua']]['alamat'] = $item['alamat'];
                $carry[$item['id_orang_tua']]['role'] = $item['role'];
                $carry[$item['id_orang_tua']]['santri'][] = $item['nama_anak'];
                $carry[$item['id_orang_tua']]['id_user'] = $item['id_user'];

                return $carry;
            }, []);

            $header['title'] = 'Monitoring Santri';
            $data['is_orang_tua'] = $is_orang_tua; // Tambahkan flag untuk tampilan
            $data['is_guru'] = $is_guru; // Tambahkan flag untuk tampilan guru

            $this->view('templates/admin_header', $header);
            $this->view('templates/admin_navbar');
            $this->view('admin/orang_tua_monitoring/index', $data);
            $this->view('templates/admin_footer');
        }
    }

    public function monitoring_detail($id_orang_tua)
    {
        // Cek role user
        $user_role = $_SESSION['role'] ?? '';
        $is_orang_tua = $user_role === 'orang tua';
        $is_guru = $user_role === 'guru';
        $is_admin = $user_role === 'admin' || $user_role === 'superadmin';

        if ($is_orang_tua) {
            // Jika user adalah orang tua, verifikasi bahwa mereka hanya melihat data mereka sendiri
            $username = $_SESSION['username'];
            $user = $this->model('User_model')->getUserByUsername($username);

            if (!$user) {
                $this->pageAdminNotFound();
                return;
            }

            // Ambil data orang tua berdasarkan id_user
            $orang_tua_data = $this->model('Orang_tua_model')->getOrangTuaByUserId($user['id_user']);

            if (!$orang_tua_data || $orang_tua_data['id_orang_tua'] != $id_orang_tua) {
                // Jika orang tua mencoba melihat data orang tua lain
                $this->pageAdminNotFound();
                return;
            }
        } else if (!$is_guru && !$is_admin) {
            // Jika bukan orang tua, guru, atau admin, tolak akses
            $this->pageAdminNotFound();
            return;
        }

        // Ambil data orang tua
        $orang_tua = $this->model('Orang_tua_model')->getOrangTuaById($id_orang_tua);

        if (!$orang_tua) {
            $this->pageAdminNotFound();
            return;
        }

        // Ambil data user orang tua untuk mendapatkan nama, alamat, dll
        $user_orang_tua = $this->model('User_model')->getUserById($orang_tua['id_user']);
        $data['orang_tua'] = [
            'nama' => $user_orang_tua['nama'],
            'alamat' => $user_orang_tua['alamat'],
            'email' => $user_orang_tua['email'],
            'kontak' => $user_orang_tua['kontak'] ?? '-'
        ];

        // Ambil daftar santri dari orang tua ini
        $santri_list = $this->model('Santri_model')->getSantriByOrangTuaId($id_orang_tua);
        $data['santri_list'] = [];

        // Untuk setiap santri, ambil data hafalan
        foreach ($santri_list as $santri) {
            $id_santri = $santri['id_santri'];
            $santri_data = [
                'id_santri' => $id_santri,
                'nama_santri' => $santri['nama_santri'],
                'laporan' => [
                    'total_pertemuan' => 0,
                    'total_hafalan_ayat' => 0,
                    'total_hafalan' => 0
                ],
                'detail_hafalan' => []
            ];

            // Ambil data hafalan santri
            $hafalan_list = $this->model('Hafalan_model')->getHafalanBySantri($id_santri);
            $santri_data['detail_hafalan'] = $hafalan_list;

            // Hitung statistik
            $santri_data['laporan']['total_pertemuan'] = count($hafalan_list);
            $santri_data['laporan']['total_hafalan_ayat'] = $this->model('Hafalan_model')->getTotalHafalanBySantri($id_santri);

            $data['santri_list'][] = $santri_data;
        }

        $header['title'] = 'Detail Monitoring Santri';
        $data['is_orang_tua'] = $is_orang_tua; // Tambahkan flag untuk tampilan
        $data['is_guru'] = $is_guru; // Tambahkan flag untuk tampilan guru

        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/orang_tua_monitoring/detail', $data);
        $this->view('templates/admin_footer');
    }
}
