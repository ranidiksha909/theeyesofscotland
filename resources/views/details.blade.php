@include('layouts.header')

<main id="content" class="site-main">
    <section class="package-inner-page">
       <!-- ***Inner Banner html start form here*** -->
       <div class="inner-banner-wrap">
          <div class="inner-baner-container" style="background-image: url({{asset('frontend/assets/images/img7.jpg')}});">
             <div class="container">
                <div class="inner-banner-content">
                   <h1 class="page-title">{{$details['title']}}</h1>
                </div>
             </div>
          </div>
       </div>
       <!-- ***Inner Banner html end here*** -->
       <!-- ***career section html start form here*** -->
       <div class="inner-package-detail-wrap">
          <div class="container">
             <div class="row">
                <div class="col-lg-8 primary right-sidebar">
                   <div class="single-packge-wrap">
                      <div class="single-package-head d-flex align-items-center">
                         <div class="package-title">
                            <h2>{{$details['title']}}</h2>
                            <div class="rating-start-wrap">
                               <div class="rating-start">
                                  <span style="width: 80%"></span>
                               </div>
                            </div>
                         </div>

                      </div>
                      <div class="package-meta">
                         <ul>
                            <li>
                               <i class="fas fa-swimmer"></i>
                               Category : {{$details->category['title']}}
                            </li>

                            <li>
                               <i class="fas fa-map-marker-alt"></i>
                               {{$details->location['title']}}
                            </li>
                         </ul>
                      </div>
                      <figure class="single-package-image">
                          @php
                              $image = explode(",",$details['img_url']);
                          @endphp
                         <img src="{{asset($image[0])}}" alt="{{$details['title']}}" style="width: 100%;max-height: 450px;">
                      </figure>
                      <div class="package-content-detail">
                         <article class="package-overview">
                            <h3>OVERVIEW :</h3>
                            <span>{!! $details['description'] !!}</span>
                         </article>


                      </div>
                   </div>
                </div>
                <div class="col-lg-4">
                   <div class="sidebar">
@if (sizeof($image) != 0)
<div class="related-package">
    <h3>RELATED IMAGES</h3>
    {{-- <p>Quaerat inventore! Vestibulum aenean volutpat gravida. Sagittis, euismod perferendis.</p> --}}
    <div class="related-package-slide">
        @foreach ($image as $item)
        <div class="related-package-item">
            <img src="{{asset($item)}}" alt="">
         </div>
        @endforeach


    </div>
 </div>
@endif
@if ($details['iframe'] != null)
<div class="package-map">
    {!! $details['iframe'] !!}

 </div>
@endif


                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- ***career section html start form here*** -->
    </section>
 </main>

@include('layouts.footer')
