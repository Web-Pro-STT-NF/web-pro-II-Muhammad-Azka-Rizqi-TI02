 <!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
       <div class="container-fluid">
           <div class="row mb-2">
               <div class="col-sm-6">
                   <h1>Data Suplier</h1>
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="<?= base_url('index.php/suplier')?>">Home</a></li>
                       <li class="breadcrumb-item active">Data Suplier</li>
                       <li class="breadcrumb-item"><a id="back-link">View Suplier</a></li> 
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
               <h3 class="card-title">Table Suplier</h3>

               <div class="card-tools">
                   <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                       <i class="fas fa-minus"></i>
                   </button>
                   <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                       <i class="fas fa-times"></i>
                   </button> -->
               </div>
           </div>
           <div class="card-body">
               <div class="row mb-2">
                   <div class="col-sm-4">
                       <table class="table">
                           <tbody>
                           <tr>
                                       <td>ID</td>
                                       <td><?=$suplier->id?></td>
                                   </tr>
                                   <tr>
                                       <td>Nama</td>
                                       <td><?=$suplier->nama?></td>
                                   </tr>
                                   <tr>
                                       <td>Kota</td>
                                       <td><?=$suplier->kota?></td>
                                   </tr>
                                   <tr>
                                       <td>Kontak</td>
                                       <td><?=$suplier->kontak?></td>
                                   </tr>
                                   <tr>
                                       <td>Alamat</td>
                                       <td><?=$suplier->alamat?></td>
                                   </tr>
                                   <tr>
                                       <td>Telpon</td>
                                       <td><?=$suplier->telpon?></td>
                                   </tr>
                           </tbody>
                       </table>
                   </div>
                   
               </div>
               <!-- /.card-body -->
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


