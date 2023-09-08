<?php
class Siswa extends Controller{
    public function index(){
        if ($this->model('Siswa_model')->cariDataSiswa($_POST) < 0) {
            $data['judul'] = "Siswa";
            $data['siswa'] = $this->model('Siswa_model')->cariDataSiswa();
            $this->view('templates/header', $data);
            $this->view('siswa/index', $data);
            $this->view('templates/footer');
            exit;
        } else {
            $data['judul'] = "Siswa";
            $data['siswa'] = $this->model('Siswa_model')->cariDataSiswa();
            $this->view('templates/header', $data);
            $this->view('siswa/index', $data);
            $this->view('templates/footer');
            exit;
        }
    }
    public function detail($id){
        $data['judul']="Detail Siswa";
        $data['siswa']=$this->model('Siswa_model')->getBlogById($id);
        $this->view('templates/header',$data);
        $this->view('siswa/detail',$data);
        $this->view('templates/footer');
    }
    public function tambah(){
        if($this->model('Siswa_model')->tambahData($_POST) > 0){
            Flasher::setFlash('berhasil','ditambahkan','success','Siswa');
            header('Location: '.BASE_URL . '/siswa');
            exit;
        } else{
            Flasher::setFlash('gagal','ditambahkan','danger','Siswa');
            header('Location: '.BASE_URL . '/siswa');
            exit;
        }
    }
    public function hapus($id){
        if($this->model('Siswa_model')->hapusDataSiswa($id) > 0){
            Flasher::setFlash('berhasil','dihapus','success','Siswa');
            header('Location: '.BASE_URL . '/siswa');
            exit;
        } else{
            Flasher::setFlash('gagal','dihapus','danger','Siswa');
            header('Location: '.BASE_URL . '/siswa');
            exit;
        }
    }

    public function ubah($id)
    {        
        if( $this->model('Siswa_model')->ubahDataSiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success','Siswa');
            header('Location: '. BASE_URL.'/siswa'); 
            exit;
    }else {
        Flasher::setFlash('gagal','diubah','danger','Siswa');
        header('Location: '.BASE_URL . '/siswa');
        exit;
    }
}
public function getubah($id){
    $data['judul']="Ubah Data Siswa";
    $data['siswa']=$this->model('Siswa_model')->getBlogById($id);
    $this->view('templates/header',$data);
    $this->view('siswa/getubah',$data);
    $this->view('templates/footer');
}
}