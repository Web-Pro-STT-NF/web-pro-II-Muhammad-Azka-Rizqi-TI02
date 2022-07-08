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
                   <h3 class="card-title">Create Data Pembelian</h3>

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
                   <?php echo form_open('pembelian/save') ?>
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
                           <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                           <div class="col-8">
                               <input id="tanggal" name="tanggal" type="date" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                           <div class="col-8">
                               <input id="jumlah" name="jumlah" type="number" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="harga" class="col-4 col-form-label">Harga</label>
                           <div class="col-8">
                               <input id="harga" name="harga" type="number" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="produk_id" class="col-4 col-form-label">Produk ID</label>
                           <div class="col-8">
                               <input id="produk_id" name="produk_id" type="number" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="suplier_id" class="col-4 col-form-label">Suplier ID</label>
                           <div class="col-8">
                               <input id="suplier_id" name="suplier_id" type="number" class="form-control">
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