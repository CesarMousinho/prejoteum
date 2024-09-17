<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Postagem;

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postagens = Postagem::orderBy('id','ASC')->get();
        return view('postagem.postagem_index', compact('postagens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $postagens = Categoria::orderBy('nome', 'ASC')->get();
       return view('postagem.postagem_create') compact('postagens');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'titulo' => 'required|min:5|alpha:ascii',
        ]);
        
        $postagem = new Postagem();
        $postagem->titulo = $request->titulo;
        $postagem->save();

        //dd($request->all());

        return redirect()->route('postagem.index')->with('mensagem', 'Postagem cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //dd('ENTRASTES NO LOCAL CERTO ' . $id);
        $postagem = Postagem::find($id);
        return view ('postagem.postagem_show', compact ('postagem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $postagem= Postagem::find($id);
        return view ('postagem.postagem_edit',compact('postagem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'titulo' => 'required|min:5|alpha:ascii',

        ]);

        $postagem = Postagem::find($id);
        $postagem->titulo = $request->titulo;
        $postagem->save();

        return redirect()->route('postagem.index')->with('mensagem', 'Postagem alterada com sucesso.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

//PAREI NO VIDEO 23:08 DO CRUD DE POSTAGEM

