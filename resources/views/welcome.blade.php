<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    <title> The Kitchener Waterloo Area Linux Conference Website</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/css/palette.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

</head>

<body>
    <!-- hero-content   -->
    <section class="hero flex flex-center-center">
        <div class="hero-content text-center">
            <h1 class="hero-lead"> Kitchener Waterloo Linux Fest 2018 </h1>
            <h2 class="hero-sub-text"> A Linux/Open Source Conference For The Kitchener Waterloo Area: Call For Papers Open Until November 1st 2017</h2>
            <a href="#register" class="hero-btn rounded"> Register To Speak </a>
        </div>
    </section>

    <!-- about section -->
    <section class="about marketing-section">
        <div class="container">
            <div class="row">
                <div class="col-100">
                    <div class="text-center">
                        <h2 class="section-lead"> About Linux Fest 2018 </h2>
                        <p class="body-copy">
                        A conference that is run to celebrate open source and all things *nix. 
                        Open source is something to be celebrated lets get together and have a party!
                        The conference will be run on January 27th 2018 at Conestoga College Doon Campus, Kitchener Ontario.
                        Due to the success of the last two year we are excited for this years activities.
                        </p>
                        <a href="#register" class="btn large-top rounded"> Register To Speak </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- speakers -->
    <section class="speakers marketing-section">
        <div class="container">
            <div class="row">
                <div class="col-100">
                    <div class="text-center">
                        <h2 class="section-lead"> Speakers </h2>
                    </div>
                </div>

                <div class="col-100">
                    <div class="text-center">
                        <h2 class="section-lead"> Call for papers open until November 1st 2017. Submit!</h2>
                    </div>
                </div>
                <!-- <div class="row"> -->
                <!--     <div class="col-25"> -->
                <!--         <div class="speaker-card text-center"> -->
                <!--             <img src="https://pbs.twimg.com/profile_images/541811449845137408/ebWKKWxx.jpeg" alt="" /> -->
                <!--             <h2 class="speaker-name"> Evan You </h2> -->
                <!--             <h3 class="speaker-title"> Developer </h3> -->
                <!--         </div> -->
                <!--     </div> -->
               <!-- </div> -->

            </div>
    </section>

    {{-- <!-- sponsers --> --}}
    {{-- <section class="marketing-section"> --}}
    {{--     <div class="container"> --}}
    {{--         <div class="row"> --}}
    {{--             <div class="col-100"> --}}
    {{--                 <div class="text-center"> --}}
    {{--                     <h2 class="section-lead"> Sponsors </h2> --}}
    {{--                 </div> --}}
    {{--             </div> --}}

    {{--             <div class="text-center col-100"> --}}
    {{--                 <a href="http://www.vehikl.com"> <img src="http://vehikl.com/assets/style-guide/vehikl_avatar.jpg" alt="" /> </a> --}}
    {{--                 <p class="body-copy"> Vehikl </p> --}}
    {{--             </div> --}}

    {{--         </div> --}}
    {{-- </section> --}}

    <section class="marketing-section">
        <div class="container">
            <div class="row">

                <div class="col-100">
                    <div class="text-center">
                        <h2 class="section-lead"> Contact Us</h2>
                    </div>
                </div>

                <div class="text-center col-100">
                    <p class="body-copy"> You can also follow us on<a href="http://www.twitter.com/kwlinuxfest"> Twitter </a> </p>
                </div>

            </div>
        </div>
    </section>


    <section class="location marketing-section">
        <div class="container">
            <div class="row">
                <div class="col-100">
                    <div class="text-center">
                        <h2 class="section-lead"> Location </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-100">
                    <div class="map-container">
                        <div class="map-overlay"></div>
                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2899.365139195218!2d-80.40541498451077!3d43.39029697913121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b9018e9e89adf%3A0x2043c24369ede07e!2sConestoga+College!5e0!3m2!1sen!2sca!4v1497066867528" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact marketing-section">
        <a id="register"></a>

        <div class="container" id="registration-app" @handleError="displayError">
            <div v-if="success && !displayedSuccess">
                @{{displaySuccess(success)}};
            </div>
            <div v-if="errors && !displayedError">
                @{{displayError(errors)}};
            </div>
 
            <div class="row">
                <div class="col-100">
                    <div class="text-center">
                        <h2 class="section-lead" id="register-lead-text">Register</h2>
                    </div>
                </div>
            </div>

            {{-- <div v-show="submitting == false && complete == false"> --}}
            {{--     <div class="row"> --}}
            {{--         <div class="col-100 text-center"> --}}
            {{--             <h3>What would you like to do?</h3> --}}
            {{--         </div> --}}
            {{--     </div> --}}

                {{-- <div class="row"> --}}
                {{--     <div class="col-50 text-center"> --}}
                {{--         <button class="btn rounded reg_action" --}}
                {{--                 v-on:click="setMode('attendee')">Attend the Conference</button> --}}
                {{--     </div> --}}
                {{--     <div class="col-50 text-center"> --}}
                {{--         <button class="btn rounded reg_action" --}}
                {{--                 v-on:click="setMode('speaker')">Speak at the Conference</button> --}}
                {{--     </div> --}}
                {{-- </div> --}}

                {{-- <div class="row"> --}}
                {{--     <div class="col-100"> --}}
                {{--         <div v-show="mode === 'attendee'"> --}}
                {{--             @include('partials/attendee-registration-form') --}}
                {{--         </div> --}}
                {{--     </div> --}}
                {{-- </div> --}}

                <div class="row">
                    <div class="col-100">
                        <div>
                            @include('partials/speaker-registration-form')
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="text-center" v-show="submitting"> --}}
            {{--     <i style="font-size: 5em;" class="fa fa-linux fa-spin"></i> --}}
            {{--     <p class="body-copy"> Submitting... </p> --}}
            {{-- </div> --}}


        </div>

    </section>

    <script>
$('.map-overlay').on('click', function() {
    $(this).css('display', 'none');
})

$(window).on('scroll', function() {
    $('.map-overlay').css('display', 'block');
})
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.3/vue-resource.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="/js/register.js"></script>
</body>
</html>
