<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2>Enviando dados</h2>
<form action ="dados.php" method=post>
<div class="form-group">
<label for="exampleInputEmail1">Nome:</label>
<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome completo" name="nome">
<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu nome, com ninguém.</small>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Idade:</label>
<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sua idade" name="idade">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>

</body>
</html>

