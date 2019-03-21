<!-- Group Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Group Id:') !!}
    <p>{!! $group->id !!}</p>
</div>

<!-- Group Name Field -->
<div class="form-group">
    {!! Form::label('group_name', 'Group Name:') !!}
    <p>{!! $group->group_name !!}</p>
</div>

<!-- Group Description Field -->
<div class="form-group">
    {!! Form::label('group_description', 'Group Description:') !!}
    <p>{!! $group->group_description !!}</p>
</div>

<!-- App Id Field -->
<div class="form-group">
    {!! Form::label('app_id', 'App Id:') !!}
    <p>{!! $group->app_id !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $group->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $group->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $group->updated_at !!}</p>
</div>

