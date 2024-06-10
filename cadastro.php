<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Cadastramento</title>
</head>
<body>
    <h1>Formulario de cadastramento</h1>
    <form action="create.php" method="post" class="form-container">

    <div class="table-container">
        <label for="formGroupExampleInput" class="form-label">Nome Completo do hóspede: </label>
        <input name="nome" type="text" class="form-control" id="formGroupExampleInput" placeholder="digite o nome completo do hóspede">
    </div>

    <div class="table-container">
        <label for="formGroupExampleInput2" class="form-label">Estado: </label>
        <input name="estado" type="text" class="form-control" id="formGroupExampleInput2" placeholder="digite o Estado">
    </div>

    <div class="table-container">
        <label for="formGroupExampleInput2" class="form-label">Cidade: </label>
        <input name="cidade" type="text" class="form-control" id="formGroupExampleInput2" placeholder="digite a Cidade">
    </div>

    <div class="table-container">
        <label for="formGroupExampleInput2" class="form-label">Endereço: </label>
        <input name="endereco" type="text" class="form-control" id="formGroupExampleInput2" placeholder="digite o endereço completo">
    </div>

    <div class="table-container">
        <label for="formGroupExampleInput2" class="form-label">Email: </label>
        <input name="email" type="email" class="form-control" id="formGroupExampleInput2" placeholder="email@email.com">
    </div>

    <div class="table-container">
        <label for="formGroupExampleInput2" class="form-label">CPF: </label>
        <input name="cpf" type="number" class="form-control" id="formGroupExampleInput2" placeholder="xxx.xxx.xxx-xx">
    </div>

    <div class="table-container">
        <label for="formGroupExampleInput2" class="form-label">Data de Nascimento: </label>
        <input name="data_nascimento" type="date" class="form-control" id="formGroupExampleInput2" placeholder="dd/mm/year">
    </div>

    <div class="table-container">
        <button type="submit" class="btn btn-outline-secondary">Enviar</button>
    </div>
    </form>
</body>
</html>

