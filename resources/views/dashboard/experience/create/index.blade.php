@extends('dashboard.layouts.app')

@section('title')
    <title>Create work experience</title>
@endsection

@section('icon')
<i class="pe-7s-plus">
</i>@endsection

@section('title_of_page')
    <h2>Create work experience</h2>
@endsection

@section('content')
    <div class="container">
        <div class="main-card mb-3 card">
<<<<<<< HEAD
            <div class="card-body">
                <div class="row" id="row">
                    <div class="col-10" id="all">
                        <form action="{{ route('dashboard.new_experience') }}" method="POST">
                            @csrf
                            <div class="row">
                                {{-- work experience --}}
                                <div class="col-10 m-auto" id="elemelnt_experience">
                                    <input id="experience" placeholder="Create new work experience" type="text"
                                        name="experience[]" class="w-100 p-2 mb-2 form-control-lg form-control">
                                    <div id="experienceError">
                                        @error('experience')
                                            <div class="alert alert-danger error m-2 h5">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6 m-auto button_experience">
                                    <button type="submit" class="w-100 btn btn-success element_experience"
                                        id="create-button">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-2">
                        <button id="experience_repeate" class="btn btn-warning mb-2 text-light"><i
                                class="fa-solid fa-circle-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ! ||-------------------------------------------------------------------------------- --}}
    {{-- ! ||                       to repeate element work experience                        --}}
    {{-- ! ||-------------------------------------------------------------------------------- --}}
=======
            <div class="card-body" id="meml">

                <form action="{{ route('dashboard.new_experience') }}" method="POST" >
                    @csrf
                    <div class="row">
                      {{-- work experience --}}
                      @foreach ($experiences as $experience)
                      <div class="col-8 m-auto experience">
                        <label for="experience" class="">work experience</label>
                        <input id="experience" type="text" name="experience[]" class="mb-2 form-control-lg form-control" value="{{ $experience }}">
                      </div>
                      @endforeach
                  
                      <div class="col-2 text-center">
                        <button type="submit" class="p-3 mb-2 mr-2 btn btn-success" id="create-button">Create</button>
                      </div>
                      <div class="col-2">
                        <button id="work_n" class="btn btn-warning mb-2 text-light"><i class="fa-solid fa-circle-plus"></i></button>
                      </div>
                    </div>
                  </form>
                  
            </div>
        </div>
    </div>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Event handler for the "work_n" button click
    $("#work_n").click(function(e) {
      e.preventDefault(); // Prevent the default form submission behavior

      // Clone the last "experience" element
      var lastExperienceElement = $(".experience").last();
      var clonedExperienceElement = lastExperienceElement.clone();

      // Clear the input value of the cloned element
      clonedExperienceElement.find("input").val("");

      // Append the cloned element to the form
      clonedExperienceElement.insertAfter(lastExperienceElement);
    });
  });
</script>


@endsection
>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            // Add new input element and delete button
            $('#experience_repeate').click(function () {
                var newInput = '<div class=" mb-2 d-flex justify-content-start">' +
                    '<input id="experience" placeholder="Create new work experience" type="text" name="experience[]" class="w-100 p-2 mb-2 form-control-lg form-control">' +
                    '<button class="btn btn-danger h-25 p-2 delete-experience mx-lg-2" type="button">Delete</button>' +
                    '</div>';
                $('#elemelnt_experience').append(newInput);
            });

            // Delete input element
            $(document).on('click', '.delete-experience', function () {
                $(this).parent('.d-flex').remove();
            });
        });
    </script>
@endsection
