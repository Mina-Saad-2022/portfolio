<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="{{ asset('dashboard/assets/offline/bootstrap/ajax_bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/offline/datatable/datatable_bootstrap.css') }}">

    <link rel="icon" href="https://www8.0zz0.com/2023/10/24/11/683666913.png" type="image/png">



    @yield('title')
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">


    {{-- <script src="{{ asset('dashboard/assets/js/sweet alert/sweet_alert.js') }}"></script> --}}

    @include('dashboard.layouts.head')
</head>

<body>
    {{-- @include('sweetalert::alert') --}}

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        {{-- ! start navbar  --}}
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src m-auto">
                    <div class="clock" id="clock"></div>
                    <div class="date" id="date"></div>
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Statistics
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Projects
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                {{-- @foreach ($users as $item) --}}

                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="p-0 btn">
                                            @if (Auth::user()->photo)
                                                <img width="42" class="rounded-circle h-75"
                                                    src="{{ asset('dashboard/assets/images/user/' . Auth::user()->photo) }}"
                                                    alt="User Image">
                                            @else
                                                <!-- The image is not found -->
                                                <img width="45" class="rounded-circle h-85"
                                                    src="https://www3.0zz0.com/2023/08/15/10/598962784.png"
                                                    alt="User Image">
                                            @endif

                                            <i class="fa fa-angle-down opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right">

                                            <ul class="vertical-nav-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                      document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>

                                                </li>



                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        User Account
                                                    </a>

                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{ Auth::user()->name }}
                                    </div>

                                </div>
                                {{-- @endforeach --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ! end navbar  --}}

        <div class="app-main overflow-hidden">
            {{-- ! start sideBar --}}
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src">

                    </div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <a href="{{ route('dashboard.index') }}">
                                <li class="app-sidebar__heading">Admin Panal</li>
                            </a>

                            {{--  * -------------------------------------------------------------------------------- --}}
                            {{--  *  part project ||
                            {{--  * -------------------------------------------------------------------------------- --}}
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-diamond"></i>
                                    Projects
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('dashboard.all') }}">
                                            <i class="metismenu-icon"></i>
                                            All Projects
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('dashboard.create') }}">
                                            <i class="metismenu-icon"></i>
                                            Create Projects
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {{--  * -------------------------------------------------------------------------------- --}}
                            {{--  *  part experience ||
                            {{--  * -------------------------------------------------------------------------------- --}}
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-users"></i>
                                    work Experience
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('dashboard.experience') }}">
                                            <i class="metismenu-icon"></i>
                                            All work experience
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('dashboard.create_experience') }}">
                                            <i class="metismenu-icon"></i>
                                            Create work experience
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {{--  * -------------------------------------------------------------------------------- --}}
                            {{--  *  part skills ||
                            {{--  * -------------------------------------------------------------------------------- --}}
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-users"></i>
                                    Professional skills
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('dashboard.skills') }}">
                                            <i class="metismenu-icon"></i>
                                            All skills
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('dashboard.create_skills') }}">
                                            <i class="metismenu-icon"></i>
                                            Create skills
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{--  * ------------------------------------------------------------------------------ --}}
                            {{--  *                              part Education and work
                            {{--  * ------------------------------------------------------------------------------ --}}
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-users"></i>
                                    Education and work
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('dashboard.education') }}">
                                            <i class="metismenu-icon"></i>
                                            All Education & work
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('dashboard.create_education') }}">
                                            <i class="metismenu-icon"></i>
                                            Create Education & work
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            {{--  * ------------------------------------------------------------------------------ --}}
                            {{--  *                              part Personal information
                            {{--  * ------------------------------------------------------------------------------ --}}
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-users"></i>
                                    Personal information
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('dashboard.information') }}">
                                            <i class="metismenu-icon"></i>
                                           All Information
                                        </a>
                                    </li>
                                                                 </ul>
                            </li>

                            {{--  * ------------------------------------------------------------------------------ --}}
                            {{--  *                              part Dashboard PDF
                            {{--  * ------------------------------------------------------------------------------ --}}
                            <a href="{{ route('dashboard.PDF') }}">
                                <li class="app-sidebar__heading">My C.V PDF</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- ! end sideBar --}}
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon bg-transparent">
                                    @yield('icon')
                                </div>
                                <div>
                                    @yield('title_of_page')
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- ! start numbers of project --}}
                <div class="row">
                    <div class="col-md-6 col-xl-3 m-auto">
                        <div class="card mb-3 widget-content bg-midnight-bloom">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading p-2">Total All Projects</div>
                                    <div class="widget-subheading">
                                        <div class="widget-content-right w-100">
                                            <div class="progress-bar-xs progress">
                                                <div class="progress-bar progress-bar_project" role="progressbar"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: <?php echo DB::table('projects')->count(); ?>%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<<<<<<< HEAD
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white p-2">
                                        <span>{{ DB::table('projects')->count() }}</span>
