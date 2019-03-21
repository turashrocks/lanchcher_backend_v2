
<div class="form-group col-sm-6">
    {!! Form::label('id', 'User Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('user_name', 'User Name:') !!}
    {!! Form::text('user_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('user_address', 'User Address:') !!}
    {!! Form::text('user_address', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('user_contact_number', 'User Contact Number:') !!}
    {!! Form::text('user_contact_number', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userdetails.index') !!}" class="btn btn-default">Cancel</a>
</div>
