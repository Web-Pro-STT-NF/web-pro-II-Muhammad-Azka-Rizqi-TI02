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

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Produk UMKM</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Create</li>
                       </ol>
                   </div>
               </div>
           </div><!-- /.container-fluid -->
       </section>

       <!-- Main content --> 
       <section class="content">

           <!-- Default box -->
           <div class="card">
               <div class="card-header">
                   <h3 class="card-title">Create Data Produk</h3>

                   <div class="card-tools">
                       <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                       </button>
                       <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                           <i class="fas fa-times"></i> -->
                       </button>
                   </div>
               </div>
               <div class="card-body">
                   <?php echo form_open('produk/save') ?>
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
                           <label for="kode" class="col-4 col-form-label">Kode</label>
                           <div class="col-8">
                               <input id="kode" name="kode" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Nama</label>
                           <div class="col-8">
                               <input id="nama" name="nama" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="stok" class="col-4 col-form-label">Stok</label>
                           <div class="col-8">
                               <input id="stok" name="stok" type="number" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="harga_beli" class="col-4 col-form-label">Harga beli</label>
                           <div class="col-8">
                               <input id="harga_beli" name="harga_beli" type="number" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="harga_jual" class="col-4 col-form-label">Harga jual</label>
                           <div class="col-8">
                               <input id="harga_jual" name="harga_jual" type="number" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="foto" class="col-4 col-form-label">Foto</label>
                           <div class="col-8">
                               <input id="foto" name="foto" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="jenis_id" class="col-4 col-form-label">Jenis ID</label>
                           <div class="col-8">
                               <input id="jenis_id" name="jenis_id" type="number" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                           <div class="col-8">
                               <input id="deskripsi" name="deskripsi" type="text" class="form-control">
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

   <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

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