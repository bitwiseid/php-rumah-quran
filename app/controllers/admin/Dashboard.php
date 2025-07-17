<?php

class Dashboard extends Controller
{
    public function index()
    {
        // Data statistik utama
        $data['TotalUser'] = $this->model('User_model')->getTotalUser();
        $data['TotalSantri'] = $this->model('Santri_model')->getTotalSantri();
        $data['TotalGuru'] = $this->model('Guru_model')->getTotalGuru();
        $data['TotalHafalan'] = $this->model('Hafalan_model')->getTotalHafalan();
        
        // Data hafalan bulan ini untuk chart
        $data['hafalan_bulan_ini'] = $this->model('Hafalan_model')->getHafalanByMonth(date('n'), date('Y'));
        
        // Data pencapaian target untuk pie chart
        $targetAchievement = $this->model('Target_model')->getTargetAchievement();
        $data['target_tercapai'] = $targetAchievement['tercapai'] ?? 0;
        $data['target_belum_tercapai'] = $targetAchievement['belum_tercapai'] ?? 0;
        $data['total_target'] = $targetAchievement['total_target'] ?? 0;
        
        // Hitung persentase pencapaian target
        if ($data['total_target'] > 0) {
            $data['persentase_pencapaian'] = round(($data['target_tercapai'] / $data['total_target']) * 100);
        } else {
            $data['persentase_pencapaian'] = 0;
        }
        
        // Data aktivitas terbaru
        $data['recent_hafalan'] = $this->model('Hafalan_model')->getRecentHafalan(10);
        
        $header['title'] = 'Dashboard';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('admin/dashboard/index', $data);
        $this->view('templates/admin_footer');
    }
}