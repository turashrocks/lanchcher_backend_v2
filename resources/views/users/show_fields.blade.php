<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('id', 'User Id:') !!}
    <p>{!! $user->id !!}</p>
</div>

<!-- User Name Field -->
<div class="form-group">
    {!! Form::label('name', 'User Name:') !!}
    <p>{!! $user->name !!}</p>
</div>

<!-- User Email Field -->
<div class="form-group">
    {!! Form::label('email', 'User Email:') !!}
    <p>{!! $user->email !!}</p>
</div>

<!-- User Password Field -->
<div class="form-group">
    {!! Form::label('password', 'User Password:') !!}
    <p>{!! $user->password !!}</p>
</div>

<!-- User Address Field -->
<div class="form-group">
    {!! Form::label('user_address', 'User Address:') !!}
    <p>{!! $user->user_address !!}</p>
</div>

<!-- User Contact Number Field -->
<div class="form-group">
    {!! Form::label('user_contact_number', 'User Contact Number:') !!}
    <p>{!! $user->user_contact_number !!}</p>
</div>

<!-- Role Id Field -->
<div class="form-group">
    {!! Form::label('role_id', 'Role Id:') !!}
    <p>{!! $user->role_id !!}</p>
</div>

<!-- Group Id Field -->
<div class="form-group">
    {!! Form::label('group_id', 'Group Id:') !!}
    <p>{!! $user->group_id !!}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{!! $user->remember_token !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $user->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $user->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $user->updated_at !!}</p>
</div>

