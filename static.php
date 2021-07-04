<?php 

class Home {
    public static $angka = 1;

    public static function Index()
    {
        return "halo " . self::$angka++ . " kali";
    }
}

echo Home::Index();
echo "<br>";
echo Home::Index();
echo "<br>";
echo Home::Index();
echo "<br>";
echo Home::Index();
echo "<br>";
echo "<hr>";

class About {
    public static $angka = 1;

    public function Index()
    {
        return "halo " . self::$angka++ . " kali";
    }
}

$about = new About();
$nama = new About();
echo $about->Index();
echo "<br>";
echo $about->Index();
echo "<br>";
echo $about->Index();
echo "<br>";
echo $about->Index();
echo "<br>";
echo $nama->Index();
echo "<br>";
echo $nama->Index();
echo "<br>";
echo $nama->Index();
echo "<br>";
echo $nama->Index();