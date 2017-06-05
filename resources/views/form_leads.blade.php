@extends('layouts.app')
@section('content')

<div class="panel-body">
	<!-- Display Validation Errors -->
	@include('common.errors')

	<!-- New visitor form -->
	<form action="/new_lead" method="POST" autocomplete="off">
		{{ csrf_field() }}

		<!-- Visitor name -->
		<div class="form-group">
			<input type="text" name="nome" id="lead-nome" class="form-control" maxlength="100" required placeholder="Nome">
		</div>

		<!-- Visitor email -->
		<div class="form-group">
			<input type="email" name="email" id="lead-email" class="form-control" maxlength="200" required placeholder="E-mail">
		</div>

		<!-- Visitor cellphone -->
		<div class="form-group">
			<input type="text" name="celular" id="lead-celular" class="form-control" maxlength="18" required placeholder="Celular">
		</div>

		<!-- Visitor birthdate -->
		<div class="form-group">
			<input type="text" name="nascimento" id="lead-nascimento" class="form-control" maxlength="14" required placeholder="Data de nascimento">
		</div>

		<!-- Visitor zipcode -->
		<div class="form-group">
			<input type="text" name="cep" id="lead-cep" class="form-control" maxlength="8" required placeholder="CEP">
		</div>

		<!-- Visitor address -->
		<div class="form-group">
			<input type="text" name="endereco" id="lead-endereco" class="form-control" maxlength="200" required readonly placeholder="Endereço">
		</div>

		<!-- Visitor neighborhood -->
		<div class="form-group">
			<input type="text" name="bairro" id="lead-bairro" class="form-control" maxlength="200" required readonly placeholder="Bairro">
		</div>

		<!-- Visitor number -->
		<div class="form-group">
			<input type="number" name="numero" id="lead-numero" class="form-control" required placeholder="Número">
		</div>

		<!-- Visitor city -->
		<div class="form-group">
			<input type="text" name="cidade" id="lead-cidade" class="form-control" required readonly placeholder="Cidade">
		</div>

		<!-- Visitor state -->
		<div class="form-group">
			<input type="text" name="uf" id="lead-uf" class="form-control" required readonly placeholder="Estado">
		</div>

		<!-- Add visitor button -->
		<div class="form-group">
			<button type="submit" class="btn btn-default">
				<i class="fa fa-plus"></i> Cadastrar
			</button>
		</div>
	</form>
</div>

@endsection