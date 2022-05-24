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
            <h1>Halaman Utama Projek UTS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Halaman UTS</li>
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
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form BMI</h3>

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
                  <form action="" method="POST">
                <div class=" form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Anda</label>
                    <div class="col-8">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-address-book"></i>
                      </div>
                    </div> 
                        <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" type="text" class="form-control">
                    </div>
                </div>
              </div>
                
                
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email Anda</label>
                    <div class="col-8">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-address-book"></i>
                      </div>
                    </div> 
                        <input id="email" name="email" placeholder="Masukkan Email Anda" type="email" class="form-control">
                    </div>
                </div>
                </div>
                <div class="form-group row">
                    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                    <div class="col-8">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-map-marker"></i>
                      </div>
                    </div> 
                        <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" type="text"
                            class="form-control">
                    </div>
                </div>
                </div>
                
                <div class="form-group row">
                    <label for="bb" class="col-4 col-form-label">Berat Badan</label>
                    <div class="col-8">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-child"></i>
                      </div>
                    </div> 
                        <input id="bb" name="bb" placeholder="Masukkan Berat Badan (KG)" type="text" class="form-control">
                    </div>
                </div>
                </div>
                <div class="form-group row">
                    <label for="tb" class="col-4 col-form-label">Tinggi Badan</label>
                    <div class="col-8">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-child"></i>
                      </div>
                    </div> 
                        <input id="tb" name="tb" placeholder="Masukkan Tinggi Badan (CM)" type="text" class="form-control">
                    </div>
                </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Periksa</label>
                    <div class="col-8">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div> 
                        <input id="tgl_periksa" name="tgl_periksa" type="date" class="form-control">
                    </div>
                </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Jenis Kelamin</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input"
                                value="L">
                            <label for="jenis_kelamin_0" class="custom-control-label">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input"
                                value="P">
                            <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-warning" href="index.php" role="button">Reset</a>
                    </div>
                </div>
            </form>
</div>
            <div class="card-footer">
            <b>Noted</b> Hasil Table Input Akan Muncul Dibawah, Mohon isi data dan submit terlebih dahulu 
             
                
              </div>
            <?php
            error_reporting(0);
                require_once 'class_pasien.php';
                require_once 'class_bmiPasien.php';

                if (isset($_POST['submit'])) {
                $nama_pasien = $_POST['nama'];
                $tmp_lahir = $_POST['tmp_lahir'];
                $tgl_periksa = $_POST['tgl_periksa'];
                $email = $_POST['email'];
                $jk = $_POST['jenis_kelamin'];
                $bb = $_POST['bb'];
                $tb = $_POST['tb'];
                $hasilbmi = new bmiPasien($nama_pasien, $tmp_lahir, $tgl_periksa, $email, $jk, $bb, $tb, null); 
                $status = $hasilbmi -> nilai();
                }
            ?>

              </div>
              
              <!-- /.card-body -->
              
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->


            <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Hasil BMI</h3>

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
              <table class="table table-bordered mt-4">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal Periksa</th>
                <th scope="col">Kode Pasien</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Gender</th>
                <th scope="col">Berat (KG)</th>
                <th scope="col">Tinggi (CM)</th>
                <th scope="col">Nilai BMI</th>
                <th scope="col">Status</th>
                </tr>
            </thead>


            <tbody>
                
            <?php
                $pasien1 = new bmiPasien('Ahmad', 'kode', '2022-01-10', '1.com', 'L', 60, 200, 'P001');
                $pasien2 = new bmiPasien('Rina', 'kode', '2022-01-10', '2.com', 'P', 55.3, 165, 'P002');
                $pasien3 = new bmiPasien('Luthfi', 'kode', '2022-01-11', '3.com', 'L', 45.2, 171, 'P003');

            
            
                // panggil attribut dari class Pasien
                $dataPasien = [$pasien1, $pasien2, $pasien3];
                $nomor = 1;
                $kode = 1;
                foreach ($dataPasien as $pasien) {
                echo '<tr><td>' . $nomor . '</td>';
                echo '<td>' . $pasien->tglperiksa . '</td>';
                echo '<td>P00' . $kode . '</td>';
                echo '<td>' . $pasien->namapasien . '</td>';
                echo '<td>' . $pasien->jk . '</td>';
                echo '<td>' . $pasien->bb . '</td>';
                echo '<td>' . $pasien->tb . '</td>';
                echo '<td>' . $pasien->nilai() . '</td>';
                echo '<td>' . $pasien->status() . '</td>';
                $nomor++;
                $kode++;
                }

                echo '<tr><td>' . $nomor . '</td>';
                echo '<td>' . $tgl_periksa . '</td>';
                echo '<td>P00' . $kode . '</td>';
                echo '<td>' . $nama_pasien . '</td>';
                echo '<td>' . $jk . '</td>';
                echo '<td>' . $bb . '</td>';
                echo '<td>' . $tb . '</td>';
                echo '<td>' . $hasilbmi->nilai() . '</td>';
                echo '<td>' . $hasilbmi->status($status) . '</td>'; 
            ?>
            </tbody>
             </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Hasil Input, kode pasien anda adalah P004 <br>
                Reset untuk kembali ke form semula
              </div>
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