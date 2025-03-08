<section class="appointment">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>FAQ</h2>
          <img src="{{ asset('') }}mediplus-lite/img/section-img.png" alt="#">
          <p>Isi form di bawah ini untuk mengajukan permohonan atau mengajukan pertanyaan seputar layanan Diskominfo
            Kota Kendari.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12 col-12">
        <form class="form" action="#">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="form-group">
                <input name="name" type="text" placeholder="Nama Lengkap" required>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="form-group">
                <input name="email" type="email" placeholder="Alamat Email" required>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="form-group">
                <input name="phone" type="text" placeholder="Nomor Telepon" required>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="form-group">
                <div class="nice-select form-control wide" tabindex="0">
                  <span class="current">Jenis Permohonan</span>
                  <ul class="list">
                    <li data-value="1" class="option selected">Jenis Permohonan</li>
                    <li data-value="2" class="option">Permohonan Sub Domain</li>
                    <li data-value="3" class="option">Permohonan Email Dinas</li>
                    <li data-value="4" class="option">Permohonan TTE</li>
                    <li data-value="5" class="option">Lainnya</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
              <div class="form-group">
                <textarea name="message" placeholder="Tulis pesan atau pertanyaan Anda di sini....." required></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2 col-12">
              <div class="form-group">
                <div class="button">
                  <button type="submit" class="btn">Submit</button>
                </div>
              </div>
            </div>
            <div class="col-md-10 col-12 text-left text-md-right mb-3 mb-md-0">
              <p>(Setelah mengirimkan formulir, silakan periksa email Anda)</p>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-6 col-md-12 d-none d-md-block">
        <div class="appointment-image">
          <img src="{{ asset('img/ilustrator.svg') }}" style="color: red;" alt="#">
        </div>
      </div>
    </div>
  </div>
</section>
