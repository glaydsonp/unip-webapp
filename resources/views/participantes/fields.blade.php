<!-- Idevento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idEvento', 'Idevento:') !!}
    {!! Form::number('idEvento', null, ['class' => 'form-control']) !!}
</div>

<!-- Idaluno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idAluno', 'Idaluno:') !!}
    {!! Form::number('idAluno', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('participantes.index') !!}" class="btn btn-default">Cancel</a>
</div>
