<?php
class mahasiswa
{
    // Properties
    private $name;
    private $nim;
    private $mk;
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
    function set_mk($mk)
    {
        $this->mk = $mk;
    }
    function get_mk()
    {
        return $this->mk;
    }
}

$fauzan = new mahasiswa();
$fauzan->set_name('fauzan');
$fauzan->set_nim('2255201023');
$fauzan->set_mk('pbo');
echo "Name: " . $fauzan->get_name();
echo "\n";
echo "nim: " . $fauzan->get_nim();
echo "\n";
echo "mk: " . $fauzan->get_mk();
