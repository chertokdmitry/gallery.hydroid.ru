<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Photo;
use App\Album;
use Illuminate\Support\Facades\Cookie;

class PhotosController extends Controller
{
    public function index($id)
    {
        $direction = 'desc';
        $album = Album::find($id);
        $items = Photo::where('album_id', $id)
            ->orderBy(Cookie::get('photos'), $direction)
            ->paginate(8);

        $view = view('album', ['items' => $items, 'title' => $album->name, 'date' => $album->created_at])->render();
        return (new Response($view));
    }
}
