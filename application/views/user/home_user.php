  <?php 
      $this->load->view('user/nav_user');
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
      <section class="content">
          <div class="box box-default">
              <div class="box-header with-border">
                      <h3 class="box-title">Input Lokasi dan Tanggal</h3>
                      <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                      </div>
              </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <div class="row">
                          <form method="POST" action="<?php echo base_url('Home_user/menu'); ?>" enctype="multipart/form-data">
                          <div class="col-md-3">
                              <div>
                                  <h4>Lokasi</h4>
                                  <input  class="form-control select2" type="text" name="lokasi" placeholder="nama makanan" required="required" style=" width: 100%;">
                              </div>
                              <div>
                                  <h4>Tanggal</h4>
                                  <input  class="form-control select2" type="date" name="date" required="required" placeholder="harga makanan" style=" width: 100%;">
                              </div>                             
                              <div>
                              </div>
                          </div>
                      </div>
                  </div>
          </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
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
                <table class="table no-margin">
                                <thead>
                                <tr>
                                  <th>nama makanan</th>
                                  <th>harga makanan</th> 
                                  <th>banyak makanan</th>                   
                                  <th>nama minuman</th>
                                  <th>banyak minuman</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; foreach ($menu -> result() as  $value) {?>
                                <tr>
                                  <td><?php echo $value->makanan ?></td>
                                  <td><?php echo $value->harga_makanan ?></td>
                                  <td><input  type="hidden"  name='<?php echo "makanan".$i?>' value="<?php echo $value->makanan ?>" /> <input  type="hidden"  name="<?php echo "harga_makanan".$i?>" value="<?php echo $value->harga_makanan ?>"/><input  type="number" min="0" max="100" step="1" name='<?php echo "order_makanan".$i?>'/></td>
                                  <td><?php echo $value->minuman ?></td>
                                  <td><?php echo $value->harga_minuman ?></td>
                                  <td><input  type="hidden"  name='<?php echo "minuman".$i?>' value="<?php echo $value->minuman ?>" /> <input  type="hidden"  name="<?php echo "harga_minuman".$i?>" value="<?php echo $value->harga_minuman ?>"/><input  type="number" min="0" max="100" step="1" name='<?php echo "order_minuman".$i?>'/></td>
                                </tr>
                                <?php  $i++;} ?>
                                </tbody>
                              </table>
                    </div>
                    <!-- /.table-responsive -->
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer clearfix">
                  <br>
                  <input class="form-control select2 btn btn-primary" type="submit" value="Pesan" >
                  </div>
                  </form>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
          <!-- /.box -->
          </section>
</div>
          <!-- The Modal -->

  <?php 
  $this->load->view('user/footer_user');
  ?>