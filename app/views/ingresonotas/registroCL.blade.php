@extends('layouts.base_docente')
@section('title')
<small>Consolidado De Notas Curso Libre</small>
@stop
@section('content')
<form action="consolidadoCL" name="form1" method="post">
    <div class="form-group">
    	<label for="">Asignatura : </label>
	        <select name='id' id='id' onChange='document.form1.submit()'>
	        	<option value='0'>Seleccionar Asignatura</option>;
	        	@foreach( $cursos as $curso)
					<option value='{{ $curso -> id }}'>{{ $curso -> nombre.' Turno: '.$curso -> turno.' '.$curso -> grupo }}</option>;
			    @endforeach
	        </select>
    </div>
</form>
    <div class="form-group">
        <label for="">Seleccionar Una Asignatura </label>
    </div>
@stop