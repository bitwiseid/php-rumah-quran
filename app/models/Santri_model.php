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
                      JOIN orang_tua ON santri.id_orang_tua = orang_tua.id_orang_tua
                      JOIN user AS user_ortu ON orang_tua.id_user = user_ortu.id_user
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

        // Masukkan data ke tabel santri
        $this->db->query("INSERT INTO santri (id_user, id_orang_tua) VALUES (:id_user, :id_orang_tua)");
        $this->db->bind('id_user', $data['santri']);
        $this->db->bind('id_orang_tua', $data['orang_tua']);


        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editSantri($data)
    {
        $query = "UPDATE santri  
              SET id_user = :id_user, 
                  id_orang_tua = :id_orang_tua 
              WHERE id_santri = :id_santri";

        $this->db->query($query);
        $this->db->bind('id_user', $data['santri']);         // id_user santri
        $this->db->bind('id_orang_tua', $data['orang_tua']); // id_orang_tua
        $this->db->bind('id_santri', $data['id']);           // id_santri (hidden input dari form)

        $this->db->execute();
        return $this->db->rowCount();
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
