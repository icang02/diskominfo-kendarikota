<style>
  .custom-logo img {
    /* border: 2px solid red; */
    width: 200px;
  }

  @media (max-width: 767px) {
    .custom-logo img {
      width: 170px;
    }
  }
</style>

<header class="header">
  <!-- Topbar -->
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-5 col-12">
          <!-- Contact -->
          <ul class="top-link">
            <li><a href="#">About</a></li>
            <li><a href="#">Doctors</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
          <!-- End Contact -->
        </div>
        <div class="col-lg-6 col-md-7 col-12">
          <!-- Top Contact -->
          <ul class="top-contact">
            <li><i class="fa fa-phone"></i>+880 1234 56789</li>
            <li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">support@yourmail.com</a></li>
          </ul>
          <!-- End Top Contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Topbar -->
  <!-- Header Inner -->
  <div class="header-inner">
    <div class="container">
      <div class="inner">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-12">
            <!-- Start Logo -->
            <div class="logo custom-logo">
              <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
              {{-- <a href="index.html"><img src="{{ asset('') }}mediplus-lite/img/logo.png" alt="#"></a> --}}
            </div>
            <!-- End Logo -->
            <!-- Mobile Nav -->
            <div class="mobile-nav"></div>
            <!-- End Mobile Nav -->
          </div>
          <div class="col-lg-7 col-md-9 col-12">
            <!-- Main Menu -->
            <div class="main-menu">
              <nav class="navigation">
                <ul class="nav menu">
                  <li class="active"><a href="#">Beranda </a></li>
                  <li><a href="#">Profil <i class="icofont-rounded-down"></i></a>
                    <ul class="dropdown">
                      <li><a href="index.html">Visi & Misi</a></li>
                      <li><a href="index.html">Struktur Organisasi</a></li>
                      <li><a href="index.html">Lorem ipsum</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Berita </a></li>
                  <li><a href="#">Layanan <i class="icofont-rounded-down"></i></a>
                    <ul class="dropdown">
                      <li><a href="404.html">Sub Domain, Hosting, VPS</a></li>
                      <li><a href="404.html">Pembuatan Email Dinas</a></li>
                      <li><a href="404.html">Pengajuan TTE &#40;Tanda Tangan Elektrnoik&#41;</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Dokumen </a></li>
                  <li><a href="contact.html">Galeri</a></li>
                </ul>
              </nav>
            </div>
            <!--/ End Main Menu -->
          </div>
          <div class="col-lg-2 col-12">
            <div class="get-quote">
              <a href="appointment.html" class="btn">Book Appointment</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ End Header Inner -->
</header>
