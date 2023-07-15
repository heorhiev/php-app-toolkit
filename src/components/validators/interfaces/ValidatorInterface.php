<?php

namespace app\toolkit\components\validators\interfaces;


interface ValidatorInterface
{
    public function isValid($value): bool;
}