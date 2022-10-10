<?php include('../_partials/top.php') ?>

<h1 class="page-header">Pendataan Warga Desa Simpangan</h1>
<img src="https://upload.wikimedia.org/wikipedia/commons/1/12/Logo_Kabupaten_Bekasi.jpg" width = '200' hight = '100'>
<h4>Selamat datang di Website Pendataan Warga Desa Simpangan. Website ini berguna untuk mendata warga yang baru masuk atau pindah dari desa lain dan akan menetap di Desa Simpangan ini.
  Dengan adanya website ini dapat mempermudah pendataan warga secara cepat.
</h4>

<?php include('data-index.php') ?>


<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="panel panel-primary">
      <div class="panel-body">
        <h3>Data Warga</h3>
        <p>
          Total ada <?php echo $jumlah_warga['total'] ?> data warga. <?php echo $jumlah_warga_l['total'] ?> di antaranya laki-laki, dan <?php echo $jumlah_warga_p['total'] ?> diantaranya perempuan.
        </p>
        <p>
           Warga di atas 17 tahun berjumlah <?php echo $jumlah_warga_ld_17['total'] ?> orang, dan di bawah 17 tahun berjumlah <?php echo $jumlah_warga_kd_17['total'] ?> orang.
        </p>
      </div>
      <div class="panel-footer">
        <a href="../warga" class="btn btn-primary" role="button">
          <span class="glyphicon glyphicon-book"></span> Detil »
        </a>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="panel panel-primary">
      <div class="panel-body">
        <h3>Data Kartu Keluarga</h3>
        <p>Total ada <?php echo $jumlah_kartu_keluarga['total'] ?> data kartu keluarga</p>
      </div>
      <div class="panel-footer">
        <a href="../kartu-keluarga" class="btn btn-primary" role="button">
          <span class="glyphicon glyphicon-inbox"></span> Detil »
        </a>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="panel panel-primary">
      <div class="panel-body">
        <h3>Data Mutasi</h3>
        <p>
          Total ada <?php echo $jumlah_mutasi['total'] ?> data mutasi. <?php echo $jumlah_mutasi_l['total'] ?> di antaranya laki-laki, dan <?php echo $jumlah_mutasi_p['total'] ?> diantaranya perempuan.
        </p>
        <p>
           Warga di atas 17 tahun berjumlah <?php echo $jumlah_mutasi_ld_17['total'] ?> orang, dan di bawah 17 tahun berjumlah <?php echo $jumlah_mutasi_kd_17['total'] ?> orang.
        </p>
      </div>
      <div class="panel-footer">
        <a href="../mutasi" class="btn btn-primary" role="button">
          <span class="glyphicon glyphicon-export"></span> Detil »
        </a>
      </div>
    </div>
  </div>
</div>

<?php include('../_partials/bottom.php') ?>
