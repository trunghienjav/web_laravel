<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function form()
    {
        return view('form');
    }
    public function post(Request $rq)
    {
        $a = $rq->get('a'); //a này là name của input
        return view('show', [
            'a' => $a
        ]);
    }
}
