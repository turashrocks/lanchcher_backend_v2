<table class="table table-responsive" id="usersubs-table">
    <thead>
        <tr>
            <th>User Id</th>
            <th>User Sub Expiry Date</th>
            <th>User Pcs Assigned</th>
            <th>User Sub Description</th>
            {{-- START Commented Out for Bug Correction --}}
            {{-- Possible Solution: Define One to Many relation and access other values in Users Table --}}
                {{-- <th colspan="3">Action</th> --}}
            {{-- END Commented Out for Bug Correction --}}
        </tr>
    </thead>
    <tbody>
    @foreach($usersubs as $usersub)
        <tr>
            <td>{!! $usersub->id !!}</td>
            {{-- <td>{!! $usersub->users['name'] !!}</td> --}}
            <td>{!! $usersub->user_sub_expiry_date !!}</td>
            <td>{!! $usersub->user_pcs_assigned !!}</td>
            <td>{!! $usersub->user_sub_description !!}</td>
            {{-- START Commented Out for Bug Correction --}}
            {{-- Possible Solution: Define One to Many relation and access other values in Users Table --}}
                {{-- <td>
                    {!! Form::open(['route' => ['usersubs.destroy', $usersub->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('usersubs.show', [$usersub->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('usersubs.edit', [$usersub->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td> --}}
            {{-- END Commented Out for Bug Correction --}}
        </tr>
    @endforeach
    </tbody>
</table>