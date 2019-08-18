<!-- Nomepalestra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomePalestra', 'Nomepalestra:') !!}
    {!! Form::text('nomePalestra', null, ['class' => 'form-control']) !!}
</div>

<!-- Nomepalestrante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomePalestrante', 'Nomepalestrante:') !!}
    {!! Form::text('nomePalestrante', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Infolocal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('infoLocal', 'Infolocal:') !!}
    {!! Form::text('infoLocal', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data', 'Data:') !!}
    {!! Form::date('data', null, ['class' => 'form-control','id'=>'data']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#data').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Horascomplementares Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horasComplementares', 'Horascomplementares:') !!}
    {!! Form::number('horasComplementares', null, ['class' => 'form-control']) !!}
</div>

<!-- Capacidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacidade', 'Capacidade:') !!}
    {!! Form::number('capacidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('eventos.index') !!}" class="btn btn-default">Cancel</a>
</div>
