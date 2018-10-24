<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Album;


class IndexController extends Controller
{
    public function index()
    {
        $items = Album::with('photos')->paginate(9);

        foreach ($items as $item) {

            $photo = $item->photos->last();

        }
        $view = view('main', ['items' => $items])->render();
        return (new Response($view));
    }
}
