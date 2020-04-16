@extends('adminlte::page')

@section('title', 'Novo Plano')

@section('content_header')
<h1>Cadastro de Novo Plano</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
    <form action="{{route('plans.store')}}" class="form" method="POST">
        @csrf 

        <div class="form-group">

            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="name" class="form-control"  placeholder="Nome:">
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <textarea name="description" class="form-control" placeholder="Descrição">
                </textarea>
            </div>
            <div class="form-group">
                <label>Valor</label>
                <input type="text" name="price" class="form-control" placeholder="Valor">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
         </div>
    </div>
 </div>

    </form>

    </div>
</div>
@stop