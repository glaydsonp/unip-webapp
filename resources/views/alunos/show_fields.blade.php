<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $aluno->id !!}</p>
</div>

<!-- Nomealuno Field -->
<div class="form-group">
    {!! Form::label('nomeAluno', 'Nomealuno:') !!}
    <p>{!! $aluno->nomeAluno !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $aluno->email !!}</p>
</div>

<!-- Matricula Field -->
<div class="form-group">
    {!! Form::label('matricula', 'Matricula:') !!}
    <p>{!! $aluno->matricula !!}</p>
</div>

<!-- Turma Field -->
<div class="form-group">
    {!! Form::label('turma', 'Turma:') !!}
    <p>{!! $aluno->turma !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $aluno->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $aluno->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $aluno->deleted_at !!}</p>
</div>

