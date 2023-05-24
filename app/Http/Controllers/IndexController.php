<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return inertia(
            'Index/Index',
            ['mensagem' => 'Hello World with Laravel and Vue']
        );
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
