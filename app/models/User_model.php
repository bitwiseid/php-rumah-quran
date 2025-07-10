<?php
class User_model extends Model
{
    protected $table = 'user';

    public function getUser()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
    public function getUserById($id_user)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user = :id_user');
        $this->db->bind('id_user', $id_user);
        return $this->db->single();
    }
    public function getUserByEmail($email)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE email = :email";
        $this->db->query($query);
        $this->db->bind('email', $email);
        return $this->db->single();
    }

    public function createUser($data)
    {
        $hashed_password = password_hash($data['password'], PASSWORD_BCRYPT);

        $query = "INSERT INTO " . $this->table . " (username, email, password, nama, role, alamat, kontak, login_at) 
              VALUES (:username, :email, :password, :nama, :role, :kontak, :kontak, :login_at)";
        $this->db->query($query);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $hashed_password);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':role', $data['role']);
        $this->db->bind(':alamat', $data['alamat']);
        $this->db->bind(':kontak', $data['kontak']);
        $this->db->bind(':login_at', date('Y-m-d H:i:s'));

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editUser($data)
    {
        if (!empty($data['password'])) {
            $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
            $query = "UPDATE " . $this->table . " 
                  SET username = :username, email = :email, password = :password, nama = :nama, role = :role, alamat = :alamat, kontak = :kontak, login_at = :login_at
                  WHERE id_user = :id_user";
            $this->db->bind('password', $hashedPassword);
        } else {
            $query = "UPDATE " . $this->table . " 
                    SET username = :username, email = :email, nama = :nama, role = :role, alamat = :alamat, kontak = :kontak, login_at = :login_at
                    WHERE id_user = :id_user";
        }
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('role', $data['role']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kontak', $data['kontak']);
        $this->db->bind('id_user', $data['id']);
        $this->db->bind(':login_at', date('Y-m-d H:i:s'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteUser($id_user)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_user = :id_user";
        $this->db->query($query);
        $this->db->bind('id_user', $id_user);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getTotalUser()
    {
        $this->db->query("SELECT COUNT(*) AS totalUser FROM `user`");
        $result = $this->db->single();
        return $result['totalUser'] ?? 0;
    }

    public function getNamaOrangTua()
    {
        $this->db->query("SELECT 
                        id_user AS id_orang_tua,
                        nama 
                      FROM user 
                      WHERE role = 'orang tua'");
        return $this->db->resultSet();
    }



    public function getNamaSantri()
    {
        $this->db->query("SELECT 
                        id_user,
                        nama 
                      FROM user 
                      WHERE role = 'santri'");

        return $this->db->resultSet();
    }

    public function getNamaGuru()
    {
        $this->db->query("SELECT 
                        id_user,
                        nama 
                      FROM user 
                      WHERE role = 'guru'");
        return $this->db->resultSet();
    }
}
