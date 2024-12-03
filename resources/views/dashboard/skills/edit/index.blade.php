@extends('dashboard.layouts.app')

@section('title')
    <title>Edit Professional skills</title>
@endsection

@section('icon')
<i class="pe-7s-pen">
</i>@endsection

@section('title_of_page')
    <h2>Edit Professional skills</h2>
@endsection

@section('content')
    <div class="container">
        <div class="main-card mb-3 card">
            <div class="card-body" id="meml">
<<<<<<< HEAD
                <form action="{{ route('dashboard.update_skills' , $skills->id ) }}" method="get">
=======
                <form action="{{ route('dashboard.update_skills', $skills->id) }}" method="POST">
>>>>>>> 7966584c5e6f87c46522a2f6f2cc2aee0cc6badc
                    @csrf
                    <div class="row">
                        {{-- website category --}}
                        <div class="col-12 text-center">
                            <fieldset class="position-relative form-group">
                                <label class="">choose skills category</label>
                                <div class="row">
                                    <div class="col-4 m-auto">
                                        <div class="position-relative form-check"><label class="form-check-label"><input
                                                    type="radio" @if ($skills->category == 'Front End') checked @endif
                                                    name="category" value="Front End" class="form-check-input"
                                                    id="skills"> Front End </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="position-relative form-check"><label class="form-check-label"><input
                                                    type="radio" @if ($skills->category == 'Back End') checked @endif
                                                    name="category" value="Back End" class="form-check-input"
                                                    id="work"> Back End
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        {{-- Title skills --}}
                        <div class="col-5 m-auto">
                            <label for="Skill" class="">Title Skill</label>
                            <input id="Skill" type="text" name="skills" value="{{ $skills->skill }}"
                                class="mb-2 form-control-lg form-control">
                        </div>
                        {{-- ratio website --}}
                        <div class="col-5 m-auto">
                            <label for="ratio" class="">Ratio skill</label>
                            <input type="number" name="ratio" value="{{ $skills->ratio }}" class="form-control"
                                id="ratio">
                        </div>

<<<<<<< HEAD
                    <div class="col-12 text-center">
                        <button onclick="handleButtonClick()" type="submit" class="p-3 w-50 mb-2 mr-2 btn btn-success" id="create-button">Edit Skill</button>
                    </div>
=======
                        <div class="col-12 text-center">
                            <button onclick="handleButtonClick()" type="submit" class="p-3 w-50 mb-2 mr-2 btn btn-success"
                                id="create-button">Create</button>
                        </div>
>>>>>>> 7966584c5e6f87c46522a2f6f2cc2aee0cc6badc

                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function handleButtonClick() {
            // Retrieve the input value
            var inputValue = document.getElementsByClassName('form-check-input').value;

            // Perform conditional checks based on the input value
            if (inputValue = 'work') {
                inputValue.classList.add("work");
            } else {
                console.log('Input value is not "example"');
            }
        }
    </script>
@endsection
