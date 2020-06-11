@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h1 class="display-3">Cadastrar Novo Filme</h1>
                <div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <br>

                    <form method="post" action="{{ route('updateMovie', $filme->id) }}">

                        @csrf

                        <h4>Filme</h4>
                        <br>

                        <div class="form-group">
                            <label for="nomeAtor">Nome:</label>
                            <input type="text" class="form-control" name="nome_filme" value="{{$filme->nome_filme}}"/>
                        </div>

                        <div class="form-group">
                            <label for="anoFilme">Ano da Estreia:</label>
                            <input type="text" class="form-control" name="ano_filme" value="{{$filme->ano_filme}}"/>
                        </div>
                        
                        <div class="col-lg-5 col-md-6 col-sm-3">
                            <select class="selectpicker" name="classificacao" id="classificacao"
                                data-style="btn btn-primary btn-round">
                                <option>{{$filme->categoria->classificacao}} </option>
                                <option >L</option>
                                <option >10</option>
                                <option >12</option>
                                <option >14</option>
                                <option >16</option>
                                <option >18</option>
                            </select>
                        </div>
                        
                        <div class="col-lg-5 col-md-6 col-sm-3">
                            <select class="selectpicker" id="tipo_filme" name="tipo_filme"
                                data-style="btn btn-primary btn-round" >
                                <option >{{$filme->categoria->tipo_filme}}</option>
                                <option >Ação</option>
                                <option >Animação</option>
                                <option >Comedia</option>
                                <option >Drama</option>
                                <option >Ficção</option>
                                <option >Romantico</option>
                            </select>
                        </div>

                        <br>
                        <h4>Atores</h4>
                        <br>

                        <div class="form-group">
                            <label for="my-input">Nome</label>
                            <input id="nome_ator" class="form-control" type="text" name="nome_ator" value="{{$filme->ator->nome_ator}}">
                        </div>

                        <br>
                        <h4>Diretor</h4>
                        <br>

                        <div class="form-group">
                            <label for="my-input">Nome</label>
                            <input id="nome_diretor" class="form-control" type="text" name="nome_diretor" value="{{$filme->diretor->nome_diretor}}">
                        </div>                      
                    
                        <div class="d-flex justify-content-around">
                            <button type="submit" class="btn btn-primary btn-round">Salvar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection