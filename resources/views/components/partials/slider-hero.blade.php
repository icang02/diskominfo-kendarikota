<style>
  .custom-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.6);
  }

  .content-overlay {
    position: relative;
  }
</style>

@php
  $sliders = [
      [
          'title' => 'Dinas Komunikasi <span>Informatika</span> Kota <span>Kendari</span>',
          'image' => 'img/slider-1.webp',
          'description' =>
              'Dinas Kominfo Kota Kendari berkomitmen untuk menyediakan layanan teknologi informasi yang inovatif, aman, dan terpercaya guna mendukung transformasi digital menuju Smart City.',
          'button' => [
              [
                  'label' => 'Ajukan Layanan',
                  'href' => '#section-layanan',
              ],
              [
                  'label' => 'Tentang Kami',
                  'href' => '/',
              ],
          ],
      ],
      [
          'title' => 'Transformasi Digital <span>Kota Kendari</span> Menuju <span>Smart City</span>',
          'image' => 'img/slider-2.webp',
          'description' =>
              'Dinas Komunikasi dan Informatika Kota Kendari berkomitmen untuk mempercepat transformasi digital dengan menyediakan layanan teknologi informasi yang inovatif, aman, dan terpercaya bagi masyarakat.',
          'button' => [
              [
                  'label' => 'Cek Program',
                  'href' => '/',
              ],
              [
                  'label' => 'Pelajari Lebih Lanjut',
                  'href' => '/',
              ],
          ],
      ],
      [
          // 'title' => 'Dinas Komunikasi <span>Informatika</span> Kota <span>Kendari</span>',
          'title' => 'Edukasi dan Literasi <span>Digital</span> untuk <span>Masyarakat</span>',
          'image' => 'img/slider-3.webp',
          'description' =>
              'Dinas Kominfo Kota Kendari menyelenggarakan berbagai program edukasi dan pelatihan untuk meningkatkan literasi digital masyarakat.',
          'button' => [
              [
                  'label' => 'Daftar Pelatihan',
                  'href' => '/',
              ],
              [
                  'label' => 'Lihat Jadwal',
                  'href' => '/',
              ],
          ],
      ],
  ];
@endphp

<section class="slider">
  <div class="hero-slider">
    @foreach ($sliders as $slider)
      <div class="single-slider" style="background-image: url('{{ asset($slider['image']) }}">
        <div class="custom-overlay"></div>
        <div class="container content-overlay">
          <div class="row">
            <div class="col-lg-7">
              <div class="text">
                <h1>{!! $slider['title'] !!}</h1>
                <p>{{ $slider['description'] }}</p>
                <div class="button">
                  @foreach ($slider['button'] as $i => $button)
                    <a href="{{ $button['href'] }}"
                      class="btn {{ $i != 0 ? 'primary' : '' }}">{{ $button['label'] }}</a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</section>
