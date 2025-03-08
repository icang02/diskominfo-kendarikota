<section class="portfolio section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Galeri Kegiatan Diskominfo Kota Kendari</h2>
          <img src="{{ asset('') }}mediplus-lite/img/section-img.png" alt="#">
          <p>Lihat dokumentasi kegiatan dan program Diskominfo Kota Kendari dalam mendukung transformasi
            digital.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-12">
        <div class="owl-carousel portfolio-slider">
          @for ($i = 0; $i < 4; $i++)
            <div class="single-pf">
              <img class="ratio-4-27" src="https://picsum.photos/seed/{{ rand(1000, 9999) }}/800/{{ rand(200, 600) }}"
                alt="Galeri Kegiatan Diskominfo"
                >
              <a href="portfolio-details.html" class="btn">Lihat Detail</a>
            </div>
          @endfor
        </div>
      </div>
    </div>
  </div>
</section>
