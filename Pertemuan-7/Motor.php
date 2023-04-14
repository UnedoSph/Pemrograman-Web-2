<?php
class Motor
{
  public $merk;
  public $bensin;
  public $topSpeed;
  public $cc;

  public function __construct($merk, $bensin, $topSpeed, $cc)
  {
    $this->merk = $merk;
    $this->bensin = $bensin;
    $this->topSpeed = $topSpeed;
    $this->cc = $cc;
  }

  public function jalan($jarak)
  {
    $bensinDibutuhkan = $jarak / 30;
    if ($bensinDibutuhkan <= $this->bensin) {
      $this->bensin -= $bensinDibutuhkan;
      echo "Motor $this->merk jalan sejauh $jarak km dengan menggunakan $bensinDibutuhkan liter bensin.<br>";
    } else {
      echo "Bensin tidak cukup untuk menempuh jarak $jarak km.<br>";
    }
  }
}

$motorSaya = new Motor("Honda", 5, 120, 150);
$motorSaya->jalan(60);
$motorSaya->jalan(100);



  $motor1 = new Motor('aprilia', 5, 200, 1000);
  echo "Merk Motor: " . $motor1->merk . "<br/>";
  echo "Jarak Tempuh: 300km <br/>";
  echo $motor1->jalan(150);

?>