<?php 

class Home {
    protected $judul,
        $penerbit,
        $diskon = 0;
    private $harga;

    public function __construct($judul = "nama", $penerbit = "saya", $harga = 0)
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function Index()
    {
        return "Judul :{$this->judul} | Penerbit :{$this->penerbit}";
    }

    public function Cetak()
    {
        $str = "{$this->Index()} | Harga Rp. {$this->harga}";
        return $str;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setPenerbit($penerbit)
    {
        return $this->penerbit = $penerbit;
    }
}

class Komik extends Home {
    public $halaman;

    public function __construct($judul = "nama", $penerbit = "saya", $harga = 0,$halaman = 0)
    {
        parent::__construct($judul, $penerbit, $harga);
        $this->halaman = $halaman;
    }

    public function Cetak() {
        $str = "Komik : " . parent::Cetak() . " | Halaman : {$this->halaman} Halaman.";
        return $str;
    }
}

class Game extends Home {
    public $ukuran;

    public function __construct($judul = "nama", $penerbit = "saya", $harga = 0,$ukuran = 0)
    {
        parent::__construct($judul, $penerbit, $harga);
        $this->ukuran = $ukuran;
    }

    public function Cetak() {
        $str = "Game : " . parent::Cetak() ." | Ukuran : {$this->ukuran} Mb.";
        return $str;
    }
}

$hasil1 = new Game("naruto","kimisoto",1200000,1024);
$hasil2 = new Komik("naruto","kimisoto",125000,1024);
echo $hasil1->Cetak();
echo "</br>";
echo $hasil2->Cetak();
echo "<hr>";
$hasil2->setDiskon(50);
echo $hasil2->getHarga();
echo "<br>";
$hasil1->setDiskon(50);
echo $hasil1->getHarga();
echo "<hr>";
$hasil1->setJudul("boboiboy");
echo $hasil1->getJudul();
echo "<br>";
$hasil2->setPenerbit("muhamka");
echo $hasil2->getPenerbit();