<?php
    require_once "class_persegipanjang.php";

    $persegi1 = new PersegiPanjang(20,25);
    $persegi2 = new PersegiPanjang(13,2);

    echo "<br> Luas Persegi Panjang Ke - 1 : " . $persegi1->luasPersegiPanjang();
    echo "<br> Luas Persegi Panjang Ke - 2 : " . $persegi2->luasPersegiPanjang();

    echo "<br> Keliling Persegi Panjang Ke - 1 : " . $persegi1->kelilingPersergiPanjang();
    echo "<br> Keliling Persegi Panjang Ke - 1 : " . $persegi2->kelilingPersergiPanjang();
?>