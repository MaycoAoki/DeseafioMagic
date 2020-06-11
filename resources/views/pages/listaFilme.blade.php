@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <h1 class="display-3">Lista de Filme</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Filme</th>
                    <th>Ano</th>
                    <th>Class.</th>
                    <th>Categoria</th>
                    <th>Atores</th>
                    <th>Diretores</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($filmes as $filme)

                <tr>
                    <td class="text-center">{{$filme->id}}</td>
                    <td>{{$filme->nome_filme}}</td>
                    <td>{{$filme->ano_filme}}</td>
                    <td>{{$filme->categoria->classificacao}}</td>
                    <td>{{$filme->categoria->tipo_filme}}</td>
                    <td>{{$filme->ator->nome_ator}}</td>
                    <td>{{$filme->diretor->nome_diretor}}</td>
                    <td class="td-actions text-right">
                        <form>
                        <a href="{{ route('editMovie',$filme->id)}}" type="button" rel="tooltip"
                            class="btn btn-sm btn-success">
                            <i class="material-icons">edit</i>
                        </a>
                    </form>
                    </td>
                    <td class="td-actions text-right">
                        <form action="{{ route('delete',$filme->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" rel="tooltip" class="btn btn-sm btn-danger">
                                <i class="material-icons">close</i>
                            </button>
                            
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection