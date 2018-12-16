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
        <li class="active">Detail pesanan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- small box -->
 <!-- TABLE: LATEST ORDERS -->
 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Detail pesanan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
           <?php foreach ($pesanan -> result() as  $value) { ?> 
            <div id='printMe' class="box-body">
              <div class="table-responsive">
              	 <div class="col-md-12">
                  <form method="POST" action="<?php echo base_url('Detail_admin/transaksi'); ?>" enctype="multipart/form-data">
                            <div>
                                <h4>id pesanan</h4>
                                <p><?php echo $value->id_pesanan ?></p>
                                <input name="id_pesanan" type="hidden" value="<?php echo $value->id_pesanan ?>">
                            </div>
                            <div>
                                <h4>tanggal pesanan</h4>
                                <p><?php echo $value->date?></p>
                                <input name="date" type="hidden" value="<?php echo $value->date ?>">
                            </div>
                            <div>
                                <h4>lokasi pesanan</h4>
                                <p><?php echo $value->location?></p>
                            </div>
                            <div>
                                <h4>makanan pesanan</h4>
                                <p><?php echo $value->food?></p>
                            </div>
                            <div>
                                <h4>banyak makanan pesanan</h4>
                                <p><?php echo $value->quant_food?></p>
                            </div>
                            <div>
                                <h4>minuman pesanan</h4>
                                <p><?php echo $value->drink?></p>
                            </div>
                            <div>
                                <h4>banyak minuman pesanan</h4>
                                <p><?php echo $value->quant_drink?></p>
                            </div>
                            <div>
                                <h4>Total harga</h4>
                                <p><?php echo $value->total_harga?></p>
                                <input name="total" type="hidden" value="<?php echo $value->total_harga ?>">
                            </div>
                        </div>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <button class="btn btn-success  pull-left" onclick="printDiv('printMe')">Print Resep ini</button>
              <input type="submit" class="btn btn-danger  pull-right" value="Masukin Database">
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
           
        </div>
         <?php } ?>
</div>
</form>
<?php 
 $this->load->view('Admin/footer_admin');
?>