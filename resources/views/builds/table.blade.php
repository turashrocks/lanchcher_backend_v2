<table class="table table-responsive" id="builds-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Build Name</th>
            <th>Config File</th>
            <th>App Name</th>
            <th>Created At</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($builds as $build)
        <tr>
            <td>{!! $build->id !!}</td>
            <td>{!! $build->build_name !!}</td>
            <td>{{ URL::asset("/uploads/".$build->config_file) }}</td>
            <td><span class="label label-primary">{{$build->app['app_name']}}</span></td>
            <td>{!! $build->created_at->format('D d, M. Y') !!}</td>
            <td>
                {!! Form::open(['route' => ['builds.destroy', $build->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('builds.show', [$build->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    {{-- <a href="{!! route('builds.edit', [$build->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a> --}}
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>