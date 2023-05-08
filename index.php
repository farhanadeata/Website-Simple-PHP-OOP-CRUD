  <?php include 'template/header.php'; ?>
  <?php include 'template/topnavbar.php'; ?>
  <?php include 'template/sidebar.php'; ?>
  <?php require 'controller/koneksi.php'; ?>
  <?php $db = new Db(); ?>
  <?php 
  $select = new Select();
  session_start();
  if (!empty($_SESSION["id"])) {
    $user = $select->selectUserById($_SESSION["id"]);
  } else {
    header("Location: login.php");
  }
  
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>
                <!-- <?php echo $jumlah_data; ?> -->

                <p>Data Barang</p>
              </div>
              <div class="icon">
                <i class="ion ion-box"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Data 1</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Data 2</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Data 3</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="container mt-4">
          <div class="row my-2">
            <div class="col-md">
              <h3 class="text-center fw-bold text-dark ">DATA BARANG</h3>
              <hr>
            </div>
          </div>
          <div class="row my-3">
            <div class="col-md">
              <table id="data" class="table table-striped table-hover text-center" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Stok</th>
                    <th>Tanggal update</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($db->tampil_data() as $x) {
                  ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $x['kode_barang']; ?></td>
                      <td><?php echo $x['nama_barang']; ?></td>
                      <td><?php echo $x['jenis_barang']; ?></td>
                      <td><?php echo $x['stok']; ?></td>
                      <td><?php echo $x['tgl_update']; ?></td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php include 'template/footer.php'; ?>