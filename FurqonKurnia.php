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

$Furrz = new mahasiswa();
$Furrz->set_name('Muhammad Ronaldo');
$Furrz->set_nim('2255201018');
$Furrz->set_matkul('pbo');
echo "Name: " . $Furrz->get_name();
echo "\n";
echo "nim: " . $Furrz->get_nim();
echo "\n";
echo "matkul: " . $Furrz->get_matkul();