<style>
  .custom-link {
    display: flex;
    flex-direction: column;
    text-align: center;
    color: #fff;
    gap: 7px;
  }

  .custom-link:hover {
    color: rgba(255, 255, 255, 0.85)
  }

  .custom-link img {
    width: 1000px !important;
    margin: auto;
  }

  @media (max-width: 767px) {
    .custom-link img {
      width: 200px !important;
    }
  }
</style>

@php
  $relatedLinks = [
      [
          'label' => 'SPPD Elektronik',
          'href' => 'https://sppd.kendarikota.go.id',
          'icon' => 'https://kendarikota.go.id/storage/icon-aplikasi/sppd2.png',
      ],
      [
          'label' => 'PPID Kota Kendari',
          'href' => 'https://ppid.kendarikota.go.id',
          'icon' => 'https://kendarikota.go.id/storage/icon-aplikasi/ppid2.png',
      ],
      [
          'label' => 'Lapor SP4N',
          'href' => 'https://www.lapor.go.id/instansi/pemerintah-kota-kendari',
          'icon' => 'https://kendarikota.go.id/storage/icon-aplikasi/lapor.png',
      ],
      [
          'label' => 'PPID Kota Kendari',
          'href' => 'https://ppid.kendarikota.go.id',
          'icon' => 'https://kendarikota.go.id/storage/icon-aplikasi/ppid2.png',
      ],

  ];
@endphp
<div class="clients overlay">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <div class="owl-carousel clients-slider">
          @foreach ($relatedLinks as $item)
            <div class="single-clients">
              <a class="custom-link" href="{{ $item['href'] }}" target="_blank">
                <img src="{{ $item['icon'] }}" alt="#">
                <span>{{ $item['label'] }}</span>
              </a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
