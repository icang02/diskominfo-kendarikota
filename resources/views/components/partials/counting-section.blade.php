@php
  $visitors = [
      [
          'title' => 'Total Pengunjung',
          'total' => 12000,
          'icon' => '<i class="icofont icofont-users"></i>',
      ],
      [
          'title' => 'Pengunjung Bulan Ini',
          'total' => 1500,
          'icon' => ' <i class="icofont icofont-calendar"></i>',
      ],
      [
          'title' => 'Pengunjung Minggu Ini',
          'total' => 400,
          'icon' => '   <i class="icofont icofont-calendar"></i>',
      ],
      [
          'title' => 'Pengunjung Hari Ini',
          'total' => 80,
          'icon' => '   <i class="icofont icofont-clock-time"></i>',
      ],
  ];
@endphp

<div id="fun-facts" class="fun-facts section overlay">
  <div class="container">
    <div class="row">
      @foreach ($visitors as $item)
        <div class="col-lg-3 col-md-6 col-12">
          <div class="single-fun">
            {!! $item['icon'] !!}
            <div class="content">
              <span class="counter">{{ number_format($item['total']) }}</span>
              <p>{{ $item['title'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
