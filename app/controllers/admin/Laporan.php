<?php

class Laporan extends Controller
{
    public function index()
    {
        // Ambil data laporan hafalan per santri
        $data['laporan'] = $this->model('Hafalan_model')->getLaporanHafalanSantri();
        
        $header['title'] = 'Laporan';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/laporan/index', $data);
        $this->view('templates/admin_footer');
    }
    
    public function getPrintData($id_santri = null)
    {
        header('Content-Type: application/json');
        
        if ($id_santri) {
            // Data laporan individual
            $laporan = $this->model('Hafalan_model')->getLaporanHafalanSantriById($id_santri);
            $santri = $this->model('Santri_model')->getSantriById($id_santri);
            $detail_hafalan = $this->model('Hafalan_model')->getHafalanBySantri($id_santri);
            
            echo json_encode([
                'type' => 'individual',
                'laporan' => $laporan,
                'santri' => $santri,
                'detail_hafalan' => $detail_hafalan
            ]);
        } else {
            // Data semua laporan
            $laporan = $this->model('Hafalan_model')->getLaporanHafalanSantri();
            
            echo json_encode([
                'type' => 'all',
                'laporan' => $laporan
            ]);
        }
    }
}