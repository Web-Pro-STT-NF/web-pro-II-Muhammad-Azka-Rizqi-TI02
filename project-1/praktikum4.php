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
            <h1>Praktikum 4</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Praktikum 4</li>
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
                <h3 class="card-title">Lingkaran</h3>

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
              <?php
              require_once "praktikum4-class/class_lingkaran.php";
              echo "NILAI PHI " . Lingkaran::PHI;


              $lingkar1 = new Lingkaran( 10 );
              $lingkar2 = new Lingkaran( 4 );

              echo "<br/>Luas Lingkaran I ".$lingkar1->getLuas();
              echo "<br>Luas Lingkaran II ".$lingkar2->getLuas();
              echo "Keliling Lingkaran I ".$lingkar1->getKeliling();
              echo "<br>Keliling Lingkaran II ".$lingkar2->getKeliling();
              ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Praktikum 4
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->

            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Persegi Panjang</h3>

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
              <?php
              require_once "praktikum4-class/class_persegipanjang.php";

              $persegi1 = new PersegiPanjang(20,25);
              $persegi2 = new PersegiPanjang(13,2);

              echo "<br> Luas Persegi Panjang Ke - 1 : " . $persegi1->luasPersegiPanjang();
              echo "<br> Luas Persegi Panjang Ke - 2 : " . $persegi2->luasPersegiPanjang();

              echo "<br> Keliling Persegi Panjang Ke - 1 : " . $persegi1->kelilingPersergiPanjang();
              echo "<br> Keliling Persegi Panjang Ke - 1 : " . $persegi2->kelilingPersergiPanjang();
              ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Praktikum 4 
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->

            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>

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
              <div class="row mt-2">
              <div class="col-5">
              <b>Show</b>
              <div class="btn-group">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">10
              </button>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">1</a></li>
              <li><a class="dropdown-item" href="#">2</a></li>
              <li><a class="dropdown-item" href="#">3</a></li>
              <li><a class="dropdown-item" href="#">4</a></li>
              <li><a class="dropdown-item" href="#">5</a></li>
              <li><a class="dropdown-item" href="#">6</a></li>
              <li><a class="dropdown-item" href="#">7</a></li>
              <li><a class="dropdown-item" href="#">8</a></li>
              <li><a class="dropdown-item" href="#">9</a></li>
              <li><a class="dropdown-item" href="#">10</a></li>
                  </ul>
                  
                  </div>
                  <b class="ms-2">Entries</b>
              </div>
          </div>

              <div class="container">
              <table class="table table-bordered mt-4 text-center">
            <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">NIM</th>
                <th scope="col">NAMA</th>
                <th scope="col">PRODI</th>
                <th scope="col">TAHUN ANGKATAN</th>
                <th scope="col">IPK</th>
                <th scope="col">PREDIKAT</th>
                <th scope="col">CHANGE</th>
              </tr>
            </thead>

            <tbody>
            <?php
              include_once "praktikum4-class/class_mahasiswa.php";
                  $mahasiswa1 = new Mahasiswa("022211", "Azka Rizqi", 2021, "TI", 3.88, "Predikat");
                  $mahasiswa2 = new Mahasiswa("012012", "Muhammad Azka", 2021, "SI", 3.97, "Predikat");
                  $mahasiswa3 = new Mahasiswa("012021", "Albert Roy", 2022, "BD", 3.92, "Predikat");
                  $mahasiswa4 = new Mahasiswa("021013", "Fina Safina", 2021, "SI", 3.31, "Predikat");
                  $mahasiswa5 = new Mahasiswa("031014", "Leonardo Arul", 2021, "TI", 3.31, "Predikat");
                  $mahasiswa6 = new Mahasiswa("041011", "Alfa Romeo", 2022, "BD", 3.31, "Predikat");
                  $nilai = [$mahasiswa1, $mahasiswa2, $mahasiswa3, $mahasiswa4, $mahasiswa5, $mahasiswa6];
                  
                  $nomor = 1;

                  foreach ($nilai as $mahasiswa) {
                    echo '<tr><td>' . $nomor . '</td>';
                    echo '<td>' . $mahasiswa->nim . '</td>';
                    echo '<td>' . $mahasiswa->nama . '</td>';
                    echo '<td>' . $mahasiswa->prodi . '</td>';
                    echo '<td>' . $mahasiswa->tahun_angkatan . '</td>';
                    echo '<td>' . $mahasiswa->ipk . '</td>';
                    echo '<td>' . $mahasiswa->predikat_ipk() . '</td>';
                    echo '<td> <a><i class="bi bi-eye-fill"></i> <i class="bi bi-pencil-square"></i></a></td>';
                  $nomor++;
                  }
              ?>
              </tbody>
              </table>


              <div class="row mt-4">
              <div class="col-4">
              <B>Halaman 1 dari 4 halaman</B>
                </div>
                <div class="col-8 justify-content-end d-flex">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#"><<</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">>></a></li>
                  </ul>
                </div>
                </div>

              </div>
              <!-- /.card-body -->
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->

            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Penilaian Mahasiswa</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="container mt-5 text-center">
          <h2> Form Penilaian Mahasiswa</h2>
          <hr>
          </div>

          <form  method="POST" action="" class="mt-5 container col-8">
            <div class="form-group row">
              <label for="nim" class="col-4 col-form-label">NIM</label> 
              <div class="col-8">
                <input id="nim" name="nim" placeholder="Isi Dengan Nim Anda" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
              <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                  <option value="JK">Jaringan Komputer</option>
                  <option value="SO">Sistem Operasi</option>
                  <option value="BD">Big Data</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="nilai" class="col-4 col-form-label">Nilai</label> 
              <div class="col-8">
                <input id="nilai" name="nilai" placeholder="Isi Dengan Nilai Anda" type="text" class="form-control">
              </div>
            </div> 
            <div class="form-group row">
              <div class="offset-4 col-8">
              <button name="proses" type="submit" class="btn btn-success">Simpan</button>
              </div>
            </div>
          </form>


          <div class="row">
            <hr>
            </div>
            <div class="row ms-3">
          <?php
          require_once "praktikum4-class/class_nilaimahasiswa.php";
            if (isset($_POST['proses'])) {
            $proses = $_POST['proses'];
            $nim = $_POST['nim'];
            $matkul = $_POST['matkul'];
            $nilai = $_POST['nilai'];
            $nilai_mahasiswa = new NilaiMahasiswa($matkul, $nilai, $nim);
              echo "NIM : " . $nilai_mahasiswa->nim;
              echo "<br>Nama Mata Kuliah : " . $nilai_mahasiswa->matakuliah;
              echo "<br>Nilai : " . $nilai_mahasiswa->nilai;

              $hasil_ujian = $nilai_mahasiswa->grade($nilai);
              echo "<br>Hasil Ujian : $hasil_ujian <br>";

              $hasil_grade = $nilai_mahasiswa->hasil($nilai);
              echo "Grade : $hasil_grade";
              }
          ?>
              </div>
              <div class="row">
              <?php
              if (isset($_POST['proses'])) {
              echo '<hr class="mt-5 ms-0";>';
              }
              ?>
              </div>
              </div>
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