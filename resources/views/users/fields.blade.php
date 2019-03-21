<!-- User Name <span class="required">*</span> Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'User Name:', ['class' => 'required']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- User Email <span class="required">*</span> Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'User Email:', ['class' => 'required']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- User Password <span class="required">*</span> Field -->
<div class="form-group col-sm-6 alter-input">
    {!! Form::label('password', 'User Password:', ['class' => 'required'])!!}<br/>
    {!! Form::password('password', null, ['class' => 'form-control']) !!}
</div>

<!-- User Address <span class="required">*</span> Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_address', 'User Address:')!!}
    {!! Form::text('user_address', null, ['class' => 'form-control']) !!}
</div>

<!-- User Contact Number <span class="required">*</span> Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_contact_number', 'User Contact Number:')!!}
    {!! Form::text('user_contact_number', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('role_id', 'App Name:') !!}
    {!! Form::select('role_id', App\Models\Role::pluck('role_name','id'),null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
        {!! Form::label('group_id', 'Group Name:') !!}
        {!! Form::select('group_id', App\Models\Group::pluck('group_name','id'),null, ['class' => 'form-control']) !!}
    </div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>
