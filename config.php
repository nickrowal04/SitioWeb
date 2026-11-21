<?php
// config.php — NO subir a repositorios públicos ni dejar accesible por web.
// Clave nueva de Google AI Studio: https://aistudio.google.com/apikey
return [
    'api_key'         => getenv('GEMINI_API_KEY') ?: 'AQ.Ab8RN6KhwGAGzF9RaUZzSPM0RpPSGTZPZjQMqRvG6LigdYUjGA',
   'model'          => 'gemini-3.5-flash-lite',
'fallback_model' => 'gemini-3.5-flash',
    'max_tokens'      => 200000,
    'thinking_budget' => null,                  // 0 = sin "pensamiento" (más rápido y barato). Usa null si cambias a un modelo que no lo permita
    'temperature'     => 0.4,
    'max_msgs_hora'   => 30,                 // límite de mensajes por visitante por hora
];