=======
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-arielle-smile">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
<<<<<<< HEAD
                                        <div class="widget-heading p-2">Skills Projects</div>
                                        <div class="widget-subheading text-dark">
                                            <div class="progress-bar-xs progress">
                                                <div class="progress-bar progress-bar_skills" role="progressbar"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: <?php echo DB::table('projects')
                                                        ->where('category', 'skills')
                                                        ->count(); ?>%">
                                                </div>
                                            </div>
                                        </div>
=======
                                        <div class="widget-heading">skills Projects</div>
                                        <div class="widget-subheading text-dark">projects created to learn</div>
>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a
                                    </div>
                                    <div class="widget-content-right p-2">
                                        <div class="widget-numbers text-white"><span>
                                                {{ DB::table('projects')->where('category', 'skills')->count() }}
                                            </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-grow-early">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading p-2">Works Projects</div>
                                        <div class="widget-subheading text-dark">
                                            <div class="progress-bar-xs progress">
                                                <div class="progress-bar progress-bar_work" role="progressbar"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: <?php echo DB::table('projects')
                                                        ->where('category', 'work')
                                                        ->count(); ?>%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white p-2"><span>
                                                {{ DB::table('projects')->where('category', 'work')->count() }} </span>
                                        </div>
>>>>>>> 7966584c5e6f87c46522a2f6f2cc2aee0cc6badc
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 m-auto">
                        <div class="card mb-3 widget-content bg-arielle-smile">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading p-2">Skills Projects</div>
                                    <div class="widget-subheading text-dark">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar progress-bar_skills" role="progressbar"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                style="width: <?php echo DB::table('projects')
                                                    ->where('category', 'skills')
                                                    ->count(); ?>%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-right p-2">
                                    <div class="widget-numbers text-white"><span>
                                            {{ DB::table('projects')->where('category', 'skills')->count() }}
                                        </span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 m-auto">
                        <div class="card mb-3 widget-content bg-grow-early">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading p-2">Works Projects</div>
                                    <div class="widget-subheading text-dark">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar progress-bar_work" role="progressbar"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                style="width: <?php echo DB::table('projects')
                                                    ->where('category', 'work')
                                                    ->count(); ?>%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white p-2"><span>
                                            {{ DB::table('projects')->where('category', 'work')->count() }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ! end numbers of project --}}

                {{-- ! start content --}}
                @yield('content')
                {{-- ! end content --}}

                {{-- ! start footer --}}
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="badge badge-success mr-1 ml-0">
                                            <small>NEW</small>
                                        </div>
                                        <p>&copy; 2023 Your Company. All rights reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ! end footer --}}
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <script type="text/javascript" src="{{ asset('dashboard/assets/scripts/main.js') }}"></script>
        <script src="{{ asset('dashboard/assets/offline/datatable/datatable_jquery/datatable_jquery.js') }}"></script>
        <script src="{{ asset('dashboard/assets/offline/datatable/datatable/datatable.js') }}"></script>

        <script src="{{ asset('dashboard/assets/js/js.js') }}"></script>



        <script>
            // ! ||--------------------------------------------------------------------------------||
            // ! ||                           to range count of projects                           ||
            // ! ||--------------------------------------------------------------------------------||

            var count_projects = <?php echo DB::table('projects')->count(); ?>;
            progressBars = document.querySelectorAll(".progress-bar");

