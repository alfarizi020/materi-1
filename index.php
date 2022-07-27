<?php
class mobil {
    private $merk, $tipe, $mesin, $max_speed;

    public function cetakTipe(){
        return $this->tipe;
    }
    public function kecepatanMaksimal(){
        return "kecepatan maksimal dari mobil ini adalah ".$this->max_speed;
    }

    function injekgas(){
        return "mengalirkan bensin keruang bakar, rpm naik, roda Berputar";
    }
}



 class BMW  extends Mobil {
    
 }

 class Tesla extends Mobil {
    function selfParking(){
        echo"Parkir sendiri";
    }

    function injekgas(){
        return "mengalirkan listrik ke dinamo, rpm naik, roda Berputar";
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




echo "BMW : " .$bmw->injekgas();
echo "<br>";
echo "Tesla : " .$tesla->injekgas();