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
                   <h3 class="card-title">Create Data Suplier</h3>

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
                   <?php echo form_open('suplier/save') ?>
                   <form>
                    
                       <div class="form-group row">
                           <label class="col-4 col-form-label" for="id">Id</label>
                           <div class="col-8">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                      
                                   </div>
                                   <input id="id" name="id" type="number" class="form-control">
                               </div>
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Nama</label>
                           <div class="col-8">
                               <input id="nama" name="nama" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="kota" class="col-4 col-form-label">Kota</label>
                           <div class="col-8">
                               <input id="kota" name="kota" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="kontak" class="col-4 col-form-label">Kontak</label>
                           <div class="col-8">
                               <input id="kontak" name="kontak" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="alamat" class="col-4 col-form-label">Alamat</label>
                           <div class="col-8">
                               <input id="alamat" name="alamat" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="telpon" class="col-4 col-form-label">Telpon</label>
                           <div class="col-8">
                               <input id="telpon" name="telpon" type="text" class="form-control">
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