<?php
class mahasiswa
{
    // Properties
    private $name;
    private $nim;
    private $matkul;
    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_nim($nim)
    {
        $this->nim = $nim;
    }
    function get_nim()
    {
        return $this->nim;
    }
    function set_matkul($matkul)
    {
        $this->matkul = $matkul;
    }
    function get_matkul()
    {
        return $this->matkul;
    }
}

$Rendi = new mahasiswa();
$Rendi->set_name('Rendi Rapitra');
$Rendi->set_nim('2255201029');
$Rendi->set_matkul('pbo');
echo "Name: " . $Rendi->get_name();
echo "\n";
echo "nim: " . $Rendi->get_nim();
echo "\n";
echo "matkul: " . $Rendi->get_matkul();