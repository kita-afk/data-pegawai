<?php 

define("nama","saya");
echo nama;
echo "<br>";
const kelas = "nama";
echo kelas;
echo "<br>";

function nam() {
    return __FUNCTION__;
}
echo nam();

class Objek_kantor {
    const j = "sh";
}

echo Objek_kantor::j;

echo "<hr>";

class JK {
    public static function Index()
    {
        return __METHOD__;
    }
}

echo JK::Index();

echo "<br>";
echo __FILE__;
echo __DIR__;
echo __NAMESPACE__;