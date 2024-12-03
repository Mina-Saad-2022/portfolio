<<<<<<< HEAD
<div class="row">
    <div class="col-10">
        <form action="{{ route('dashboard.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row" id="row">
                {{-- website category --}}
                <div class="col-12 text-center">
                    <fieldset class="position-relative form-group">
                        <label for="details" class="">choose website category</label>
                        <div class="row">
                            <div class="col-6 col-lg-4 m-auto">
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="category" value="skills"
                                            class="form-check-input" id="skills"> skills Project
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="position-relative form-check"><label
                                        class="form-check-label"><input type="radio" name="category"
                                            value="work" class="form-check-input" id="work"> Work
                                        Project
                                    </label>
=======
@extends('dashboard.layouts.app')
@section('title')
    <title>test</title>
@endsection

@section('title_of_page')
    <h2>Create Project</h2>
@endsection

@section('content')
    <div class="container">
        <div class="main-card mb-3 card">
            <div class="card-body">

                <form action="{{ route('new') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        {{-- website category --}}
                        <div class="col-12 text-center">
                            <fieldset class="position-relative form-group">
                                <label for="details" class="">choose website category</label>
                                <div class="row">
                                    <div class="col-4 m-auto">
                                        <div class="position-relative form-check"><label class="form-check-label"><input
                                                    type="radio" name="category" value="skills" class="form-check-input">
                                                skills Project
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="position-relative form-check"><label class="form-check-label"><input
                                                    type="radio" name="category" value="work" class="form-check-input">
                                                Work Project
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        {{-- Title website --}}
                        <div class="col-5 m-auto">
                            <label for="title" class="">Title website</label>
                            <input id="title" type="text" name="title" class="mb-2 form-control-lg form-control">
                        </div>
                        {{-- URL website --}}
                        <div class="col-5 m-auto">
                            <label for="url" class="">URL website</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="url">@</span>
>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD
                        <div class="col-lg-6 col-12 m-auto">
                            @error('category')
                                <div class="alert alert-danger error m-2 h5">{{ $message }}</div>
                            @enderror
                        </div>
                    </fieldset>
                </div>
=======
                        {{-- Details website --}}
                        <div class="col-5 m-auto">
                            <div class="position-relative form-group">
                                <label for="details" class="">Details website</label>
                                <textarea id="details" name="details" class="form-control"></textarea>
                            </div>
                        </div>
                        {{-- image website --}}
                        <div class="col-5 m-auto">
                            <div class="position-relative form-group">
                                <input name="image" type="file" id="upload" hidden />
                                <label class="btn btn-primary" for="upload">Choose image</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="p-3 w-50 mb-2 mr-2 btn btn-success">Create</button>
                        </div>
                    </div>
                </form>

>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a

                <div class="col-12 text-center">
                    <button type="submit" class="p-3 w-50 mb-2 mr-2 btn btn-success"
                        id="create-button">Create</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-2">
        <button id="plus_new_project" class="btn btn-warning mb-2 text-light"><i class="fa-solid fa-circle-plus"></i></button>
    </div>
</div>







