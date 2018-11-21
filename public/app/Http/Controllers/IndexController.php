<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Models\Album;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $album_order = 'id';

        if(Auth::user()) {

            $user = Auth::user();
            $album_order = $user->album_order ? $user->album_order : 'id';
        }
        $items = Album::with('photos')
            ->orderBy($album_order)
            ->paginate(9);

        $view = view('main', ['items' => $items])->render();
        return (new Response($view));
    }
}
