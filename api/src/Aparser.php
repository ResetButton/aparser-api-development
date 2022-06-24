<?php

namespace ResetButton\Aparser;

use ResetButton\Aparser\Client\HttpClient;
use ResetButton\Aparser\Dto\AparserGetProxyRequest;
use ResetButton\Aparser\Dto\AparserRequest;

class Aparser
{

    private string $url;
    private string $password;

    public function __construct(string $url, string $password = '')
    {
        $this->url = $url;
        $this->password = $password;
    }

    public function getProxy(array $dataOptions = [])
    {
        $aparserGetProxyRequest = new AparserGetProxyRequest($this);
        $aparserGetProxyRequest->parseOptions($dataOptions);

        return $this->makeRequest($aparserGetProxyRequest);
    }

    public function makeRequest(AparserRequest $aparserRequest)
    {
        HttpClient::makeRequest($aparserRequest);
    }

    public function getUrl() : string
    {
        return $this->url;
    }

    public function getPassword() : string
    {
        return $this->password;
    }

}
