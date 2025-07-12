<?php
class Santri_model extends Model
{
    protected $table = 'santri';

    public function getSantri()
    {
        $this->db->query("SELECT 
                        santri.id_santri,
                        santri.id_orang_tua,
                        user_santri.id_user,
                        user_santri.nama AS nama_santri,
                        user_santri.alamat,
                        user_santri.role,
                        user_santri.login_at,
                        user_ortu.nama AS nama_orang_tua
                      FROM santri
                      JOIN user AS user_santri ON santri.id_user = user_santri.id_user
                      LEFT JOIN orang_tua ON santri.id_orang_tua = orang_tua.id_orang_tua
                      LEFT JOIN user AS user_ortu ON orang_tua.id_user = user_ortu.id_user
                      WHERE user_santri.role = 'santri'");

        return $this->db->resultSet();
    }



    public function getTotalSantri()
    {
        $this->db->query("SELECT COUNT(*) AS totalSantri FROM `santri`");
        $result = $this->db->single();
        return $result['totalSantri'] ?? 0;
    }

    public function createSantri($data)
    {
        try {
            // Ambil id_orang_tua berdasarkan id_user yang dikirim
            $this->db->query("SELECT id_orang_tua FROM orang_tua WHERE id_user = :id_user");
            $this->db->bind('id_user', $data['orang_tua']); // 'orang_tua' dari form = id_user
            $ortu = $this->db->single();

            if (!$ortu) {
                error_log("Orang tua tidak ditemukan untuk id_user: " . $data['orang_tua']);
                return 0;
            }

            $id_orang_tua = $ortu['id_orang_tua'];

            // Cek apakah santri sudah ada
            $this->db->query("SELECT id_santri FROM santri WHERE id_user = :id_user");
            $this->db->bind('id_user', $data['santri']);
            if ($this->db->single()) {
                return 0; // Santri sudah pernah dimasukkan
            }

            // Insert data ke tabel santri
            $this->db->query("INSERT INTO santri (id_user, id_orang_tua) VALUES (:id_user, :id_orang_tua)");
            $this->db->bind('id_user', $data['santri']);
            $this->db->bind('id_orang_tua', $id_orang_tua);
            $this->db->execute();

            return $this->db->rowCount();
        } catch (PDOException $e) {
            error_log("Insert Santri Gagal: " . $e->getMessage());
            return 0;
        }
    }



    public function editSantri($data)
    {
        $query = "UPDATE santri  
              SET id_orang_tua = :id_orang_tua 
              WHERE id_santri = :id_santri";

        $this->db->query($query);
        $this->db->bind('id_orang_tua', $data['orang_tua']); // id_orang_tua yang baru dipilih
        $this->db->bind('id_santri', $data['id']);           // id_santri (dari input hidden)

        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            error_log("Edit santri gagal: " . $e->getMessage());
            return 0;
        }
    }


    public function deleteSantri($id_santri)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_santri = :id_santri";
        $this->db->query($query);
        $this->db->bind('id_santri', $id_santri);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
