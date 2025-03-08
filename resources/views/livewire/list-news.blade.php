<div>
  <x-breadcrumb title="Berita" :list="[
      [
          'label' => 'Kategori',
      ],
      [
          'label' => str_replace('-', ' ', $this->slug),
      ],
  ]" />

  <section class="news-single section px-3 px-md-0" id="paginated-posts">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="main-sidebar">
            <div class="single-widget search">
              <div class="form">
                <input type="email" placeholder="Masukkan kata kunci...">
                <a class="button" href="#"><i class="fa fa-search"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-4 mt-md-5">
          <div class="col-md-8 col-12">
            {{-- Start Card news --}}
            <section class="blog section" style="padding: 0;">
              <div class="row">
                @foreach ($news as $item)
                  <div class="col-md-6 col-12">
                    <div class="single-news">
                      <div class="news-head">
                        <img class="ratio-4-3" src="{{ $item->image }}" alt="image">
                      </div>
                      <div class="news-body">
                        <div class="news-content pt-2">
                          <div class="date">{{ $item->created_at->format('d M, Y') }}</div>
                          <h2><a href="{{ route('detail_news', $item->slug) }}">{{ str()->limit($item->title, 25) }}</a>
                          </h2>
                          <p class="text">{!! str()->limit(strip_tags($item->content), 100) !!}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              {{-- Start Pagination --}}
              <div>
                {{ $news->links('livewire.pagination-link', data: ['scrollTo' => '#paginated-posts']) }}
              </div>
              {{-- End Pagination --}}
            </section>
            {{-- End Card News --}}
          </div>
          <div class="col-md-4 col-12 mt-5 mt-md-0">
            {{-- Start Categories --}}
            <div class="main-sidebar" style="margin: 0;">
              <div class="single-widget category">
                <h3 class="title">Kategori</h3>
                <ul class="categor-list">
                  @foreach ($categories as $item)
                    <li><a @class(['activeMenuCategories' => $item->slug == $this->slug])
                        href="{{ route('list_news', $item->slug) }}">{{ $item->category_name }}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
            {{-- End Categories --}}
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
