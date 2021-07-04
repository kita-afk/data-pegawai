<?php 

class Home {
    public $nama,
        $kelas,
        $jenis_kelamin,
        $alamat;

    public function __construct($nama = "saya", $kelas = "XII",$jenis_kelamin = "laki-laki",$alamat = "kajen")
    {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->alamat = $alamat;
    }

    public function Index() {
        return "$this->nama, $this->kelas, $this->jenis_kelamin, $this->alamat";
    }
}

class Document {
    public function Cetak( Home $produk )
    {
        $string = "{$produk->nama},{$produk->kelas},{$produk->jenis_kelamin},{$produk->alamat}";
        return $string;
    }
}

$hasil1 = new Home("herman","XI",1);
// $hasil2 = new Home("lili","X",29);
// $hasil3 = new Home("seri");

// echo $hasil1->Index();
// echo "</br>";
// echo $hasil2->Index();
// echo "</br>";
// echo $hasil3->Index();
// echo "</br>";

$hasil4 = new Document();
echo $hasil4->Cetak($hasil1);