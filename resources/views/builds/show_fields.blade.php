<!-- Build Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Build Id:') !!}
    <p>{!! $build->id !!}</p>
</div>

<!-- Build Name Field -->
<div class="form-group">
    {!! Form::label('build_name', 'Build Name:') !!}
    <p>{!! $build->build_name !!}</p>
</div>

<!-- Config File Field -->
<div class="form-group">
    {!! Form::label('config_file', 'Config File:') !!}
    <p>{!! $build->config_file !!}</p>
</div>

<!-- App Id Field -->
<div class="form-group">
    {!! Form::label('app_id', 'App Id:') !!}
    <p>{!! $build->app_id !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $build->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $build->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $build->updated_at !!}</p>
</div>

