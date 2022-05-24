<?php

class dispenser {
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;
    public $pembeli;

    public function isi($vol){
        $this->volume = $vol;
    }

    public function __construct($pembeli, $namaMinuman,)
    {
        $this->pembeli = $pembeli;
        $this->minumnya = $namaMinuman;
    }

    public function Kopi(){
        $this->harga = 20000;
        $this->vol -= 250;
        return "{$this->pembeli} membeli {$this->minumnya} seharga {$this->harga}, Volume wadah tersisa 
        {$this->vol}";
    }

    public function Menambah_Kopi(){
        $this->harga = 10000;
        $this->vol -= 120;
        return "{$this->pembeli} menambah {$this->minumnya} seharga {$this->harga}, Volume wadah tersisa 
        {$this->vol}";
    }

    public function Menambah_Kopi_Lagi(){
        $this->harga = 40000;
        $this->vol -= 500;
        return "{$this->pembeli} menambah {$this->minumnya} seharga {$this->harga}, Volume wadah tersisa 
        {$this->vol}";
    }
    

    public function getNama(){
        return $this->pembeli;
    }

    public function getMinum(){
        return $this->minumnya;
    }

    public function getVolume(){
        return $this->vol;
    }

    public function setVolume($volume){
        $this->vol = $volume;
    }

}
?>