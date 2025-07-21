<?php
class Target_model extends Model
{
    protected $table = 'target';

    public function getTarget()
    {
        $this->db->query("SELECT 
            target.id_target,
            target.id_santri,
            target.target_bulanan,
            target.bulan,
            target.tahun,
            user.nama AS nama_santri
            FROM target
            JOIN santri ON target.id_santri = santri.id_santri
            JOIN user ON santri.id_user = user.id_user");
        return $this->db->resultSet();
    }

    public function getTargetById($id_target)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_target = :id_target');
        $this->db->bind('id_target', $id_target);
        return $this->db->single();
    }

    public function createTarget($data)
    {
        $query = "INSERT INTO " . $this->table . " (id_santri, target_bulanan, bulan, tahun) 
                VALUES (:id_santri, :target_bulanan, :bulan, :tahun)";
        $this->db->query($query);
        $this->db->bind(':id_santri', $data['id_santri']);
        $this->db->bind(':target_bulanan', $data['target_bulanan']);
        $this->db->bind(':bulan', $data['bulan']);
        $this->db->bind(':tahun', $data['tahun']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateTarget($data)
    {
        $query = "UPDATE " . $this->table . " 
                SET id_santri = :id_santri,
                    target_bulanan = :target_bulanan,
                    bulan = :bulan,
                    tahun = :tahun
                WHERE id_target = :id_target";
        $this->db->query($query);
        $this->db->bind(':id_target', $data['id_target']);
        $this->db->bind(':id_santri', $data['id_santri']);
        $this->db->bind(':target_bulanan', $data['target_bulanan']);
        $this->db->bind(':bulan', $data['bulan']);
        $this->db->bind(':tahun', $data['tahun']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteTarget($id_target)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_target = :id_target";
        $this->db->query($query);
        $this->db->bind('id_target', $id_target);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getTotalTarget()
    {
        $this->db->query("SELECT COUNT(*) AS total_target FROM target");
        $result = $this->db->single();
        return $result['total_target'] ?? 0;
    }

    public function getTargetAchievement()
    {
        $this->db->query("SELECT 
            COUNT(CASE WHEN hafalan_total.total_ayat >= target.target_bulanan THEN 1 END) as tercapai,
            COUNT(CASE WHEN hafalan_total.total_ayat < target.target_bulanan THEN 1 END) as belum_tercapai,
            COUNT(*) as total_target
            FROM target
            LEFT JOIN (
                SELECT 
                    hafalan.id_santri,
                    SUM(hafalan.jumlah_ayat) as total_ayat
                FROM hafalan 
                WHERE MONTH(hafalan.tanggal) = MONTH(CURDATE()) 
                AND YEAR(hafalan.tanggal) = YEAR(CURDATE())
                GROUP BY hafalan.id_santri
            ) as hafalan_total ON target.id_santri = hafalan_total.id_santri
            WHERE target.bulan = MONTH(CURDATE()) AND target.tahun = YEAR(CURDATE())");
        return $this->db->single();
    }
}