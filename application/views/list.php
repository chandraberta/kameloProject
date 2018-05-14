<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No order</th>
                  <th>Nama Customer</th>
                  <th>Item</th>
                  <th>Topping</th>
                  <th>Jumlah</th>
                  <th>Tanggal ambil</th>
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
                  <td><a href="<?php echo site_url('produk/form/'.$d['id_produk']);?>"
                  class="btn btn-success">Edit</a>
                  <a href="<?php echo site_url('produk/hapus/'.$d['id_produk']);?>"
                  class="btn btn-danger">Hapus</a>
                </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>

    <!--
      <a class="btn btn-primary" href="#" id="toggleNavPosition">Toggle Fixed/Static Navbar</a>
      <a class="btn btn-primary" href="#" id="toggleNavColor">Toggle Navbar Color</a>-->
      <!-- Blank div to give the page height to preview the fixed vs. static navbar-->
      <div style="height: 1000px;"></div>
    </div>