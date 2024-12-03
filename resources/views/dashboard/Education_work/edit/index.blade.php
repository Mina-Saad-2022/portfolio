@extends('dashboard.layouts.app')

@section('title')
    <title>Edit Education </title>
@endsection

@section('icon')
<i class="pe-7s-pen">
</i>@endsection

@section('title_of_page')
    <h2>Edit Education </h2>
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('dashboard.update_education',$education->id ) }}" method="POST" >
            @csrf
            <div class="row">
                <div class="col-8">
                    <input type="text" class="form-control mb-2 mr-sm-2" name="education" value="{{ $education->education }}">
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-success mb-2">Edit Education</button>
                </div>
            </div>
        </form>
    </div>
@endsection
