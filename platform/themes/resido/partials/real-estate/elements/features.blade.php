<div class="property_block_wrap style-2">

    <div class="property_block_wrap_header">
        <a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clOne" aria-controls="clOne" href="javascript:void(0);" aria-expanded="false">
            <h4 class="property_block_title">{{ __('Detail & Features') }}</h4>
        </a>
    </div>
    <div id="clOne" class="panel-collapse collapse show" aria-labelledby="clOne">
        <div class="block-body">
            <ul class="detail_features">
                @if ($property->number_bedroom)
                <li>
                    <strong>{{ __('Bedrooms:') }}</strong>
                    {{ number_format($property->number_bedroom) }} {{ __('Beds') }}
                </li>
                @endif
                @if ($property->number_bathroom)
                <li>
                    <strong>{{ __('Bathrooms:') }}</strong>
                    {{ number_format($property->number_bathroom) }} {{ __('Bath') }}
                </li>
                @endif

                @if ($property->category)
                <li><strong>{{ __('Property Type:') }}</strong>{{ $property->category_name }}</li>
                @endif
                

                @if ($property->built_up_office_area)
                <li><strong>{{ __('BuiltUp Office area sqft:') }}</strong>{{ $property->built_up_office_area}}</li>
                @endif

                @if ($property->carpet_office_area)
                <li><strong>{{ __('Carpet Office area sqft:') }}</strong>{{ $property->carpet_office_area}}</li>
                @endif

                @if ($property->number_workstation)
                <li><strong>{{ __('Workstation:') }}</strong>{{ $property->number_workstation }}</li>
                @endif

                @if ($property->number_cabin)
                <li><strong>{{ __('Cabin:') }}</strong>{{ $property->number_cabin }}</li>
                @endif
                   
                @if ($property->number_conference_room)
                <li><strong>{{ __('Conference Room:') }}</strong>{{ $property->number_conference_room }}</li>
                @endif

                @if ($property->deposit)
                <li><strong>{{ __('Security Deposit :') }}</strong>{{ $property->deposit }} {{ __('Month') }}</li>
                @endif

                @if ($property->camp_charges)
                <li><strong>{{ __('Camp Charges per sqft:') }}</strong>{{ $property->camp_charges }} </li>
                @endif
                
                @if ($property->excalation_per_year)
                <li><strong>{{ __('Excalation Per Year:') }}</strong>{{ $property->excalation_per_year }}</li>
                @endif


                @if ($property->price)
                <li><strong>{{ __('Price per sqft:') }}</strong> {{ $property->price }}</li>
                @endif

                @if ($property->monthly_sq_ft)
                <li><strong>{{ __('Monthly area sqft:') }}</strong>{{ $property->monthly_sq_ft}}</li>
                @endif

                @if ($property->agreement_of_year)
                <li><strong>{{ __('Agreement of year:') }}</strong>{{ $property->agreement_of_year}} {{ __('Year') }}</li>
                @endif

                @if ($property->lock_in_year)
                <li><strong>{{ __('Lock-in year:') }}</strong>{{ $property->lock_in_year}} {{ __('Year') }}</li>
                @endif

              
             

              

            </ul>

          
        </div>
    </div>

</div>
<div class="property_block_wrap style-2">

    <div class="property_block_wrap_header">
        <a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clOne1" aria-controls="clOne1" href="javascript:void(0);" aria-expanded="false">
            <h4 class="property_block_title">{{ __('Specification') }}</h4>
        </a>
    </div>
    <div id="clOne1" class="panel-collapse collapse show" aria-labelledby="clOne1">
        <div class="block-body">
            <ul class="detail_features">
                @if ($property->number_of_floor)
                <li>
                    <strong>{{ __('Numbers of Floors:') }}</strong>{{ $property->number_of_floor }}    {{ __('Floor') }}
                </li>
                @endif

              
                @if ($property->per_floor_area)
                <li>
                    <strong>{{ __('Per Floor Area sqft:') }}</strong>{{ number_format($property->per_floor_area) }} 
                    {{ __('sqft') }}
                </li>
                @endif

                @if ($property->year_of_completion)
                <li>
                    <strong>{{ __('Year of Completion:') }}</strong>{{ number_format($property->year_of_completion) }} 
                    {{ __('Year') }}
                </li>
                @endif

                @if ($property->total_built_up_area)
                <li>
                    <strong>{{ __('Total Built-up Area:') }}</strong>{{ number_format($property->total_built_up_area) }} 
                    {{ __('Sq. ft.') }}
                </li>
                @endif
                @if ($property->area_available)
                <li>
                    <strong>{{ __('Area Available:') }}</strong>{{ $property->area_available }}  {{ __('sqft') }}
                </li>
                @endif
                
                @if ($property->possession_status)
                <li>
                    <strong>{{ __('Possession Status:') }}</strong>{{$property->possession_status }} 
                   
                </li>
                @endif

                @if ($property->min_area)
                <li>
                    <strong>{{ __('Min Area :') }}</strong>{{$property->min_area }} 
                   {{ __('sqft') }}
                </li>
                @endif
                @if ($property->max_area)
                <li>
                    <strong>{{ __('Max Area :') }}</strong>{{$property->max_area }}  {{ __('sqft') }}
                </li>
                @endif

                <!-- sale- -->
                @if ($property->price_per_sqft)
                <li>
                    <strong>{{ __('Price per sqft:') }}</strong>
                    {{$property->price_per_sqft }} 
                   
                </li>
                @endif

                @if ($property->time_line)
                <li>
                    <strong>{{ __('Time line:') }}</strong>
                    {{$property->time_line }} 
                   
                </li>
                @endif
                
                @if ($property->infra_charges)
                <li>
                    <strong>{{ __('Infra Charges:') }}</strong>
                    {{$property->infra_charges }} 
                   
                </li>
                @endif
                @if ($property->car_parking)
                <li>
                    <strong>{{ __(' Car Parking:') }}</strong>
                    {{$property->car_parking }} 
                   
                </li>
                @endif

                <!-- prelease - -->
                @if ($property->roi)
                <li>
                    <strong>{{ __(' Return on Investment(Roi):') }}</strong>
                    {{$property->roi }} 
                   
                </li>
                @endif
                @if ($property->locking)
                <li>
                    <strong>{{ __('Locking:') }}</strong>
                    {{$property->locking }} {{ __('Year') }}
                   
                </li>
                @endif
                @if ($property->price_all_including)
                <li>
                    <strong>{{ __('Price all Including:') }}</strong>
                    {{$property->price_all_including }} 
                   
                </li>
                @endif      
               

            </ul>

           
        </div>
    </div>

</div>
