<?php
    include_once 'header.php';
    include_once 'sidebar.php';
?>
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 2</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Praktikum 2</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


      


    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

              <!-- Main content -->
    <section class="content">

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Nilai Siswa</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <form method="POST" action="praktikum2.php">
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
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Nilai</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <div class="container mt-5">
              <form method="GET" action="praktikum2.php">
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
              $proses = $_GET['proses'];
              $nama = $_GET['nama'];
              $matkul = $_GET['matkul'];
              $nilai_uts = $_GET['uts'];
              $nilai_uas = $_GET['uas'];
              $nilai_tugas = $_GET['tugas'];

                  echo 'proses : '.$proses;
                  echo '<br/>nama : '.$nama;
                  echo '<br/>matkul : '.$matkul;
                  echo '<br/>nilai_uts : '.$nilai_uts;
                  echo '<br/>nilai_uas : '.$nilai_uas;
                  echo '<br/>nilai_tugas : '.$nilai_tugas;
              ?>
              </div>
              <!-- /.card-body -->
              
              <!-- /.card-footer-->
            </div>
            </div>
            <!-- /.card -->

            <!-- Main content -->
    <section class="content">

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Belanja</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <form method="POST" action="praktikum2.php">
 
        <div class="container mt-5">
          <div class="row">
        <div class="col-8">
          <div class="form-group row">
            <label for="name" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
              <input id="name" name="name" placeholder="Customer Name" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
                <label for="produk_0" class="custom-control-label">TV</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                <label for="produk_1" class="custom-control-label">Kulkas</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci"> 
                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
              <input id="jumlah" name="jumlah" placeholder="Jumlah Item" type="text" class="form-control">
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
            <input type="submit" value="simpan" name="proses"/>
            </div>
          </div>
          </div>
        
          <div class="col-3" style="margin-left: 3em;">
          <table class="table  table-bordered border-primary table-striped">
            <thead>
              <tr>
                <th scope="col">Harga Barang</th>
                </tr>
                <tbody>
                  <tr>
                    <th scope="row">TV 4.200.000</th>
                  </tr>
                    <tr>
                      <th scope="row">Kulkas 3.100.000</th>
                    </tr> 
                    <tr>
                      <th scope="row">Mesin Cuci 3.100.000</th>
                    </tr> 
                    </div>
                  </div>
                </form>
                
        
          <?php
          error_reporting(0);
          if(isset($_POST['proses'])){
          $name= $_POST['name'];
          $produk = $_POST['produk'];
          $jumlah = $_POST['jumlah'];
            
          echo 'Nama Produk : '.$name;
          echo '<br/>Produk : '.$produk;
          echo '<br/>Jumlah : '.$jumlah;
          $TV = 4200000 * intval($jumlah);
          $kulkas = 3100000 * intval($jumlah);
          $mesincuci = 3800000 * intval($jumlah);
                                  
              switch($produk){
              case 'TV':
              echo "<br>" . "Total Belanja : " . number_format($TV,0,',','.');
              break;
              
              case 'KULKAS':
              echo "<br>" . "Total Belanja : " . number_format($kulkas,0,',','.');
              break;
            
              default:
              echo "<br>" . "Total Belanja : " . number_format($mesincuci,0,',','.');
              break;
              }                                
              }
        
          ?>
        </div>
            </table>
        <!-- /.card-body -->
       
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
    include_once 'footer.php';
?>