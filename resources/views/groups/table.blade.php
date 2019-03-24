<table class="table table-responsive" id="groups-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Group Name</th>
            <th>Group Description</th>
            <th colspan="3">Apps</th>
            <th>Created At</th>
            {{-- To be Corrected --}}
            {{-- <th colspan="3">Action</th> --}}
        </tr>
    </thead>
    <tbody>
    @foreach($groups as $group)
        <tr>
            <td>{!! $group->id !!}</td>
            <td>{!! $group->group_name !!}</td>
            <td>{!! $group->group_description !!}</td>
            {{-- <td>{!!$group->app['app_name']!!}</td> --}}
            <td colspan="3">
                {{-- @foreach($group->apps as $key)--}}
                    {{-- START Redandant --}}
                        {{-- <span class="label label-info">{{!! $appa->app_name !!}}</span> --}}
                    {{-- END Redandant --}}
                    {{-- <span class="label label-info">{{ $key->app_name }}</span>
                    
                @endforeach  --}}
                @foreach($group->app as $key)
                    <span class="label label-info">{!! $key->app_name !!}</span>
                
                @endforeach
            </td>
            <td>{!! $group->created_at->format('D d, M. Y') !!}</td>
            {{-- To be Corrected --}}
            {{-- <td>
                {!! Form::open(['route' => ['groups.destroy', $group->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('groups.show', [$group->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('groups.edit', [$group->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td> --}}
        </tr>
    @endforeach
    </tbody>
</table>