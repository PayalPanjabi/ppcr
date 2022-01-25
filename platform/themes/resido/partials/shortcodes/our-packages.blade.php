<!-- <section id="pricing-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center">
                    <h2>{!! clean($title) !!}</h2>
                    <p>{!! clean($description) !!}</p>
                </div>
            </div>
        </div>

        <div class="row">

            @foreach ($packages as $package)
                <div class="col-lg-4 col-md-4">
                    <div class="pricing-wrap @if ($package->is_default) platinum-pr recommended @else standard-pr @endif">
                        <div class="pricing-header">
                            <h4 class="pr-value">
                                {{ format_price($package->price, $package->currency, false, true) }}
                            </h4>
                            <h4 class="pr-title">{{ $package->name }}</h4>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                @if ($package->features)
                                    @foreach (json_decode($package->features, true) as $feature)
                                        @if (count($feature) > 0)
                                            <li class="available">{{ Arr::get($feature, '0.value') }}</li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="pricing-bottom">
                            <a href="{{ route('public.account.package.subscribe', $package->id) }}"
                                class="btn-pricing">{{ __('Choose Plan') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section> -->
<section class="services-bg" style="width:100%">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
			  	<p class="text-white" style="font-size: 12px;">The PPCR service suite has been designed to offer a complete, one-stop solution from thought to eventual real estate option finalization and beyond. We assist clients in every stage of the real estate process, helping us achieve our intent of maximizing value for our customers.</p>
	            <p class="text-white" style="font-size: 12px;">As a result, our capabilities extend across the entire spectrum of real estate transactions – starting with providing strategic planning and research, portfolio analysis, location and site selection, amongst many other advisory services through representation in the leasing, buying, managing and valuing of assets.</p>
            </div>
        </div>
    </div>
</section>

<section class="services-approach">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="sec-heading center">
                    <h2>Approach To Solutioning</h2>
                </div>
            </div>
	    </div>
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6">
				<p style="font-size:16px;">PPCR offers a wide range of services aligned to our objective of offering a strong and expert tenant representation practice. The key to our success in transactions lies in our ability to implement a process which works through working with clients to define critical outcomes from a real estate transaction and structuring solutions to achieve this intent. We use a combination of research, advisory and transaction management expertise to deliver on this solution-oriented approach.</p>
	        </div>
	        <div class="col-lg-6 col-md-6">
                <img src="/storage/approach-object.png" class="img-fluid" alt="">
            </div>
	    </div>
	</div>
 </section>