@extends('website.layouts.app')

<style>
    html {
        scroll-behavior: smooth;
    }
    .feature_item_experiences{
        height:190px ;
    }
</style>
@section('title')
    <title>portfolio</title>
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!--================ start header Menu Area =================-->
{{-- @section('nav_bar')
    <div class="container box_1620">
        <!-- skills and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active"><a class="nav-link scroll-link" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link scroll-link" href="#about_myself">About Myself</a></li>
                <li class="nav-item"><a class="nav-link scroll-link" href="services.html">Services</a>
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link scroll-link" href="portfolio.html">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link scroll-link" href="portfolio-details.html">Project Details</a></li>
                        <li class="nav-item"><a class="nav-link scroll-link" href="elements.html">Elements</a></li>
                    </ul>
                </li>
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">Blog</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
@endsection --}}


<!--================end header Menu Area =================-->

<!--================start Home Banner Area =================-->
@section('header')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="home_left_img website_image">
                    @foreach ($informations as $information)
                     <div style="height: 535px;"> 
                  <img src="{{ route('view-image') }}"  class="card-img-top w-100 h-100" alt="...">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner_content">
                    <h2 class="title">This is me</h2>
                    <h2 class="ml11">
                        <span class="text-wrapper">
                            <span class="line line1"></span>
                            <span class="letters my_name">Mina SaadAllh Noser</span>
                        </span>
                    </h2>
                    <h4 class="title">A skilled <span class="text-danger"> Back-end </span> & <span class="text-danger">
                            Front-end </span> Developer who is very passionate about web programming
                        field . <br>
                        I'm looking forward to develop myself in this field.</h4>
                    {{-- <h5>
                        • Bachelor of Tourism and Hotels, Tourist Guidance Division <br>
                        <span class="text-muted h6"> from Future Academy</span>
                    </h5> --}}
                    <a class="banner_btn h3" onclick="trackDownload()"
<<<<<<< HEAD
                        href="{{ route('view-pdf') }}">Dowenload My
=======
                        href="https://drive.google.com/uc?export=download&id=1eEzrcC05ArCjlkCV5N6FONDoIoNqq2qJ">Dowenload My
>>>>>>> 7966584c5e6f87c46522a2f6f2cc2aee0cc6badc
                        PDF C.V</a>
                </div>
            </div>
        </div>
    </div>
@endsection

<!--================End Home Banner Area =================-->

<!--================start about me Area =================-->

