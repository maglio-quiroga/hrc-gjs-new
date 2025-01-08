<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InstagramController extends Controller
{
    // Redirigir al usuario para iniciar sesión en Instagram
    public function redirectToInstagram()
    {
        $appId = config('instagram.app_id');
        $redirectUri = config('instagram.redirect_uri');
        $scope = 'user_profile,user_media';

        // Construir la URL de autenticación
        $url = "https://api.instagram.com/oauth/authorize?client_id={$appId}&redirect_uri={$redirectUri}&scope={$scope}&response_type=code";

        return redirect($url);
    }

    // Manejar la respuesta después de la autenticación
    public function handleCallback(Request $request)
    {
        $code = $request->input('code');

        if (!$code) {
            return response()->json(['error' => 'No se recibió el código de autorización'], 400);
        }

        // Obtener el token de acceso desde Instagram
        $response = Http::asForm()->post('https://api.instagram.com/oauth/access_token', [
            'client_id' => config('instagram.app_id'),
            'client_secret' => config('instagram.app_secret'),
            'grant_type' => 'authorization_code',
            'redirect_uri' => config('instagram.redirect_uri'),
            'code' => $code,
        ]);

        if ($response->failed()) {
            return response()->json(['error' => 'Error al obtener el token de acceso'], 400);
        }

        // Guardar el token de acceso (puedes almacenarlo en la base de datos o un archivo)
        $accessToken = $response->json()['access_token'];

        return response()->json(['access_token' => $accessToken]);
    }

    public function getUserMedia(Request $request)
    {
        // Token de acceso obtenido previamente
        $accessToken = config('instagram.access_token'); // Configurado en tu .env o base de datos.

        if (!$accessToken) {
            return view('instagram.media', ['posts' => [], 'error' => 'Access Token no disponible.']);
        }

        // Obtener publicaciones desde la API
        $response = Http::get("https://graph.instagram.com/me/media", [
            'fields' => 'id,caption,media_type,media_url,thumbnail_url,permalink,timestamp',
            'access_token' => $accessToken,
        ]);

        if ($response->failed()) {
            return view('instagram.blade', ['posts' => [], 'error' => 'Error al obtener publicaciones.']);
        }

        // Pasar publicaciones a la vista
        $posts = $response->json('data') ?? [];
        return view('instagram.blade', ['posts' => $posts, 'error' => null]);
    }


    

}
