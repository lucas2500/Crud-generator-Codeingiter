<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Gerador de cruds</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- javascript -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="text-center my-4">
			<h1>Gerador de crud em Codeingiter</h1>
			<form action="<?php echo base_url();?>principal/gerarCrud" method="post">
				<div class="form-group my-4">
					<input type="text" name="campo1" id="campo1" placeholder="Campo 1" class="form-control" required="">
				</div>
				<div class="form-inline">
					<div class="form-group">
						<select class="form-control" name="tipoCampo1" required="">
							<option value="">Tipo do campo</option>
							<option value="VARCHAR">VARCHAR</option>
							<option value="INT">INT</option>	
							<option value="FLOAT">FLOAT</option>
						</select>
					</div>
					<div class="form-group ml-2">
						<input type="text" name="tamanhoC1" id="tamanhoC1" placeholder="Tamanho do campo" class="form-control" required="">
					</div>
				</div>

				<div class="form-group my-4">
					<input type="text" name="campo2" placeholder="Campo 2" class="form-control">
				</div>
				<div class="form-inline">
					<div class="form-group">
						<select class="form-control" name="tipoCampo2">
							<option value="">Tipo do campo</option>
							<option value="VARCHAR">VARCHAR</option>
							<option value="INT">INT</option>	
							<option value="FLOAT">FLOAT</option>
						</select>
					</div>
					<div class="form-group ml-2">
						<input type="text" name="tamanhoC2" id="tamanhoC2" placeholder="Tamanho do campo" class="form-control">
					</div>
				</div>


				<div class="form-group my-4">
					<input type="text" name="campo3" placeholder="Campo 3" class="form-control">
				</div>
				<div class="form-inline">
					<div class="form-group">
						<select class="form-control" name="tipoCampo3">
							<option value="">Tipo do campo</option>
							<option value="VARCHAR">VARCHAR</option>
							<option value="INT">INT</option>	
							<option value="FLOAT">FLOAT</option>
						</select>
					</div>
					<div class="form-group ml-2">
						<input type="text" name="tamanhoC3" id="tamanhoC3" placeholder="Tamanho do campo" class="form-control">
					</div>
				</div>



				<div class="form-group my-4">
					<input type="text" name="campo4" placeholder="Campo 4" class="form-control">
				</div>
				<div class="form-inline">
					<div class="form-group">
						<select class="form-control" name="tipoCampo4">
							<option value="">Tipo do campo</option>
							<option value="VARCHAR">VARCHAR</option>
							<option value="INT">INT</option>	
							<option value="FLOAT">FLOAT</option>
						</select>
					</div>
					<div class="form-group ml-2">
						<input type="text" name="tamanhoC4" id="tamanhoC4" placeholder="Tamanho do campo" class="form-control">
					</div>
				</div>


				<div class="form-group my-4">
					<input type="text" name="campo5" placeholder="Campo 5" class="form-control">
				</div>
				<div class="form-inline">
					<div class="form-group">
						<select class="form-control" name="tipoCampo5">
							<option value="">Tipo do campo</option>
							<option value="VARCHAR">VARCHAR</option>
							<option value="INT">INT</option>	
							<option value="FLOAT">FLOAT</option>
						</select>
					</div>
					<div class="form-group ml-2">
						<input type="text" name="tamanhoC5" id="tamanhoC5" placeholder="Tamanho do campo" class="form-control">
					</div>
				</div>


				<div class="form-group my-4">
					<select class="form-control" name="acao" required="">
						<option value="">Selecionar ação</option>
						<option value="insert">Inserir</option>
						<option value="update">Atualizar</option>	
						<option value="delete">Deletar</option>
					</select>
				</div>
				<div class="text-right"><button class="btn btn-primary">Gerar código</button></div>
			</form>
		</div>
	</div>
</body>
</html>