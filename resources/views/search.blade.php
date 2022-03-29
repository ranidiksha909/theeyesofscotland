@include('layouts.header')

<main id="content" class="site-main">
    <section class="">
       <!-- ***Inner Banner html start form here*** -->
       <div class="inner-banner-wrap">
          <div class="inner-baner-container" style="background-image: url({{asset('frontend/assets/images/img7.jpg')}});">
             <div class="container">
                <div class="inner-banner-content">
                   <h1 class="page-title">{{$search_key}}</h1>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section>
        <div class="container">
            <div class="destination-section">
                <div class="row">

                    @foreach ($search_result as $item)

                    @php
                        $image = explode(",",$item['img_url']);
                    @endphp
                                    <div class="col-lg-4 col-md-6">
                                       <article class="destination-item" style="background-image: url({{asset($image[0])}});">
                                          <div class="destination-content">
                                             <div class="rating-start-wrap">
                                                <div class="rating-start">
                                                   <span style="width: 100%"></span>
                                                </div>
                                             </div>
                                             <span class="cat-link">
                                                <a href="{{url('details/?id='.$item['id'])}}">{{$item->location['title']}}</a>
                                             </span>
                                             <h3>
                                                <a href="{{url('details/?id='.$item['id'])}}">{{$item['title']}}</a>
                                             </h3>

                                          </div>
                                       </article>
                                    </div>
                                    @endforeach

                </div>
                {{-- <div class="section-btn-wrap text-center">
                   <a href="destination.html" class="round-btn">More Destination</a>
                </div> --}}
             </div>
        </div>

    </section>
</main>

@include('layouts.footer')
