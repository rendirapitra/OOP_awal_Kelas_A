<?php
class mahasiswa
{
    // Properties
    private $name;
    private $nim;
    private $mata_kuliah;
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
    function set_mata_kuliah($mata_kuliah)
    {
        $this->mata_kuliah = $mata_kuliah;
    }
    function get_mata_kuliah()
    {
        return $this->mata_kuliah;
    }
}

$catur = new mahasiswa();
$catur->set_name('catur');
$catur->set_nim('2255201015');
$catur->set_mata_kuliah('pbo');
echo "Name: " . $catur->get_name();
echo "\n";
echo "nim: " . $catur->get_nim();
echo "\n";
echo "mata_kuliah: " . $catur->get_mata_kuliah();
