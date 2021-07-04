<?php

class Home
{
    public $nama,
        $kelas,
        $jenis_kelamin,
        $alamat, 
        $jarak,
        $kendaraan;
    public function __construct($nama = "saya", $kelas = "XII", $jenis_kelamin = "laki-laki", $alamat = "kajen",$jarak = 0,$kendaraan = "motor")
    {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->alamat = $alamat;
        $this->jarak = $jarak;
        $this->kendaraan = $kendaraan;
    }

    public function Index()
    {
        return "$this->nama, $this->kelas";
    }

    public function Cetak_data_siswa() {
        $str = "{$this->Index()} , {$this->jenis_kelamin} , {$this->alamat}";

        if($this->alamat == "kajen") {
            $str .= " , {$this->jarak} , {$this->kendaraan}";
        } else {
            $str .= " , {$this->kendaraan}";
        }
        return $str;
    }
}

// class Document
// {
//     public function Cetak(Home $produk)
//     {
//         $string = "{$produk->nama},{$produk->kelas},{$produk->jenis_kelamin},{$produk->alamat}";
//         return $string;
//     }
// }

$hasil1 = new Home("herman", "XI", "laki-laki","kajen","300 M","pesawat");
$hasil2 = new Home("lili","X",29);
// // $hasil3 = new Home("seri");

echo $hasil1->Cetak_data_siswa();
// // echo "</br>";
// // echo $hasil2->Index();
// // echo "</br>";
// // echo $hasil3->Index();
// // echo "</br>";

// $hasil4 = new Document();
// echo $hasil4->Cetak($hasil1);
