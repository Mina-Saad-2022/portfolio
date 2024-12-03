@extends('dashboard.layouts.app')

@section('title')
    <title>work experience</title>
@endsection

@section('icon')
<i class="pe-7s-loop"></i>
@endsection

@section('title_of_page')
    <h2>work experience</h2>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table id="example" class="table table-striped display text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">work experience</th>
                            <th class="text-center" >Delete</th>
                            <th class="text-center" >Edit</th>
                            <th class="text-center">check</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($experiences as $experience)
                            <tr>
                                <td>{{ $experience->id }}</td>
                                <td>{{ $experience->experiences }}</td>
                                  <td>
                                     <a class="text-danger" href="{{route('dashboard.destroy_experience', $experience->id )}}"><i class="pe-7s-trash"> </i></a></td>
                                </td>
                                <td> <a href="{{route('dashboard.edit_experience', $experience->id )}}"><i class="pe-7s-pen"> </i></a></td>
                                <td>
                                    <input type="checkbox" class="delete-checkbox" name="selectedIdis[]"
                                        value="{{ $experience->id }}">
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <form class="py-2" id="delete-form" action="{{ route('dashboard.selected_experience') }}" method="Post">
                    @csrf
                    {{-- @method('delete') --}}
                    <button type="submit" class="btn btn-danger" id="delete-button">Delete Selected</button>
                </form>
                <button id="check-all-button" class="btn btn-danger"> Check All</button>
            </div>
        </div>
    </div>

@endsection
