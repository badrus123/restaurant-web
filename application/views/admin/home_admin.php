<?php 
    $this->load->view('Admin/nav_admin');
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'Home_admin/index'?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

 <!-- TABLE: LATEST ORDERS -->
    <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Latest Orders</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
    
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                            <table class="table no-margin">
                              <thead>
                              <tr>
                                <th>nama makanan</th>
                                <th>harga makanan</th>                    
                                <th>nama minuman</th>
                                <th>harga minuman</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach ($menu -> result() as  $value) { ?>
                              <tr>
                                <td><?php echo $value->makanan ?></td>
                                <td><?php echo $value->harga_makanan ?></td>
                                <td><?php echo $value->minuman ?></td>
                                <td><?php echo $value->harga_minuman ?></td>
                              </tr>
                              <?php } ?>
                              </tbody>
                            </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="<?php echo base_url().'Form_obat/index'?>" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                  <a href="#" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                </div>
      </div>
    </section>
 

<?php 
 $this->load->view('Admin/footer_admin');
?>