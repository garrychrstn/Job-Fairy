<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job Fairy | Home</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" type='text/css' href="{{ asset('css/index.css') }}">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <header>
            <div class="navbar width80">
                <img src="{{ asset('img/logo-text.png') }}" alt='Job Fairy' height=70>
                <div class="menu">
                    <ul>
                        <li><a href='#'>about us</a></li>
                        <li><a href='#'>sign up</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <section class="width80 hero">
            <div>
                <p>Welcome to</p>
                <h1>Job Fairy</h1>
                <p>Your professional job-seeking <span class="underline-secondary">consultant</span></p>
            </div>
        </section>
        <section class="flex-center pointer">
            <div>
                <p>Our services</p>
                <div class="arrow-down">
                </div>
            </div>
        </section>
    </body>
</html>
