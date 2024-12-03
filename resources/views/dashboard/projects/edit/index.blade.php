@extends('dashboard.layouts.app')

@section('title')
    <title>Edit Project</title>
@endsection

@section('icon')
<i class="pe-7s-pen">
</i>@endsection

@section('title_of_page')
    <h2>Edit Project</h2>
@endsection

@section('content')
    <div class="container">
        <div class="main-card mb-3 card">
            <div class="card-body">
<<<<<<< HEAD
           <form action="{{ route('dashboard.update', $data->id) }}" method="POST" enctype="multipart/form-data">
           {{-- @method('PUT') --}}
           @csrf
           <div class="row">
               {{-- website category --}}
               <div class="col-12 text-center">
                   <fieldset class="position-relative form-group">
                       <label for="details" class="">choose website category</label>
                       <div class="row">
                           <div class="col-4 m-auto">
                               <div class="position-relative form-check"><label class="form-check-label"><input
                                           type="radio" name="category"
                                           @if ($data->category == 'skills') checked @endif value="skills"
                                           class="form-check-input"> skills Project
                                   </label>
                               </div>
                           </div>
                           <div class="col-4">
                               <div class="position-relative form-check"><label class="form-check-label"><input
                                           type="radio" name="category"
                                           @if ($data->category == 'work') checked @endif value="work"
                                           class="form-check-input"> Work Project
                                   </label>
                               </div>
                           </div>
                       </div>
                   </fieldset>
               </div>
               {{-- Title website --}}
               <div class="col-5 m-auto">
                   <label for="title" class="">Title website</label>
                   <input id="title" type="text" name="title" class="mb-2 form-control-lg form-control"
                       value="{{ $data->title }}">
               </div>
               {{-- URL website --}}
               <div class="col-5 m-auto">
                   <label for="url" class="">URL website</label>
                   <div class="input-group">
                       <div class="input-group-prepend">
                           <span class="input-group-text" id="url">@</span>
                       </div>
                       <input type="text" name="url" class="form-control" id="url"
                           value="{{ $data->url }}">
                   </div>
               </div>
               {{-- Details website --}}
               <div class="col-5 m-auto">
                   <div class="position-relative form-group">
                       <label for="details" class="">Details website</label>
                       <textarea id="details" name="details" class="form-control">{{ $data->details }}</textarea>
                   </div>
               </div>

               {{-- image website --}}
               <div class="col-lg-2 col-12 m-auto">
                   <div class="position-relative form-group">
                       <input class="imageInput" name="image" type="file" id="upload" hidden />
                       <label class="btn btn-primary" for="upload">Choose image</label>
                   </div>

               </div>
               <div class="col-3">
                   <div id="imagePreview" class="w-50 imagePreview">
                       <img class="rounded" src="{{ asset('dashboard/assets/images/projects/' . $data->image) }}"
                           alt="Project Image" width="129">
                   </div>
               </div>
               <div id="projects-container"></div>

               <div class="col-12 text-center">
                   <button type="submit" class="p-3 w-50 mb-2 mr-2 btn btn-success" id="create-button">Edit
                       Project</button>
               </div>
           </div>
           </form>
=======
                <form action="{{ route('dashboard.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        {{-- website category --}}
                        <div class="col-12 text-center">
                            <fieldset class="position-relative form-group">
                                <label for="details" class="">choose website category</label>
                                <div class="row">
                                    <div class="col-4 m-auto">
                                        <div class="position-relative form-check"><label class="form-check-label"><input
                                                    type="radio" name="category"
                                                    @if ($data->category == 'skills') checked @endif value="skills"
                                                    class="form-check-input"> skills Project
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="position-relative form-check"><label class="form-check-label"><input
                                                    type="radio" name="category"
                                                    @if ($data->category == 'work') checked @endif value="work"
                                                    class="form-check-input"> Work Project
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        {{-- Title website --}}
                        <div class="col-5 m-auto">
                            <label for="title" class="">Title website</label>
                            <input id="title" type="text" name="title" class="mb-2 form-control-lg form-control"
                                value="{{ $data->title }}">
                        </div>
                        {{-- URL website --}}
                        <div class="col-5 m-auto">
                            <label for="url" class="">URL website</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="url">@</span>
                                </div>
                                <input type="text" name="url" class="form-control" id="url"
                                    value="{{ $data->url }}">
                            </div>
                        </div>
                        {{-- Details website --}}
                        <div class="col-5 m-auto">
                            <div class="position-relative form-group">
                                <label for="details" class="">Details website</label>
                                <textarea id="details" name="details" class="form-control">{{ $data->details }}</textarea>
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
                            <button type="submit" class="p-3 w-50 mb-2 mr-2 btn btn-success"
                                id="create-button">Edit</button>
                        </div>
                    </div>
                </form>
>>>>>>> 7966584c5e6f87c46522a2f6f2cc2aee0cc6badc
            </div>
        </div>

    </div>
    {{-- <button t class="p-3 w-50 mb-2 mr-2 btn btn-success" id="mina">
        test sweet alert</button> --}}

<script>
    const imageInputs = document.querySelectorAll('.imageInput');
const imagePreviews = document.querySelectorAll('.imagePreview');

// Add event listeners to each file input to handle image selection
imageInputs.forEach((imageInput, index) => {
    imageInput.addEventListener('change', function () {
        const file = imageInput.files[0];

        if (file) {
            // Read the file as a data URL
            const reader = new FileReader();

            reader.addEventListener('load', function () {
                // Create a new image element
                const img = document.createElement('img');
                img.src = reader.result;
                img.style.maxWidth = '100%';
                img.style.maxHeight = '400px'; // You can adjust the maximum height as per your needs
                img.alt = 'Uploaded Image';

                // Remove any previously displayed images in the specific image preview container
                const imagePreview = imagePreviews[index];
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
});

</script>

@endsection
{{-- <script>
    @if (session('success'))
        Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
        )
    @endif
</script> --}}




{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>


    <button t class="p-3 w-50 mb-2 mr-2 btn btn-success" id="mina">
        test sweet alert</button>



<script>
    $('#mina').on('click', function() {

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'Signed in successfully'
        })
    })
</script>

</body>
</html> --}}
