@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table">
        <?php use App\Despesa;?>
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Data</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Ação</th>                       
                    </tr>
                </thead>
                <tbody>
                @foreach (Despesa::all() as $item)
                    <tr class="col"><td>{{$item -> id}}</td>
                        <td>{{$item -> descricao}}</td>
                        <td>{{$item -> data}}</td>
                        <td>{{$item -> valor}}</td>
                        <td>
                            <a href="/editar-despesa/{{$item -> id}}">Editar</a>
                        </td>
                        <td>
                            <a href="/excluir-despesa/{{$item -> id}}" class="btn btn-danger">Exluir</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar Despesa</div>
                <div class="card-body">
                    <form action="/cadastrar-despesa" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <label>Descrição</label>
                        <input type="text" name="descricao"/>
                        <br><br>
                        <label>Data</label>
                        <input type="date" name="data"/>
                        <input type="hidden" name="usuario" value="{{ Auth::user()->id }}"/>
                        <br><br>
                        <label>Valor</label>
                        <input type="text" name="valor"/>
                        <br><br>
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
