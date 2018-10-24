<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Photo;

class IndexController extends Controller
{
    public function index()
    {
        $data = [];
        $items = Photo::all();

        foreach ($items as $item) {

            $data[] = ['id' => $item->id,
                'title' => $item->title,
                'url' => $item->url];
        }

        $view = view('main', ['items' => $data])->render();
        return (new Response($view));
    }
}
