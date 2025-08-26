<?php

namespace App\Http\Services;
 
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http; 

class WebhookService
{
    public function sendWebhook($url, $payload, $privateKey)
    {
        try {
            // Générer la signature HMAC
            $signature = $this->generateSignature($payload, $privateKey);

            // Envoyer la requête HTTP POST
            $response = Http::timeout(10)
                ->withHeaders([
                    'Content-Type' => 'application/json',
                    'X-Webhook-Signature' => $signature,
                ])
                ->post($url, $payload);

            // Retourner la réponse JSON si tout va bien
            return [
                'success' => true,
                'status' => $response->status(),
                'body' => $response->json()
            ];

        } catch (ConnectionException $e) {
            // Le serveur n'a pas répondu
            return [
                'success' => false,
                'error' => 'Connection failed or timeout',
                'message' => $e->getMessage()
            ];
        } catch (RequestException $e) {
            // Une erreur HTTP est survenue (ex: 500)
            return [
                'success' => false,
                'error' => 'HTTP request failed',
                'message' => $e->getMessage()
            ];
        } catch (\Exception $e) {
            // Autres erreurs inattendues
            return [
                'success' => false,
                'error' => 'Unexpected error',
                'message' => $e->getMessage()
            ];
        }
    }


    protected function generateSignature($payload, $secret)
    {
        $payloadString = is_array($payload) ? json_encode($payload) : $payload;
        return hash_hmac('sha256', $payloadString, $secret);
    }

}