<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Laravel') }}</title>-->
    <title>Direccion de Formación Continua</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- accesibilidad y bloques de separaciones (div) con sus estilos-->
    <link rel="stylesheet" href="styles/accesibilidad.css">
    
    
</head>
<body class="font-sans antialiased">
    <div class="super-container">
       
        <div>
            
            <div class="container">
                
                <main class="mt-4">
                    @yield('content')
                </main>
                
            </div>
            
        </div>
        
    </div>

</body>
</html>