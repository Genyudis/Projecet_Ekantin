<?php

class Produk {

    public $bakwan,
           $bakso,
           $jmlBakwan,
           $hargaBakwan,
           $hargaBakso,
           $totalSeluruh,
           $totalHargaBakwan,
           $totalHargaBakso;

    function __construct (){
        $this->hargaBakwan = 2000;
        $this->hargaBakso = 10000;
    }
}

class jumlah extends Produk {
    public function getJumlah($jmlBakwan,$jmlBakso){
        $this->jmlBakwan = $jmlBakwan;
        $this->jmlBakso = $jmlBakso;
    }
    public function setHarga(){
        $this->totalHargaBakwan = $this->hargaBakwan * $this->jmlBakwan;
        $this->totalHargaBakso = $this->hargaBakso * $this->jmlBakso;
        $this->totalSeluruh = $this->totalHargaBakwan + $this->totalHargaBakso;
    }
    public function cetakStruk(){
        echo "******* <b> $ ikantin Wikrama $ ******";
        echo "<br>";
        echo "Bakwan : $this->jmlBakwan x Rp. $this->hargaBakwan : <b> $this->totalHargaBakwan</b>";
        echo "<br>";
        echo "Bakso : $this->jmlBakso x Rp. $this->hargaBakso : <b> $this->totalHargaBakso</b>";
        echo "<br><br>";
        echo "Total Bayar : Rp. <b>$this->totalSeluruh</b>";
        echo "<br>";
        echo "***************************************";

    }
}
?>