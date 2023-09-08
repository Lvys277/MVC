<?php
class User extends Controller{

    public function index($n ="", $pekerjaan = "<a1 style='font-style: italic;'>Pelajar</a1>",$sekolah = "<a style='font-weight:bold;'>SMKN 2 Trenggalek</a>"){
        $data['judul']="User";
        $data['nama']=$this->model('User_model')->getUser();
        $data['pekerjaan']=$pekerjaan;
        $this->view('templates/header',$data);
        $this->view('user/index',$data);
        $this->view('templates/footer');
    }
}