{{-- @extends('dashboard.layouts.app')

@section('title')
    <title>Create Project</title>
@endsection

@section('title_of_page')
    <h2>Create Project</h2>
@endsection

@section('content')
    <div class="container">
        <div class="main-card mb-3 card">
            <div class="card-body" id="meml">
                <div class="row">
                    <div class="col-10">
                        <form action="{{ route('dashboard.upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div id="create_project" class="testCreate">
                                    <div class="row cloning_row" id="0">
                                        {{-- website category --}}
                                        <div class="col-12 text-center">
                                            <fieldset class="position-relative form-group">
                                                <label for="details" class="">Choose website category</label>
                                                <div class="row">
                                                    <div class="col-6 col-lg-4 m-auto">
                                                        <div class="position-relative form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" name="category[0]" value="skills"
                                                                    class="form-check-input" id="skills"> Skills Project
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-lg-4">
                                                        <div class="position-relative form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" name="category[0]" value="work"
                                                                    class="form-check-input" id="work"> Work Project
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12 m-auto">
                                                    @error('category[0]')
                                                        <div class="alert alert-danger error m-2 h5">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </fieldset>
                                        </div>
                                        {{-- Title website --}}
                                        <div class="col-lg-5 col-12 m-auto">
                                            <label for="title" class="">Title website</label>
                                            <input id="title" type="text" name="title[]"
                                                class="mb-2 form-control-lg form-control">
                                            @error('title')
                                                <div class="alert alert-danger error m-2 h5">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{-- URL website --}}
                                        <div class="col-lg-5 col-12 m-auto">
                                            <label for="url" class="">URL website</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="url">@</span>
                                                </div>
                                                <input type="text" name="url[]" class="form-control" id="url">
                                            </div>
                                            @error('url')
                                                <div class="alert alert-danger error m-2 h5">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{-- Details website --}}
                                        <div class="col-lg-5 col-12 m-auto">
                                            <div class="position-relative form-group">
                                                <label for="details" class="">Details website</label>
                                                <textarea id="details" name="details[]" class="form-control"></textarea>
                                                @error('details')
                                                    <div class="alert alert-danger error m-2 h5">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- image website --}}
                                        <div class="col-lg-2 col-12 m-auto">
                                            <div class="position-relative form-group">
                                                <input name="image" type="file" id="upload" hidden />
                                                <label class="btn btn-primary" for="upload">Choose image</label>
                                                @error('image')
                                                    <div class="alert alert-danger error m-2 h5">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div id="imagePreview" class="w-50"></div>
                                        </div>
                                    </div>
                                </div>

                                <div id="projects-container"></div>

                                <div class="col-12 text-center">
                                    <button type="submit" class="p-3 w-50 mb-2 mr-2 btn btn-success"
                                        id="create-button">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-2">
                        <button id="plus_new_project" class="btn btn-warning mb-2 text-light"><i
                                class="fa-solid fa-circle-plus"></i></button>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var categoryCtx = 1;
            // Event handler for the "plus_new_skills" button click
            $("#plus_new_project").click(function(e) {
                e.preventDefault(); // Prevent the default form submission behavior

                // Clone the "create_project" container
                // var elementProjectContainer = $("#create_project").clone();

                let trCount = $("#create_project").find('.cloning_row:last').length;
                let numberIncr = trCount > 0 ? parseInt($("#create_project").find('.cloning_row:last').attr(
                    'id')) + 1 : 0;
                $("#create_project").append($(`   <div id="create_project">
                <div class="row cloning_row" id="0">
                    <div class="col-12 text-center">
                        <fieldset class="position-relative form-group">
                            <label for="details" class="">Choose website category</label>
                            <div class="row">
                                <div class="col-6 col-lg-4 m-auto">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="category[${numberIncr}]" value="skills"
                                                class="form-check-input" id="skills"> Skills Project
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="category[${numberIncr}]" value="work"
                                                class="form-check-input" id="work"> Work Project
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-lg-5 col-12 m-auto">
                        <label for="title" class="">Title website</label>
                        <input id="title" type="text" name="title[]"
                            class="mb-2 form-control-lg form-control">
                    </div>
                    <div class="col-lg-5 col-12 m-auto">
                        <label for="url" class="">URL website</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="url">@</span>
                            </div>
                            <input type="text" name="url[]" class="form-control" id="url">
                        </div>

                    </div>
                    <div class="col-lg-5 col-12 m-auto">
                        <div class="position-relative form-group">
                            <label for="details" class="">Details website</label>
                            <textarea id="details" name="details[]" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-2 col-12 m-auto">
                        <div class="position-relative form-group">
                            <input name="image" type="file" id="upload1"  hidden />
                            <label class="btn btn-primary" for="upload" onclick="test('upload1','imagePreview1')">Choose image</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div id="imagePreview1" class="w-50"></div>
                    </div>
                </div>
            </div>`))




                // // Reset the input values of the cloned elements
                // elementProjectContainer.find("input[type='text'], input[type='file']").val("");

                // // Add a delete button to the cloned element
                // var deleteButton = $("<button class='btn btn-danger delete_projects'>")
                //     .text("Delete")
                //     .click(function() {});

                // elementProjectContainer.append(deleteButton);

                // var uniqueId = Date.now();

                // // Update the IDs and names of the cloned radio inputs
                // elementProjectContainer.find("input[type='radio']").each(function() {
                //     var radioId = $(this).attr("id");
                //     var newRadioId = radioId + uniqueId;
                //     $(this).attr("id", newRadioId);
                //     $(this).attr("name", "category[" + categoryCtx + "]");
                // });
                // categoryCtx++;
                // // Append the cloned container to the skills container
                // $("#projects-container").append(elementProjectContainer);

            });

            $(document).on('click', '.delete_projects', function() {
                $(this).parent('#create_project').remove();
            });

        });

        function test(upload, imagePrive) {
            // Get a reference to the file input and image preview elements
            var upload = document.getElementById(upload);
            var imagePreview = document.getElementById(imagePreview);

            // Add an event listener to the file input to handle image selection
            upload.addEventListener('change', function() {
                const file = upload.files[0];

                if (file) {
                    // Read the file as a data URL
                    const reader = new FileReader();

                    reader.addEventListener('load', function() {
                        // Create a new image element
                        const img = document.createElement('img');
                        img.src = reader.result;
                        img.style.maxWidth = '100%';
                        img.style.maxHeight =
                            '400px'; // You can adjust the maximum height as per your needs
                        img.alt = 'Uploaded Image';

                        // Remove any previously displayed images
                        while (imagePreview.firstChild) {
                            imagePreview.removeChild(imagePreview.firstChild);
                        }

                        // Append the new image to the image preview container
                        imagePreview.appendChild(img);
                    });

                    // Read the file as a data URL
                    reader.readAsDataURL(file);
                }


            });


        }
    </script>
@endsection }}
