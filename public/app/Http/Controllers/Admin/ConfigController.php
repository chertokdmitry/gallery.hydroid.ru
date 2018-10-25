<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function index()
    {
        $view = view('config')->render();
        return (new Response($view));
    }

    public function store(Request $request)
    {
        $response = new Response(view('home'));
        $response->withCookie(cookie('albums', $request->albums, 45000));
        $response->withCookie(cookie('albums_direction', $request->albums_direction, 45000));
        $response->withCookie(cookie('photos', $request->photos, 45000));
        $response->withCookie(cookie('photos_direction', $request->photos_direction, 45000));
        return $response;
    }
}
