<?php

namespace App\Http\Controllers\Api;

use App\Data\ExampleResource;
use App\Http\Controllers\Controller;

class ExampleController extends Controller
{
    public function show(): ExampleResource
    {
        return new ExampleResource(status: 'idle');
    }
}
