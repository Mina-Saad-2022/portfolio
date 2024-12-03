@extends('dashboard.layouts.app')

@section('title')
    <title>Create Education and Work</title>
@endsection

@section('icon')
    <i class="pe-7s-plus">
    </i>
@endsection

@section('title_of_page')
    <h2 id="content">Create new work & new education</h2>
@endsection

@section('content')
    <div class="container">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="tabs">
                    <ul class="tab-links">
                        <div class="row">
                            <div class="col-6"><a class="btn btn-primary w-100" href="#work">Create Work</a></div>
                            <div class="col-6"><a class="btn btn-warning w-100" href="#education">Create Education</a>
                            </div>
                        </div>
                    </ul>
                    <div class="tab-content ">
                        <div id="work" class="tab active">
                            @include('dashboard.Education_work.work.create.index')
                        </div>
                        <div id="education" class="tab ">
                            <div class="row">
                                <div class="col-10" id="all">
                                    <form action="{{ route('dashboard.new_education') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            {{-- work experience --}}
                                            <div class="col-10 m-auto" id="new_education">
                                                <input id="experience" placeholder="type your education" type="text"
                                                    name="education[]" class="w-100 p-2 mb-2 form-control-lg form-control">
                                                <div id="experienceError">
                                                    @error('educatione')
                                                        <div class="alert alert-danger error m-2 h5">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6 m-auto button_education">
                                                <button type="submit" class="w-100 btn btn-success element_experience"
                                                    id="create-button">Create</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-2">
                                    <button id="education_n" class="btn btn-warning mb-2 text-light"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Add new input element and delete button
            $('#education_n').click(function() {
                var newInput = '<div class=" mb-2 d-flex justify-content-start">' +
                    '<input id="experience" placeholder="type your education" type="text" name="education[]" class="w-100 p-2 mb-2 form-control-lg form-control">' +
                    '<button class="btn btn-danger  h-25 p-2 delete-experience mx-lg-2" type="button">Delete</button>' +
                    '</div>';
                $('#new_education').append(newInput);
            });

            // Delete input element
            $(document).on('click', '.delete-experience', function() {
                $(this).parent('.d-flex').remove();
            });
        });





        $(document).ready(function() {
            // Add new input element and delete button
            $('#work_n').click(function() {
                var newInput = '<div class=" mb-2 d-flex justify-content-start">' +
                    '<input id="work" placeholder="type your work" type="text" name="work[]" class="w-100 p-2 mb-2 form-control-lg form-control">' +
                    '<button class="btn btn-danger h-25 p-2 delete-work mx-lg-2" type="button">Delete</button>' +
                    '</div>';
                $('#element_work').append(newInput);
            });

            // Delete input element
            $(document).on('click', '.delete-work', function() {
                $(this).parent('.d-flex').remove();
            });
        });
    </script>
@endsection
