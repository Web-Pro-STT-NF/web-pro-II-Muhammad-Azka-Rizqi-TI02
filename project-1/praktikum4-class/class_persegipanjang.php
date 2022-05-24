<?php
class PersegiPanjang{
    const DUA = 2; 
    private $lebar;
    private $panjang;
    function __construct($lebar, $panjang){
        $this->lebar = $lebar;
        $this->panjang = $panjang;
    }

    public function kelilingPersergiPanjang(){
        return PersegiPanjang::DUA * ($this->lebar + $this->panjang);
    }

    public function luasPersegiPanjang(){
        return $this->lebar * $this->panjang;
    }
}
?>