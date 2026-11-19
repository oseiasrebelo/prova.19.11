<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de funcionarios</title>
</head>
<body>
    <h3>Pesquisar Funcionário</h3>
    <form action="" method="GET">
        <label>Buscar por nome: </label>

        <input type="text" name="busca" value="<?= htmlspecialchars($termoBusca) ?>">
        <button type="submit">Pesquisar</button>

    </form>
    
</body>
</html>