<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Models\Photo;
use App\Models\Album;
use Illuminate\Support\Facades\Auth;

class PhotosController extends Controller
{
    public function index($id)
    {
        $photo_order = 'id';

        if(Auth::user()) {

            $user = Auth::user();
            $photo_order = $user->photo_order ? $user->photo_order : 'id';
        }

        $album = Album::find($id);
        $items = Photo::where('album_id', $id)
            ->orderBy($photo_order)
            ->paginate(8);

        $view = view('album', ['items' => $items, 'title' => $album->name, 'date' => $album->created_at])->render();
        return (new Response($view));
    }
}
