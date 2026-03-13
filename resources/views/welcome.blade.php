<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        @livewireStyles

        <style>
            body{
                font-family: "Instrument Sans", sans-serif;
                background: linear-gradient(135deg,#0f172a,#020617);
                color:#e5e7eb;
            }

            #quiz-card{
                background:#0f172a;
                border:1px solid #1e293b;
                border-radius:12px;
                box-shadow:0 10px 30px rgba(0,0,0,0.6);
            }

            .quiz-title{
                font-weight:600;
                letter-spacing:0.5px;
            }

            .form-check{
                background:#020617;
                padding:10px 14px;
                border-radius:8px;
                border:1px solid #1e293b;
                margin-bottom:10px;
            }

            .btn-quiz{
                background:#6366f1;
                border:none;
            }

            .btn-quiz:hover{
                background:#4f46e5;
            }
        </style>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif
    </head>
    <body class="container-fluid">
    <div class="d-flex justify-content-center align-items-center text-center vh-100">
        <div class="col-md-5 card p-4" id="quiz-card">
            <h2 class="quiz-title text-center text-warning mb-4">Quiz Test</h2>
            <p id="description" class="text-white">Each test contains 10 random questions. Let's test your IT knowledge!</p>
            <div class="card-body d-flex justify-content-center gap-2">
                <button id="readyButton" type="button" class="btn btn-outline-primary">Are You Ready?</button>
            </div>
            <div id="quiz" class="d-none">
                <livewire:quiz />
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    @livewireScripts
    <script>

        $('#readyButton').on('click', function() {
            $(this).addClass('d-none');
            $('#quiz').removeClass('d-none');
        });
    </script>
    </body>
</html>
