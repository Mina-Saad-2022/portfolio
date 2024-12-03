@extends('dashboard.layouts.app')
@section('title')
    <title>Edit Information</title>
@endsection

@section('icon')
    <i class="pe-7s-loop"></i>
@endsection

@section('title_of_page')
    <h2>Edit Information</h2>
@endsection

@section('content')
    <div class="container">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="{{ route('dashboard.create_information') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @foreach ($informations as $information)
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        aria-describedby="emailHelp" value="{{ $information->email }}">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        value="{{ $information->phone }}">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address" id="address"
                                        value="{{ $information->address }}">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="github">GitHub</label>
                                    <input type="text" class="form-control" name="github" id="github"
                                        value="{{ $information->github }}">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="facebook">facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="facebook"
                                        value="{{ $information->facebook }}">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="whatsapp">whatsapp</label>
                                    <input type="text" class="form-control" name="whatsapp" id="whatsapp"
                                        value="{{ $information->whatsapp }}">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="instagram">instagram</label>
                                    <input type="text" class="form-control" name="instagram" id="instagram"
                                        value="{{ $information->instagram }}">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="linkedin">linkedin</label>
                                    <input type="text" class="form-control" name="linkedin" id="linkedin"
                                        value="{{ $information->linkedin }}">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="position-relative form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <input name="image" accept=".jpg,.png,.jpeg" type="file"
                                                id="mina_{{ $loop->index }}" class="imageInput" hidden />
                                            <label class="w-100 btn btn-primary upload_btn"
                                                for='mina_{{ $loop->index }}'>Choose
                                                image</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="w-75 imagePreview Preview_{{ $loop->index }}">
                                                @if ($information->image)
                                                    <img src="{{ route('view-image') }}"
                                                        class="card-img-top w-25" alt="Uploaded Image">
                                                @else
                                                    No Image
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                    @error('image')
                                        <div class="alert alert-danger error m-2 h5">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--<div class="col-12 col-lg-6">-->
                            <!--    <div class="row">-->
                            <!--        <div class="col-4">-->
                            <!--            <div class="form-group">-->
                            <!--                <input name="pdf" accept=".pdf" type="file" class="form-control-file" id="file_pdf" hidden>-->
                            <!--                <label class="btn btn-primary upload_btn" for="file_pdf">Uploade</label>-->
                            <!--              </div>-->
                            <!--        </div>-->
                            <!--        <div class="col-8">-->
                            <!--            <div class="pdfPreview"></div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div> -->
                            <div class="col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <input name="pdf" accept=".pdf" type="file" class="form-control-file"
                                                id="file_pdf" hidden>
                                            <label class="w-100 btn btn-primary upload_btn" for="file_pdf"
                                                id="fileLabel">Upload</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="pdfPreview">
                                            <embed src="{{ route('view-pdf') }} "id="pdfEmbed" type="application/pdf" width="100%"
                                                 />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-11 text-center">
                                <button type="submit" class="p-3 w-50  mr-2 btn btn-success"
                                    id="create-button">Create</button>
                            </div>
                        </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
    <script>
        const imageInputs = document.querySelectorAll('.imageInput');
        const imagePreviews = document.querySelectorAll('.imagePreview');

        // Add event listeners to each file input to handle image selection
        imageInputs.forEach((imageInput, index) => {
            imageInput.addEventListener('change', function() {
                const file = imageInput.files[0];
                const imagePreview = imagePreviews[index];

                if (file) {
                    // Read the file as a data URL
                    const reader = new FileReader();

                    reader.addEventListener('load', function() {
                        // Create a new image element
                        const img = document.createElement('img');
                        img.src = reader.result;
                        img.style.maxWidth = '25%';
                        img.style.maxHeight =
                            '400px'; // You can adjust the maximum height as per your needs
                        img.alt = 'Uploaded Image';

                        // Remove any previously displayed images in the specific image preview container
                        while (imagePreview.firstChild) {
                            imagePreview.removeChild(imagePreview.firstChild);
                        }

                        // Append the new image to the image preview container
                        imagePreview.appendChild(img);
                    });

                    // Read the file as a data URL
                    reader.readAsDataURL(file);
                } else {
                    // No image is selected
                    while (imagePreview.firstChild) {
                        imagePreview.removeChild(imagePreview.firstChild);
                    }

                    // Show "No image" text
                    const noImageText = document.createTextNode('No image');
                    imagePreview.appendChild(noImageText);
                }
            });
        });
    </script>
@endsection
