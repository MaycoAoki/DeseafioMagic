<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Filme;
use App\Model\Categoria;
use App\Model\Ator;
use App\Model\Diretor;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexMovie()
    {
        
        $filmes = Filme::with('Categoria','ator','diretor')->get();
        return view('pages.listaFilme', compact('filmes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createMovie()
    {
        return view('pages.novoFilme');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMovie(Request $request)
    {
        
        $validateData = $request->validate([
            'nome_filme' => 'required',
            'ano_filme' => 'required',
            'classificacao' => 'required',
            'tipo_filme' => 'required',
            'nome_ator' => 'required',
            'nome_diretor' => 'required',
        ]);

        $show = Filme::create($validateData);
        $show->categoria()->create($validateData);
        $show->ator()->create($validateData);
        $show->diretor()->create($validateData);
        
        return redirect('/listaFilme')->with('success', 'Movie Case is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editMovie($id)
    {
        $filme = Filme::find($id);

        return view('pages.editarFilme', compact('filme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateMovie(Request $request, $id)
    {
        $request->validate([
            'nome_filme' => 'required',
            'ano_filme' => 'required',
            'classificacao' => 'required',
            'tipo_filme' => 'required',
            'nome_ator' => 'required',
            'nome_diretor' => 'required',
        ]);
        
        $filme = Filme::where('id',$id )->with(['categoria','ator','diretor'])->first();          

        $filme->nome_filme = $request->input('nome_filme');
        $filme->ano_filme =  $request->input('ano_filme');              
        $filme->categoria->classificacao =  $request->input('classificacao');  
        $filme->categoria->tipo_filme =  $request->input('tipo_filme');
        $filme->ator->nome_ator =  $request->input('nome_ator');
        $filme->diretor->nome_diretor =  $request->input('nome_diretor'); 
        
        $filme->push();

        return redirect('/listaFilme')->with('success', 'Movie Case is successfully saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteMovie($id)
    {
        $filme = Filme::where('id',$id )->with(['categoria','ator','diretor'])->first();
        $filme->delete();
        return redirect('/listaFilme')->with('success', 'Movie Case is successfully delete');
    }
}
