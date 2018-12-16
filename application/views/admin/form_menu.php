<?php 
    $this->load->view('Admin/nav_admin');
 ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advanced Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'Home_admin/index'?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url().'Form_makanan/index'?>">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                    <h3 class="box-title">INPUT makanan</h3>
                    <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                    </div>
            </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <form method="POST" action="<?php echo base_url('Form_menu/makanan'); ?>" enctype="multipart/form-data">
                        <div class="col-md-3">
                            <div>
                                <h4>Nama makanan</h4>
                                <input  class="form-control select2" type="text" name="nama_makanan" placeholder="nama makanan" required="required" style=" width: 100%;">
                            </div>
                            <div>
                                <h4>Harga makanan</h4>
                                <input  class="form-control select2" type="text" name="harga_makanan" required="required" placeholder="harga makanan" style=" width: 100%;">
                            </div>
                            <div>
                                <br>
                                <input class="form-control select2 btn btn-primary" type="submit" value="submit" >
                            </div>
                        </div>
                        </form>
                        <form method="POST" action="<?php echo base_url('Form_menu/minuman'); ?>" enctype="multipart/form-data">
                        <div class="col-md-3">
                            <div>
                                <h4>Nama minuman</h4>
                                <input  class="form-control select2" type="text" name="nama_minuman" placeholder="nama makanan" required="required" style=" width: 100%;">
                            </div>
                            <div>
                                <h4>Harga minuman</h4>
                                <input  class="form-control select2" type="text" name="harga_minuman" required="required" placeholder="harga makanan" style=" width: 100%;">
                            </div>
                            <div>
                                <br>
                                <input class="form-control select2 btn btn-primary" type="submit" value="submit" >
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
        </div>
    </section>




</div>
<?php 
 $this->load->view('Admin/footer_admin');
?>