<head>
  <meta charset="utf-8">
  <title>tambah manual</title>
  <link rel="shortcut icon" href="assets/img/favicon.png">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/admin/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url ('assets/admin/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/admin/css/sb-admin.css" rel="stylesheet')?>">
</head>

<body>
<form method="post" enctype="multipart/form-data">
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
                          <select name="id_topping" class="form-control" name="topping" id="id_topping">
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
                          <input type="number" name="jumlah" class="form-control" id="jumlah" required>
                      </div>
                  </div>
                  <div  class="modal-footer">
                      <button type="reset" class="btn btn-danger">Reset</button>
                      <input type="submit" class="btn btn-success" name="tambah" value="simpan">
                  </div>
              </form>
              <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin.min.js')?>"></script>
    <script type="<?php echo base_url('assets/js/toggle.js')?>"></script>
  

              </body>