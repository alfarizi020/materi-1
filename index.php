<?php
class mobil {
    public $merk, $tipe, $mesin, $max_speed;

    public function cetakTipe(){
        return $this->tipe;
    }
    function kecepatanMaksimal(){
        return "kecepatan maksimal dari mobil ini adalah ".$this->max_speed;
    }
}



 class BMW  extends Mobil {
    
 }

 class Tesla extends Mobil {
    function selfParking(){
        echo"Parkir sendiri";
    }
 }

$bmw = new BMW;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->max_speed = "280km/h";

$tesla = new  Tesla ;
$tesla->merk = "Tesla";
$tesla->tipe = " Model X";
$tesla->mesin = "Listrik";
$tesla->max_speed = "280km/h";




echo $tesla->kecepatanMaksimal();