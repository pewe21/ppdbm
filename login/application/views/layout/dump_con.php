 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark"><?= $title ?></h1>
                 </div><!-- /.col -->
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active"><?= $title ?></li>
                     </ol>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-12 col-sm-6 col-md-3">
                     <div class="info-box">
                         <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                         <div class="info-box-content">
                             <span class="info-box-text">CPU Traffic</span>
                             <span class="info-box-number">
                                 0
                                 <small>%</small>
                             </span>
                         </div>
                         <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                 </div>
                 <!-- /.col -->
                 <div class="col-12 col-sm-6 col-md-3">
                     <div class="info-box mb-3">
                         <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                         <div class="info-box-content">
                             <span class="info-box-text">Likes</span>
                             <span class="info-box-number">0</span>
                         </div>
                         <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                 </div>
                 <!-- /.col -->

                 <!-- fix for small devices only -->
                 <div class="clearfix hidden-md-up"></div>

                 <div class="col-12 col-sm-6 col-md-3">
                     <div class="info-box mb-3">
                         <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                         <div class="info-box-content">
                             <span class="info-box-text">Sales</span>
                             <span class="info-box-number">0</span>
                         </div>
                         <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                 </div>
                 <!-- /.col -->
                 <div class="col-12 col-sm-6 col-md-3">
                     <div class="info-box mb-3">
                         <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                         <div class="info-box-content">
                             <span class="info-box-text">Users System</span>
                             <span class="info-box-number"><?= $userstot ?></span>
                         </div>
                         <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                 </div>
                 <!-- /.col -->
             </div>
             <!-- /.row -->

             <div class="row">
                 <div class="col-md-12">
                     <div class="card">
                         <div class="card-header">
                             <h5 class="card-title">Selamat Datang, -- -- !</h5>

                             <div class="card-tools">
                                 <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                     <i class="fas fa-minus"></i>
                                 </button>

                             </div>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <div class="row justify-content-center">
                                 <img src="<?= base_url('assets') ?>/img/logoma.png" alt="">
                             </div>
                             <!-- /.row -->
                         </div>
                         <!-- ./card-body -->
                         <div class="card-footer">
                             <div class="row">

                             </div>
                             <!-- /.row -->
                         </div>
                         <!-- /.card-footer -->
                     </div>
                     <!-- /.card -->
                 </div>
                 <!-- /.col -->
             </div>
             <!-- /.row -->

         </div>
     </section>
 </div>
 <!-- /.content-wrapper -->

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-light">
     <!-- Control sidebar content goes here -->
 </aside>