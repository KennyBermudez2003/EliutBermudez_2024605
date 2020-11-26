@extends('Plantillaweb')

@section('secciondinamica')
<h1>Lista de Estudiantes</h1>

@foreach($nombres as $i)
<h4 style="color: black;">{{$i}}</h4>
<p>Nombre de Aprendiz</p>
@endforeach
@endsection