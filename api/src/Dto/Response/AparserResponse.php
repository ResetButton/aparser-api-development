<?php

namespace ResetButton\Aparser\Dto\Response;

use GuzzleHttp\Psr7\Response;
use ResetButton\Aparser\Exception\AparserException;

class AparserResponse
{

    private $data = [];

    public function __construct(Response $response)
    {
        $body = json_decode($response->getBody()->getContents(),true);

        if (!isset($body['success'])) {
            throw new AparserException("Malformed answer : missing 'success' section in answer",500);
        }

        if (!$body['success']) {
            throw new AparserException(isset($body['msg']) ? "Aparser error : ".$body['msg'] : "Unknown Aparser error",422);
        }

        if (isset($body['data'])) {
            $this->data = $body['data'];
        }

    }

    public function getData()
    {
        return $this->data;
    }
}
