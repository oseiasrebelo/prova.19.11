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

        <input type="text" name="busca" value="<?= htmlspecialchars('$termoBusca') ?>">
        <button type="submit">Pesquisar</button>

    </form>

    <?php if('$termoBusca' !== "") : ?>
        <p>Você pesquisou por: <strong><?= htmlspecialchars('$termoBusca') ?></strong></p>

    <?php endif; ?>

    <hr>

    <h3>Cadastrar novo funcionário</h3>
    <?php if('$mensagem' !==""): ?>
        <p><?= '$mensagem' ?></p>
    
    <?php endif; ?>

    <form action="" method="Post">
        <label>Nome Completo:</label><br>

        <input type="text" name="nome"><br><br>

        <label>Cargo:</label><br>
        <select name="cargo">
            <option value="">Selecione...</option>
            <option value="Operador">Operador</option>
            <option value="Gerente">Gerente</option>

        </select><br><br>

        <button type="submit">Cadastrar</button>

    </form>
    
</body>
</html>