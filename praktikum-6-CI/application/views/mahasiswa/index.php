<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $title ?></title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="container">
  <div class="row">
      <h3 class="text-center">Daftar Mahasiswa</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>IPK</th>
            <th>Predikat</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($list_mhs as $mhs) :
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $mhs->nim ?></td>
              <td><?= $mhs->nama ?></td>
              <td><?= $mhs->gender ?></td>
              <td><?= $mhs->ipk ?></td>
              <td><?= $mhs->predikat() ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>