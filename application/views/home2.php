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
	<div class="container my-4">
		
		<h1 class="text-center">Gerador de crud em Codeingiter</h1>
		<div class="text-right">
			<a href="<?php echo base_url();?>principal/index"><button class="btn btn-danger text-right">Retornar</button></a>
		</div>
		<label>Clique no campo para copiar o código.</label>
		<form action="" method="">
			<div class="form-group my-4">
				<input type="text" name="campo1" onclick="getCode(this)" placeholder="Campo 1" class="form-control" readonly="" value="<?php echo element ('campo1', $campos); ?>">
			</div>
			<div class="form-group my-4">
				<input type="text" name="campo2" onclick="getCode(this)" placeholder="Campo 2" class="form-control" readonly="" value="<?php echo element ('campo2', $campos); ?>">
			</div>
			<div class="form-group my-4">
				<input type="text" name="campo3" onclick="getCode(this)"  placeholder="Campo 3" class="form-control" readonly="" value="<?php echo element ('campo3', $campos); ?>">
			</div>
			<div class="form-group my-4">
				<input type="text" name="campo4" onclick="getCode(this)" placeholder="Campo 4" class="form-control" readonly="" value="<?php echo element ('campo4', $campos); ?>">
			</div>
			<div class="form-group my-4">
				<input type="text" name="campo5" onclick="getCode(this)" placeholder="Campo 5" class="form-control" readonly="" value="<?php echo element ('campo5', $campos); ?>">
			</div>
		</form>
		<div class="text-left">
			<strong>No seu controller: </strong><?php echo $controller; ?>
		</div>
		<div class="text-left">
			<strong>No seu model: </strong><?php echo $model; ?>
		</div>
		<div class="text-left">
			<?php if(!empty($model2)){ echo $model2;} ?>
		</div>
	</div>

	<script type="text/javascript">
		
		function getCode(objField){
			var campo = (objField);
			campo.select();
			document.execCommand("Copy");
		}
	</script>
</body>
</html>