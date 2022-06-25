<?php

namespace ResetButton\Aparser;

use ResetButton\Aparser\Client\HttpClient;
use ResetButton\Aparser\Dto\Request\AparserGetProxyRequest;
use ResetButton\Aparser\Dto\Request\AparserRequest;
use ResetButton\Aparser\Dto\Response\AparserResponse;

class Aparser
{

    private string $url;
    private string $password;

    public function __construct(string $url, string $password = '')
    {
        $this->url = $url;
        $this->password = $password;
    }

    /**
     * @param array $data
     * @return AparserResponse
     * @throws Exception\AparserException
     */

    public function getProxy(array $data = []) : AparserResponse
    {
        $aparserGetProxyRequest = new AparserGetProxyRequest($data);
        return $this->makeRequest($aparserGetProxyRequest);
    }

    /**
     * @param AparserRequest $aparserRequest
     * @return AparserResponse
     * @throws Exception\AparserException
     */

    public function makeRequest(AparserRequest $aparserRequest) : AparserResponse
    {
        $payload = HttpClient::prepareRequest($this, $aparserRequest);
        return $this->makeRawRequest(json_encode($payload));
    }

    /**
     * @param string $aparserJsonRequest
     * @return AparserResponse
     * @throws Exception\AparserException
     */

    public function makeRawRequest(string $aparserJsonRequest)  : AparserResponse
    {
        return HttpClient::makeRequest($this, $aparserJsonRequest);
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
