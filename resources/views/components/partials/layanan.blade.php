@php
  $layanan = [
      [
          'title'       => 'Sub Domain, Hosting, & VPS',
          'description' =>
              'Layanan penyediaan sub domain, hosting, dan VPS untuk mendukung kebutuhan website dan aplikasi instansi.',
          'href'        => '#',
          'icon'        => '<i class="icofont icofont-server"></i>',
      ],
      [
          'title'       => 'Pembuatan Email Dinas',
          'description' =>
              'Layanan pembuatan email dinas resmi untuk meningkatkan profesionalitas komunikasi instansi.',
          'href'        => '#',
          'icon'        => '<i class="icofont icofont-email"></i>',
      ],
      [
          'title'       => 'Pengajuan TTE (Tanda Tangan Elektronik)',
          'description' => 'Layanan pengajuan Tanda Tangan Elektronik (TTE) untuk dokumen resmi instansi pemerintah.',
          'href'        => '#',
          'icon'        => '<i class="icofont icofont-document-folder"></i>',
      ],
  ];
@endphp

<section class="services section" id="section-layanan">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Layanan Diskominfo</h2>
          <img src="{{ asset('') }}mediplus-lite/img/section-img.png" alt="#">
          <p>Diskominfo Kota Kendari menyediakan layanan untuk mendukung kebutuhan teknologi informasi dan
            komunikasi.</p>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach ($layanan as $item)
        <div class="col-lg-4 col-md-6 col-12">
          <div class="single-service">
            {!! $item['icon'] !!}
            <h4><a href="{{ $item['href'] }}">{{ $item['title'] }}</a></h4>
            <p>{{ $item['description'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
