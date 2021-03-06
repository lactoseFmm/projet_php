@extends('template')

@section('titre')
    Modifier sous-tache

@endsection


@section('contenu')

    <br>
    <div class="col-sm-offset-2 col-sm-7">
        <div class="panel panel-info">
            <div class="panel-heading">Modifier la sous-tâche</div>
            <div class="panel-body">

                {!! Form::open(array('url' => '/editSTache/'.$id)) !!}

                <div class="form-group {!! $errors->has('SousTache') ? 'has-error' : '' !!}">
                    {!! Form::text('SousTache', null, array('class' => 'form-control','required' ,'placeholder' => 'Nom de la sous-tâche','maxlength'=>'40')) !!}
                    {!! $errors->first('SousTache', '<small class="help-block">:message</small>') !!}
                </div>

                <div class="form-group {!! $errors->has('dateFin') ? 'has-error' : '' !!}">
                    {!! Form::label('date', 'Date de fin', array('class' => 'dateFinal')) !!}
                    {!! Form::date('dateFin', null, array('id'=>'datepicker','class' => 'form-control','required')) !!}
                    {!! $errors->first('dateFin', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Soumettre ', array('class' => 'btn btn-info pull-right')) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
<!---->