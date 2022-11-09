<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discografia;
use App\Models\Album;

class HomeController extends Controller
{
    public function index(){

        $discos = Discografia::all();
        $albuns = Album::with('discografia')->get();

        return view('discografia', compact('albuns'));
    }

    public function create()
    {
        $albuns = Album::all();

        return view('create', compact('albuns'));
    }

    public function store(Request $request)
    {
        Discografia::create($request->all());
        return redirect()->route('discografia-index');
    }

    public function destroy($id)
    {
        Discografia::where('id',$id)->delete();
        return redirect()->route('discografia-index');
    }
}
