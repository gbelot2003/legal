<div class="col s12 m6">
	<!-- Caso Form Input -->
	<div class="input-field">
		{!! Form::text("caso", null, ['class' => 'form-control', 'id' => 'caso-number']) !!}
		{!! Form::label('caso', "No. de Expediente") !!}
	</div>
</div>

<div class="col s12 m6">
	<div class="">
		{!! Form::label('cliente_id', "Cliente") !!}
		<select name="cliente_id" id="cliente_id" class="select">
			<option></option>
			@foreach($clientes as $cliente)
				<option value="{{ $cliente->id }}">{{ $cliente->name }}</option>
			@endforeach
		</select>
	</div>
</div>