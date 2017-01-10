<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    <title> The Kitchener Waterloo Area Linux Conference Website</title>

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
            <h1 class="hero-lead"> Kitchener Waterloo Linux Fest 2017 </h1>
            <h2 class="hero-sub-text"> A Linux/Open Source Conference For The Kitchener Waterloo Area</h2>
            <a href="#register" class="hero-btn rounded"> Register </a>
        </div>
    </section>

    <!-- about section -->
    <section class="about marketing-section">
        <div class="container">
            <div class="row">
                <div class="col-100">
                    <div class="text-center">
                        <h2 class="section-lead"> About Linux Fest 2017 </h2>
                        <p class="body-copy">
                        A conference that is run to celebrate open source and all things *nix. 
                        Open source is something to be celebrated lets get together and have a party!
                        The conference will be run on January 28th 2017 at 200 Bathurst Drive, Waterloo Ontario.
                        Due to the success of last year we are excited for this years activities.
                        </p>
                        <a href="#register" class="btn large-top rounded"> Register </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- speakers -->
    <section class="speakers flex-center-center marketing-section">
        <div class="container">
            <div class="row">
                <div class="col-100">
                    <div class="text-center">
                        <h2 class="section-lead"> Speakers </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <div class="speaker-card text-center">
                            <img src="{{ url('/kris.jpg')  }}" alt="" />
                            <h2 class="speaker-name"> Kris Braun </h2>
                            <h2 class="speaker-name"> Practical projects with OpenWRT </h2>
                            <h3 class="speaker-title"> CTO at KidsWifi </h3>
                            <p class="speaker-copy"> After a brief introduction to OpenWRT, we'll walk through four simple projects involving customizations of OpenWRT. Most projects focus on monitoring or manipulating Internet traffic flowing through the device.</p>
                        </div>
                    </div>

                    <div class="col-25">
                        <div class="speaker-card text-center">
                            <img src="{{ url('/jason.jpg')  }}" alt="" />
                            <h2 class="speaker-name"> Jason Eckert </h2>
                            <h2 class="speaker-name"> A brief history of Linux and Open Source technology | Dean of Technology, triOS College / Author of 13 Linux books (including the official SUSE books)</h2>
                            <h3 class="speaker-title"> Dean of Technology, triOS College </h3>
                            <p class="speaker-copy">  A fun and interesting talk about where the Linux operating system came from, why it succeeded, and how Open Source has shaped technology today and how it will continue to do so in the future. </p>
                        </div>
                    </div>
 
                    <div class="col-25">
                        <div class="speaker-card text-center">
                            <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAMlAAAAJDRkNTI1OWQ2LWRhNTgtNDAyOS05YmI2LWUyNmIwZGEwMGZkNw.jpg" alt="" />
                            <h2 class="speaker-name"> Bob Jonkman </h2>
                            <h2 class="speaker-name"> What VoIP Can Do For You</h2>
                            <h3 class="speaker-title"> Consultant </h3>
                            <p class="speaker-copy"> The power and flexibility of running a VoIP server. A run-through of some VoIP features with an interactive demonstration, in which participants can use their own cell phones to dial in to the demo server and use the features themselves. </p>
                        </div>
                    </div>
 
                    <div class="col-25">
                        <div class="speaker-card text-center">
                            <img src="https://media.licdn.com/media/AAEAAQAAAAAAAAZsAAAAJDllNWUxYmE1LTM3ZTYtNDNjZS05OGY3LTVlNTFkNGY4MmFlNQ.jpg" alt="" />
                            <h2 class="speaker-name"> Tony Thompson </h2>
                            <h2 class="speaker-name"> Raspberry Pi + Arduino: The Hard Way </h2>
                            <h3 class="speaker-title"> Software Developer @ Dozr</h3>
                            <p class="speaker-copy">  Like chocolate and peanut butter, Raspberry Pi and Arduino taste great together.  We'll take a look at the non-USB hardware available on each platform, and how to use it to make hardware and software simpler, but probably not easier. </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- sponsers -->
    <section class="marketing-section">
        <div class="container">
            <div class="row">
                <div class="col-100">
                    <div class="text-center">
                        <h2 class="section-lead"> Sponsors </h2>
                    </div>
                </div>

                <div class="text-center col-100">
                    <a href="http://www.vehikl.com"> <img src="http://vehikl.com/assets/style-guide/vehikl_avatar.jpg" alt="" /> </a>
                    <p class="body-copy"> Vehikl </p>
                </div>

            </div>
    </section>

    <section class="marketing-section">
        <div class="container">
            <div class="row">

                <div class="col-100">
                    <div class="text-center">
                        <h2 class="section-lead"> Contact Us</h2>
                    </div>
                </div>

                <div class="text-center col-100">
                    <p class="body-copy"> If you have any questions email <a href="mailto:colin.j.mills96@gmail.com" target="_top"> <i> colin.j.mills96@gmail.com </i> </a>  </p>

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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2893.5150431768416!2d-80.53097868450679!3d43.51245137912638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882bf3cccbdadb2d%3A0xc8a38493085b25dc!2s200+Bathurst+Dr%2C+Waterloo%2C+ON+N2V+2L7!5e0!3m2!1sen!2sca!4v1470427175974"
                                class="map"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact marketing-section">
        <a id="register"></a>

        <div class="container" id="registration-app">
            @if (count($errors) > 0)  
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p> {{$error}} </p>
                    @endforeach
                </div>
            @endif

            <div class="row">
                <div class="col-100">
                    <div class="text-center">
                        <h2 class="section-lead" id="register-lead-text">Register</h2>
                    </div>
                </div>
            </div>

            <div v-show="submitting == false && complete == false">
                <div class="row">
                    <div class="col-100 text-center">
                        <h3>What would you like to do?</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-50 text-center">
                        <button class="btn rounded reg_action"
                                v-on:click="setMode('attendee')">Attend the Conference</button>
                    </div>
                    <div class="col-50 text-center">
                        <button class="btn rounded reg_action"
                                v-on:click="setMode('speaker')">Speak at the Conference</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-100">
                        <div v-show="mode === 'attendee'">
                            @include('partials/attendee-registration-form')
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-100">
                        <div v-show="mode === 'speaker'">
                            @include('partials/speaker-registration-form')
                        </div>
                    </div>
                </div>
            </div>


            <div class="text-center" v-show="submitting">
                <i style="font-size: 5em;" class="fa fa-linux fa-spin"></i>
                <p class="body-copy"> Submitting... </p>
            </div>

            <div class="row" v-show="complete">
                <div class="col-100 text-center">
                    <h2>@{{ feedback }}</h2>
                </div>
            </div>

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
    <script src="/js/register.js"></script>
</body>
</html>
