@extends('dashboard.layouts.app')

@section('title')
    <title>Edit experience</title>
@endsection

@section('icon')
<i class="pe-7s-pen">
</i>@endsection

@section('title_of_page')
    <h2>Create work experience</h2>
@endsection

@section('content')
    <div class="container">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="{{ route('dashboard.update_experience', $experiences->id) }}" method="POST" >
                    @csrf
                  <div class="row">

                      {{-- work experience --}}
                      <div class="col-8 m-auto">
                        <label for="experience" class="">work experience</label>
                        <input id="experience" type="text" name="experience" value="{{ $experiences->experiences }} "class="mb-2 form-control-lg form-control">
                    </div>

                    <div class="col-4 text-center">
                        <button type="submit" class="p-3 w-50 mb-2 mr-2 btn btn-success" id="create-button">Create</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
@endsection
