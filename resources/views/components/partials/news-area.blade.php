<section class="blog section" id="blog">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Berita Terbaru Diskominfo Kota Kendari</h2>
          <img src="{{ asset('') }}mediplus-lite/img/section-img.png" alt="#">
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts.
            <a href="/" class="link">Lihat semua</a>
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach ($news as $item)
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Single Blog -->
          <div class="single-news">
            <div class="news-head">
              <img src="{{ $item->image }}" alt="image">
            </div>
            <div class="news-body">
              <div class="news-content">
                <div class="date">{{ $item->created_at->format('d M, Y') }}</div>
                <h2><a href="blog-single.html">{{ str()->limit($item->title, 28)}}</a></h2>
                <p class="text">{!! str()->words($item->content, 18) !!}</p>
              </div>
            </div>
          </div>
          <!-- End Single Blog -->
        </div>
      @endforeach
    </div>
</section>
