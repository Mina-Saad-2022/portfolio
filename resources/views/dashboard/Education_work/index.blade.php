@extends('dashboard.layouts.app')

@section('title')
    <title>Education and Work</title>
@endsection

@section('icon')
<i class="pe-7s-loop">
</i>@endsection


@section('title_of_page')
    <h2>Education and Work</h2>
@endsection


@section('content')
    <div class="container">
        <div class="tabs">
            <ul class="tab-links">
                <div class="row">
                    <div class="col-6"><a class="btn btn-primary w-100" href="#work">All Work</a></div>
                    <div class="col-6"><a class="btn btn-warning w-100" href="#education">All Education</a></div>
                </div>
            </ul>

            <div class="tab-content ">
                @include('dashboard.Education_work.work.index')
                <div id="education" class="tab row">
                    <div class="col">
                        <table id="table_education" class="table table-striped display text-center" style="width:100%">
                            <thead>
                                <tr>

                                    <th class="text-center">#</th>
                                    <th class="text-center">Education</th>
                                    <th class="text-center">Delete</th>
                                    <th class="text-center">Edit</th>
                                    <th class="text-center">check</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($education as $educations)
                                    <tr>

                                        <td>{{ $educations->id }}</td>
                                        <td>{{ $educations->education }}</td>
                                        <td>
                                            <a class="text-danger" href="{{ route('dashboard.destroy_education', $educations->id) }}"><i class="pe-7s-trash"> </i></a>
                                        </td>
                                        </td>
                                        <td>
                                            <a href="{{ route('dashboard.edit_education', $educations->id) }}">
                                                <i class="pe-7s-pen"> </i>
                                            </a>
                                        </td>
                                        <td>
                                            <input type="checkbox" class="delete-checkbox" name="selectedIds[]"
                                                value="{{ $educations->id }}">
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <form class="py-2" id="delete-form" action="{{ route('dashboard.selected_education') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger" id="delete-button">Delete Selected</button>
                        </form>
                        <button id="check-all-button" class="btn btn-danger"> Check All</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
