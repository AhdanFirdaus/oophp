<?php 

class Produk {
  public $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0;

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Luffy";
// $produk2->tambahProperty = "testing doang";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;


$produk4 = new Produk();
$produk4->judul = "Free Fire";
$produk4->penulis = "FF";
$produk4->penerbit = "Garena";
$produk4->harga =  25000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();