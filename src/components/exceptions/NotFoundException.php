<?php

namespace app\toolkit\components\exceptions;


class NotFoundException extends \Exception
{
    public $message = 'Not found';

    public function getExceptionCode(): int
    {
        return 404;
    }
}