<?php

class tempatPensil
{
        public $merk = "merk",
                $warna = "warna",
                $motif = "motif";

        public function inputDataTempat($merk, $warna, $motif)
        {
                $this->merk = $merk;
                $this->warna = $warna;
                $this->motif = $motif;
        }
        public function getCetak()
        {
                echo "Merk tempal pensil: " . $this->merk;
                echo "<br>";
                echo "warna tempat Pensil: " . $this->warna;
                echo "<br>";
                echo "motif tempat pensil " . $this->motif;
                echo "<br>";
                echo "========================<br>";
        }
}

$tempatPensil = new tempatPensil();
$tempatPensil->inputDataTempat("Miniso", "Merah", "Marvel");
echo $tempatPensil->getCetak();
