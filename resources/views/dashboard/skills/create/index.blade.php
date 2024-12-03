@extends('dashboard.layouts.app')

@section('title')
    <title>Create Professional skills</title>
@endsection

@section('icon')
<i class="pe-7s-plus">
</i>@endsection

@section('title_of_page')
    <h2>Create Professional skills</h2>
@endsection

@section('content')
    <div class="container">
        <div class="main-card mb-3 card">
<<<<<<< HEAD
            <div class="card-body">

                <div class="row">
                    <div class="col-11" id="all">
                        <form action="{{ route('dashboard.new_skills') }}" method="POST">
                            @csrf
                            <div class="row">
                                {{-- website category --}}
                                <div id="element_skills">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <fieldset class="position-relative form-group">
                                                <label class="">choose Skills category</label>
                                                <div class="row">
                                                    <div class="col-4 m-auto">
                                                        <div class="position-relative form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" name="category[0]" value="Front End"
                                                                    class="form-check-input" id="skills">
                                                                Front End
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="position-relative form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" name="category[0]" value="Back End"
                                                                    class="form-check-input" id="work">
                                                                Back End
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-5 m-auto">
                                            <label for="Skill" class="">Title Skill</label>
                                            <input id="Skill" type="text" name="skills[]"
                                                class="mb-2 form-control-lg form-control">
                                        </div>
                                        <div class="col-5 m-auto">
                                            <label for="ratio" class="">Ratio skill</label>
                                            <input type="number" name="ratio[]" class="form-control" id="ratio">
=======
            <div class="card-body" id="meml">
                <form action="{{ route('dashboard.new_skills') }}" method="POST">
                    @csrf
                    <div class="row">
                        {{-- website category --}}
                        <div class="col-12 text-center">
                            <fieldset class="position-relative form-group">
                                <label class="">choose skills category</label>
                                <div class="row">
                                    <div class="col-4 m-auto">
                                        <div class="position-relative form-check"><label class="form-check-label"><input
                                                    type="radio" name="category" value="Front End"
                                                    class="form-check-input" id="skills"> Front End </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="position-relative form-check"><label class="form-check-label"><input
                                                    type="radio" name="category" value="Back End" class="form-check-input"
                                                    id="work"> Back End
                                            </label>
>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a
                                        </div>
                                    </div>

                                </div>
<<<<<<< HEAD
                                <div id="skills-container"></div>

                                <div class="col-12 text-center">
                                    <button onclick="handleButtonClick()" type="submit"
                                        class="p-3 w-50 mb-2 mr-2 btn btn-success" id="create-button">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-1">
                        <button id="plus_new_skills" class="btn btn-warning mb-2 text-light"><i
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
=======
                            </fieldset>
                        </div>
                        {{-- Title skills --}}
                        <div class="col-5 m-auto">
                            <label for="Skill" class="">Title Skill</label>
                            <input id="Skill" type="text" name="skills" class="mb-2 form-control-lg form-control">
                        </div>
                        {{-- ratio website --}}
                        <div class="col-5 m-auto">
                            <label for="ratio" class="">Ratio skill</label>
                            <input type="number" name="ratio" class="form-control" id="ratio">
                        </div>

                        <div class="col-12 text-center">
                            <button onclick="handleButtonClick()" type="submit" class="p-3 w-50 mb-2 mr-2 btn btn-success"
                                id="create-button">Create</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <script>
const skills = document.getElementById('skills');
// const work = document.getElementById('work');
>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a

            // Event handler for the "plus_new_skills" button click
            $("#plus_new_skills").click(function(e) {
                e.preventDefault(); // Prevent the default form submission behavior

                // Clone the "element_skills" container
                var elementSkillsContainer = $("#element_skills").clone();

                // Reset the input values of the cloned elements
                elementSkillsContainer.find("input[type='text'], input[type='number']").val("");

<<<<<<< HEAD
                // Add a delete button to the cloned element
                var deleteButton = $("<button class='btn btn-danger delete_skills'>")
                    .text("Delete")
                    .click(function() {});

                elementSkillsContainer.append(deleteButton);

                var uniqueId = Date.now();

                // Update the IDs and names of the cloned radio inputs
                elementSkillsContainer.find("input[type='radio']").each(function() {
                    var radioId = $(this).attr("id");
                    var newRadioId = radioId + uniqueId;
                    $(this).attr("id", newRadioId);
                    $(this).attr("name", "category[" + categoryCtx + "]");
                });
                categoryCtx++;

                // Append the cloned container to the skills container
                $("#skills-container").append(elementSkillsContainer);

            });

            $(document).on('click', '.delete_skills', function() {
                $(this).parent('#element_skills').remove();
            });

        });
=======
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
>>>>>>> a6401a420f537e840689b652e8bdffcc54c8e28a
    </script>
@endsection
