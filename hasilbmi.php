<?php

class bmipasien {
    public $nama;
    public $berat;
    public $tinggi;
    public $umur;
    public $jenis_kelamin;
    public $bmihasil;
    public $bmistatus = '';

    function __construct($nama,$berat,$tinggi,$umur,$jenis_kelamin)
    {
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jenis_kelamin = $jenis_kelamin;
    }

    public function hasilbmi(){
        $this->tinggi = $this->tinggi / 100;
        $this->bmihasil = $this->berat / ($this->tinggi * $this->tinggi);
        return $this->bmihasil;
    }

    public function statusbmi(){
        if($this->bmihasil < 18.5){
            return $this->bmistatus = 'Kekurangan Berat Badan';
        }elseif($this->bmihasil >= 18.5){
            return $this->bmistatus = 'Berat Normal' ;
        }elseif($this->bmihasil >= 25.0 && $this->bmihasil <= 29.0){
            return $this->bmistatus = 'Kelebihan Berat Badan';
        }else{
            return $this->bmistatus = 'Kegemukan (Obesitas)';
        }
    }

}

// $proses = $_GET['simpan'];

// echo "Nama : ".$nama."</br>";
// echo "Berat Badan : ".$bb."</br>";
// echo "Tinggi Badan : ".$tb."</br>";
// echo "Umur : ".$umur."</br>";
// echo "Jenis Kelamin : ".$jk."</br>";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Bmi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5 mb-5 p-3 shadow-lg" style="">
<h3 align='center'><b>Hasil Bmi</b></h3>
<br>
    <?php
    if(isset($_GET['proses'])){
        $nama = $_GET['nama'];
        $berat = $_GET['bb'];
        $tinggi = $_GET['tb'];
        $umur = $_GET['umur'];
        $jenis_kelamin = $_GET['jk'];
        $pasien1 = new bmipasien($nama, $berat, $tinggi, $umur, $jenis_kelamin);

        echo 'Nama : '. $pasien1->nama . '</br>';
        echo 'Berat Badan : '. $pasien1->berat . '</br>';
        echo 'Tinggi Badan : '.$pasien1->tinggi . '</br>';
        echo 'Umur : '. $pasien1->umur . '</br>';
        echo 'Gender : '. $pasien1->jenis_kelamin . '</br>';
        echo 'BMI : '. round($pasien1->hasilbmi()) . '</br>';
        echo 'Status : '. $pasien1->statusbmi() . '</br>';

    }
    ?>
</div>
</body>
</html>
