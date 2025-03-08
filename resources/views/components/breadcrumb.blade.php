<div class="breadcrumbs overlay">
  <div class="container">
    <div class="bread-inner">
      <div class="row">
        <div class="col-12">
          <h2>{{ $title }}</h2>
          <ul class="bread-list">
            <li><a href={{ route('home') }} class="text-light">Beranda</a></li>
            <li><i class="icofont-simple-right"></i></li>
            @foreach ($list as $i => $item)
              @if (isset($item['href']))
                <li><a href={{ url($item['href']) }} class="text-light">{{ $item['label'] }}</a></li>
              @else
                <li>{{ $item['label'] }}</li>
              @endif
              <li @class(['d-none' => count($list) - 1 == $i])><i class="icofont-simple-right"></i></li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
