<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("_partials/head.php"); ?>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="otherNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url('dashboard') ?>">Berapa harga mobilmu?</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo site_url('dashboard') ?>">Menu Utama</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  
  <section class="page-section" id="resume">
  <div align="center" id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Hasil Prediksi Harga menggunakan Fuzzy Sugeno</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>

                    <div class="col-lg-6">
                        <div class="table-responsive"><br>
                            <table class="table table-hover table-bordered table-hover" >
                                <thead>
                                    <tr class="info">
                                        <th style="text-align:center">Merek Mobil</th>
                                        <th style="text-align:center">Tahun</th>
                                        <th style="text-align:center">Odometer</th>
                                        <th style="text-align:center">Kondisi Fisik</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td width="400">
                                                <?php echo $mbl->merek?>
                                            </td>
                                            <td width="100" style="text-align:center;">
                                                <?php echo $mbl->tahun?>
                                            </td>
                                            <td width="200">
                                                <?php echo $mbl->jarak?> km
                                            </td>
                                            <td width="50" style="text-align:center;">
                                                <?php echo $mbl->kfisik?>%
                                            </td>
                                        </tr>
                                        <tr>
                                        </tr>
                                    <?php //endforeach; ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive-->
                            <table class="table table-hover table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr class="info">
                                        <th style="text-align:center">Harga Jual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php //foreach ($mobil as $mbl): ?>
                                        <tr>                                            
                                            <td width="220" style="text-align:center">
                                                <h4>Rp.<?php echo $mbl->harga_jual?></h4>
                                            </td>
                                        </tr>
                                    <?php //endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.container-fluid-->
                    </div>
       
</div> 
    
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12">
          <span class="copyright">Copyright &copy; Arya Trisna Ananda 2019</span>
        </div>
        <!-- <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div> -->
        <!-- <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div> -->
      </div>
    </div>
  </footer>

  <?php $this->load->view("_partials/js.php") ?>

</body>

</html>
