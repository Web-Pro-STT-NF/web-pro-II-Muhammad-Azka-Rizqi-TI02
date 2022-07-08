<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk UMKM</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css')?>">
</head>
<!-- Content Wrapper. Contains page content -->
<div class="container">
       <!-- Content Header (Page header) -->
       

     

           <!-- Default box -->
           <div class="card">
               <div class="card-header">
                   <h3 class="card-title">Isi Untuk Beli Produk</h3>

                   <div class="card-tools">
                       
                       </button>
                   </div>
               </div>
               <div class="card-body">
                   <?php echo form_open('pesanan/save') ?>
                   <form>
                    
                       <div class="form-group row">
                           <label class="col-4 col-form-label" for="id">ID</label>
                           <div class="col-8">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                      
                                   </div>
                                   <input id="id" name="id" type="number" class="form-control">
                               </div>
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="tanggal" class="col-4 col-form-label">tanggal</label>
                           <div class="col-8">
                               <input id="tanggal" name="tanggal" type="date" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="jumlah" class="col-4 col-form-label">jumlah</label>
                           <div class="col-8">
                               <input id="jumlah" name="jumlah" type="number" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="users_id" class="col-4 col-form-label">Users ID</label>
                           <div class="col-8">
                               <input id="users_id" name="users_id" type="number" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="produk_id" class="col-4 col-form-label">Produk ID</label>
                           <div class="col-8">
                               <input id="produk_id" name="produk_id" type="number" class="form-control">
                           </div>
                       </div>
                      
                       <div class="form-group row">
                           <div class="offset-4 col-8">
                               <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                           </div>
                       </div>
                   </form>
                   <!-- /.card-body -->
                   <?php echo form_close()?>
                   <div class="card-footer">
                       Footer
                   </div>
                   <!-- /.card-footer-->
               </div>
               <!-- /.card -->

       </section>
       <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->   

   

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url()?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>dist/js/demo.js"></script>
</body>

</html>