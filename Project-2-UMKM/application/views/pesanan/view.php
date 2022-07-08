 <!-- Content Wrapper. Contains page content -->



<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
       <div class="container-fluid">
           <div class="row mb-2">
               <div class="col-sm-6">
                   <h1>Data Pesanan</h1>
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="<?= base_url('index.php/pesanan')?>">Home</a></li>
                       <li class="breadcrumb-item active">Data Pesanan</li>
                       <li class="breadcrumb-item"><a id="back-link">View Pesanan</a></li> 
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
               <h3 class="card-title">Table Pesanan</h3>

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
                                       <td><?=$pesanan->id?></td>
                                   </tr>
                                   <tr>
                                       <td>Tanggal</td>
                                       <td><?=$pesanan->tanggal?></td>
                                   </tr>
                                   <tr>
                                       <td>Jumlah</td>
                                       <td><?=$pesanan->jumlah?></td>
                                   </tr>
                                   <tr>
                                       <td>Users ID</td>
                                       <td><?=$pesanan->users_id?></td>
                                   </tr>
                                   <tr>
                                       <td>Produk ID</td>
                                       <td><?=$pesanan->produk_id?></td>
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


