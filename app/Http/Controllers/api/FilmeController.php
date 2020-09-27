<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Filme;

class FilmeController extends Controller
{

    public function index()
    {
        return Filme::all();
    }

    public function store(Request $request)
    {
        Filme::create($request->all());
    }

    public function show($id)
    {
        return Filme::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $filme = Filme::findOrFail($id);
        $filme->update($request->all());
    }

    public function destroy($id)
    {
        $filme = Filme::findOrFail($id);
        $filme->delete();

    }
}
