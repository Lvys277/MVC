<?php
class Guru extends Controller
{
    public function index()
    {

        if ($this->model('Guru_model')->cariDataGuru($_POST) < 0) {
            $data['judul'] = "Guru";
            $data['guru'] = $this->model('Guru_model')->cariDataGuru();
            $this->view('templates/header', $data);
            $this->view('guru/index', $data);
            $this->view('templates/footer');
            exit;
        } else {
            $data['judul'] = "Guru";
            $data['guru'] = $this->model('Guru_model')->cariDataGuru();
            $this->view('templates/header', $data);
            $this->view('guru/index', $data);
            $this->view('templates/footer');
            exit;
        }
        
    }
    public function detail($id)
    {
        $data['judul'] = "Detail Guru";
        $data['guru'] = $this->model('Guru_model')->getBlogById($id);
        $this->view('templates/header', $data);
        $this->view('guru/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('Guru_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success','Guru');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger','Guru');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('Guru_model')->hapusDataGuru($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success','Guru');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger','Guru');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        }
    }

    public function ubah($id)
    {

        if ($this->model('Guru_model')->ubahDataGuru($id) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success','Guru');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger','Guru');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        }
    }
    public function getubah($id)
    {
        $data['judul'] = "Ubah Data Guru";
        $data['guru'] = $this->model('Guru_model')->getBlogById($id);
        $this->view('templates/header', $data);
        $this->view('guru/getubah', $data);
        $this->view('templates/footer');
    }


}