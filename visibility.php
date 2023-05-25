<?php 

class sekolah {
    private $nama;
    public $alamat;

    public function tampilNama($nama){
        echo "nama sekolah saya:".$this->$nama = $nama;

    }
}

$sekolah1 = new sekolah();
echo $sekolah1 ->tampilNama("WIKRAMA BOGOR");


?>