<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página de Contato</title>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
</head>

<body>
    <h1>Contato</h1>
    <form action="/enviar-contato" method="post">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="4" cols="50" required></textarea><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
