@extends('dashboard.layouts.app')

@section('title')
    <title>MY PDF</title>
@endsection
@section('icon')
<i class="fa-solid fa-file-pdf"></i>
@endsection

@section('title_of_page')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.5.207/pdf.min.js"></script>

    <h2>My PDF C.V</h2>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div style="text-align: center">
                    <embed src="{{ route('view-pdf') }}" type="application/pdf" width="100%" height="600px" />
                </div>
            </div>
        </div>
    </div>
@endsection
