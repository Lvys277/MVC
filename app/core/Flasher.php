<?php
class Flasher {
    public static function setFlash($pesan, $aksi, $tipe,$nama)
    {
        $_SESSION['flash'] = [ 
            'pesan'=> $pesan,
            'aksi'=> $aksi,
            'tipe'=> $tipe,
            'nama'=> $nama
        ];
    }

    public static function Flash()
    {
        if(isset($_SESSION["flash"])){
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . '" role="alert">
                    Data ' . $_SESSION['flash']['nama'] . ' <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] .'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  ';
            unset($_SESSION['flash']);
        }
    }
}

    
    
