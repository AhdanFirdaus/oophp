<?php 

// define("NAMA","Dadan");
// echo NAMA;

// echo "<br>";

// const UMUR = 17;
// echo UMUR;

class Coba {
  const NAMA = "Dadan";
}

echo Coba::NAMA, "<br>";

echo __LINE__, "<br>"; 
echo __FILE__;

function hello() {
  return __FUNCTION__;
}

echo hello(), "<br>";

class test {
  public $kelas = __CLASS__;
}

$obj = new test;
echo $obj->kelas;