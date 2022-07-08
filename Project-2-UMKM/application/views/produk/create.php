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