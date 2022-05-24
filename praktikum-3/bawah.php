<div class="container">
<div class="row">
        </div>
        <div class="row">
            <div class="col-12">
                <p class="mt-3 d-flex justify-content-center">Form Nilai siswa</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                        <div class="col-5">
                            <input id="nama" name="nama" placeholder="Nama Anda" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                        <div class="col-5">
                            <select id="matkul" name="matkul" class="custom-select">
                                <option value="Jaringan Komputer">Jaringan Komputer</option>
                                <option value="Pemograman Web">Pemrograman Web</option>
                                <option value="Sistem Operasi">Sistem Operasi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                        <div class="col-3">
                            <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                        <div class="col-3">
                            <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label>
                        <div class="col-3">
                            <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
                <?php

                include_once 'libfungsi.php';
                $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
                $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
                $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
                $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
                $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

                echo "Nama : $nama";
                echo "<br/>Mata kuliah : $mata_kuliah";
                echo "<br/>Nilai UTS : $nilai_uts";
                echo "<br/>Nilai UAS : $nilai_uas";
                echo "<br/>Nilai Tugas : $nilai_tugas";

                $nilai_akhir = persentase($nilai_uts, $nilai_uas, $nilai_tugas);
                $grade_nilai = grade_nilai($nilai_akhir);

                echo "<br/>Nilai Akhir : $nilai_akhir";
                echo "<br/>Status : ", kelulusan($nilai_akhir);
                echo "<br/>Grade Nilai : ", $grade_nilai;
                echo "<br/>Predikat Nilia : ", predikat_nilai($grade_nilai);
                ?>
            </div>
        </div>
        <hr>
        <footer class="mt-2 py-3 bg-light">
        <div class="container px-4 px-lg-5">
            <p class="text-center">Created by <a href="https://github.com/muhammadazkarizqi">Muhammad Azka Rizqi</a> &copy; 2022</p>
        </div>
    </footer>
        </div>
    </div>
</div>
</body>

</html>