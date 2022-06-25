<?php

namespace ResetButton\Aparser\Dto\Request;

use ResetButton\Aparser\Aparser;

abstract class AparserRequest
{

    const ACTION = 'none';
    protected array $data = [];

    public function getData(): array
    {
        return $this->data;
    }



}
