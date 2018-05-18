<head>
  <link rel="shortcut icon" href="assets/img/favicon.png">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/admin/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url ('assets/admin/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/admin/css/sb-admin.css" rel="stylesheet')?>">
</head>

<body>
<h1>Laporan Penjualan</h1>

<div class="col-md-12">
</div>

<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <th>Tanggal</th>
                  <th>Item</th>
                  <th>Topping</th>
                  <th>Jumlah Pembelian</th>
                  <th>Total Pembelian</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $n=0;
              foreach ($semua->result_array() as $d) {
                $n++;?>
                <tr>
                  <!--<td><?php echo $n;?></td>-->
                  <td><?php echo $d['tanggal'];?></td>
                  <td><?php echo $d['item'];?></td>
                  <td><?php echo $d['topping'];?></td>
                  <td><?php echo $d['jumlah_pembelian'];?></td>
                  <td><?php echo $d['total_pembelian'];?></td>
                  <td>
                  <a href="<?php echo site_url('laporanPenjualan/hapus/'.$d['id']);?>"
                  class="btn btn-danger">Hapus</a>

                </td>
                </tr>
                <?php } ?>
              </tbody>
      </table>
    </div>


    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Data</button>
    <div id="tambah" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"></button>
                  <h4 class="modal-title">Tambah Laporan Offline</h4>
              </div>

              <form method="post" action="laporanPenjualan/form" enctype="multipart/form-data">
                  <div class="modal-body">
                      <div class="form-group">
                          <label class="control-label" for="tanggal">Tanggal</label>
                          <input type="date" name="tanggal" class="form-control" id="tanggal" required>
                      </div>
                      <div class="form-group">
                          <label class="control-label" for="item">Item</label>
                          <select name="id_item" class="form-control" id="id_item">
                            <option value="1">Marshmellow Ice Cream Classic Choco</option>
                            <option value="2">Marshmellow Ice Cream Strawberry Delight</option>
                            <option value="3">Soft Ice Cream Oreo</option>
                            <option value="4">Soft Ice Cream Milo</option>
                            <option value="5">Soft Ice Cream Strawberry</option>
                            <option value="6">Soft Ice Cream Green Tea</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label class="control-label" for="topping">Topping</label>
                          <select name="id_topping" class="form-control" name="topping" id="id_topping" >
                            <option value="1">Tanpa topping</option>
                            <option value="2">Oreo</option>
                            <option value="3">Chacha</option>
                            <option value="4">Koko crunch</option>
                            <option value="5">Choco chips</option>
                            <option value="6">Yuppy</option>
                            <option value="7">Chocolatos</option>
                            <option value="8">Hello Panda</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label class="control-label" for="jumlah">Jumlah</label>
                          <input type="number" name="jumlah_pembelian" class="form-control" required>
                      </div>
                  </div>
                  <div  class="modal-footer">
                      <button type="reset" class="btn btn-danger">Reset</button>
                      <input type="submit" class="btn btn-success" name="tambah" value="simpan">
                  </div>
              </form>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin.min.js')?>"></script>
    <script type="<?php echo base_url('assets/js/toggle.js')?>"></script>
  
  </body>