@section('about_me')
    <div class="col-12 reveal " id="about_myself">
        <div class="welcome_text">
            <h2 class="text-center p-5">About Myself</h4>
                <p class="text-center">I'm Junior Web Developer 5 years experience , specializing in front end & back end
                    development. Experienced with all stages of the development
                    cycle for dynamic web projects. Well-versed in programming languages including HTML, PHP , JavaScript,
                    CSS, Ajax , Jquery , Vus.js .
                    <br>
                    {{-- font-weight-bold --}}
                    <strong> And I dealt a lot with MySQL database . </strong>
                    <br>
                    I have strong background in project management and customer relations.
                </p>
                <div class="timeline">
                    <div class="timeline-card timeline-card-success card shadow-sm bg-secondary text-light rounded">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="card-body">
                                    <div>
                                        {{-- • Bachelor of Tourism and Hotels, Tourist Guidance Division   <br>
                                    <span class="text-muted h6"> from Future Academy</span> --}}
                                        <h6 class="m-0">
                                            • Tasks previously performed during the working period ..
                                        </h6>

                                    </div>
                                    {{-- <div>
                                    - undertaking research and planning tours.
                                    - preparing and giving presentations. <br>
                                    - offering sightseeing advice. <br>
                                    - organising and leading excursions. <br>
                                    - problem solving. <br>
                                    - translating and interpreting. <br>
                                    - transporting and accompanying tourists .
                                </div> --}}
                                    @foreach ($educations as $education)
                                        <div class="education-list">
                                            <ul class="m-0">
                                                <li class="education">
                                                    - {{ $education->education }}
                                                </li>
                                            </ul>
                                        </div>
                                    @endforeach
                                    {{--  !  ------------------------------------------------------------------------------ --}}
                                    {{--  !                             start pagination elements education                   ||
                                    {{--  !  ------------------------------------------------------------------------------ --}}
                                    <div class="education-pagination">
                                        <span class="">count of advantages gained during work :
                                            {{ count($educations) }} </span>
                                        <br>
                                        <button class="education-prev-button btn btn-secondary border">Previous</button>
                                        <span class="education-page-numbers"></span>
                                        <button class="education-next-button btn btn-secondary border">Next</button>
                                    </div>
                                    {{--  !  ------------------------------------------------------------------------------ --}}
                                    {{--  !                              end pagination elements education                    ||
                                    {{--  !  ------------------------------------------------------------------------------ --}}
                                </div>
                            </div>

                            <script></script>
                            <div class="col-12 col-lg-4">
                                <div class="card-body">
                                    <div class="list-group">
                                        {{-- • Bachelor of Tourism and Hotels, Tourist Guidance Division   <br>
                                    <span class="text-muted h6"> from Future Academy</span> --}}
                                        <h6 class="m-0">
                                            • Jobs I have worked in ..
                                        </h6>

                                    </div>
                                    @foreach ($works as $work)
                                        <ul class="m-0">
                                            <li class="works">
                                                - {{ $work->work }}
                                            </li>
                                        </ul>
                                    @endforeach

                                    {{--  !  ------------------------------------------------------------------------------ --}}
                                    {{--  !                             start pagination elements work                        ||
                                    {{--  !  ------------------------------------------------------------------------------ --}}
                                    <div class="works-pagination p-0 p-lg-0">
                                        <span class="p-2">count of Jobs : {{ count($works) }} </span>
                                        <br>
                                        <button class="works-prev-button btn btn-secondary border">Previous</button>

                                        <span class="works-page-numbers p-2"> </span>

                                        <button class="works-next-button btn btn-secondary border">Next</button>
                                    </div>
                                    {{--  !  ------------------------------------------------------------------------------ --}}
                                    {{--  !                              end pagination elements work                         ||
                                    {{--  !  ------------------------------------------------------------------------------ --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-4">
                            <div class="wel_item">
                                <i class="lnr lnr-database"></i>
                                <h4>{{ DB::table('projects')->count() }}</h4>
                                <p>Total All Projects</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wel_item">
                                <i class="lnr lnr-book"></i>
                                <h4> {{ DB::table('projects')->where('category', 'skills')->count() }}
                                </h4>
                                <p>skills Projects</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wel_item">
                                <i class="lnr lnr-users"></i>
                                <h4> {{ DB::table('projects')->where('category', 'work')->count() }} </h4>
                                <p>Works Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endsection
    <!--================end about me Area =================-->

    <!--================start slills Area =================-->
    @section('skills_area')
        <div class="container reveal">
            <div class="row welcome_inner">
                <div class="col-12">
<<<<<<< HEAD
                    <h3 class="text-center p-5">Professional Skills</h2>
                </div>
                <div class="col-lg-6">
                    <div class="tools_expert">
                        <h3>Tools Skills in Front-End</h3>
                        <div class="skill_main frontEnd-list">
=======
                    <h2 class="text-center p-5">Professional skills</h2>
                </div>
                <div class="col-lg-6">
                    <div class="tools_expert">
                        <h3>Tools skills in Front-End</h3>
                        <div class="skill_main">
>>>>>>> 7966584c5e6f87c46522a2f6f2cc2aee0cc6badc
                            {{-- <div class="skill_item">
                            <h4>HTML <span class="counter">90</span>%</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill_item">
                            <h4>CSS <span class="counter">90</span>%</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill_item">
                            <h4>Bootstap <span class="counter">80</span>%</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill_item">
                            <h4>Ajax <span class="counter">20</span>%</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill_item">
                            <h4>Jquare <span class="counter">25</span>%</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill_item">
                            <h4>Vue.JS <span class="counter">15</span>%</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div> --}}
                            @foreach ($skills as $skill)
                                @if ($skill->category == 'Front End')
<<<<<<< HEAD
                                    <div class="skill_item frontEnd">
=======
                                    <div class="skill_item">
                                        <h4>{{ $skill->skill }} <span class="counter">{{ $skill->ratio }}</span>%</h4>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->ratio }}"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tools_expert">
                        <h3>Tools skills in Back-End</h3>
                        <div class="skill_main">
                            {{-- <div class="skill_item">
                            <h4>Laravel Fremwork <span class="counter">70</span>%</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill_item">
                            <h4>PHP Language <span class="counter">75</span>%</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill_item">
                            <h4>Mysql Database <span class="counter">60</span>%</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div> --}}

                            @foreach ($skills as $skill)
                                @if ($skill->category == 'Back End')
                                    <div class="skill_item">
>>>>>>> 7966584c5e6f87c46522a2f6f2cc2aee0cc6badc
                                        <h4>{{ $skill->skill }} <span class="counter">{{ $skill->ratio }}</span>%</h4>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar"
                                                aria-valuenow="{{ $skill->ratio }}" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            {{--  !------------------------------------------------------------------------------- --}}
                            {{--  ! start element pagination skills Front end ||
                            {{--  !------------------------------------------------------------------------------- --}}
                            <div class="frontEnd-pagination text-center">
                                <span class="p-2">count of skills Front end :
                                    {{ $skills->where('category', 'Front End')->count() }} </span>
                                <br>
                                <button class="frontEnd-prev-button btn btn-secondary border">Previous</button>
                                <span class="frontEnd-page-numbers p-2"></span>
                                <button class="frontEnd-next-button btn btn-secondary border">Next</button>
                            </div>
                            {{--  !------------------------------------------------------------------------------- --}}
                            {{--  ! end element pagination skills Front end ||
                            {{--  !------------------------------------------------------------------------------- --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tools_expert">
                        <h3>Tools Skills in Back-End</h3>
                        <div class="skill_main">
                            <div class="items-container backEnd">
                                @foreach ($skills as $skill)
                                    @if ($skill->category == 'Back End')
                                        <div class="skill_item backEnd">
                                            <h4>{{ $skill->skill }} <span class="counter">{{ $skill->ratio }}</span>%</h4>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"
                                                    aria-valuenow="{{ $skill->ratio }}" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                {{--  !------------------------------------------------------------------------------- --}}
                                {{--  ! start element pagination skills Back end ||
                                {{--  !------------------------------------------------------------------------------- --}}
                                <div class="backEnd-pagination text-center">
                                    <span class="p-2">count of skills Back end :
                                        {{ $skills->where('category', 'Back End')->count() }} </span>
                                    <br>
                                    <button class="backEnd-prev-button btn btn-secondary border">Previous</button>
                                    <span class="backEnd-page-numbers p-2"></span>
                                    <button class="backEnd-next-button btn btn-secondary border">Next</button>
                                </div>
                                {{--  !------------------------------------------------------------------------------- --}}
                                {{--  ! end element pagination skills Back end ||
                                {{--  !------------------------------------------------------------------------------- --}}
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    @endsection
    <!--================End skills Area =================-->

    <!--================ start Feature Area =================-->

    @section('experience_area')
        <div class="container reveal">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="text-center">
                        <h2>Work Experience </h2>
                        <p>Have some experience that you have gained over the past years in the labor market .</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="feature_inner row workExperience-list">
                        <div class="row">
                            @foreach ($experiences as $experience)
                                <div class="col-lg-4 col-md-6 workExperience">
                                    <div class="feature_item text-center feature_item_experiences">
                                        {{-- <p>Collaborated with stakeholders during development processes to confirm creative proposals and design
                            best practices. </p> --}}
                                        <h6>
                                            {{ $experience->experiences }}
                                        </h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{--  !------------------------------------------------------------------------------- --}}
            {{--  ! start element pagination experiences ||
                {{--  !------------------------------------------------------------------------------- --}}
            <div class="workExperience-pagination p-2 text-center ">
                <span class="p-2">count of work experiences : {{ count($experiences) }} </span>
                <br>
                <button class="workExperience-prev-button btn btn-secondary border">Previous</button>
                <span class="workExperience-page-numbers p-2"></span>
                <button class="workExperience-next-button btn btn-secondary border">Next</button>
            </div>
            {{--  !------------------------------------------------------------------------------- --}}
            {{--  ! end element pagination experiences ||
                {{--  !------------------------------------------------------------------------------- --}}
            {{-- <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <p>Managed full-cycle design tasks, handling all phases from conception to completion while maintaining
                        guidelines throughout.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <p>Consulted with customers to gather requirements and discuss design choices. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <p>Verified all web-based products fulfilled prescribed project needs through direct interaction with
                        stakeholders. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <p>Designed and updated layouts to meet usability and performance requirements. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <p>Developed designs to meet specific requirements such as quick-loading sites with particular layouts.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <p> Adhered to internal risk control and liability mitigation guidelines. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <p>Pinpointed user experience issues to devise targeted suggestions for improving user experience. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <p> Developed customer-facing communications with measurable click-thru rates for marketing conversion
                        tracking. </p>
                </div>
            </div> --}}

<<<<<<< HEAD
            {{-- </div> --}}
            <style>
                .projects_fillter .filter .d-flex li a {
                    font-size: 1.18rem !important;
                }
=======
    <!--================ start Projects Area =================-->
    @section('projects_area')
        <div class="container">
            <div class="main_title">
                <h2>Some of my completed projects</h2>
            </div>
            <div class="projects_fillter">
                <ul class="filter list">
                    <li class="active" data-filter="*"><a href="#">All Categories</a></li>
<<<<<<< HEAD
                    <li data-filter=".skills"><a href="#">Skills Project</a></li>
=======
                    <li data-filter=".skill"><a href="#">skills Project</a></li>
>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a
                    <li data-filter=".work"><a href="#">Creative Work </a></li>
                </ul>
            </div>
            <div class="projects_inner row" id='create_card_project'>
>>>>>>> 7966584c5e6f87c46522a2f6f2cc2aee0cc6badc

                .projects_fillter .filter .d-flex .active {
                    background-color: rgb(146, 146, 146);
                    border-radius: .25rem;
                    padding: 1%
                }

<<<<<<< HEAD
                .projects_fillter .filter .d-flex .active a {
                    color: #fff !important;
                }

                @media (max-width: 1250px) {
                    #create_card_project .card_project {
                        width: 100% !important;
                    }
                }
            </style>
        @endsection
        <!--================End Feature Area =================-->

        <!--================ start Projects Area =================-->
        @section('projects_area')
            <div class="container reveal">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="text-center">
                            <h2>Some of my completed projects</h2>
=======
                @foreach ($data as $item)
                    {{-- <script>
                    var element = document.getElementsByClassName("card_project");
                    if ($item-> category = 'work')
                        element.classList.add("work");
                    else
                        element.classList.add("skills");
                </script> --}}
                    <div class="card overflow-hidden col-lg-4  col-sm-6 p-0 @if ($item->category === 'skills') skill @else work @endif"
                        style="width: 18rem;" id="card_project">
                        <img src="{{ URL::asset('dashboard/assets/images/projects/' . $item->image) }}"
                            class="card_project card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">{{ $item->title }}</h3>
                            <p class="card-text">{{ $item->details }}</p>
                            <a href="{{ $item->url }}" class="btn btn-primary w-100">Visit the website</a>
>>>>>>> 7966584c5e6f87c46522a2f6f2cc2aee0cc6badc
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="projects_fillter">
                            <ul class="filter list">
                                <div class="d-flex justify-content-evenly">
                                    <li class="active" data-filter="*"><a class="h5" href="#">All
                                            Categories</a></li>
                                    <li data-filter=".skills"><a class="h5" href="#">Skills Project</a>
                                    </li>
                                    <li data-filter=".work"><a class="h5" href="#">Creative Work </a></li>
                                </div>
                            </ul>

                        </div>
                    </div>
                    
                </div>
            </div>
             <div class="projects_inner m-auto row" id='create_card_project'>
                            @foreach ($data as $item)
                                <div class=" card border-0 col-lg-4 col-sm-6 @if ($item->category === 'skills') skills @else work @endif"
                                     id="card_project">
                                    <div style="height: 23rem">
                                       <img src="{{ asset('dashboard/assets/images/projects/' . $item->image) }}" class="card-img-top h-100 w-100" alt="{{ $item->title }}">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->title }}</h5>
                                        <p class="card-text">{{ $item->details }}</p>
                                        <a href="{{ $item->url }}" class="btn btn-primary w-100" target="_blank">Visit the website</a>
                                    </div>
                                </div>
                            @endforeach


                        </div>
        </div>
<<<<<<< HEAD
    </div>
    </div>
    </div>
@endsection
<!--================End Projects Area =================-->
=======
    @endsection
    <!--================End Projects Area =================-->
>>>>>>> 7966584c5e6f87c46522a2f6f2cc2aee0cc6badc
