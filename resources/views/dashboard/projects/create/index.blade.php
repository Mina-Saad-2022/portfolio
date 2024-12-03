@extends('dashboard.layouts.app')

@section('title')
    <title>Create Project</title>
@endsection

@section('icon')
    <i class="pe-7s-plus">
    </i>
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
                        <form id="form" action="{{ route('dashboard.upload') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div id="create_project">
                                    <div class="row">
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
                                            @error('title.*')
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
                                                <input name="image" accept=".jpg,.png,.jpeg" type="file" id="mina"
                                                    class="imageInput" hidden />
                                                <label class="btn btn-primary upload_btn"for='mina'>image</label>
                                                <div class="imagePreview Preview">
                                                </div>
                                                @error('image')
                                                    <div class="alert alert-danger error m-2 h5">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- <div class="col-lg-5     col-12 m-auto">
                                        <div class="position-relative form-group">
                                            <div class="d-flex align-items-center">
                                                <input name="image[]" accept=".jpg,.png,.jpeg" type="file"
                                                    id="mina" class="imageInput" hidden />
                                                <label class="mb-2  btn btn-primary upload_btn h-25"
                                                    for="mina">Choose
                                                    image</label>
                                                <div class="imagePreview Preview p-2"> </div>
                                            </div>

                                        </div>
                                    </div> --}}

                                        <div class="col-3 ">
                                            {{-- <div class="imagePreview Preview"> </div> --}}
                                            <div class="w-100">
                                                @error('image')
                                                    <div class="alert alert-danger error m-2_h5">{{ $message }}</div>
                                                @enderror
                                            </div>

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
<<<<<<< HEAD


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script>
        $(document).ready(function() {
            let imageCount = 0;

            // Event handler for the "plus_new_skills" button click
            $("#plus_new_project").click(function(e) {
                var imagePreviewId = 'imagePreview' + uniqueId;

                // Create the image preview container and label for the new project
                var imageLabel = $('<label for="' + imagePreviewId + '" class="w-50 image-label"></label>');
                var imagePreviewContainer = $('<div id="' + imagePreviewId +
                    '" class="w-50 imagePreview"></div>');

                e.preventDefault(); // Prevent the default form submission behavior

                // Clone the "create_project" container
                var elementProjectContainer = $("#create_project").clone();

                // Reset the input values of the cloned elements
                elementProjectContainer.find("input[type='text'], input[type='file']").val("");

                // Add a delete button to the cloned element
                var deleteButton = $("<button class='btn btn-danger delete_projects'>")
                    .text("Delete")
                    .click(function() {
                        $(this).parent('#create_project').remove();
                    });

                elementProjectContainer.append(deleteButton);

                var uniqueId = Date.now();

                // Update the IDs and names of the file inputs
                var fileInput = elementProjectContainer.find("input[type='file']");
                var newFileInputId = fileInput.attr("id") + uniqueId;
                fileInput.attr("id", newFileInputId);
                fileInput.attr("name", "image[" + imageCount + "]");

                // Create the image preview container and label for the new project
                var imageLabel = $(
                    `<label for="${newFileInputId}" class="w-50 image-label"></label>`);
                var imagePreviewContainer = $(
                    `<div id="imagePreview${imageCount}" class="w-50 imagePreview"></div>`);

                // Update the IDs and names of the cloned radio inputs
                elementProjectContainer.find("input[type='radio']").each(function() {
                    var radioId = $(this).attr("id");
                    var newRadioId = radioId + uniqueId;
                    $(this).attr("id", newRadioId);
                    $(this).attr("name", "category[" + imageCount + "]");
                });

                // Append the label and image preview container to the corresponding col-3
                elementProjectContainer.find('.col-3').append(imageLabel).append(imagePreviewContainer);
                // Append the cloned container to the projects container
                elementProjectContainer.find(".imagePreview").html("");
                $("#projects-container").append(elementProjectContainer);
                // Increment the image count for the next project
                imageCount++;
            });

            $("body").on("click", ".upload_btn", function() {
                var btn = $(this);
                var input = btn.parent().find("input[type='file']");
                input.trigger("blur");
            });

            $("body").on("change", ".imageInput", function() {

                var input = $(this);
                var file = event.target.files[0];
                img = new Image();
                img.src = URL.createObjectURL(file);
                img.onload = function() {
                    var prev = input.parent().find(".imagePreview");
                    prev.append(img);
                };
            });

        });
    </script> --}}


    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#plus_new_project').on('click', function() {
                var fileInput = $('#mina');
                var clonedInput = fileInput.clone();

                var newId = 'mina_' + $('.imageInput').length;
                clonedInput.attr('id', newId);

                var newLabel = $('<label class="btn btn-primary upload_btn" for="' + newId +
                    '">image</label>');
                var newPreview = $('<div class="imagePreview Preview"></div>');
                var container = $('<div class="input-container"></div>');

                container.append(clonedInput);
                container.append(newLabel);
                container.append(newPreview);

                fileInput.parent().after(container);

                clonedInput.on('change', function() {
                    if (this.files && this.files[0]) {
                        var reader = new FileReader();
                        var currentPreview = $(this).siblings('.imagePreview');

                        reader.onload = function(e) {
                            var image = $('<img src="' + e.target.result + '" />');
                            currentPreview.empty().append(image);
                        };

                        reader.readAsDataURL(this.files[0]);
                    }
                });

                clonedInput.trigger('click');
            });
        });
    </script> --}}



    {{-- <script>
        $(document).ready(function () {
            let imageCount = 0;

            // Event handler for the "plus_new_project" button click
            $("#plus_new_project").click(function (e) {
                e.preventDefault(); // Prevent the default form submission behavior

                var elementProjectContainer = $("#create_project").clone();
                elementProjectContainer.removeAttr('id');
                elementProjectContainer.addClass('project');

                var uniqueId = Date.now();

                // Update the IDs and names of the file inputs
                var fileInput = elementProjectContainer.find(".imageInput");
                var newFileInputId = 'imageInput_' + uniqueId;
                fileInput.attr("id", newFileInputId);
                fileInput.attr("name", "image[" + imageCount + "]");

                var imageLabel = elementProjectContainer.find("label[for='mina']");
                imageLabel.attr('for', newFileInputId);

                // Reset the input values of the cloned elements
                fileInput.val("");
                elementProjectContainer.find(".imagePreview").empty();

                // Add a delete button to the cloned element
                var deleteButton = $("<button class='btn btn-danger delete_projects'>")
                    .text("Delete")
                    .click(function () {
                        $(this).closest('.project').remove();
                    });

                elementProjectContainer.append(deleteButton);

                // Append the cloned container to the projects container
                $("#projects-container").append(elementProjectContainer);
                imageCount++;
            });

            $("body").on("change", ".imageInput", function (event) {
                var input = $(this);
                var file = event.target.files[0];
                var reader = new FileReader();

                reader.onload = function (e) {
                    var image = $('<img src="' + e.target.result + '" />');
                    input.siblings('.imagePreview').empty().append(image);
                };

                reader.readAsDataURL(file);
            });
        });
    </script> --}}

    <script>
        $(document).ready(function () {
            let imageCount = 0;

            // Event handler for the "plus_new_project" button click
            $("#plus_new_project").click(function (e) {
                e.preventDefault(); // Prevent the default form submission behavior

                var elementProjectContainer = $("#create_project").clone();
                elementProjectContainer.removeAttr('id');
                elementProjectContainer.addClass('project');

                var uniqueId = Date.now();

                // Update the IDs and names of the file inputs
                var fileInput = elementProjectContainer.find(".imageInput");
                var newFileInputId = 'imageInput_' + uniqueId;
                fileInput.attr("id", newFileInputId);
                fileInput.attr("name", "image[" + imageCount + "]");

                var imageLabel = elementProjectContainer.find("label[for='mina']");
                imageLabel.attr('for', newFileInputId);

                // Update the form-check IDs and labels
                var formCheck = elementProjectContainer.find('.form-check');
                var formCheckInput = formCheck.find('.form-check-input');
                var formCheckLabel = formCheck.find('.form-check-label');

                var newFormCheckId = 'example_checkbox_' + uniqueId;
                formCheckInput.attr('id', newFormCheckId);
                formCheckInput.attr('name', "checkbox[" + imageCount + "]");
                formCheckLabel.attr('for', newFormCheckId);

                // Reset the input values of the cloned elements
                fileInput.val("");
                elementProjectContainer.find(".imagePreview").empty();

                // Add a delete button to the cloned element
                var deleteButton = $("<button class='btn btn-danger delete_projects'>")
                    .text("Delete")
                    .click(function () {
                        $(this).closest('.project').remove();
                    });

                elementProjectContainer.append(deleteButton);

                // Append the cloned container to the projects container
                $("#projects-container").append(elementProjectContainer);
                imageCount++;
            });

            $("body").on("change", ".imageInput", function (event) {
                var input = $(this);
                var file = event.target.files[0];
                var reader = new FileReader();

                reader.onload = function (e) {
                    var image = $('<img src="' + e.target.result + '" />');
                    input.siblings('.imagePreview').empty().append(image);
                };

                reader.readAsDataURL(file);
            });
        });
    </script>
@endsection
=======
@endsection
>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a
