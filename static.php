<?php 

class ContohStatic {
  public static $angka = 1;

  public static function halo() {
    return "ini adalah angka " . self::$angka++ . " kawan"; 
  }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
