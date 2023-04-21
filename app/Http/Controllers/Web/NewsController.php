<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NewsController extends Controller
{
    public function index()
    {
        return Redirect::to('https://xn--80aaal3c2at.xn--p1ai/novosti.html');
    }
}
