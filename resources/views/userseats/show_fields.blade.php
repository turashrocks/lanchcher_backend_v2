<!-- User Seat Id Field -->
<div class="form-group">
    {!! Form::label('id', 'User Seat Id:') !!}
    <p>{!! $userseat->id !!}</p>
</div>

<!-- User Seat Name Field -->
<div class="form-group">
    {!! Form::label('user_seat_name', 'User Seat Name:') !!}
    <p>{!! $userseat->user_seat_name !!}</p>
</div>

<!-- User Pc Uuid Field -->
<div class="form-group">
    {!! Form::label('user_pc_uuid', 'User Pc Uuid:') !!}
    <p>{!! $userseat->user_pc_uuid !!}</p>
</div>

<!-- User Pc Name Field -->
<div class="form-group">
    {!! Form::label('user_pc_name', 'User Pc Name:') !!}
    <p>{!! $userseat->user_pc_name !!}</p>
</div>

<!-- Installation Date Field -->
<div class="form-group">
    {!! Form::label('installation_date', 'Installation Date:') !!}
    <p>{!! $userseat->installation_date !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $userseat->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $userseat->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $userseat->updated_at !!}</p>
</div>

