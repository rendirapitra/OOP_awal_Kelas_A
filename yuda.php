<?php
class mahasiswa
{
    // Properties
    private $name;
    private $nim;
    private $mkul;
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
    function set_mkul($mkul)
    {
        $this->mkul = $mkul;
    }
    function get_mkul()
    {
        return $this->mkul;
    }
}

$yuda = new mahasiswa();
$yuda->set_name('yuda');
$yuda->set_nim('2255201039');
$yuda->set_mkul('pbo');
echo "Name: " . $yuda->get_name();
echo "\n";
echo "nim: " . $yuda->get_nim();
echo "\n";
echo "mkul: " . $yuda->get_mkul();
