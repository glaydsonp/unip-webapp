@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Participante
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($participante, ['route' => ['participantes.update', $participante->id], 'method' => 'patch']) !!}

                        @include('participantes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection