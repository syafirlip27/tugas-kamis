<?php
class hewan
{
    public $laut;
    private $hiu;
    protected $ikan;



    public function setJenis($laut)
    {
        $this->laut = $laut;
    }
    public function setIkan($hiu)
    {
        $this->hiu = $hiu;
    }
    public function setHewan($ikan)
    {
        $this->ikan = $ikan;
    }

    public function getJenis()
    {
        return $this->laut;
    }
    public function getIkan()
    {
        return $this->hiu;
    }
    public function getHewan()
    {
        return $this->ikan;
    }
}
$hewan1 = new hewan;
$hewan1->setJenis("laut");
$hewan1->setIkan("hiu");
$hewan1->setHewan("ikan");


echo "Ini adalah jenis hewan ". $hewan1->getJenis();
echo "<br>";
echo "Nama ikan ini adalah ikan " . $hewan1->getIkan();
echo "<br>";
echo "Dan saya suka ". $hewan1->getHewan();