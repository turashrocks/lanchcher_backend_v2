<div class="form-group col-sm-6">
    {!! Form::label('group_name', 'Group Name:') !!}
    {!! Form::text('group_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('group_description', 'Group Description:') !!}
    {!! Form::text('group_description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('Apps:') !!}
        <select class="basic-multiple" name="apps[]" multiple="multiple" style="width: 100%;">
            @foreach ($apps as $app)
                <option value="{{$app->id}}">{{$app->app_name}}</option>
            @endforeach
        </select>
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('groups.index') !!}" class="btn btn-default">Cancel</a>
</div>
