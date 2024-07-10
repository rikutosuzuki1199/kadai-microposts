<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store(string $id)
    {
        \Auth::user()->favorite(intval($id));
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    public function destroy(string $id)
    {
        \Auth::user()->unfavorite(intval($id));
        // 前のURLへリダイレクトさせる
        return back();
    }
}
