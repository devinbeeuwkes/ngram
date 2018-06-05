<?php

namespace TextUtils\Exceptions;

class InvalidArgumentException extends NGramException
{
    public function __construct($message = '')
    {
        parent::__construct($message);
    }
}
