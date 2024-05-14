<!-- resources/views/layouts/default.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Faculdade XYZ')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/sobre-nos">Sobre</a></li>
                <li><a href="/cursos">Cursos</a></li>
                <li><a href="/contato">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h1>Bem-vindo à Faculdade XYZ!</h1>
            <p>Aqui você encontrará informações sobre nossos cursos, equipe e como entrar em contato conosco.</p>
        </section>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 Faculdade XYZ</p>
    </footer>
</body>
</html>
