<?php

class produk {
public $judul, $penulis, $penerbit;
protected $diskon = 0;
private $harga;


public function  __construct($judul ="judul", $penulis ="penulis",$penerbit ="penerbit",$harga =
0) {
    $this->judul   = $judul;
    $this->penulis   = $penulis;
    $this->penerbit   = $penerbit;
    $this->harga   = $harga;
}

public function setDiskon($diskon) {
    $this->diskon   = $diskon;
}

public function getHarga() {
    return $this-> harga - ($this->harga * $this->diskon / 100);
}

public function getLabel () {
    return "$this ->penulis, $this->penerbit";
}

public function getLabelProduk () {
    $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->getHarga()})";
    return $str;

}

}
class cetakinfoproduk {
    public function cetak(produk $produk) {
        $str ="{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->getHarga()})";
    }
}
class komik extends produk {
    public $jmlhalaman;


public function __construct($judul ="judul",$penulis ="penulis",$penerbit ="penerbit",
$harga = 0) {
    parent ::__construct($judul,$penulis,$penerbit,$harga,);
    $this->jmlhalaman = $jmlhalaman;
}

public function getInfoProduk(){
    $str = "komik:" . parent::getInfoProduk() . " - {$this->jmlhalaman} halaman.";
    return $str;
   }
}
S
class game extends produk {A
    public $waktumain;

    public function __construct($judul = "judul",$penulis ="penulis",$penerbit = "penerbit"
    ,$harga =$waktumain =0 ) {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktumain =$wakrumain;
    }
    
        
    
}

?>