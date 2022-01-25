<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>📚 Estudos - @yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<style>
    * {
        padding: 0;
        margin: 0;
    }

    html,
    body {
        height: 100%;
        -webkit-font-smoothing: antialiased;
        background-color: #cdcdcd;
    }

    nav {
        background-color: #0e398c;
        margin-bottom: 2rem;
        padding: 4px;
    }

    footer {
        position: absolute;
        background-color: #0e398c;
        margin-top: 2rem;
        padding-top: 20px;
        bottom: 0;
        width: 100%;
    }

</style>

<body>
    <nav class="navbar">
        <a class="navbar-brand" href="#" style="padding-left: 2rem">
            <img src="https://raw.githubusercontent.com/RodrigoOliveiraXavier/teste-duo-mysql/main/logoduo.png"
                height="40px" alt="logo-duo" />
        </a>
    </nav>

    <section style="padding-right: 1.5rem; padding-left: 1.5rem;">
        @yield('content')
    </section>

    <footer>
        <a class="footer-brand" href="#" style="padding-left: 2rem">

        </a>
    </footer>
</body>

</html>
