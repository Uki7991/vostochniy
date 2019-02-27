<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function welcome()
    {
        $types = Type::all()->sortBy('order');

        return view('welcome', [
            'types' => $types->chunk($types->count() / 2),
        ]);
    }
}
