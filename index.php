
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Salva imagem no banco de dados</title>
	</head>
	<body>
		<main>
		<form action="grava_imagem.php"enctype="multipart/form-data" method="POST">
		  <label>Arquivo</label>
		  <input type="file" name="arquivo" class="form-control" required>

		  <label>Descrição</label>
		  <input type="text" name="titulo" size="30" class="form-control" required>

		  <button type="submit" class="btn">Enviar arquivo</button>
		</form>
		</main>
	</body>
	</html>