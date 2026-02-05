# Scramble Issue #1078 - Reproduction Repository

This repository reproduces the bug reported in [dedoc/scramble#1078](https://github.com/dedoc/scramble/issues/1078).

## Bug Description

Nullable string literal union types lose enum values in OpenAPI spec. When using a PHPDoc `@var` annotation with string literals AND null (e.g., `@var 'idle'|'charging'|'discharging'|null`), the generated OpenAPI spec loses the enum values and only outputs `string|null`.

## Dependencies

- Laravel Framework: v12.x
- dedoc/scramble: v0.13.x
- spatie/laravel-data: v4.x

## How to Reproduce

1. Clone this repository
2. Run `composer install`
3. Access the Scramble API documentation at `/docs/api`

## Expected Output

```json
{
  "type": ["string", "null"],
  "enum": ["idle", "charging", "discharging"]
}
```

## Actual Output

```json
{
  "status": {
    "type": ["string", "null"]
  }
}
```

The enum values are completely lost.

## Reproduction Code

See `app/Data/ExampleResource.php`:

```php
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
```
