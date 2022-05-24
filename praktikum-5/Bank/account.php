<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Azka Rizqi Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container mt-5">
    <table class="table text-center table-bordered">
    <thead>
     <tr>
        <th>Nomor</th>
        <th>Nomor Account</th>
        <th>Pemilik</th>
        <th>Saldo</th>
      </tr>
    </thead>

<tbody>        
<?php
    include_once 'class_bankAccount.php';
      $customer1 = new BankAccount('C001', 6000000, 'Ahmad');
      $customer2 = new BankAccount('C002', 5350000, 'Budi');
      $customer3 = new BankAccount('C003',2500000, 'Kurniawan');
    $array1 = [$customer1, $customer2, $customer3];   
      $customer1->deposit(1000000);
      $customer1->transfer($customer2, 500000);
      $customer1->transfer($customer3, 1500000);
      $customer1->withdraw(2500000);
    $array2 = [$customer1, $customer2, $customer3];
    $nomor = 1;
     foreach ($array1 as $ar1) : ?>
     <tr>
     <th><?= $nomor++;?>
    </th>
      <td><?= $ar1->nomor?></td>
      <td><?= $ar1->costumer?></td>
      <td><?= $ar1->saldo?></td>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    </div>
</body>
</html>