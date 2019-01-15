<?php

namespace App\Generated\Exceptions;

use YetAnotherGenerator\BaseException;

class ObjectNotFoundException extends BaseException
{
    public function __construct($message = null)
    {
        parent::__construct($message, ErrorCode::OBJECT_NOT_FOUND);
    }

}
