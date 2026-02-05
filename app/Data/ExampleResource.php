<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class ExampleResource extends Data
{
    public function __construct(
        /**
         * @var 'idle'|'charging'|'discharging'|null $status
         */
        public readonly ?string $status,
    ) {}
}
