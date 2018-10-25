<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Album;
use Illuminate\Support\Facades\Cookie;

class IndexController extends Controller
{
    public function index()
    {
        $direction = 'desc';

        $items = Album::with('photos')
            ->orderBy(Cookie::get('albums'), $direction)
            ->paginate(9);

        $view = view('main', ['items' => $items])->render();
        return (new Response($view));
    }
}
