<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('id', 'User Id:') !!}
    <p>{!! $userdetail->id !!}</p>
</div>

<!-- User Name Field -->
<div class="form-group">
    {!! Form::label('user_name', 'User Name:') !!}
    <p>{!! $userdetail->user_name !!}</p>
</div>

<!-- User Address Field -->
<div class="form-group">
    {!! Form::label('user_address', 'User Address:') !!}
    <p>{!! $userdetail->user_address !!}</p>
</div>

<!-- User Contact Number Field -->
<div class="form-group">
    {!! Form::label('user_contact_number', 'User Contact Number:') !!}
    <p>{!! $userdetail->user_contact_number !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $userdetail->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $userdetail->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $userdetail->updated_at !!}</p>
</div>

