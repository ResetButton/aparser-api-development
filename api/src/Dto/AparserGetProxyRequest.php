<?php

namespace ResetButton\Aparser\Dto;

use phpDocumentor\Reflection\Types\Static_;
use ResetButton\Aparser\Aparser;

class AparserGetProxyRequest extends AparserRequest
{

    protected string $action = 'getProxies';

    public function __construct(Aparser $aparser)
    {
        parent::__construct($aparser);
    }

    public function parseOptions(array $dataOptions)
    {
        foreach ($dataOptions as $key => $value) {
            switch($key) {
                case 'checkers' :
                    $this->data['checkers'] = $value;
                    break;
            }
        }
    }



}
