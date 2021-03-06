<!-- ============================ Hero Banner  Start================================== -->
<div class="home-slider margin-bottom-0">
    @foreach ($properties as $property)
        <div style="background:url('/storage/banners/slide2.png') no-repeat;"
            class="item">
            <!-- data-background-image="{{ RvMedia::getImageUrl($property->images[0] ?? '', null, false, RvMedia::getDefaultImage()) }}" -->
           
       
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="text-align: center;color: #fff; font-family: system-ui;">
                    <h2 style="text-align: center; font-family: system-ui; display: block; font-size: 50px; line-height: 1.2em;color: #fff;font-weight: 700;">Embracing the digital world, With cutting-edge technology.</h2>
                    <p>PPCR's best-in-class services are augmented by next-generation technology applications</p>
                        <!-- <div class="home-slider-container"> -->

                            <!-- Slide Title -->
                            <!-- <div class="home-slider-desc">
                                <div class="modern-pro-wrap">
                                    <span class="prt-types">{{ $property->type_name }}</span>
                                    <span class="property-featured theme-bg">{{ __('Featured') }}</span>
                                </div>
                                <div class="home-slider-title">
                                    <h3><a href="{{ $property->url }}">{!! clean($property->name) !!}</a></h3>
                                    <span><i class="lni-map-marker"></i> {!! clean($property->location) !!}</span>
                                </div>

                                <div class="slide-property-info">
                                    <ul>
                                        <li>{!! __('Beds') !!}: {!! clean($property->number_bedroom) !!}</li>
                                        <li>{!! __('Bath') !!}: {!! clean($property->number_bathroom) !!}</li>
                                        <li>{!! __('Sqft') !!}: {!! clean($property->square_text) !!}</li>
                                    </ul>
                                </div>

                                <div class="listing-price-with-compare">
                                    <h4 class="list-pr theme-cl"> {{ $property->price_html }} </h4>
                                    <div class="lpc-right">
                                        <a href="{{ $property->url }}" data-toggle="tooltip" data-placement="top"
                                           title="{{ $property->name }}">
                                        </a>
                                    </div>
                                </div>

                                <a href="{{ $property->url }}" class="read-more">{{ __('View Details') }}
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div> -->
                            <!-- Slide Title / End -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
