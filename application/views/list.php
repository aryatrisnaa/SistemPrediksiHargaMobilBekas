<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("_partials/head.php") ?>
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

  
  <!-- Contact -->
  <section class="page-section" id="contact">
  <div class="container">
  <div class="row align-items-center">
    <div class="col-lg-6">
     	<form action="http://localhost/mobil/User/add" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label for="merek">Merek Mobil</label>
            <div class="form-group">
              <select class="form-control" name="merek">
                <option value="AVZ">Toyota Avanza Tipe G</option>
                <option value="MBL">Honda Mobilio Tipe E</option>
                <option value="XPD">Mitsubishi Xpander Ultimate</option>
              </select>
            </div>
            <div class="invalid-feedback">
              <?php echo form_error('merek') ?>
            </div>
          </div>
          <div class="form-group">
            <label for="thn">Tahun Pembuatan Mobil</label>
              <input class="form-control <?php echo form_error('thn') ? 'is-invalid':'' ?>" type="number" name="thn" placeholder="Input tahun pembuatan mobil" required/>
                <div class="invalid-feedback">
                  <?php echo form_error('thn') ?>
                </div>
          </div>
          <div class="form-group">
            <label for="jrk">Jarak Tempuh Mobil</label>
              <input class="form-control <?php echo form_error('jrk') ? 'is-invalid':'' ?>" type="number" name="jrk" placeholder="Input odometer mobil" required/>
                <div class="invalid-feedback">
                  <?php echo form_error('jrk') ?>
                </div>
          </div>

          <div class="form-group">
            <label for="kfisik">Kondisi Fisik (%)</label>
              <input class="form-control <?php echo form_error('kfisik') ? 'is-invalid':'' ?>" type="number" name="kfisik" placeholder="1-100" required/>
                <div class="invalid-feedback">
                  <?php echo form_error('kfisik') ?>
                </div>
          </div>
          <div class="text-center">
            <input class="btn btn-primary " type="submit" name="btn" value="Prediksi Harga"/>
          </div>
      </form>
    </div>
    <div class="col-lg-1">
    </div>
    <div class="col-lg-5">

      <div class="form-group">
        <h4>Keterangan:</h4>
      </div>
      <div class="form-group">
        <p>Kondisi fisik diinputkan berdasarkan perkiraan persentasi kesempurnaan fisik mobil, baik cat maupun bentuk body.</p>
        <p>100%-85% = sempurna</p>
        <p>84%-40% = lecet ringan - lecet berat</p>
        <p>40%-0% = butuh reparasi</p>
      </div>
      
    </div>
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
