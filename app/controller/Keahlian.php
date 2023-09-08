<?php
class Keahlian extends Controller{

    public function index(){
        $data['judul']="Kompetensi Keahlian";
        $data['keahlian']=$this->model('Keahlian_model')->getAllBlog();
        $this->view('templates/header',$data);
        $this->view('keahlian/index',$data);
        $this->view('templates/footer');
    }

    public function tambah(){
        if($this->model('Keahlian_model')->tambahData($_POST) > 0){
            Flasher::setFlash('berhasil','ditambahkan','success','Kompetensi Keahlian');
            header('Location: '.BASE_URL . '/keahlian');
            exit;
        } else{
            Flasher::setFlash('gagal','ditambahkan','danger','Kompetensi Keahlian');
            header('Location: '.BASE_URL . '/keahlian');
            exit;
        }
    }
    public function hapus($id){
        if($this->model('Keahlian_model')->hapusDataSiswa($id) > 0){
            Flasher::setFlash('berhasil','dihapus','success','Kompetensi Keahlian');
            header('Location: '.BASE_URL . '/keahlian');
            exit;
        } else{
            Flasher::setFlash('gagal','dihapus','danger','Kompetensi Keahlian');
            header('Location: '.BASE_URL . '/keahlian');
            exit;
        }
    }

    public function ubah($id)
    {
        
        if( $this->model('Keahlian_model')->ubahDataSiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success','Kompetensi Keahlian');
            header('Location: '. BASE_URL.'/keahlian'); 
            exit;
    }else {
        Flasher::setFlash('gagal','ditambahkan','danger','Kompetensi Keahlian');
        header('Location: '.BASE_URL . '/keahlian');
        exit;
    }
}
public function getubah($id){
    $data['judul']="Ubah Data Kompetensi Keahlian";
    $data['keahlian']=$this->model('Keahlian_model')->getBlogById($id);
    $this->view('templates/header',$data);
    $this->view('keahlian/getubah',$data);
    $this->view('templates/footer');
}
}
