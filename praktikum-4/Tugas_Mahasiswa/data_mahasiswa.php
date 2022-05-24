<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Data Predikat Mahasiwa</title>
  </head>
  <body>
      <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WEB02</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Review Link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PHP 5 OOP
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="SUBMIT" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">SUBMIT</button>
    </form>
    </div>
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
    </ul>
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PHP 5 OOP
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
  </div>
</nav>

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
    include_once "class_mahasiswa.php";
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

      <div class="row mt-4">
      <h6><b>Lab Pemrograman Web Lanjutan</b></h6> <p>Dosen : Sirojul Munir S.Si,M.Kom <br>
      STT-NF-Kampus B </p>
      </div>

     

    <div class="fixed-bottom container">
    <hr>
        <footer class="py-3 bg-light">
        <div class="container px-4 px-lg-5">
            <p class="text-center">Created by <a href="https://github.com/muhammadazkarizqi">Muhammad Azka Rizqi</a> &copy; 2022</p>
        </div>
    </footer>
    </div>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</div>
  </body>
</html>