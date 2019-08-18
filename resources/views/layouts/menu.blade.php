<li class="{{ Request::is('eventos*') ? 'active' : '' }}">
    <a href="{!! route('eventos.index') !!}"><i class="fa fa-edit"></i><span>Eventos</span></a>
</li>

<li class="{{ Request::is('alunos*') ? 'active' : '' }}">
    <a href="{!! route('alunos.index') !!}"><i class="fa fa-edit"></i><span>Alunos</span></a>
</li>

<li class="{{ Request::is('participantes*') ? 'active' : '' }}">
    <a href="{!! route('participantes.index') !!}"><i class="fa fa-edit"></i><span>Participantes</span></a>
</li>

