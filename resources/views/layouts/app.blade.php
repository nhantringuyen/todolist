<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>TodoList</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        @include('inc.navbar')
    </header>
    <main>
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    </main>
    <footer class="text-center">
        <p>Copyright &copy; 2017 TodoList</p>
    </footer>
</body>
</html>
