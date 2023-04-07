<?php

namespace App\Services\Converter;

use Illuminate\Support\Str;

class CaseConverterService
{
    public function camelToSnake($object)
    {
        $result = [];

        foreach ($object as $key => $value) {
            $key = Str::snake($key);

            if (is_object($value) || is_array($value)) {
                $result[$key] = $this->camelToSnake($value);
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }
}
