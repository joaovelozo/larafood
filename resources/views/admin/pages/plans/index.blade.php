@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
<h1>Planos</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <h4> <a href="{{ route('plans.create')}}" class="btn btn-outline-success  text-rigth" >Novo Plano</a></h4>
            
 

        </div>

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                    <tr>
                        <td>
                            {{ $plan->name}}
                        </td>
                        <td>
                            {{ $plan->price}}
                        </td>
                        <td width="50">
                            <a href="{{route('plans.show', $plan->url)}} " class="btn btn-warning">Visualizar</a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>

            </div>
            <div class="card-footer">
                {!! $plans->links() !!}
        </div>
  

@stop