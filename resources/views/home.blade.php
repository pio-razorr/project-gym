@extends('layout.main')

@section('home')
    <a id="bgndVideo" class="player"
        data-property="{videoURL:'https://www.youtube.com/watch?v=3P6bEAlW-Vw',showYTLogo:false, showAnnotations: false, showControls: false, cc_load_policy: false, containment:'#home-section',autoPlay:true, mute:true, startAt:255, stopAt: 271, opacity:1}">
    </a>

    <div class="intro-section" id="home-section" style="background-color: #ccc;">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                    <h1 class="mb-3">Fitness Help Me Feel Better</h1>
                    <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Dolores nisi minus perspiciatis optio, id deserunt.</p>
                    <p class="text-center">
                        <a href="#" class="btn btn-outline-white py-3 px-5">Get Started</a>
                    </p>
                </div>
            </div>

        </div>
    </div>


    <div class="site-section">
        <div class="container">

            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8 section-heading">
                    <span class= "subheading">Stay Healthy</span>
                    <h2 class="heading mb-3">Setup Your Body With Workout</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, mollitia amet nihil!
                        Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                        ocean.</p>
                </div>
            </div>

            <!-- Slider -->
            <div class="owl-carousel nonloop-block-14 block-14" data-aos="fade">
                <div class="slide">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-fit"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Consectuetur elit</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis quo, cumque fuga.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-gym-1"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Veritatis quo</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quasi quia iure
                                unde perferendis!</p>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-gym"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Perspiciatis modi</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi tempora nostrum,
                                perspiciatis modi eaque!</p>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-vegetables"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Magnam ab eius</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, magnam ab
                                eius autem est.</p>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-fruit-juice"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Impedit alias</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis beatae impedit
                                alias ad unde?</p>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-stationary-bike"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Recusandae nisi</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, minima quod optio
                                recusandae nisi.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="bgimg" style="background-image: url('{{ asset('assets/workout-master/images/bg_2.jpg')}}');" data-stellar-background-ratio="0.5">

        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-7">
                    <h2 class="">Get The Result You Want</h2>
                    <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Dicta ut quisquam, distinctio illo, debitis repudiandae.</p>
                </div>
            </div>
        </div>

    </div>


    </div>
@endsection
