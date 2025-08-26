<?php 

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VerifyWebhook{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Vérifications de sécurité de base
        if (!$request->isMethod('post')) {
            return response()->json(['error' => 'Method not allowed'], 405);
        }

        // Vérifier que la requête vient d'une source autorisée (optionnel)
        $allowedIps = config('webhooks.allowed_ips', []);
        if (!empty($allowedIps) && !in_array($request->ip(), $allowedIps)) {
            Log::warning('Webhook from unauthorized IP', ['ip' => $request->ip()]);
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Limiter la taille du payload
        $maxSize = config('webhooks.max_payload_size', 1024 * 1024); // 1MB par défaut
        if ($request->header('Content-Length') > $maxSize) {
            return response()->json(['error' => 'Payload too large'], 413);
        }

        return $next($request);
    }
}