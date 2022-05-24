<?php
    class NilaiMahasiswa {
        var $matakuliah;
        var $nilai;
        var $nim;

        function __construct($matakuliah, $nilai, $nim){
            $this->matakuliah = $matakuliah;
            $this->nilai = $nilai;
            $this->nim = $nim;
        }

        function grade($nilai){
            if ($nilai >= 85){
                return "A";
            }elseif($nilai >= 70){
                return "B";
            }elseif($nilai >= 56){
                return "C";
            }elseif($nilai >= 36){
                return "D";
            }elseif($nilai >= 0){
                return "E";
            }else{
                return "I";
            }

        }

        function hasil($nilai){
            if ($nilai >= 85){
                return "Sangat Memuaskan";
            }elseif($nilai >= 70){
                return "Memuaskan";
            }elseif($nilai >= 56){
                return "Cukup";
            }elseif($nilai >= 36){
                return "Kurang";
            }elseif($nilai >= 0){
                return "Sangat Kurang";
            }else{
                return "Tidak Ada";
            }
        }
    }
?>