<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-cover bg-center" 
      style="background-image: url('{{ asset('images/100años.png') }}');">

    <!-- Contenedor del formulario -->
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <!-- Logo -->
        <div class="flex justify-center mb-4">
            <img src="{{ asset('images/logos/logo_white-236x191.png') }}" alt="Logo" class="h-20 w-auto">
        </div>

        <!-- Título del formulario -->
        <h2 class="text-center text-3xl font-bold mb-6" style="color: #019934;">
            Iniciar Sesión
        </h2>

        <!-- Formulario -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <!-- Correo Electrónico -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Correo Electrónico</label>
                <input id="email" type="email" name="email" required 
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#019934]" 
                       placeholder="Ingresa tu correo">
            </div>

            <!-- Contraseña -->
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-medium mb-2">Contraseña</label>
                <input id="password" type="password" name="password" required 
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#019934]" 
                       placeholder="Ingresa tu contraseña">
            </div>

            <!-- Botón de Inicio de Sesión -->
            <button type="submit" 
                    class="w-full text-white py-2 px-4 rounded-md font-bold transition duration-300 bg-[#019934] hover:bg-[#017A24]">
                Iniciar Sesión
            </button>

            <!-- Recordar y enlace de recuperación -->
            <div class="flex items-center justify-between mt-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" class="form-checkbox text-[#019934]">
                    <span class="ml-2 text-gray-700 text-sm">Recuérdame</span>
                </label>
                <a href="{{ route('password.request') }}" class="text-sm hover:underline text-[#019934]">
                    ¿Olvidaste tu contraseña?
                </a>
            </div>
        </form>

        <!-- Enlace de Registro -->
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">
                ¿No tienes una cuenta? 
                <a href="{{ route('register') }}" class="text-[#019934] font-medium hover:underline">
                    Regístrate aquí
                </a>
            </p>
        </div>
    </div>

</body>
</html>
