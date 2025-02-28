@php
  $divisiKominfo = [
      [
          'title' => 'Bidang Aplikasi',
          'description' => 'Menyusun, mengkoordinasikan, melaksanakan, dan mengevaluasi kebijakan bidang aplikasi.',
          'icon' => '<i class="icofont icofont-ambulance-cross"></i>',
      ],
      [
          'title' => 'Bidang Humas dan IKP',
          'description' =>
              'Menyusun, mengkoordinasikan, melaksanakan, dan mengevaluasi kebijakan bidang kehumasan dan IKP.',
          'icon' => '<i class="icofont icofont-medical-sign-alt"></i>',
      ],
      [
          'title' => 'Bidang Pengolahan Data Elektronik',
          'description' =>
              'Menyusun, mengkoordinasikan, melaksanakan, dan mengevaluasi kebijakan bidang pengolahan data.',
          'icon' => '<i class="icofont icofont-stethoscope"></i>',
      ],
      [
          'title' => 'Bidang Aplikasi',
          'description' => 'Menyusun, mengkoordinasikan, melaksanakan, dan mengevaluasi kebijakan bidang aplikasi.',
          'icon' => '<i class="icofont icofont-ambulance-cross"></i>',
      ],
      [
          'title' => 'Bidang Humas dan IKP',
          'description' =>
              'Menyusun, mengkoordinasikan, melaksanakan, dan mengevaluasi kebijakan bidang kehumasan dan IKP.',
          'icon' => '<i class="icofont icofont-medical-sign-alt"></i>',
      ],
      [
          'title' => 'Bidang Pengolahan Data Elektronik',
          'description' =>
              'Menyusun, mengkoordinasikan, melaksanakan, dan mengevaluasi kebijakan bidang pengolahan data.',
          'icon' => '<i class="icofont icofont-stethoscope"></i>',
      ],
  ];
@endphp

<section class="Feautes section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Bidang Layanan</h2>
          <img src="{{ asset('') }}mediplus-lite/img/section-img.png" alt="#">
          <p>Berdasarkan Perwal Makassar No. 86 Tahun 2021, Diskominfo memiliki tugas, fungsi, dan tata kerja sebagai berikut.</p>
      </div>
    </div>

    <div class="row">
      @foreach ($divisiKominfo as $i => $item)
        <div class="col-lg-4 col-12">
          <!-- Start Single features -->
          <div class="single-features {{ $i == 2 || $i == 5 ? 'last' : '' }}">
            <div class="signle-icon">
              {!! $item['icon'] !!}
            </div>
            <h3>{{ $item['title'] }}</h3>
            <p>{{ $item['description'] }}</p>
          </div>
          <!-- End Single features -->
        </div>
      @endforeach
    </div>
  </div>
</section>