<<<<<<< HEAD
            count_sckills = <?php echo DB::table('projects')
                ->where('category', 'skills')
                ->count(); ?>;
            count_work = <?php echo DB::table('projects')
                ->where('category', 'work')
                ->count(); ?>;
            if (count_projects >= 50) {
                document.querySelector(".progress-bar_project").classList.add(
                    "bg-primary");
            } else if (count_sckills >= 50) {
                document.querySelector(".progress-bar_skills").classList.add(
                    "bg-primary");
            } else if (count_work >= 5) {
                document.querySelector(".progress-bar_work").classList.add(
                    "bg-primary");
            } else {
                progressBars.forEach(function(progressBar) {
                    progressBar.classList.add("bg-danger");
                });
            }
=======
            //                 var element_workk = document.getElementById('element_education');

            // var element_button = document.querySelector('.button');
            // var button = document.querySelector('.element_education');

            // // Create a new input element
            // var newInput = document.createElement('input');
            // newInput.type = 'text';
            // newInput.classList.add('form-control', 'mb-2', 'mr-sm-2');
            // newInput.name = 'work[]';
            // newInput.placeholder = "type your works ";

            // element_button.classList.remove('col-2');
            // element_button.classList.add('col-10','text-center','m-auto');
            // button.classList.remove('w-100');
            // button.classList.add('w-50');
            // element_workk.classList.add('m-auto');
            // element_workk.appendChild(newInput);


            //     var element_education = document.getElementById('element_education');

            //     var element_button = document.querySelector('.button_education');
            //     var button = document.querySelector('.element_education');

            //     // Create a new input element
            //     var newInput = document.createElement('input');
            //     newInput.type = 'text';
            //     newInput.classList.add('form-control','mb-2','mr-sm-2');
            //     newInput.name = 'education[]';
            //     newInput.placeholder = "type your education";

            //     element_button.classList.remove('col-2');
            //     element_button.classList.add('col-10', 'text-center','m-auto');
            //     button.classList.remove('w-100');
            //     button.classList.add('w-50');
            //     element_education.classList.add('m-auto');
            //     element_education.appendChild(newInput);

            // });
            // // ! ||--------------------------------------------------------------------------------||
            // // ! ||                               to repeate element work                          ||
            // // ! ||--------------------------------------------------------------------------------||

            // document.getElementById('work_n').addEventListener('click', function() {

            //     var element_work = document.getElementById('element_work');

            //     var element_button = document.querySelector('.button');
            //     var button = document.querySelector('.element_work');

            //     // Create a new input element
            //     var newInput = document.createElement('input');
            //     newInput.type = 'text';
            //     newInput.classList.add('form-control', 'mb-2', 'mr-sm-2');
            //     newInput.name = 'work[]';
            //     newInput.placeholder = "type your works ";

            //     element_button.classList.remove('col-2');
            //     element_button.classList.add('col-10','text-center','m-auto');
            //     button.classList.remove('w-100');
            //     button.classList.add('w-50');
            //     element_work.classList.add('m-auto');
            //     element_work.appendChild(newInput);
            // });
>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a
        </script>


        {{--  ! ||------------------------------------------------------------------------------- --}}
        {{--  ! ||                                for edit project                                ||
        {{--  ! ||------------------------------------------------------------------------------- --}}
        @if (session()->has('edit'))
            <script>
                // Extract the session data
                var sweetAlertData = @json(session('edit'));

                // Display SweetAlert using the session data
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'Edit has been successfully'
                })
            </script>
            @php
                // edit the session data to prevent it from showing again
                session()->forget('edit');
            @endphp

            {{--  ! ||------------------------------------------------------------------------------- --}}
            {{--  ! ||                                for delete project                               ||
            {{--  ! ||------------------------------------------------------------------------------- --}}
        @elseif (session()->has('delete'))
            <script>
                // Extract the session data
                var sweetAlertData = @json(session('delete'));

                // Display SweetAlert using the session data
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'Delete has been successfully'
                })
            </script>
            @php
                // Remove the session data to prevent it from showing again
                session()->forget('delete');
            @endphp

            {{--  ! ||------------------------------------------------------------------------------- --}}
            {{--  ! ||                                for create project                               ||
            {{--  ! ||------------------------------------------------------------------------------- --}}
        @elseif (session()->has('create'))
            <script>
                // Extract the session data
                var sweetAlertData = @json(session('create'));

                // Display SweetAlert using the session data
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'Create has been successfully'
                })
            </script>
            @php
                // Remove the session data to prevent it from showing again
                session()->forget('create');
            @endphp
        @endif

</body>

</html>
