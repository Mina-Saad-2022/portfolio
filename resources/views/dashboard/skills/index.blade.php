@extends('dashboard.layouts.app')

@section('title')
    <title>Professional skills</title>
@endsection

@section('icon')
<i class="pe-7s-loop">
</i>@endsection


@section('title_of_page')
    <h2>Professional skills</h2>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table id="example" class="table table-striped display text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Skill</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Ratio</th>
                            <th class="text-center">Delete</th>
                            <th class="text-center">Edit</th>
<<<<<<< HEAD
                            <th class="text-center">check</th>
=======
>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $skill)
                            <tr>
                                <td>{{ $skill->id }}</td>
                                <td>{{ $skill->skill }}</td>
                                <td>{{ $skill->category }}</td>
                                <td>
                                    {{-- <div class="skill_item">
                                        <div class="progress" style="width: {{ $skill->rati }}%;">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: {{ $skill->rati }}%;" aria-valuenow="{{ $skill->ratio }}"
                                                aria-valuemin="0" aria-valuemax="100">{{ $skill->ratio }}%</div>
                                        </div>
                                    </div> --}}


                                    {{-- <div class="skill_item">
                                        <div class="progress w-100">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->ratio }}"
                                                style="width: {{ $skill->ratio }}%;" aria-valuemin="0" aria-valuemax="100">
                                                {{ $skill->ratio }}%</div>
                                        </div>
                                    </div> --}}


                                    <div class="skill_item">
                                        <div class='d-flex justify-content-center'>
                                            <div class="progress w-100">
                                                <div class="special_progress-bar " role="progressbar"
                                                    style="width: {{ $skill->ratio }}%; {{ $skill->ratio >= 50 ? 'background-color: var(--bs-progress-bar-bg)' : 'background-color: #d63031' }}"
                                                    aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <div>
                                                <span>
                                                    {{ $skill->ratio }}%
                                                </span>
                                            </div>
                                        </div>
                                    </div>



                                </td>
                                <td>
                                    <a class="text-danger" href="{{ route('dashboard.destroy_skills', $skill->id) }}"><i
                                            class="pe-7s-trash"> </i></a>
                                </td>
                                </td>
                                <td> <a href="{{ route('dashboard.edit_skills', $skill->id) }}"><i class="pe-7s-pen">
                                        </i></a></td>
<<<<<<< HEAD
                                <td>
                                    <input type="checkbox" class="delete-checkbox" name="selectedIds[]"
                                        value="{{ $skill->id }}">
                                </td>
=======
>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a
                        @endforeach

                    </tbody>
                </table>
                <form class="py-2" id="delete-form" action="{{ route('dashboard.selected_skills') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger" id="delete-button">Delete Selected</button>
                </form>
                <button id="check-all-button" class="btn btn-danger"> Check All</button>

            </div>
        </div>
    </div>
<<<<<<< HEAD

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<<<<<<< HEAD
=======



    <script>
        $(document).ready(function() {
            $("#delete-button").click(function(e) {
                e.preventDefault(); // Prevent default button behavior

                var selectedIds = []; // Array to store selected IDs

                // Find all checkboxes that are checked
                $(".delete-checkbox:checked").each(function() {
                    selectedIds.push($(this).val()); // Add the selected ID to the array
                });

                // Create a hidden input field to send the selected IDs
                var hiddenInput = $("<input>")
                    .attr("type", "hidden")
                    .attr("name", "selectedIds[]")
                    .val(selectedIds.join(',')); // Convert the array to a comma-separated string

                // Append the hidden input field to the form
                $("#delete-form").append(hiddenInput);

                // Submit the form
                $("#delete-form").submit();
            });
        });
    </script>
=======
>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a
>>>>>>> 7966584c5e6f87c46522a2f6f2cc2aee0cc6badc
@endsection
