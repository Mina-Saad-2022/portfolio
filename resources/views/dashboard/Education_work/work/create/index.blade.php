
<div class="row">
    <div class="col-10" id="all">
        <form action="{{ route('dashboard.new_work') }}" method="POST">
            @csrf
            <div class="row">
                {{-- work experience --}}
                <div class="col-10 m-auto" id="element_work">
                    <input id="work" placeholder="type your work" type="text"
                        name="work[]" class="w-100 p-2 mb-2 form-control-lg form-control">
                    <div id="experienceError">
                        @error('work')
                            <div class="alert alert-danger error m-2 h5">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6 m-auto button_education">
                    <button type="submit" class="w-100 btn btn-success element_work"
                        id="create-button">Create</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-2">
        <button id="work_n" class="btn btn-warning mb-2 text-light"><i
                class="fa-solid fa-circle-plus"></i></button>
    </div>
</div>



