<?php

namespace Devchris\Quickmetrics;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Quickmetrics
{

    public static function event(string $name, float $val, ?string $dimension = null)
    {

        $data = array(
            'name' => $name,
            'value' => $val,
		);

        if ($dimension) {
            $data['dimension'] = $dimension;
        }

        // send the event to quickmetrics.io api
        $client = new Client([
            'base_url' => 'https://qckm.io',
        ]);

        try {
            $res = $client->post('/json', [
                'json' => $data,
                'verify' => false,
                'headers' => [
                    'x-qm-key' => config('quickmetrics.key'),
                ],
            ]);

            return response()->json([
                'code' => $res->getStatusCode(),
                'message' => $res->getReasonPhrase(),
            ]);
        } catch (GuzzleException $e) {
            // handle the exception
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }
    }

}
