<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>BB</title>
</head>
<body>
    <div>
        <form action="/add/jogos" method="get">
            @csrf
            <button type="submit">Add jogo</button>
        </form>
    </div>
    <div class="container">
        @if(isset($mensagem))
        <strong>Mensagem: {{$mensagem}}</strong>
        @endif
        @if($x == 'cad')
        <form action="/add/jogos" method="post">
            @csrf
            <input type="text" placeholder="nome do jogo" name="nome">
            <input type="text" placeholder="descrição do jogo" name="descricao">
            <input type="int" placeholder="valor do jogo" name="valor">
            <button type="submit">Enviar</button>
        </form>
        @elseif($x == 'upd')
            @foreach($result as $res)
            <form action="/update" method="post">
                @csrf
                <input type="text" name="nome" value="{{$res->nome}}">
                <input type="hidden" name="id" value="{{$res->id}}">
                <input type="text" name="descricao" value="{{$res->descricao}}">
                <input type="int" name="valor" value="{{$res->valor}}">
                <button type="submit">editar</button>
            </form>
            @endforeach
        @elseif($x == "get")
        <div>
            <table>
                <th>id</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Valor</th>
                <th>Ação</th>
                <tbody>
                    @foreach($result as $res)
                    <tr>
                        <td>{{$res->id}}</td>
                        <td>{{$res->nome}}</td>
                        <td>{{$res->descricao}}</td>
                        <td>{{$res->valor}}</td>
                        <td>
                            <form action="/editar/jogos" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$res->id}}">
                                <button type="submit">editar</button>
                            </form>
                            <form action="/delete/jogos" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$res->id}}">
                                <button type="submit">deletar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</body>
</html>