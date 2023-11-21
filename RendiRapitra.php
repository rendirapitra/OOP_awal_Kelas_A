<!DOCTYPE html>
<html>
<body>
<?php
class mahasiswa {
  // Properties
  private $name;
  private $nim;
  private $matkul;
  private $cita_cita;

  // Methods
  function set_name($name) {
    $this->name = $name;
  function __construct ($name, $nim, $matkul, $cita_cita){
  	$this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->cita_cita = $cita_cita;
  }
  function get_name() {
    return $this->name;
  }
  function set_nim($nim) {
    $this->nim = $nim;
  }
  function get_nim() {
    return $this->nim;
  }
  function set_matkul($matkul) {
  	$this->matkul = $matkul;
  }
  function get_matkul () {
  function get_matkul() {
  	return $this->matkul;
  }
  function get_cita_cita() {
  	return $this->cita_cita;
  }
}

$Rendi = new mahasiswa();
$Rendi->set_name('Rendi Rapitra');
$Rendi->set_nim('2255201029');
$Rendi->set_matkul('pbo');
echo "Nama: " . $Rendi->get_name();
$Rendi = new mahasiswa('Rendi Rapitra', '2255201029', 'pbo', 'Main Bola');
echo $Rendi->get_name();
echo "<br>";
echo $Rendi->get_nim();
echo "<br>";
echo "nim: " .  $Rendi->get_nim();
echo $Rendi->get_matkul();
echo "<br>";
echo "matkul: " . $Rendi->get_matkul();
echo $Rendi->get_cita_cita();

?>

</body>
