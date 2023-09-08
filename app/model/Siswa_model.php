<?php
class Siswa_model
{
    private $table = 'data_siswa';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getBlogById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function tambahData()
    {
        $gambar = $_FILES['gambar']['name'];
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $angka_acak = rand(1, 999);
        $nama_gambar_baru = $angka_acak . '-' . $gambar;
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, 'img/' . $nama_gambar_baru);
            $this->db->query("INSERT INTO " . $this->table . " (nama,jenis_kelamin,alamat,gambar) VALUES (:nama,:jenis_kelamin,:alamat,:gambar) ");
            $this->db->bind('nama', $_POST['nama']);
            $this->db->bind('jenis_kelamin', $_POST['jenis_kelamin']);
            $this->db->bind('alamat', $_POST['alamat']);
            $this->db->bind('gambar', $nama_gambar_baru);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }
    public function hapusDataSiswa($id)
    {
        $this->db->query("DELETE FROM " . $this->table . " WHERE id=:id");
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataSiswa($id)
    {
        $gambar = $_FILES['gambar']['name'];
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $angka_acak = rand(1, 999);
        $nama_gambar_baru = $angka_acak . '-' . $gambar;
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, 'img/' . $nama_gambar_baru);
            $this->db->query("UPDATE " . $this->table . " SET
                  nama=:nama,
                  jenis_kelamin=:jenis_kelamin,
                  alamat=:alamat,
                  gambar=:gambar
                  WHERE id=:id;");
            $this->db->bind('nama', $_POST['nama']);
            $this->db->bind('jenis_kelamin', $_POST['jenis_kelamin']);
            $this->db->bind('alamat', $_POST['alamat']);
            $this->db->bind('gambar', $nama_gambar_baru);
            $this->db->bind('id', $id);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }
    public function cariDataSiswa()
    {

        if (!empty($_POST['cari'])) {
            $cari = $_POST['cari'];
            $this->db->query("SELECT * FROM " . $this->table . " WHERE nama like '%$cari%'");
            return $this->db->resultSet();
        } else {
            $this->db->query("SELECT * FROM " . $this->table);
            return $this->db->resultSet();
        }
    }
}