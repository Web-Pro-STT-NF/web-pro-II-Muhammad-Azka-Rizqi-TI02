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
                       <li class="breadcrumb-item"><a href="<?= base_url('index.php/users')?>">Home</a></li>
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
                                       <td><?=$users->id?></td>
                                   </tr>
                                   <tr>
                                       <td>Username</td>
                                       <td><?=$users->username?></td>
                                   </tr>
                                   <tr>
                                       <td>Password</td>
                                       <td><?=$users->password?></td>
                                   </tr>
                                   <tr>
                                       <td>Email</td>
                                       <td><?=$users->email?></td>
                                   </tr>
                                   <tr>
                                       <td>Created At</td>
                                       <td><?=$users->created_at?></td>
                                   </tr>
                                   <tr>
                                       <td>Last Login</td>
                                       <td><?=$users->last_login?></td>
                                   </tr>
                                   <tr>
                                       <td>Status</td>
                                       <td><?=$users->status?></td>
                                   </tr>
                                   <tr>
                                       <td>Role</td>
                                       <td><?=$users->role?></td>
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


