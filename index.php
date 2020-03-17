<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="container pt-5">
		<div class="col-6 offset-3">
			<form method="POST" action="usuario/store.php">
				<h3>Cadastro de usuário</h3>
				<div class="form-group">
					<label for="name">Nome</label>
					<input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
					<small id="emailHelp" class="form-text text-muted">Email válido.</small>
				</div>
				<div class="form-group">
					<label for="telefone">Telefone</label>
					<input type="text" name="telefone" class="form-control" id="telefone">
				</div>
				<div class="form-group">
					<label for="idade">idade</label>
					<input type="text" name="idade" class="form-control" id="idade">
				</div>
				<div class="form-group">
					<label for="cpf">CPF</label>
					<input type="text" name="cpf" class="form-control" id="cpf">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>