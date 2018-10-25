<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Album;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $direction = 'desc';

        $items = Album::with('photos')
            ->orderBy($user->album_order, $direction)
            ->paginate(9);

        $view = view('main', ['items' => $items])->render();
        return (new Response($view));
    }
}
