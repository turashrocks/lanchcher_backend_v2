
<div class="form-group col-sm-6">
    {!! Form::label('id', 'User Seat Name:') !!}
    {!! Form::select('id', App\Models\User::pluck('name','id'),null, ['class' => 'form-control']) !!}

</div>

<div class="form-group col-sm-6">
    {!! Form::label('user_pc_uuid', 'User Pc Uuid:') !!}
    {!! Form::text('user_pc_uuid', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('user_pc_name', 'User Pc Name:') !!}
    {!! Form::text('user_pc_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('installation_date', 'Installation Date:') !!}
    {!! Form::date('installation_date', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
        {!! Form::label('status', 'Status :') !!}
        <label class="checkbox-inline">
            {!! Form::hidden('status', false) !!}
            {!! Form::checkbox('status', '1', null) !!} Active
        </label>
    </div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userseats.index') !!}" class="btn btn-default">Cancel</a>
</div>
