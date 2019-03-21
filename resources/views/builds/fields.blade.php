<form action="{{url('addbuilds')}}" method="POST" enctype="multipart/form-data">   
    {{csrf_field()}}

    <!-- Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('build_name', 'Name:') !!}
        <input type="text" class="form-control" name="build_name" required> 
    </div>

    <!-- Config File Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('config_file', 'Config File:') !!}
        <input type="file" class="form-control" name="config_file" required> 
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('app_id', 'App Name:') !!}
        {!! Form::select('app_id', App\Models\App::pluck('app_name','id'),null, ['class' => 'form-control']) !!}
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('builds.index') !!}" class="btn btn-default">Cancel</a>
    </div>

</form>
