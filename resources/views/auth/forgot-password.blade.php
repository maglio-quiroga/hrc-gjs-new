<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
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
        <h2 class="text-center text-2xl font-bold mb-4" style="color: #019934;">
            ¿Olvidaste tu contraseña?
        </h2>

        <!-- Mensaje informativo -->
        <p class="text-sm text-gray-600 mb-6 text-center">
            Ingresa tu dirección de correo electrónico y te enviaremos un enlace para restablecer tu contraseña.
        </p>

        <!-- Formulario -->
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            
            <!-- Correo Electrónico -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Correo Electrónico</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus 
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600"
                       placeholder="Ingresa tu correo electrónico">
                <!-- Mensaje de error -->
                @error('email')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- Botón de Envío -->
            <button type="submit" 
                    class="w-full bg-green-600 text-white py-2 px-4 rounded-md font-bold hover:bg-green-700 transition duration-300">
                Enviar enlace de restablecimiento
            </button>
        </form>
    </div>

</body>
</html>
