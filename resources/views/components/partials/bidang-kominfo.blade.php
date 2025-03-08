@php
  $bidangKominfo = [
      [
          'title' => 'Sekretariat Dinas',
          'description' => 'Mengelola administrasi, keuangan, dan koordinasi internal dinas secara efektif.',
          'icon' => '<i class="icofont icofont-paper"></i>',
      ],
      [
          'title' => 'Bidang T.I.K dan E-Government',
          'description' => 'Mengembangkan dan mengelola teknologi informasi serta layanan e-government.',
          'icon' => '<i class="icofont icofont-computer"></i>',
      ],
      [
          'title' => 'Bidang Informasi, Komunikasi, dan Publikasi',
          'description' => 'Mengelola informasi publik, media komunikasi, dan strategi publikasi dinas.',
          'icon' => '<i class="icofont icofont-newspaper"></i>',
      ],
      [
          'title' => 'Bidang Keamanan Informasi dan Persandian',
          'description' => 'Menjaga keamanan data, sistem informasi, dan mengelola persandian dinas.',
          'icon' => '<i class="icofont icofont-lock"></i>',
      ],
      [
          'title' => 'Bidang Statistik Sektoral',
          'description' => 'Mengumpulkan, mengolah, dan menyajikan data statistik untuk perencanaan pembangunan.',
          'icon' => '<i class="icofont icofont-chart-bar-graph"></i>',
      ],
  ];
@endphp

<section class="Feautes section" style="overflow-x: hidden;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Bidang Layanan</h2>
          <img src="{{ asset('') }}mediplus-lite/img/section-img.png" alt="#">
          <p>Diskominfo Kota Kendari memiliki beberapa bidang yang bertanggung jawab dalam mengelola layanan
            teknologi informasi dan komunikasi.</p>
        </div>
      </div>

      <div class="row justify-content-center">
        @foreach ($bidangKominfo as $i => $item)
          <div class="col-lg-4 col-12">
            <div class="single-features {{ $i == 2 || $i == count($bidangKominfo) - 1 ? 'last' : '' }}">
              <div class="signle-icon">
                {!! $item['icon'] !!}
              </div>
              <h3>{{ $item['title'] }}</h3>
              <p>{{ $item['description'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
