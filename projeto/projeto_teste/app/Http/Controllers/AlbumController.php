<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function index(){

        $albuns = Album::all();

        return view('album', ['albuns' =>$albuns]);
    }

    public function create()
    {
        return view('album');
    }

    public function store(Request $request)
    {
        Album::create($request->all());
        return redirect()->route('discografia-index');
    }

    public function destroy($id)
    {
        Album::where('id',$id)->delete();
        return redirect()->route('discografia-index');
    }
}
