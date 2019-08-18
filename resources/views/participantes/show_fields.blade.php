<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $participante->id !!}</p>
</div>

<!-- Idevento Field -->
<div class="form-group">
    {!! Form::label('idEvento', 'Idevento:') !!}
    <p>{!! $participante->idEvento !!}</p>
</div>

<!-- Idaluno Field -->
<div class="form-group">
    {!! Form::label('idAluno', 'Idaluno:') !!}
    <p>{!! $participante->idAluno !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $participante->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $participante->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $participante->deleted_at !!}</p>
</div>

