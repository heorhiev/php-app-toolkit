<?php

namespace app\toolkit\components\validators;

use app\toolkit\components\validators\Validator;


class TextValidator extends Validator
{
    public $min = 5;
    public $max = 50;

    public function isValid($value): bool
    {
        $length = mb_strlen($value);
        return $this->min <= $length && $this->max >= $length;
    }
}