<?php
class Guru_model extends Model
{
    protected $table = 'guru';

    public function getGuru()
    {
        $this->db->query("SELECT 
                            guru.*, 
                            user.nama AS nama_guru,
                            user.alamat, 
                            user.role, 
                            user.login_at 
                          FROM guru
                          JOIN user ON guru.id_user = user.id_user
                          WHERE user.role = 'guru'");

        return $this->db->resultSet();
    }

    public function getTotalGuru()
    {
        $this->db->query("SELECT COUNT(*) AS totalGuru FROM `guru`");
        $result = $this->db->single();
        return $result['totalGuru'] ?? 0;
    }

    public function createGuru($data)
    {
        // Cek apakah id_user sudah ada di tabel guru
        $this->db->query("SELECT id_guru FROM guru WHERE id_user = :id_user");
        $this->db->bind('id_user', $data['guru']);
        if ($this->db->single()) {
            return 0; // Sudah ada, jangan insert lagi
        }

        // Lanjutkan insert jika belum ada
        $this->db->query("INSERT INTO guru (id_user) VALUES (:id_user)");
        $this->db->bind('id_user', $data['guru']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editGuru($data)
    {
        $query = "UPDATE guru 
              SET id_user = :id_user 
              WHERE id_guru = :id_guru";

        $this->db->query($query);
        $this->db->bind('id_user', $data['guru']);      // input name="guru" (id_user)
        $this->db->bind('id_guru', $data['id']);        // input name="id" (id_orang_tua)

        return $this->db->rowCount();
    }

    public function deleteGuru($id_guru)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_guru = :id_guru";
        $this->db->query($query);
        $this->db->bind('id_guru', $id_guru);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function getGuruByUserId($id_user)
    {
        $this->db->query("SELECT * FROM guru WHERE id_user = :id_user");
        $this->db->bind('id_user', $id_user);
        return $this->db->single();
    }
}