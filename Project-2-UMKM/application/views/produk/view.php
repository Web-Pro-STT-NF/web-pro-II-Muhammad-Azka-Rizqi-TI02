 <!-- Content Wrapper. Contains page content -->



<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
       <div class="container-fluid">
           <div class="row mb-2">
               <div class="col-sm-6">
                   <h1>Data Produk</h1>
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="<?= base_url('index.php/produk')?>">Home</a></li>
                       <li class="breadcrumb-item active">Data Produk</li>
                       <li class="breadcrumb-item"><a id="back-link">View Produk</a></li> 
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
               <h3 class="card-title">Table Produk</h3>

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
                   <div class="col-sm-8">
                       <table class="table">
                           <tbody>
                           <tr>
                                       <td>ID</td>
                                       <td><?=$produk->id?></td>
                                   </tr>
                                   <tr>
                                       <td>Kode</td>
                                       <td><?=$produk->kode?></td>
                                   </tr>
                                   <tr>
                                       <td>Nama</td>
                                       <td><?=$produk->nama?></td>
                                   </tr>
                                   <tr>
                                       <td>Stok</td>
                                       <td><?=$produk->stok?></td>
                                   </tr>
                                   <tr>
                                       <td>Harga Beli</td>
                                       <td><?=$produk->harga_beli?></td>
                                   </tr>
                                   <tr>
                                       <td>Harga Jual</td>
                                       <td><?=$produk->harga_jual?></td>
                                   </tr>
                                   <tr>
                                       <td>Foto</td>
                                       <td><?=$produk->foto?></td>
                                   </tr>
                                   <tr>
                                       <td>Jenis ID</td>
                                       <td><?=$produk->jenis_id?></td>
                                   </tr>
                                   <tr>
                                       <td>Deskripsi</td>
                                       <td><?=$produk->deskripsi?></td>
                                   </tr>
                           </tbody>
                       </table>
                   </div>
                   <div class="col-sm-4">
                         <?php echo form_open_multipart('produk/upload') ?>

                   <input type="hidden" name="id" value="<?= $produk->id ?>">

                   <?php
                     $img = base_url('/uploads/' . $produk->foto);
                
                     if ($produk->foto == null) {
                        echo '<img src="' . base_url("/uploads/produk2.jpg") . 
                        '" alt="foto" width="100%"/>';
                        echo '';
                        echo '';
                     } else {
                        echo '<img src="' . $img . '" alt="foto" width="100%"/>';
                     }
                     ?>
                     <input type="file" name="fotoproduk" class="btn mt-2">
                     <button class="btn btn-secondary mt-2" type="submit">Upload Foto</button>
                 
                   <?= $produk->foto ?>
                  
                   <?php echo form_close() ?>
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


