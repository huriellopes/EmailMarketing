<?php
	require_once __DIR__ . "/includes/menu.php";
?>

<div class="row">
	<div class="col-md-12 col-sm-12">
		<h1>Cadastro</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12">
		<form action="/salva" method="POST">
			<div class="form-row">
				<div class="col form-group">
					<label>Nome: </label>
					<input type="text" name="nome" class="form-control" autofocus required />
				</div>

				<div class="col form-group">
					<label>E-Mail: </label>
					<input type="text" name="email" class="form-control" required />
				</div>
			</div>

			<div class="form-row">
				<div class="col form-group">
					<button type="submit" class="btn-outline-my-color-4 rounded">Cadastrar</button>
				</div>
			</div>
		</form>
	</div>
</div>

<?php
	require_once __DIR__ . "/includes/footer.php";
?>