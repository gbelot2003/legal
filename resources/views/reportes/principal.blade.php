@extends('reportes')

@section('content')
	<h1 align="center">Bufete Forlar</h1>
	<h3 style="text-decoration: underline">Informe de Casos</h3>
	<div class="row">
		<div class="col m4 s6">
			<table>
				<tr>
					<th>Cliente: </th>
					<td><strong>{{ $cliente->name }}</strong></td>
				</tr>
				<tr>
					<th>Fecha: </th>
					<td>{{ date('d m Y') }}</td>
				</tr>

			</table>
		</div>
	</div>

	<div class="row">
		<div class="col s12">
			<div class="row">
				<div class="col s12 m10">
					<h4>Historial de Casos</h4>
				</div>
			</div>
			@foreach($casos as $casos)
			<div class="row caso">
				<table class="table" width="100%" bgcolor="#f0f8ff">
					<caption align="left">Caso No# <strong>{{ $casos->caso }}</strong></caption>
					<tr>
						<th>Tribunal</th>
						<th>Tipo</th>
						<th>Instancia</th>
						<th>Juez</th>
					</tr>
					<tr>
						<td align="center"><strong class="blue-text">{{ $casos->tribunales->name  }}</strong></td>
						<td align="center"><strong class="blue-text">{{ $casos->tipocasos->name  }} : {{ $casos->tipojuicio }} </strong></td>
						<td align="center"><strong class="blue-text">{{ $casos->instancia  }}</strong></td>
						<td align="center"><strong class="blue-text">{{ $casos->jueces->name  }}</strong></td>
					</tr>
				</table>
				<br/>
				<div class="col m12">
					{!! $casos->ultimactualizacion->descripcion !!}
				</div>
				<hr/>
				<div class="col m12">
					<span>Encargado:</span>{{ $casos->ultimactualizacion->users->name }}
				</div>
			</div>

			@endforeach

		</div>
	</div>

@stop
