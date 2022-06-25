<?php

namespace ResetButton\Aparser\Client;

use ResetButton\Aparser\Aparser;
use ResetButton\Aparser\Dto\Request\AparserRequest;
use ResetButton\Aparser\Dto\Response\AparserResponse;
use ResetButton\Aparser\Exception\AparserException;

class HttpClient
{

    public static function prepareRequest(Aparser $aparser, AparserRequest $aparserRequest) : array
    {
        $payload = [
            'password' => $aparser->getPassword(),
            'action' => $aparserRequest::ACTION,
            'data' => $aparserRequest->getData()
        ];

        //Clean up empty "data" section
        $payload = array_filter($payload);

        return $payload;
    }

    public static function makeRequest(Aparser $aparser, string $aparserJsonRequest) : AparserResponse
    {

        $client = new \GuzzleHttp\Client([
            'headers' => ['content-type' => 'application/json']
        ]);

        try {
            $response = $client->post($aparser->getUrl(), ['body' => $aparserJsonRequest]);
        } catch(\Exception $e) {
            throw new AparserException("HTTP Client Error : ".$e->getMessage(),$e->getCode());
        }

        return new AparserResponse($response);
    }

}
