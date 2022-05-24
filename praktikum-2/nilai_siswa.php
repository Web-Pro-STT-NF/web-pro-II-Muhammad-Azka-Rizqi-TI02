<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container mt-5">
<form method="POST" action="nilai_siswa.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Name" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="PW">Pemograman Web</option>
        <option value="SO">Sistem Operasi</option>
        <option value="ST">Statistika</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" placeholder="UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="tugas" name="tugas" placeholder="TUGAS" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="simpan" name="proses"/>
    </div>
  </div>
  
</form>
<?php
    error_reporting(0);
    if (isset($_POST['proses'])){
    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['uts'];
    $nilai_uas = $_POST['uas'];
    $nilai_tugas = $_POST['tugas'];

    echo "Proses $proses";
    echo "<br/>Nama : $nama_siswa";
    echo "<br/>Mata Kuliah : $mata_kuliah";
    echo "<br/>Nilai UTS : $nilai_uts";
    echo "<br/>Nilai UAS : $nilai_uas";
    echo "<br/>Nilai Tugas : $nilai_tugas";

$hasil_uts = intval($nilai_uts) * 0.3;  $hasil_uas = intval($nilai_uas) * 0.35;  $hasil_tugas = intval($nilai_tugas) * 0.35;           
$nilai_akhir = $hasil_uts + $hasil_tugas + $hasil_uas;
            
    echo "<br> <p>Nilai Anda : $nilai_akhir</p>";
    if( $nilai_akhir > 55){
    echo "Lulus </br>";
    }else{
    echo "Tidak Lulus </br>";
    }
        
    $nilai_A = $nilai_akhir >= 85;
    $nilai_B = $nilai_akhir >= 70;
    $nilai_C = $nilai_akhir >= 56;
    $nilai_D = $nilai_akhir >= 36;
    $nilai_E = $nilai_akhir >= 0;

          if($nilai_A){
               echo "Grade : A";
            }elseif($nilai_B){
                echo "Grade : B";
            }elseif($nilai_C){
                echo "Grade : C";
            }elseif($nilai_D){
                echo "Grade : D";
            }elseif($nilai_E){
                echo "Grade : E";
            }else{
                echo "Grade : I";
            }
            switch(true){
                case ($nilai_A):
                    echo "<br/>Predikat : Sangat Bagus";
                    break;
                case ($nilai_B):
                    echo "<br/>Predikat : Bagus";
                    break;
                case ($nilai_C):
                    echo "<br/>Predikat : Cukup";
                    break;
                case ($nilai_D):
                    echo "<br/>Predikat : Kurang";
                    break;
                case ($nilai_E):
                    echo "<br/>Predikat : Sangat Kurang";
                    break;
                default:
                    echo "<br/>Tidak Ada";
            }
        }
    ?>