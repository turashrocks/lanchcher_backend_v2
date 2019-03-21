<table class="table table-responsive" id="userdetails-table">
    <thead>
        <tr>
            <th>User Id</th>
        <th>User Name</th>
        <th>User Address</th>
        <th>User Contact Number</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($userdetails as $userdetail)
        <tr>
            <td>{!! $userdetail->id !!}</td>
            <td>{!! $userdetail->user_name !!}</td>
            <td>{!! $userdetail->user_address !!}</td>
            <td>{!! $userdetail->user_contact_number !!}</td>
            <td>
                {!! Form::open(['route' => ['userdetails.destroy', $userdetail->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userdetails.show', [$userdetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userdetails.edit', [$userdetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>