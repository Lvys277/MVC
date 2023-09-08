<?php
class Guru_model
{
    private $table='data_guru';
    private $db; 
        public function __construct()
        {
                $this->db = new Database;
        }
            public function getBlogById($id)
            {
                $this->db->query("SELECT * FROM ". $this->table.' WHERE id=:id');
                $this->db->bind('id',$id);
                return $this->db->resultSingle();
            }

            public function tambahData()
            {
                $this->db->query("INSERT INTO ". $this->table ." (nama,jenis_kelamin,alamat)VALUES
                (:nama,:jenis_kelamin,:alamat) ");
                $this->db->bind('nama',$_POST['nama']);
                $this->db->bind('jenis_kelamin',$_POST['jenis_kelamin']);
                $this->db->bind('alamat',$_POST['alamat']);
                $this->db->execute();
                return $this->db->rowCount();
            }

            public function hapusDataGuru($id)
            {
                $this->db->query("DELETE FROM ". $this->table ." WHERE id=:id");
                $this->db->bind('id',$id);
                $this->db->execute();
                return $this->db->rowCount();
            }

            public function ubahDataGuru($id)
            {
                $this->db->query("UPDATE ". $this->table ." SET
                nama=:nama,
                jenis_kelamin=:jenis_kelamin,
                alamat=:alamat
                WHERE id=:id;");
                $this->db->bind('nama',$_POST['nama']);
                $this->db->bind('jenis_kelamin',$_POST['jenis_kelamin']);
                $this->db->bind('alamat',$_POST['alamat']);
                $this->db->bind('id',$id);
                $this->db->execute();
                return $this->db->rowCount();
            }

            public function cariDataGuru()
            {
               
                if(!empty($_POST['cari'])){
                    $cari=$_POST['cari'];
                    $this->db->query("SELECT * FROM ". $this->table." WHERE nama like '%$cari%'");
                    return $this->db->resultSet();
            }else{
                $this->db->query("SELECT * FROM ". $this->table);
                return $this->db->resultSet();
            }
            }

            
         }