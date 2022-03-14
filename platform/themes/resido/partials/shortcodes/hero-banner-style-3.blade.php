
<div class="image-bottom hero-banner"
    style="background:url('/storage/banners/banner-99.jpg') no-repeat;"
    data-overlay="{{ $overlay }}">
    <div class="container">
        <h1 class="big-header-capt mb-0">{!! clean($title) !!}</h1>
        <p class="text-center mb-5">{!! clean($description) !!}</p>

        <div class="full-search-2 eclip-search italian-search hero-search-radius shadow">
            <div class="hero-search-content">

                <form action="{{ route('public.properties') }}" method="GET" id="frmhomesearch">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-sm-12 b-r">
                            <div class="form-group borders">
                                <div class="input-with-icon">
                                    <input type="text" name="k" class="form-control" placeholder="{{ __('Neighborhood') }}">
                                    <i class="ti-search"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-sm-12 ">
                                    <div class="form-group">
                                        <div class="choose-property-type">
                                            {!! Theme::partial('real-estate.filters.type') !!}
                                        </div>
                                     
                                    </div>
                                   
                        </div>
                        <div  class="col-lg-3 col-md-3 col-sm-12 b-r">
                            <div class="form-group borders">
                            
                                <ul style="display:flex;    margin-left: -6px;
    margin-top: 9px;">
                                     <li>
                                        <input type="text" class="form-control" name="min_area" 
                                        value="{{ request()->input('min_area') }}" placeholder="{{ __('Min Area') }}">
                                    </li>
                                    <li>
                                        <input type="text" class="form-control" name="max_area"
                                        value="{{ request()->input('max_area') }}" placeholder="{{ __('Max Area') }}">
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                        <!-- <div size="1.4" class="col-lg-2 col-md-3 col-sm-12 b-r">
                            <div class="form-group">
                                <input type="text" class="form-control" name="max_area" value="{{ request()->input('max_area') }}" placeholder="{{ __('Max Area') }}">
                            </div>
                        </div> -->

                        <div class="col-lg-4 col-md-3 col-sm-12">
                            <div class="form-group borders">
                                <div class="input-with-icon">
                                    {!! Theme::partial('real-estate.filters.categories') !!}
                                    <i class="ti-briefcase"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group borders">
                                <div class="input-with-icon b-l">
                                    {!! Theme::partial('real-estate.filters.cities') !!}
                                    <i class="ti-location-pin"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="form-group">
                                <button class="btn search-btn" type="submit">{{ __('Search') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
