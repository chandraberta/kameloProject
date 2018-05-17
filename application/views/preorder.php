
<h1>Pre-Order</h1>

<div class="col-md-12">
  <br>
</div>

<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tr>
                  <th>No order</th>
                  <th>Nama Customer</th>
                  <th>Item</th>
                  <th>Topping</th>
                  <th>Jumlah</th>
                  <th>No HP</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $n=0;
              foreach ($semua->result_array() as $d) {
                $n++;?>
                <tr>
                  <td><?php echo $n;?></td>
                  <td><?php echo $d['nama_cust'];?></td>
                  <td><?php echo $d['item'];?></td>
                  <td><?php echo $d['topping'];?></td>
                  <td><?php echo $d['jumlah'];?></td>
                  <td><?php echo $d['no_hp'];?></td>
                  <td>
                  <a href="<?php echo site_url('preorder');?>" class="btn btn-primary pull-left">Terima</a>
                  <a href="<?php echo site_url('preorder/hapus/'.$d['id_order']);?>"
                  class="btn btn-danger">Hapus</a>

                </td>
                </tr>
                <?php } ?>
              </tbody>
  </table>
</div>
<a href="<?php echo site_url('preorder');?>" class="btn btn-success pull-left">Tambah</a>
</div>
</div>

    </div>
