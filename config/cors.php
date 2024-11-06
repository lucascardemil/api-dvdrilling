<?php
return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Asegúrate de incluir las rutas necesarias

    'allowed_methods' => ['*'], // Permite todos los métodos HTTP

    'allowed_origins' => ['http://127.0.0.1:8000'], // Permite solicitudes desde tu frontend

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // Permite todos los encabezados

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true, // Es necesario para que funcione con cookies
];
