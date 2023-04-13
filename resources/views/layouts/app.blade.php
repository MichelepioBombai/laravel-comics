<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>

    <link rel="stylesheet" href="style.css">

    @vite('resources/js/app.js')
</head>

<body>

    @include('partials.navbar')

    <img src="jumbotron.jpg" width="100%" height="500px">

    <main class="bg-dark text-white">
        <section class="container">
            <h1>@yield('title')</h1>
        </section>

        @yield('content')
    </main>

    @include('partials.footer')

</body>



</html>