@extends('dashboard.layouts.app')

@section('title')
    <title>All Project</title>
@endsection

@section('icon')
<i class="pe-7s-loop">
</i>@endsection

@section('title_of_page')
    <h2>All Project</h2>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table id="example" class="table table-striped display text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Details </th>
                            <th class="text-center">Category</th>
                            <th class="text-center">URL & image</th>
                            <th class="text-center">Delete</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">check</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->details }}</td>
                                <td>{{ $item->category }}</td>
                                <td>
                                    <div class="mm">
                                        <a class="w-100" href="{{ $item->url }}">
                                            <!--<img src="{{ URL::asset('dashboard/assets/images/projects/' . $item->image) }}"-->
                                            <!--    class="w-100 card-img-top rounded" alt="...">-->
                                            <img class="w-100 card-img-top rounded" src="{{ asset('dashboard/assets/images/projects/' . $item->image) }}" alt="Project Image" > 

                                        </a></td>
                                    </div>
                                <td>
                                    <a class="text-danger" href="{{ route('dashboard.destroy', $item->id) }}"><i
                                            class="pe-7s-trash"> </i></a>
                                </td>
                                </td>
                                <td> <a href="{{ route('dashboard.edit', $item->id) }}"><i class="pe-7s-pen"> </i></a></td>
                                <td>
                                    <input type="checkbox" class="delete-checkbox" name="selectedIdis[]"
                                        value="{{ $item->id }}">
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <form class="py-2" id="delete-form" action="{{ route('dashboard.selected_projects') }}" method="Post">
                    @csrf
                    {{-- @method('delete') --}}
                    <button type="submit" class="btn btn-danger" id="delete-button">Delete Selected</button>
                </form>
                <button id="check-all-button" class="btn btn-danger"> Check All</button>
            </div>
        </div>
    </div>
@endsection
