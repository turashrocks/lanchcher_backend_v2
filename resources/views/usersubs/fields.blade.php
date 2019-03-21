<div class="form-group col-sm-6">
    {!! Form::label('id', 'User Sub Name:') !!}
    {!! Form::select('id', App\Models\User::pluck('name','id'),null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('user_sub_expiry_date', 'User Sub Expiry Date:') !!}
    {!! Form::date('user_sub_expiry_date', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('user_pcs_assigned', 'User Pcs Assigned:') !!}
    {!! Form::number('user_pcs_assigned', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('user_sub_description', 'User Sub Description:') !!}
    {!! Form::text('user_sub_description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usersubs.index') !!}" class="btn btn-default">Cancel</a>
</div>
