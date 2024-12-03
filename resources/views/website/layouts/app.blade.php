<!doctype html>
<html lang="en">

<head>

    
<!-- Meta Tags for Social Media Sharing -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- Open Graph Meta Tags -->
<meta property="og:title" content="Mina SaadAllh portfolio">
<meta property="og:description" content="I'm Junior Web Developer with 5 years of experience, specializing in front-end and back-end development. Experienced with all stages of the development cycle for dynamic web projects. Well-versed in programming languages including HTML, PHP, JavaScript, CSS, Ajax, jQuery, Vue.js. and I dealt a lot with MySQL database. I have a strong background in project management and customer relations.">
<meta property="og:image" content="https://www10.0zz0.com/2023/11/14/22/669435559.png">
<meta property="og:url" content="https://scarfaceps.online">
<meta property="og:type" content="website">


    <meta name="author" content="">
    <meta name="keywords" content="">
    
    
    
    
<!-- Custom Viewport Content -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="format-detection" content="telephone=no">


    
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1YXVCJVCRE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1YXVCJVCRE');
</script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <link rel="icon"
        href="https://e7.pngegg.com/pngimages/202/640/png-clipart-bitcoin-cryptocurrency-logo-lighting-career-portfolio-portfolio-light-fixture-building.png"
        type="image/png">
    @yield('title')
    @include('website.layouts.head')
</head>

<body>

    <!--================ start header Menu Area =================-->
    <a id="scroll-to-top" class="h3" href="#top">
        <i class="fa-solid fa-circle-arrow-up"></i>
    </a>
    <header class="header_area">
        <div class="main_menu" id="mainNav">
            <nav class="navbar navbar-expand-lg navbar-light">
                @yield('nav_bar')
            </nav>
        </div>
    </header>
    <!--================end header Menu Area =================-->

    <!--================start Home Banner Area =================-->
    <section class="home_banner_area m-0">
        <div class="banner_inner">
            @yield('header')
        </div>
    </section>

    <!--================End Home Banner Area =================-->

    <!--================start about me Area =================-->

    <section class="welcome_area">
        <div class="container">
            <div class="row welcome_inner">
                @yield('about_me')
            </div>
        </div>
    </section>
    <!--================End about me Area =================-->



    <!--================start skills Area =================-->

    <section class="welcome_area">
        @yield('skills_area')
    </section>
    <!--================End skills Area =================-->

    <!--================start experience Area =================-->
    <section class="feature_area">
        @yield('experience_area')
    </section>
    <!--================End experience Area =================-->

    <!--================start Projects Area =================-->
    <section class="projects_area">
        @yield('projects_area')
    </section>
    <!--================End Projects Area =================-->

    <!--================start Footer Area =================-->
    <footer class="footer_area p_120">
        <div class="container reveal">
            <div class="row footer_inner">
                <div class="col-lg-4 col-sm-6">
                    <aside class="f_widget ab_widget">
                        <div class="f_title">
                            <div class="d-flex justify-content-start">
                                <span class="wave px-lg-2">👋</span>
                                <h3>Contact</h3>
                            </div>
                        </div>
                        @foreach ($informations as $information)
                            <h6 class="m-0"><i class="fa-solid fa-envelope-circle-check"></i> :
                                {{ $information->email }} </>


                        <h6><i class="fa-solid fa-mobile-retro"></i> : {{ $information->phone }}</>

                            <h6><i class="fa-solid fa-house"></i> :
                                {{-- Egypt.Cairo.Shubra --}}
                                {{ $information->address }}
                                </>
                                @endforeach
                                <h6>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved <i class="fa fa-heart-o"
                                        aria-hidden="true"></i>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </>
                    </aside>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <aside class="f_widget news_widget">
                        <div class="f_title">
                            <h3>Email me</h3>
                        </div>
                        <!--<p>Send me a message anytime ....</p>-->
                        <p>Not available at the moment ....</p>
                        <div id="mc_embed_signup">
                            <div class="row">
                                <div class="col-12">
                                    <form action="" method="post">
                                        <div class="form-row align-items-center">
                                            <div class="col-lg-6 col-12">
                                                <input readonly type="text" class="form-control mb-2" id="inlineFormInput"
                                                    placeholder="Your Name" required>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">@</div>
                                                    </div>
                                                    <input readonly type="email" class="form-control" id="inlineFormInputGroup"
                                                        placeholder="E-Mail" required>
                                                </div>
                                            </div>

                                            <div class="form-group col-12">
                                                <textarea readonly class="form-control" placeholder="Your Message" id="message " rows="3" required></textarea>
                                            </div>

                                            <div class="col text-center">
                                                <button type="submit" class="btn btn-primary mb-2 w-50 disabled">Sen the
                                                    Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-3">
                    <aside class="f_widget social_widget">
                        <div class="f_title">
                            <h3>Follow Me</h3>
                        </div>
                        <p>Let us be social</p>
                        @foreach ($informations as $information)

                        <ul class="list">
                            <li><a target="_blank" href="{{ $information->github }}">
                                    <h5><i class="fa-brands fa-github"></i></h5>
                                </a></li>
                            <li><a target="_blank" href="{{ $information->facebook }}">
                                    <h5><i class="fa-brands fa-facebook"></i></h5>
                                </a></li>
                            <li><a target="_blank" href="{{ $information->whatsapp }}">
                                    <h5><i class="fa-brands fa-whatsapp"></i></h5>
                                </a></li>
                            <li><a target="_blank" href="{{ $information->instagram }}">
                                    <h5><i class="fa-brands fa-instagram"></i></h5>
                                </a></li>
                                <li><a target="_blank" href="{{ $information->linkedin }}">
                                    <h5> <i class="fa-brands fa-linkedin"></i> </h5>
                                </a></li>
                        </ul>
                        @endforeach
                    </aside>
                </div>
            </div>
        </div>
    </footer>

    <!--================End Footer Area =================-->
    @include('website.layouts.script')
    <script src="{{ asset('website/assets/js/my_js.js') }}"></script>
</body>

</html>
