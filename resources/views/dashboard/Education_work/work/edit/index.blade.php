@extends('dashboard.layouts.app')

@section('title')
    <title>Edit Work </title>
@endsection

@section('title_of_page')
    <h2>Edit Work </h2>
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('dashboard.update_work',$work->id ) }}" method="POST" >
            @csrf
            <div class="row">
                <div class="col-8">
                    <input type="text" class="form-control mb-2 mr-sm-2" name="work" value="{{ $work->work }}">
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-success mb-2">Edit Work</button>
                </div>
            </div>
        </form>
    </div>
@endsection
