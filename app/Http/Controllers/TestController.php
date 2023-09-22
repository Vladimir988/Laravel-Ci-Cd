<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function __invoke()
    {
        return 'This is test controller return 1111 new test';
    }
}
