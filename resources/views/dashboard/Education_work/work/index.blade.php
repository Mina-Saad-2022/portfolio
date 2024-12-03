<div id="work" class="tab active row">
    <div class="col">
        <table id="example" class="table table-striped display text-center" style="width:100%">
            <thead>
                <tr>

                    <th class="text-center">#</th>
                            <th class="text-center">Work</th>
                            <th class="text-center" >Delete</th>
                            <th class="text-center" >Edit</th>
                            <th class="text-center">check</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($work as $works)
                <tr>

                    <td>{{ $works->id }}</td>
                                <td>{{ $works->work }}</td>
                                                  <td>
                                     <a class="text-danger" href="{{route('dashboard.destroy_work', $works->id )}}"><i class="pe-7s-trash"> </i></a></td>
                                </td>
                                <td> <a href="{{route('dashboard.edit_work', $works->id )}}"><i class="pe-7s-pen"> </i></a></td>
                                <td>
                                    <input type="checkbox" class="delete-checkbox" name="selectedIds[]"
                                        value="{{ $works->id }}">
                                </td>
                            </tr>
                @endforeach

            </tbody>
        </table>
            <form class="py-2" id="delete-form" action="{{ route('dashboard.selected_work') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger" id="delete-button">Delete Selected</button>
            </form>
            <button id="check-all-button" class="btn btn-danger"> Check All</button>
        </div>
</div>
