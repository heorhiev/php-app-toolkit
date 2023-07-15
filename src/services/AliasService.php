<?php

namespace app\toolkit\services;


class AliasService extends Service
{
    public static function getAlias(string $value): string
    {
        return str_replace(array_keys(ALIASES), ALIASES, $value);
    }
}