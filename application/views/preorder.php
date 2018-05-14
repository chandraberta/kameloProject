<<<<<<< HEAD
<div class="card mb-3">
=======
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Pre Order</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url ('assets/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin.css" rel="stylesheet')?>">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Admin</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo('preorder')?>">
            <span class="nav-link-text">pre-Order</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php echo ('deorder')?>">
            <span class="nav-link-text">Delivery order</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo ('laporanPenjualan')?>">
            <span class="nav-link-text">Laporan Penjualan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="statPenjualan">
            <span class="nav-link-text">statistik Penjualan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="admin/promo">
            <span class="nav-link-text">Promo</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="<?php echo base_url('admin/logout');?>">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Navbar</li>
      </ol>
      <h1>Pre Order</h1>
      <hr>
      <div class="card mb-3">
>>>>>>> bfaa57acbf8eee95fcce0172e4ea731e8478fa32
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
                  <a href="<?php echo site_url('preorder/hapus/'.$d['id_order']);?>"
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