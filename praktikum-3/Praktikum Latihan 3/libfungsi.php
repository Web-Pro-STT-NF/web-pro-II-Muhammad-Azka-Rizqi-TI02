<?php
function kelulusan($_nilai_akhir)
{
    if ($_nilai_akhir > 55) {
        return 'LULUS';
    } else {
        return 'TIDAK LULUS';
    }
}

// method grade nilai
function grade_nilai($_nilai){
    if($_nilai > 85){
        return "A";
    } else if ($_nilai > 70){
        return "B";
    } else if ($_nilai > 56){
        return "C";
    } else if ($_nilai > 36){
        return "D";
    } else if($_nilai > 0){
        return "E";
    } else {
        return "I";
    }
}

// method predikat nilai
function predikat_nilai($_grade){
    switch($_grade){
        case "A":
            return "Sangat Memuaskan";
            break;
        case "B" :
            return "Memuaskan";
            break;
        case "C":
            return "Cukup";
            break;
        case "D":
            return "Kurang";
            break;
        case "E":
            return "Sangat Kurang";
            break;
        default:
            return "Predikat tidak terdefinisi";
    }
}