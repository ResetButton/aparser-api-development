<?php

namespace ResetButton\Aparser\Client;

use ResetButton\Aparser\Aparser;
use ResetButton\Aparser\Dto\AparserRequest;

class HttpClient
{

    public static function makeRequest(AparserRequest $aparserRequest)
    {
        $client = new \GuzzleHttp\Client([
            'headers' => ['content-type' => 'application/json']
        ]);

        $response = $client->post($aparserRequest->getUrl(),[ 'json' => $aparserRequest->getPayload()]);

        /*

        try {
            $response = $client->post($aparserRequest->getUrl(),$aparserRequest->getPayload());
            //Если ответ будет неуспешным, то будет Exception
        } catch(\Illuminate\Http\Client\ConnectionException $e) {
            //Ошибка соединения с апарсером, то есть соединения не произошло
            //todo переименовать метод более понятно
            //todo добавить отсылку в сентри тут
            //$aparserResponseDto->handleConnectionException($e);
        } catch(\Illuminate\Http\Client\RequestException $e) {
            //Ошибка ответа от апарсера, соединение есть но что то пошло не так
            //todo переименовать метод более понятно
            //todo добавить отсылку в сентри тут
            //$aparserResponseDto->handleRequestException($e);
        }
        */

        dd($response->getBody()->getContents());


    }



}
