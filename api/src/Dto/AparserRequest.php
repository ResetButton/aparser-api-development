<?php

namespace ResetButton\Aparser\Dto;

use ResetButton\Aparser\Aparser;

abstract class AparserRequest
{
    protected string $url;
    protected string $action = 'none';
    protected array $data = [];
    protected array $payload = [];

    public function __construct(Aparser $aparser)
    {
        $this->url = $aparser->getUrl();
        $this->password = $aparser->getPassword();
    }

    public function getUrl() : string
    {
        return $this->url;
    }

    public function getPayload() : array
    {

        return [
            'password' => $this->password,
            'action' => $this->action
        ];
    }



}
