<?php
 class Sekil
 {
    public $x,$y,$z;
    public function     __construct($x,$y=null,$z=null)
    {
        $this->x=$x;
        $this->y=$y;
        $this->z=$z;
    }
 }
 class Kare extends Sekil
 {
    public function cevre()
    {
        return $this->x*4;
    }
    public function alan()
    {
        return  pow ($this->x,2);
    }
 }

 class  Dikdortgen extends Sekil
 {
    public function cevre()
    {
        return          $this->x*2+  $this->y*2;
    } public function alan()
    {
        return  $this->x-$this->y;
    }
 }
 class Ucgen extends Sekil
 {
    public function cevre()
    {
        return  $this->x+$this->y+$this->z;
    } public function alan() {
      $c =    $this->cevre();
      return bcsqrt((($c / 2) * (($c / 2) - $this->x) * (($c / 2) - $this->y) * (($c / 2) - $this->z)), 2);
    }
 }
 