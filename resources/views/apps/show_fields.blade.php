<!-- App Id Field -->
<div class="form-group">
    {!! Form::label('id', 'App Id:') !!}
    <p>{!! $app->id !!}</p>
</div>

<!-- App Name Field -->
<div class="form-group">
    {!! Form::label('app_name', 'App Name:') !!}
    <p>{!! $app->app_name !!}</p>
</div>

<!-- App Description Field -->
<div class="form-group">
    {!! Form::label('app_description', 'App Description:') !!}
    <p>{!! $app->app_description !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $app->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $app->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $app->updated_at !!}</p>
</div>

