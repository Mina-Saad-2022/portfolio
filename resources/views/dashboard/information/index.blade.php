@extends('dashboard.layouts.app')
@section('title')
    <title>All Information</title>
@endsection

@section('icon')
    <i class="pe-7s-loop"></i>
@endsection

@section('title_of_page')
    <h2>All Information</h2>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table id="example" class="table table-striped display text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Github</th>
                            <th class="text-center">FaceBook</th>
                            <th class="text-center">WhatsApp</th>
                            <th class="text-center">Instagram</th>
                            <th class="text-center">Linkedin</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">PDF</th>
                            <th class="text-center">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($informations as $information)
                            <tr>
                                <td>{{ $information->email }}</td>
                                <td>{{ $information->phone }}</td>
                                <td>{{ $information->address }}</td>
                                <td><a target="_blank" class="h5  " href="{{ $information->github }}"><i class="fa-brands fa-github"></i></a></td>
                                <td><a target="_blank" class="h5  " href="{{ $information->facebook }}"> <i class="fa-brands fa-facebook"></i> </a></td>
                                <td><a target="_blank" class="h5  " href="{{ $information->whatsapp }}"> <i class="fa-brands fa-whatsapp"></i> </a></td>
                                <td><a target="_blank" class="h5  " href="{{ $information->instagram }}"> <i class="fa-brands fa-instagram"></i> </a> </td>
                                <td><a target="_blank" class="h5  " href="{{ $information->linkedin }}"> <i class="fa-brands fa-linkedin"></i> </a>

                                <td class="w-25">
                                    <div class="m-auto">
                                        {{-- <a href="{{ $information->url }}">

                                        </a> --}}
                                            <img src="{{ route('view-image') }}" class="card-img-top w-25" alt="Uploaded Image">
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('dashboard.PDF') }}">
                                        {{ $information->pdf}}
                                    </a>
                                </td>

                                <td>
                                    <a href="{{ route('dashboard.edit_information') }}">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
