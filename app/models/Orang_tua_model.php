<?php
class Orang_tua_model extends Model
{
    protected $table = 'orang_tua';
    public function getOrangTuaById($id_orang_tua)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_orang_tua = :id_orang_tua');
        $this->db->bind('id_orang_tua', $id_orang_tua);
        return $this->db->single();
    }
    public function getOrang_tua()
    {
        $this->db->query("SELECT 
                        orang_tua.id_orang_tua,
                        user_orang_tua.id_user,
                        user_orang_tua.nama AS nama_orang_tua, 
                        user_santri.nama AS nama_anak, 
                        user_orang_tua.alamat, 
                        user_orang_tua.role 
                    FROM orang_tua 
                    JOIN user AS user_orang_tua ON orang_tua.id_user = user_orang_tua.id_user 
                    LEFT JOIN santri ON santri.id_orang_tua = orang_tua.id_orang_tua 
                    LEFT JOIN user AS user_santri ON santri.id_user = user_santri.id_user 
                    LEFT JOIN user ON orang_tua.id_user = user.id_user
                    WHERE user_orang_tua.role = 'orang tua'");

        return $this->db->resultSet();
    }

    public function createOrangTua($data)
    {
        try {
            // Cek apakah id_user sudah digunakan di tabel orang_tua
            $this->db->query("SELECT id_orang_tua FROM orang_tua WHERE id_user = :id_user");
            $this->db->bind('id_user', $data['orang_tua']);
            if ($this->db->single()) {
                return 0; // Gagal karena id_user sudah digunakan sebagai orang tua
            }

            // Jika belum ada, insert
            $query = "INSERT INTO orang_tua (id_user) VALUES (:id_user)";
            $this->db->query($query);
            $this->db->bind('id_user', $data['orang_tua']);
            $this->db->execute();

            return $this->db->rowCount();
        } catch (PDOException $e) {
            error_log("Gagal insert orang_tua: " . $e->getMessage());
            return 0;
        }
    }


    public function editOrangTua($data)
    {
        $query = "UPDATE orang_tua 
              SET id_user = :id_user 
              WHERE id_orang_tua = :id_orang_tua";

        $this->db->query($query);
        $this->db->bind('id_user', $data['orang_tua']);      // input name="orang_tua" (id_user)
        $this->db->bind('id_orang_tua', $data['id']);        // input name="id" (id_orang_tua)

        return $this->db->rowCount();
    }

    public function deleteOrangTua($id_orang_tua)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_orang_tua = :id_orang_tua";
        $this->db->query($query);
        $this->db->bind('id_orang_tua', $id_orang_tua);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getNamaOrang_tua()
    {
        $this->db->query("SELECT 
                        orang_tua.id_orang_tua,
                        user_orang_tua.id_user,
                        user_orang_tua.nama AS nama_orang_tua
                    FROM orang_tua
                    JOIN user AS user_orang_tua ON orang_tua.id_user = user_orang_tua.id_user
                    WHERE user_orang_tua.role = 'orang tua'
                    GROUP BY orang_tua.id_orang_tua, user_orang_tua.id_user, user_orang_tua.nama");

        return $this->db->resultSet();
    }
}
