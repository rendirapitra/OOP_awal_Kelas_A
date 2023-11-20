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

$surya = new mahasiswa();
$surya->set_name('gama');
$surya->set_nim('2255201045');
$surya->set_matkul('pbo');
echo "Name: " . $surya->get_name();
echo "\n";
echo "nim: " . $surya->get_nim();
echo "\n";
echo "matkul: " . $surya->get_matkul();
