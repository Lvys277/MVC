<?php
class Home extends Controller{
    public function index($n ="",$sekolah = "<a2 style='font-style: italic;'>SMKN 2 Trenggalek</a2>",$jurusan="<a1 style='font-style: italic;'>Rekayasa Perangkat Lunak (RPL)</a1>"){
        $data['judul']="Home";
        $data['nama']=$this->model('User_model')->getUser();
        $data['sekolah']=$sekolah;
        $data['jurusan']=$jurusan;
        $this->view('templates/header',$data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}