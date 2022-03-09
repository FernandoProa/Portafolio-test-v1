@extends('layouts.admin.admin')
@section('title')
    <h3 class="text-center font-weight-bold">Experiencia</h3>

@stop
@section('content')
    <table class="table table-responsive-lg table-hover">
        <thead>
        <tr>
            <th>Empresa</th>
            <th>Descripción</th>
            <th>Fecha de inicio</th>
            <th>Fecha Fin</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($experiences as $experience)
        <tr>
            <td>{{$experience->name_es}}</td>
            <td>{{\Illuminate\Support\Str::limit($experience->description_es, 15) ?? 'Nada ingresado' }}</td>
            <td>{{$experience->date_start}}</td>
            <td>{{$experience->date_end}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@stop
