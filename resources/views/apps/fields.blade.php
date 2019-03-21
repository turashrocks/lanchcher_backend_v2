
<div class="form-group col-sm-6">
    {!! Form::label('app_name', 'App Name:') !!}
    {!! Form::text('app_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('app_description', 'App Description:') !!}
    {!! Form::text('app_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('apps.index') !!}" class="btn btn-default">Cancel</a>
</div>
