<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Filme;

class ApiFilmeController extends Controller
{
    public function index()
    {        
        return Filme::with('Categoria','ator','diretor')->get();
    }

    public function show($id)
    {
        return Filme::with('Categoria','ator','diretor')->find($id);
    }

    public function store(Request $request)
    {
        
        //return $request->all();
        $validateData = $request->validate([
            'nome_filme' => 'required',
            'ano_filme' => 'required',
            'classificacao' => 'required',
            'tipo_filme' => 'required',
            'nome_ator' => 'required',
            'nome_diretor' => 'required',
        ]);
        
        //return response()->json('Ola',200);
        
        $show = Filme::create($validateData);
        $show->categoria()->create($validateData);
        $show->ator()->create($validateData);
        $show->diretor()->create($validateData);
            
        return response()->json($show, 201);
    }

    public function update(Request $request, $id)
    {
        
        $filme = Filme::where('id',$id )->with(['categoria','ator','diretor'])->first();

        $filme->nome_filme = $request->input('nome_filme');
        $filme->ano_filme =  $request->input('ano_filme');              
        $filme->categoria->classificacao =  $request->input('classificacao');  
        $filme->categoria->tipo_filme =  $request->input('tipo_filme');
        $filme->ator->nome_ator =  $request->input('nome_ator');
        $filme->diretor->nome_diretor =  $request->input('nome_diretor'); 
        
        $filme->push();

        return response()->json($filme, 200);
    }

    public function delete($id)
    {
        $filme = Filme::where('id',$id )->with(['categoria','ator','diretor'])->first();
        $filme->delete();

        return response()->json(null, 204);
    }
}

