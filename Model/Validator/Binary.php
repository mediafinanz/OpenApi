<?php

namespace OpenApi\Model\Validator;

use Opis\JsonSchema\Format;

class Binary implements Format
{
    public function validate($mData) : bool
    {
        return true;
    }
}
