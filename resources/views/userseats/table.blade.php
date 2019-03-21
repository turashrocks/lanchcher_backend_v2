<table class="table table-responsive" id="userseats-table">
    <thead>
        <tr>
        <th>User Id</th>
        <th>User Pc Uuid</th>
        <th>User Pc Name</th>
        <th>Installation Date</th>
        <th>Status</th>
        {{-- START Commented Out for Bug Correction --}}
        {{-- Possible Solution: Define One to Many relation and access other values in Users Table --}}

        {{-- <th colspan="3">Action</th> --}}
        </tr>
    </thead>
    <tbody>
    @foreach($userseats as $userseat)
        <tr>
            <td>{!! $userseat->id !!}</td>
            <td>{!! $userseat->user_pc_uuid !!}</td>
            <td>{!! $userseat->user_pc_name !!}</td>
            <td>{!! $userseat->installation_date !!}</td>
            <td>{!! $userseat->status !!}</td>
            {{-- START Commented Out for Bug Correction --}}

            {{-- <td>
                {!! Form::open(['route' => ['userseats.destroy', $userseat->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userseats.show', [$userseat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userseats.edit', [$userseat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td> --}}

            {{-- END Commented Out for Bug Correction --}}
        </tr>
    @endforeach
    </tbody>
</table>