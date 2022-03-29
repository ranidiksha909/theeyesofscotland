  <!-- ***site footer html start form here*** -->
  <footer id="colophon" class="site-footer footer-primary">
    <div class="top-footer">
       <div class="container">
          <div class="upper-footer">
             <div class="row">
                <div class="col-lg-3 col-sm-6">
                   <aside class="widget widget_text">
                      <div class="footer-logo">
                         <a href="index.html"><img src="{{asset('frontend/assets/images/site-logo.png')}}" alt=""></a>
                      </div>
                      <div class="textwidget widget-text">
                         Urna ratione ante harum provident, eleifend, vulputate molestiae proin fringilla, praesentium magna conubia at perferendis, pretium, aenean aut ultrices.
                      </div>
                   </aside>
                </div>
                <div class="col-lg-3 col-sm-6">
                   <aside class="widget widget_latest_post widget-post-thumb">
                      <h3 class="widget-title">Usefull Links</h3>
                      <div class="social-icon">
                        <ul>
                           <li>
                              <a href="https://www.facebook.com/" target="_blank">
                                 <i class="fab fa-facebook-f" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://www.twitter.com/" target="_blank">
                                 <i class="fab fa-twitter" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://www.youtube.com/" target="_blank">
                                 <i class="fab fa-youtube" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://www.instagram.com/" target="_blank">
                                 <i class="fab fa-instagram" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://www.linkedin.com/" target="_blank">
                                 <i class="fab fa-linkedin" aria-hidden="true"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <ul>
                        <li>
                           <a href="policy.html">Privacy Policy</a>
                        </li>
                        <li>
                           <a href="policy.html">Term & Condition</a>
                        </li>
                        <li>
                           <a href="faq.html">FAQ</a>
                        </li>
                     </ul>
                   </aside>
                </div>
                <div class="col-lg-3 col-sm-6">
                   <aside class="widget widget_text">
                      <h3 class="widget-title">CONTACT US</h3>
                      <div class="textwidget widget-text">
                         <p>Feel free to contact and<br/> reach us !!</p>
                         <ul>
                            <li>
                               <a href="tel:+44988256203">
                                  <i aria-hidden="true" class="icon icon-phone1"></i>
                                  +44(988) 256 203
                               </a>
                            </li>
                            <li>
                               <a href="mailtop:info@domain.com">
                                  <i aria-hidden="true" class="icon icon-envelope1"></i>
                                  info@domain.com
                               </a>
                            </li>
                            <li>
                               <i aria-hidden="true" class="icon icon-map-marker1"></i>
                               3146 Aberdeen, Scotland
                            </li>
                         </ul>
                      </div>
                   </aside>
                </div>
                <div class="col-lg-3 col-sm-6">
                   <aside class="widget">
                      <h3 class="widget-title">Gallery</h3>
                      <div class="gallery gallery-colum-3">
                         <figure class="gallery-item">
                            <a href="{{asset('frontend/assets/images/img10.jpg')}}" data-fancybox="gallery-1">
                               <img src="{{asset('frontend/assets/images/img21.jpg')}}" alt="">
                            </a>
                         </figure>
                         <figure class="gallery-item">
                            <a href="{{asset('frontend/assets/images/img28.jpg')}}" data-fancybox="gallery-1">
                               <img src="{{asset('frontend/assets/images/img22.jpg')}}" alt="">
                            </a>
                         </figure>
                         <figure class="gallery-item">
                            <a href="{{asset('frontend/assets/images/img14.jpg')}}" data-fancybox="gallery-1">
                               <img src="{{asset('frontend/assets/images/img23.jpg')}}" alt="">
                            </a>
                         </figure>
                         <figure class="gallery-item">
                            <a href="{{asset('frontend/assets/images/img15.jpg')}}" data-fancybox="gallery-1">
                               <img src="{{asset('frontend/assets/images/img24.jpg')}}" alt="">
                            </a>
                         </figure>
                         <figure class="gallery-item">
                            <a href="{{asset('frontend/assets/images/img12.jpg')}}" data-fancybox="gallery-1">
                               <img src="{{asset('frontend/assets/images/img25.jpg')}}" alt="">
                            </a>
                         </figure>
                         <figure class="gallery-item">
                            <a href="{{asset('frontend/assets/images/img13.jpg')}}" data-fancybox="gallery-1">
                               <img src="{{asset('frontend/assets/images/img26.jpg')}}" alt="">
                            </a>
                         </figure>
                      </div>
                   </aside>
                </div>
             </div>
          </div>

       </div>
    </div>
    <div class="bottom-footer">
       <div class="container">
          <div class="copy-right text-center">Copyright &copy; 2022 Scotland. All rights reserved.</div>
       </div>
    </div>
 </footer>
 <!-- ***site footer html end*** -->
 <a id="backTotop" href="#" class="to-top-icon">
    <i class="fas fa-chevron-up"></i>
 </a>
 <!-- ***custom search field html*** -->
 <div class="header-search-form">
    <div class="container">
       <div class="header-search-container">
          <form class="search-form" action="{{url('search-results')}}" method="post" >
            @csrf
             <input type="text" name="search_key" placeholder="Enter your text..." autocomplete="off">
          </form>
          <a href="#" class="search-close">
             <i class="fas fa-times"></i>
          </a>
       </div>
    </div>
 </div>
 <!-- ***custom search field html*** -->
 <!-- ***custom top bar offcanvas html*** -->
 <div id="offCanvas" class="offcanvas-container">
    <div class="offcanvas-inner">
       <div class="offcanvas-sidebar">
          <aside class="widget author_widget">
             <h3 class="widget-title">OUR PROPRIETOR</h3>
             <div class="widget-content text-center">
                <div class="profile">
                   <figure class="avatar">
                      <img src="{{asset('frontend/assets/images/img21.jpg')}}" alt="">
                   </figure>
                   <div class="text-content">
                      <div class="name-title">
                         <h4> James Watson</h4>
                      </div>
                      <p>Accumsan? Aliquet nobis doloremque, aliqua? Inceptos voluptatem, duis tempore optio quae animi viverra distinctio cumque vivamus, earum congue, anim velit</p>
                   </div>
                   <div class="socialgroup">
                      <ul>
                         <li> <a target="_blank" href="#"> <i class="fab fa-facebook"></i> </a> </li>
                         <li> <a target="_blank" href="#"> <i class="fab fa-google"></i> </a> </li>
                         <li> <a target="_blank" href="#"> <i class="fab fa-twitter"></i> </a> </li>
                         <li> <a target="_blank" href="#"> <i class="fab fa-instagram"></i> </a> </li>
                         <li> <a target="_blank" href="#"> <i class="fab fa-pinterest"></i> </a> </li>
                      </ul>
                   </div>
                </div>
             </div>
          </aside>
          <aside class="widget widget_text text-center">
             <h3 class="widget-title">CONTACT US</h3>
             <div class="textwidget widget-text">
                <p>Feel free to contact and<br/> reach us !!</p>
                <ul>
                   <li>
                      <a href="tel:+44988256203">
                         <i aria-hidden="true" class="icon icon-phone1"></i>
                         +44(988) 256 203
                      </a>
                   </li>
                   <li>
                      <a href="mailtop:info@domain.com">
                         <i aria-hidden="true" class="icon icon-envelope1"></i>
                         info@domain.com
                      </a>
                   </li>
                   <li>
                      <i aria-hidden="true" class="icon icon-map-marker1"></i>
                      3146 Aberdeen, Scotland
                   </li>
                </ul>
             </div>
          </aside>
       </div>
       <a href="#" class="offcanvas-close">
          <i class="fas fa-times"></i>
       </a>
    </div>
    <div class="overlay"></div>
 </div>
 <!-- ***custom top bar offcanvas html*** -->
</div>

<!-- JavaScript -->
<script src="{{asset('frontend/assets/vendors/jquery/jquery.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/waypoint/waypoints.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/countdown-date-loop-counter/loopcounter.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/masonry/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/slick/slick.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/fancybox/dist/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/slick-nav/jquery.slicknav.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.min.js')}}"></script>
</body>
</html>
