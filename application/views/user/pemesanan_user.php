<?php 
    $this->load->view('user/nav_user');
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Tabel pesanan
        <small>panel admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'Home_admin/index'?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tabel pesanan</li>
      </ol>
    </section>
    <br>
 <!-- TABLE: LATEST ORDERS -->
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>ID pesanan</th>
                    <th>tanggal pesanan</th>
                    <th>Lokasi pesanan</th>
                    <th>nama makanan</th>
                    <th>jumlah makanan</th>
                    <th>nama minuman</th>
                    <th>jumlah minuman</th>
                    <th>Harga Total</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($pesanan -> result() as  $value) { ?>
                  <tr>
                    <td><?php echo $value->id_pesanan ?></td>
                    <td><?php echo $value->date ?></td>
                    <td><?php echo $value->location ?></td>
                    <td><?php echo $value->food ?></td>
                    <td><?php echo $value->quant_food ?></td>
                    <td><?php echo $value->drink ?></td>
                    <td><?php echo $value->quant_drink?></td>
                    <td><?php echo $value->total_harga ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
          <!-- /.box -->
</div>



</div>

<?php 
 $this->load->view('Admin/footer_admin');
?>