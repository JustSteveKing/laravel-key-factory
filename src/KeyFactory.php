<?php

declare(strict_types=1);

namespace JustSteveKing\KeyFactory;

use Illuminate\Support\Str;

class KeyFactory
{
    /**
     * Generate a new Key.
     *
     * @param string $prefix
     * @param int|null $length Defaults to null.
     *
     * @return string
     */
    public static function generate(string $prefix, int | null $length = null): string
    {
        if (is_null($length)) {
            $length = config(
                key: 'key-factory.key.length',
            );
        }

        $string = Str::random(
            length: $length,
        );

        return "{$prefix}{$string}";
    }
}
