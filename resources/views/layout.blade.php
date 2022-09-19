<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/clients/css/')}}">
    <title>WEBSITE CUA TOI</title>
</head>
<body>
    <header>
        <h1>HEADER</h1>
    </header>

    <main>
        <aside>
            MAIN SIDEBAR
        </aside>
        <div class="content">
            @yield('content')
        </div>
    </main>

    <footer>
        <h1>FOOTER</h1>
    </footer>
</body>
</html>