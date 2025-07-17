<?php
class Hafalan_model extends Model
{
    protected $table = 'hafalan';

    public function getHafalan()
    {
        $this->db->query("SELECT 
            hafalan.id_hafalan,
            hafalan.id_santri,
            hafalan.jumlah_ayat,
            hafalan.tanggal,
            hafalan.id_guru,
            hafalan.keterangan,
            user_santri.nama AS nama_santri,
            user_guru.nama AS nama_guru
            FROM hafalan
            JOIN santri ON hafalan.id_santri = santri.id_santri
            JOIN user AS user_santri ON santri.id_user = user_santri.id_user
            JOIN guru ON hafalan.id_guru = guru.id_guru
            JOIN user AS user_guru ON guru.id_user = user_guru.id_user
            ORDER BY hafalan.tanggal DESC");
        return $this->db->resultSet();
    }

    public function getHafalanById($id_hafalan)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_hafalan = :id_hafalan');
        $this->db->bind('id_hafalan', $id_hafalan);
        return $this->db->single();
    }

    public function createHafalan($data)
    {
        $query = "INSERT INTO " . $this->table . " (id_santri, jumlah_ayat, tanggal, id_guru, keterangan) 
                VALUES (:id_santri, :jumlah_ayat, :tanggal, :id_guru, :keterangan)";
        $this->db->query($query);
        $this->db->bind(':id_santri', $data['id_santri']);
        $this->db->bind(':jumlah_ayat', $data['jumlah_ayat']);
        $this->db->bind(':tanggal', $data['tanggal']);
        $this->db->bind(':id_guru', $data['id_guru']);
        $this->db->bind(':keterangan', $data['keterangan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateHafalan($data)
    {
        $query = "UPDATE " . $this->table . " SET 
                id_santri = :id_santri,
                jumlah_ayat = :jumlah_ayat,
                tanggal = :tanggal,
                id_guru = :id_guru,
                keterangan = :keterangan
                WHERE id_hafalan = :id_hafalan";
        $this->db->query($query);
        $this->db->bind(':id_hafalan', $data['id_hafalan']);
        $this->db->bind(':id_santri', $data['id_santri']);
        $this->db->bind(':jumlah_ayat', $data['jumlah_ayat']);
        $this->db->bind(':tanggal', $data['tanggal']);
        $this->db->bind(':id_guru', $data['id_guru']);
        $this->db->bind(':keterangan', $data['keterangan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteHafalan($id_hafalan)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_hafalan = :id_hafalan";
        $this->db->query($query);
        $this->db->bind('id_hafalan', $id_hafalan);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getHafalanByMonth($bulan, $tahun)
    {
        $this->db->query("SELECT 
            WEEK(hafalan.tanggal, 1) - WEEK(DATE_SUB(hafalan.tanggal, INTERVAL DAYOFMONTH(hafalan.tanggal) - 1 DAY), 1) + 1 as minggu,
            SUM(hafalan.jumlah_ayat) as total_ayat
            FROM hafalan
            WHERE MONTH(hafalan.tanggal) = :bulan AND YEAR(hafalan.tanggal) = :tahun
            GROUP BY minggu
            ORDER BY minggu ASC");
        $this->db->bind(':bulan', $bulan);
        $this->db->bind(':tahun', $tahun);
        return $this->db->resultSet();
    }

    public function getTotalHafalanBySantri($id_santri)
    {
        $this->db->query("SELECT SUM(jumlah_ayat) AS total_ayat FROM hafalan WHERE id_santri = :id_santri");
        $this->db->bind('id_santri', $id_santri);
        $result = $this->db->single();
        return $result['total_ayat'] ?? 0;
    }

    public function getHafalanBySantri($id_santri)
    {
        $this->db->query("SELECT 
            hafalan.id_hafalan,
            hafalan.id_santri,
            hafalan.jumlah_ayat,
            hafalan.tanggal,
            hafalan.id_guru,
            hafalan.keterangan,
            user_santri.nama AS nama_santri,
            user_guru.nama AS nama_guru
            FROM hafalan
            JOIN santri ON hafalan.id_santri = santri.id_santri
            JOIN user AS user_santri ON santri.id_user = user_santri.id_user
            JOIN guru ON hafalan.id_guru = guru.id_guru
            JOIN user AS user_guru ON guru.id_user = user_guru.id_user
            WHERE hafalan.id_santri = :id_santri
            ORDER BY hafalan.tanggal DESC");
        $this->db->bind('id_santri', $id_santri);
        return $this->db->resultSet();
    }

    public function getHafalanByMonthAndSantri($bulan, $tahun, $id_santri)
    {
        $this->db->query("SELECT 
            WEEK(hafalan.tanggal, 1) - WEEK(DATE_SUB(hafalan.tanggal, INTERVAL DAYOFMONTH(hafalan.tanggal) - 1 DAY), 1) + 1 as minggu,
            SUM(hafalan.jumlah_ayat) as total_ayat
            FROM hafalan
            WHERE MONTH(hafalan.tanggal) = :bulan AND YEAR(hafalan.tanggal) = :tahun AND hafalan.id_santri = :id_santri
            GROUP BY minggu
            ORDER BY minggu ASC");
        $this->db->bind(':bulan', $bulan);
        $this->db->bind(':tahun', $tahun);
        $this->db->bind(':id_santri', $id_santri);
        return $this->db->resultSet();
    }

    public function getTotalHafalan()
    {
        $this->db->query("SELECT COUNT(*) AS total_hafalan FROM hafalan");
        $result = $this->db->single();
        return $result['total_hafalan'] ?? 0;
    }

    public function getRecentHafalan($limit = 5)
    {
        $this->db->query("SELECT 
            hafalan.id_hafalan,
            hafalan.jumlah_ayat,
            hafalan.tanggal,
            hafalan.keterangan,
            user_santri.nama AS nama_santri,
            user_guru.nama AS nama_guru
            FROM hafalan
            JOIN santri ON hafalan.id_santri = santri.id_santri
            JOIN user AS user_santri ON santri.id_user = user_santri.id_user
            JOIN guru ON hafalan.id_guru = guru.id_guru
            JOIN user AS user_guru ON guru.id_user = user_guru.id_user
            ORDER BY hafalan.tanggal DESC
            LIMIT :limit");
        $this->db->bind(':limit', $limit);
        return $this->db->resultSet();
    }
}
