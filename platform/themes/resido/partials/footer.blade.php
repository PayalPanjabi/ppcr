{!! dynamic_sidebar('footer_sidebar_1') !!}
<!-- ============================ Footer Start ================================== -->
<footer class="dark-footer skin-dark-footer">
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-4">
                    <div class="footer-widget">
                        @if (theme_option('logo_white'))
                            <img src="{{ RvMedia::getImageUrl(theme_option('logo_white')) }}" class="img-footer"
                                 style="" alt="{{ theme_option('site_name') }}">
                        @endif
                        <div class="footer-add">
                            <!-- @if (theme_option('address'))
                                <p><i class="fas fa-map-marker-alt"></i> {{ theme_option('address') }}</p>
                            @endif
                            @if (theme_option('hotline'))
                                <p><i class="fas fa-phone-square"></i> {{ theme_option('hotline') }}</p>
                            @endif
                            @if (theme_option('email'))
                                <p><i class="fas fa-envelope"></i> {{ theme_option('email') }}</p>
                            @endif -->
                            <p>PPCR is a real estate managed services corporation that offers a high-value solution for real estate advisory and transactions by combining its in-depth knowledge of Indian markets and real estate intricacies with an inherent understanding of world real estate best practices.</p>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6"> -->
                            @if (theme_option('social_links'))
                                <ul class="footer-bottom-social" style="float:left;">
                                    @foreach(json_decode(theme_option('social_links'), true) as $socialLink)
                                        @if (count($socialLink) == 3)
                                            <li><a href="{{ $socialLink[2]['value'] }}" target="_blank"
                                                title="{{ $socialLink[0]['value'] }}"><i
                                                        class="{{ $socialLink[1]['value'] }}"></i></a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        <!-- </div> -->

                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-4" style="margin-top: 23px;">
                    <!-- <div class="row">
                        {!! dynamic_sidebar('footer_sidebar_2') !!}
                    </div> -->
                    <h2 style="color:#fff;font-size: 20px;">Address</h2>
                    <div class="footer-add">
                            @if (theme_option('address'))
                                <p><i class="fas fa-map-marker-alt"></i> {{ theme_option('address') }}</p>
                            @endif
                            
                            <p>
                              <!--<span><b>Branch Offfice:</b></span> <br>-->
                              <i class="fas fa-map-marker-alt"></i> Viman Nagar, Pune.
                            </p>
                            
                            @if (theme_option('hotline'))
                                <p><i class="fas fa-phone-square"></i> {{ theme_option('hotline') }}</p>
                            @endif
                            @if (theme_option('email'))
                                <p><i class="fas fa-envelope"></i> {{ theme_option('email') }}</p>
                            @endif
                        </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    {!! dynamic_sidebar('footer_sidebar_3') !!}
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <p class="mb-0">{!! clean(theme_option('copyright')) !!}</p>
                </div>

                <div class="col-lg-8 col-md-6 lg-device" >
                    <div class="footer-bottom-menu" style=" width: 159%;
    margin-top: -35px;  margin-left: 311px;">
                        {!! dynamic_sidebar('footer_sidebar_2') !!}
                    </div>
                    <!-- @if (theme_option('social_links'))
                        <ul class="footer-bottom-social">
                            @foreach(json_decode(theme_option('social_links'), true) as $socialLink)
                                @if (count($socialLink) == 3)
                                    <li><a href="{{ $socialLink[2]['value'] }}" target="_blank"
                                           title="{{ $socialLink[0]['value'] }}"><i
                                                class="{{ $socialLink[1]['value'] }}"></i></a></li>
                                @endif
                            @endforeach
                        </ul>
                    @endif -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ============================ Footer End ================================== -->
 <script>
        document.getElementById("price").onkeyup = function() {myFunction()};
    document.getElementById("price").setAttribute("value", "10");
        function myFunction() {
        //   var x = document.getElementById("fname");
        //   x.value = x.value.toUpperCase();
        alert("Hiiiiii");
        }
    </script>
<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
</div>

{!! Theme::footer() !!}
@if (session()->has('success_msg') || session()->has('error_msg') || (isset($errors) && $errors->count() > 0) || isset($error_msg))
    <script type="text/javascript">
        "use strict";
        $(document).ready(function () {
            @if (session()->has('success_msg'))
            window.showAlert('alert-success', '{{ session('success_msg') }}');
            @endif

            @if (session()->has('error_msg'))
            window.showAlert('alert-danger', '{{ session('error_msg') }}');
            @endif

            @if (isset($error_msg))
            window.showAlert('alert-danger', '{{ $error_msg }}');
            @endif

            @if (isset($errors))
            @foreach ($errors->all() as $error)
            window.showAlert('alert-danger', '{!! $error !!}');
            @endforeach
            @endif
        });
          
    </script>
    @endif
   
</body>
</html>
