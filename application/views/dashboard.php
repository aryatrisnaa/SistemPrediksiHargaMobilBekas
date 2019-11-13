<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Berapa harga mobilmu?</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Merek Mobil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Tentang Kami</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger btn btn-primary btn-xl text-uppercase" href="#contact">Mulai Prediksi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">SISTEM PREDIKSI HARGA MOBIL BEKAS JENIS LMPV MENGGUNAKAN METODE FUZZY INFERENCE SYSTEM SUGENO</div>
        <div><br></div>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">MEREK MOBIL</h2>
          <h3 class="section-subheading text-muted">Merek dan tipe mobil yang tersedia</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
                <img class="rounded-circle img-fluid" src="img/logos/avanza.jpg" alt="">
          </span><br><br><br>
          <h4 class="service-heading">Toyota Avanza</h4>
          <p class="text-muted">Toyota Avanza tipe G</p>
        </div>
        <div class="col-md-4">
        <span class="fa-stack fa-4x">
                <img class="rounded-circle img-fluid" src="img/logos/xpander.jpg" alt="">
          </span><br><br><br>
          <h4 class="service-heading">Honda Mobilio</h4>
          <p class="text-muted">Honda Mobilio tipe E</p>
        </div>
        <div class="col-md-4">
        <span class="fa-stack fa-4x">
                <img class="rounded-circle img-fluid" src="img/logos/mobilio.jpg" alt="">
          </span><br><br><br>
          <h4 class="service-heading">Mitsubishi Xpander</h4>
          <p class="text-muted">Mitsubishi Xpander tipe Ultimate</p>
        </div>
      </div>
    </div>
  </section>


  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Proses Penentuan Harga</h2>
          <h3 class="section-subheading text-muted">Tahapan Fuzzy Sugeno </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/1.png" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="subheading">Penentuan Range dan Himpunan Fuzzy</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">menentukan range dan fungsi keanggotaan dari masing-masing fungsi linguistik, seperti: tahun pembuatan mobil, kilometer jarak tepuh mobil, dan persentase kondisi kelayakan fisik mobil.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.png" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="subheading">Pembentukan Aturan Implikasi Fuzzy</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">membentuk basis pengetahuan Fuzzy yang berisi aturan-aturan (rules) dalam bentuk IF…THEN yang disesuaikan dengan penelitian yang telah dilakukan.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/3.png" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="subheading">Mesin Inferensi</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">fungsi implikasi MIN digunakan dalam tahapan ini untuk mendapatkan nilai α-predikat hasil iplikasi dengan cara memilih output himpunan fuzzy sesuai dengan derajat keanggotaan yang terkecil.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/4.png" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="subheading">Defuzzifikasi</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">suatu himpunan fuzzy yang diperoleh dari komposisi aturan-aturan fuzzy, sedangkan output yang dihasilkan merupakan suatu bilangan pada domain himpunan fuzzy tersebut.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Hasil
                  <br>Prediksi
                  <br>Harga Jual</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Perancang Sistem</h2>
          <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="team-member">
            <h4>Arya Trisna Ananda</h4>
            <p class="text-muted">A11.2015.09217</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/trsndd">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/aryatrisnaa/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://id.linkedin.com/in/arya-trisna-ananda-850400133">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Diajukan untuk memenuhi salah satu syarat mengerjakan dan menempuh ujian tugas akhir.</p>
        </div>
      </div>
    </div>
  </section>

  
  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Prediksi Harga Jual Mobil Anda</h2>
          <h3 class="section-subheading text-muted">Inspeksi spesifikasi mobil anda untuk mendapatan prediksi harga jual mobil anda</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-12">
                <!-- <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div> -->
              <div class="col-lg-12 text-center">
                <a class="btn btn-primary btn-xl text-uppercase" href="<?=site_url('user') ?>">Mulai Prediksi</a>
              </div>
            </div>
          </form>
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
