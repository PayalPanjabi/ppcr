<section class="bg-light">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center">
                    <h2>{!! clean($title) !!}</h2>
                    <p>{!! clean($description) !!}</p>
                </div>
            </div>
        </div>

        <div class="row list-layout">
            @foreach($properties as $property)
            <!-- Single Property -->
            @if($style == 1)
            <div class="col-lg-6 col-sm-12">
                {!! Theme::partial('real-estate.properties.item-list', compact('property')) !!}
            @else
            <div class="col-lg-4 col-md-6 col-sm-12">
                {!! Theme::partial('real-estate.properties.item-grid', compact('property')) !!}
            @endif
            </div>
            <!-- End Single Property -->
            @endforeach
        </div>

        <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 text-center">
               <a href="{{ route('public.properties') }}" class="btn btn-theme-light-2 rounded">{{ __('Browse More Properties') }}</a>
           </div>
        </div>
    </div>
</section>
<!-- on load module for find property page-->
<section class="pt-0">
    
    <div id="ac-wrapper" style='display:none'>
        <div id="popup">
            <center>
                <h2>Enquiry Form</h2>
                <!-- <p>We help you find your new home!!</p> -->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0" >
                                    <input type="text" id="name" name="name" 
                                    class="form-control input-box" placeholder="Name" style="">
                                    <!-- <label for="name" class="">Your name</label> -->
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control input-box"
                                     placeholder="Email">
                                    <!-- <label for="email" class="">Your email</label> -->
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="tel" id="MobileNumber" name="phone" class="form-control input-box"
                                     placeholder="Mobile Number">
                                    <!-- <label for="subject" class="">Subject</label> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control input-box" 
                                    placeholder="Subject">
                                    <!-- <label for="subject" class="">Subject</label> -->
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12 col-lg-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2"
                                     class="form-control md-textarea input-box" placeholder="Your message"  style="width: 96%;"
                                    ></textarea>
                                    <!-- <label for="message">Your message</label> -->
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>
                </div>
            </div>
            <div class="text-center text-md-left">
                <a class="btn popup-btn" onClick="PopUp('hide')">Submit</a>
            </div>
               
            </center>
        </div>
    </div>
    
</section>
  <!-- popup form -->
  <script>
        function PopUp(hideOrshow) {
            if (hideOrshow == 'hide') document.getElementById('ac-wrapper').style.display = "none";
            else document.getElementById('ac-wrapper').removeAttribute('style');
        }
        window.onload = function () {
            setTimeout(function () {
                PopUp('show');
            }, 2000);
        }
    </script>

