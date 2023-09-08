<?php
class Keahlian_model{
    // private $keahlian = [
    //     [
    //         "keahlian"=> "Teknik Kontruksi dan Perumahan (TKP)",
    //     ],
    //     [
    //         "keahlian"=> "Desain Permodelan dan Informasi Bangunan (DPIB)",
    //     ],
    //     [
    //         "keahlian"=> "Teknik Pemanasan Tata Udara dan Pendinginan (TPTUP)",
    //     ],
    //     [
    //         "keahlian"=> "Teknik Pengelasan (TP)",
    //     ],
    //     [
    //         "keahlian"=> "Rekayasa Perangkat Lunak (RPL)",
    //     ],
    //     [
    //         "keahlian"=> "Kuliner",
    //     ],
    //     [
    //         "keahlian"=> "Akutansi",
    //     ],
    //     ];
            private $table='data_keahlian';
            private $db; 
                public function __construct()
                {
                        $this->db = new Database;
                }
            public function getAllBlog()
            {
                $this->db->query("SELECT * FROM ". $this->table);
                    return $this->db->resultSet();
            }

            public function getBlogById($id)
            {
                $this->db->query("SELECT * FROM ". $this->table.' WHERE id=:id');
                $this->db->bind('id',$id);
                return $this->db->resultSingle();
            }

            public function tambahData()
            {
                $this->db->query("INSERT INTO ". $this->table ." (keahlian)VALUES
                (:nama) ");
                $this->db->bind('nama',$_POST['nama']);
                $this->db->execute();
                return $this->db->rowCount();
            }

            public function hapusDataSiswa($id)
            {
                $this->db->query("DELETE FROM ". $this->table." WHERE id=:id");
                $this->db->bind('id',$id);
                $this->db->execute();
                return $this->db->rowCount();
            }

            public function ubahDataSiswa($id)
            {
                $this->db->query("UPDATE ". $this->table." SET
                keahlian=:nama
                WHERE id=:id;");
                $this->db->bind('nama',$_POST['nama']);;
                $this->db->bind('id',$id);
                $this->db->execute();
                return $this->db->rowCount();
            }
        }
    
