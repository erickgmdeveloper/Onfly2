<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onfly - Despesas</title>
</head>
<body>
    <form action="/editar-despesa/{{ $despesa -> id }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="hidden" name="usuario" value="{{ Auth::user()->id }}"/>
        <label>Descrição</label>
        <input type="text" name="descricao" value="{{ $despesa -> descricao }}"/>
        <br>
        <label>Data</label>
        <input type="date" name="data" value="{{ $despesa -> data }}"/>
        <label>Valor</label>
        <input type="text" name="valor" value="{{ $despesa -> valor }}"/>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
</body>
</html>