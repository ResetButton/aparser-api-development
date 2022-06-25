<?php

namespace ResetButton\Aparser\Dto\Request;

class AparserGetProxyRequest extends AparserRequest
{

    const ACTION = 'getProxies';

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function setCheckers(array $checkers) : void
    {
        $this->data['checkers'] = $checkers;
    }


}
