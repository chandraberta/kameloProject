<h1>Promo</h1>
      <hr>
      <div class="card mb-3">
        <div class="card-header">
          <section class="content">
              <div class="row">
                  <!-- left column -->
                  <div class="col-md-6">
                      <!-- general form elements -->
                      <div class="box box-primary">
                          <div class="box-header with-border">
                              <h3 class="box-title">Promo Kamelo</h3>
                          </div>
                          <!-- /.box-header -->
                          <!-- form start -->

                          <form role="form" method="post" enctype="multipart/form-data" action="promo/promo">
                              <div class="box-body">

                                  <?php /*include "model/promo_model" ;
                                  $stmt = $DB_con->prepare('SELECT * FROM promo');
                                  $stmt->execute();
                                  $num = 1;
                                  while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                      if($num == 1) {
                                  ?>
                                  <img src="./user_images/<?php echo $data["gambar"] ?>" style="width:100%" />

                                <?php } $num++;  }*/ ?>


                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Tanggal</label>
                                      <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Judul</label>
                                      <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Deskripsi</label>
                                      <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputFile">File input</label>
                                      <input type="file" id="user_image" name="user_image">

                                      <p class="help-block">Example block-level help text here.</p>
                                  </div>

                              </div>
                              <!-- /.box-body -->

                              <div class="box-footer">
                                  <button type="submit" id="btnsave" name="btnsave" class="btn btn-primary">Submit</button>
                              </div>
                          </form>
                      </div>