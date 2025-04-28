<?php

require_once 'App/init.php';

$produk1 = new Komik("naruto", "masashi kishimoto", "shonen jump", 3000, 100);
$produk2 = new Game("Free Fire", "epep", "garena", 2500, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();