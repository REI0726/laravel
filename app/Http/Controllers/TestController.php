<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{
    public function index()
    {
          return "建物です";
    }
    public function room($room)
    {
          return "部屋番号は" . $room . "です";
    }
}

    /*public function index(Request $request)
    {
        return view('index', ['txt' => 'フォームを入力']);
    }
    public function post(ClientRequest $request)
    {
        return view('index', ['txt' => '正しい入力です']);
    }
    public function verror()
    {
        return view('verror');
    }*/

    
