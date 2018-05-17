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
                  <a href="<?php echo site_url('laporanPenjual');?>" class="btn btn-primary pull-left">Terima</a>
                  <a href="<?php echo site_url('laporanPenjualan/hapus/'.$d['tanggal']);?>"
                  class="btn btn-danger">Hapus</a>

                </td>
                </tr>
                <?php } ?>
              </tbody>
      </table>
    </div>


    <button type="button" class="btn btn-success pull-left" data-toggle="modal" data-target="#tambah"></button>
    <div id="tambah" class="modal fade" role="dialog">
      <div id="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"></button>
                  <h4 class="modal-title">Tambah Laporan Offline</h4>
              </div>
          </div>
      </div>
    </div>
  </div>

</div>
  
