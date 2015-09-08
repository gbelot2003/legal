<div class="col s12 m5">
	<div class="row">

		<div class="col s12 m6 input-field">
			<select name="tipocaso_id" id="tipocaso_id"  class="browser-default">
				<option value="{{ $caso->tipocasos->id }}" selected>{{ $caso->tipocasos->name }}</option>
				<option value="1">Demanda</option>
				<option value="2">Defensa</option>
				<option value="3">Procedimiento administrativo</option>
			</select>

		</div>

		<div class="col s12 m6">
			<!-- Tipo de Caso Form Input -->
			<div class="input-field">
				{!! Form::label('tipojuicio', "Tipo de Juicio:") !!}
				{!! Form::text("tipojuicio", $caso->tipojuicio, ['class' => 'form-control', 'id' => 'tipojuicio']) !!}
			</div>

		</div>

	</div>
</div>

<div class="col s12 m7">
	<div class="row">

		<div class="col s12 m6 input-field">
			<!-- Caso Form Input -->
			{!! Form::label('instancia', "Instancia: ") !!}
			{!! Form::text("instancia", $caso->instancia, ['class' => 'form-control', 'id' => 'instancia']) !!}
		</div>

		<div class="col s12 m6">
			<div class="row">
				<div class="col s12">
					<div class="">
						{!! Form::label('Tribunal') !!}
						<select name="tribunal_id" id="tribunal_id" class="select form-control">
							<option value="{{ $caso->tribunales->id }}" selected>{{ $caso->tribunales->name }}</option>
						</select>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="col s12 m6">
	<div class="row">
		<div class="col s12">
			<div class="">
				{!! Form::label('Salas') !!}
				<select name="salas_id" id="salas_id" class="browser-default">
					<option value="{{ $caso->salas_id }}" selected>{{ $caso->salas->name }}</option>
					<option value="Sala Penal">Sala Penal</option>
					<option value="Sala Civil">Sala Civil</option>
				</select>
			</div>
		</div>
	</div>
</div>

<div class="col s12 m6">
	<div class="row">
		<div class="col s12">
			<div class="">
				{!! Form::label('juez_id', "Juez") !!}
				<select name="juez_id" id="juez_id" class="select form-control">
					<option value="{{ $caso->jueces->id }}" selected>{{ $caso->jueces->name }}</option>
				</select>
			</div>
		</div>
	</div>
</div>
