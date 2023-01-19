<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AddJogos</title>
</head>
<body>
    <form action="/user" method="post">
        @csrf
        <input type="text" placeholder="Nome" name="name">
        <input type="text" placeholder="Descricao" name="descricao">
        <input type="text" placeholder="Valor" name="value">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>