<div>
  <x-breadcrumb title="Berita" :list="[
      [
          'label' => $news->category->category_name,
          'href' => '/',
      ],
      [
          'label' => 'Detail',
      ],
  ]" />

  <!-- Single News -->
  <section class="news-single section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-12">
          <div class="row">
            <div class="col-12">
              <div class="single-main">
                <!-- News Head -->
                <div class="news-head">
                  <img class="ratio-16-9" src="{{ url($news->image) }}" alt="#">
                </div>
                <!-- News Title -->
                <h1 class="news-title">{{ $news->title }}</h1>
                <!-- Meta -->
                <div class="meta">
                  <div class="meta-left">
                    <span class="author"><a href="#"><img src="{{ asset('') }}mediplus-lite/img/author1.jpg"
                          alt="#">Admin</a></span>
                    <span class="date"><i class="fa fa-clock-o"></i>{{ $news->created_at->format('d F, Y') }}</span>
                  </div>
                  <div class="meta-right">
                    {{-- <span class="comments"><a href="#"><i class="fa fa-comments"></i>05 Comments</a></span> --}}
                    <span class="badge badge-primary text-light"
                      style="background: #1976D1; font-weight: 500;">{{ $news->category->category_name }}</span>
                    <span class="views"><i class="fa fa-eye"></i>{{ format_short_number(rand(50, 9999)) }} Views</span>
                  </div>
                </div>
                <!-- News Text -->
                <div class="news-text">
                  {!! $news->content !!}
                  {{-- <div class="image-gallery">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-image">
                          <img src="{{ asset('') }}mediplus-lite/img/blog2.jpg" alt="#">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-image">
                          <img src="{{ asset('') }}mediplus-lite/img/blog3.jpg" alt="#">
                        </div>
                      </div>
                    </div>
                  </div> --}}
                  {{-- <blockquote class="overlay">
                    <p>Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at
                      dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed
                      felis maximus, interdum metus vel, tincidunt diam. Nam ac risus vitae sem vehicula egestas. Sed
                      velit nulla, viverra non commodo et, sodales</p>
                  </blockquote> --}}
                </div>
                <div class="blog-bottom">
                  <!-- Social Share -->
                  <ul class="social-share">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  </ul>
                  <!-- Next Prev -->
                  <ul class="prev-next">
                    @if ($prevNews)
                      <li class="prev"><a href="{{ url($prevNews->slug) }}"><i
                            class="fa fa-angle-double-left"></i></a></li>
                    @endif
                    @if ($nextNews)
                      <li class="next"><a href="{{ url($nextNews->slug) }}"><i
                            class="fa fa-angle-double-right"></i></a></li>
                    @endif
                  </ul>
                  <!--/ End Next Prev -->
                </div>
              </div>
            </div>

            {{-- <div class="col-12">
              <div class="blog-comments">
                <h2>All Comments</h2>
                <div class="comments-body">
                  <!-- Single Comments -->
                  <div class="single-comments">
                    <div class="main">
                      <div class="head">
                        <img src="img/author1.jpg" alt="#" />
                      </div>
                      <div class="body">
                        <h4>Afsana Mimi</h4>
                        <div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05,
                            2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                          humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum
                          claram, anteposuerit litterarum formas</p>
                        <a href="#"><i class="fa fa-reply"></i>replay</a>
                      </div>
                    </div>
                  </div>
                  <!--/ End Single Comments -->
                  <!-- Single Comments -->
                  <div class="single-comments left">
                    <div class="main">
                      <div class="head">
                        <img src="img/author2.jpg" alt="#" />
                      </div>
                      <div class="body">
                        <h4>Naimur Rahman</h4>
                        <div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05,
                            2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                          humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum
                          claram, anteposuerit litterarum formas</p>
                        <a href="#"><i class="fa fa-reply"></i>replay</a>
                      </div>
                    </div>
                  </div>
                  <!--/ End Single Comments -->
                  <!-- Single Comments -->
                  <div class="single-comments">
                    <div class="main">
                      <div class="head">
                        <img src="img/author3.jpg" alt="#" />
                      </div>
                      <div class="body">
                        <h4>Suriya Molharta</h4>
                        <div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05,
                            2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                          humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum
                          claram, anteposuerit litterarum formas</p>
                        <a href="#"><i class="fa fa-reply"></i>replay</a>
                      </div>
                    </div>
                  </div>
                  <!--/ End Single Comments -->
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="comments-form">
                <h2>Leave Comments</h2>
                <!-- Contact Form -->
                <form class="form" method="post" action="mail/mail.php">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                      <div class="form-group">
                        <i class="fa fa-user"></i>
                        <input type="text" name="first-name" placeholder="First name" required="required">
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                      <div class="form-group">
                        <i class="fa fa-envelope"></i>
                        <input type="text" name="last-name" placeholder="Last name" required="required">
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                      <div class="form-group">
                        <i class="fa fa-envelope"></i>
                        <input type="email" name="email" placeholder="Your Email" required="required">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group message">
                        <i class="fa fa-pencil"></i>
                        <textarea name="message" rows="7" placeholder="Type Your Message Here"></textarea>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group button">
                        <button type="submit" class="btn primary"><i class="fa fa-send"></i>Submit Comment</button>
                      </div>
                    </div>
                  </div>
                </form>
                <!--/ End Contact Form -->
              </div>
            </div> --}}
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="main-sidebar">
            <!-- Start Search Form -->
            <div class="single-widget search">
              <div class="form">
                <input type="email" placeholder="Cari berita...">
                <a class="button" href="#"><i class="fa fa-search"></i></a>
              </div>
            </div>
            <!--/ End Search Form -->

            <!-- Start Categories -->
            <div class="single-widget category">
              <h3 class="title">Kategori</h3>
              <ul class="categor-list">
                @foreach ($categories as $item)
                  <li><a href="{{ "kategori/$item->slug" }}">{{ $item->category_name }}</a></li>
                @endforeach
              </ul>
            </div>
            <!--/ End Categories -->

            <!-- Start Recent Post -->
            <div class="single-widget recent-post">
              <h3 class="title">Berita Lainnya</h3>
              <!-- Start Single Post -->
              @foreach ($recentNews as $item)
                <div class="single-post">
                  <div class="image">
                    <img class="ratio-4-27" src="{{ url($item->image) }}" alt="#">
                  </div>
                  <div class="content">
                    <h5><a href="{{ $item->slug }}">{{ str()->limit($item->title, 35) }}</a></h5>
                    <ul class="comment">
                      <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $item->created_at->format('d M, Y') }}
                      </li>
                      <li><i class="fa fa-eye" aria-hidden="true"></i>{{ format_short_number(rand(50, 9999)) }}</li>
                      {{-- <li><i class="fa fa-commenting-o" aria-hidden="true"></i>35</li> --}}
                    </ul>
                  </div>
                </div>
              @endforeach
              <!-- End Single Post -->
            </div>
            <!--/ End Single Widget -->

            <!-- Start Tags -->
            {{-- <div class="single-widget side-tags">
              <h3 class="title">Tags</h3>
              <ul class="tag">
                <li><a href="#">business</a></li>
                <li><a href="#">wordpress</a></li>
                <li><a href="#">html</a></li>
                <li><a href="#">multipurpose</a></li>
                <li><a href="#">education</a></li>
                <li><a href="#">template</a></li>
                <li><a href="#">Ecommerce</a></li>
              </ul>
            </div> --}}
            <!--/ End Tags -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ End Single News -->
</div>
