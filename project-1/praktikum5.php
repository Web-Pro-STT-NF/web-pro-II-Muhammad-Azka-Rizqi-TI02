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
            <h1>Praktikum 5</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Praktikum 5</li>
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
                <h3 class="card-title">Dispenser</h3>

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
              <div class="text-center">
              <div class="card mt-3 ms-4" style="width: 50rem;">
              <h1 class="card-header">Data Dispenser </h1>
              <div class="card-body">
          <?php
              include_once "praktikum5-class/class_dispenser.php";
              $pelanggan1 = new dispenser("Pelanggan", "Kopi", 20000);

              echo "Nama : " . $pelanggan1->getNama() . "<br>";
              echo "Membeli : " . $pelanggan1->getMinum() . "<br>"; 

              $pelanggan1->setVolume(7000);

              echo "Volume Wadah : " . $pelanggan1->getVolume() . "<br>";
              echo $pelanggan1->Kopi() . "<br>";
              echo $pelanggan1->Menambah_Kopi() . "<br>";
              echo $pelanggan1->Menambah_Kopi_Lagi() . "<br>";
              echo "Volume Sisa Dari Wadah Kopi : " . $pelanggan1->getVolume() . "<br>";
          ?>
          </div>
          </div>
          </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
               Praktikum 5
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->

            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bank</h3>

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
              <div class="text-center">
              <div class="card mt-3 ms-4" style="width: 50rem;">
              <h1 class="card-header">Bank Account </h1>
              <div class="card-body">
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
              include_once 'praktikum5-class/class_bankAccount.php';
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
              </div>
              </div>
              </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
               Praktikum 5
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