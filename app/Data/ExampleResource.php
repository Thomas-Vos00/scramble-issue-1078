<?php

namespace App\Data;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Resource;

class ExampleResource extends Resource
{
    public function __construct(
        /**
         * @var 'idle'|'charging'|'discharging'|null $status
         */
        public readonly ?string $status,
    ) {}
}
