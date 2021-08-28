<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onfly - Despesas</title>
</head>
<body>
    <label>Descrição</label>
    <input type="text" name="descricao" value="{{ $despesa -> descricao }}"/>
    <br>
    <label>Data</label>
    <input type="date" name="data" value="{{ $despesa -> data }}"/>
    <label>Usuario</label>
    <input type="number" name="usuario" value="{{ $despesa -> usuario }}"/>
    <label>Valor</label>
    <input type="text" name="valor" value="{{ $despesa -> valor }}"/>
</body>
</html>