@extends('adminlte::page')

@section('title', "Detalhes do plano {$plan->name}")

@section('content_header')
<h1>Descrição do plano<b>{{ $plan->name}}</b></h1>
@stop

@section('content')
<div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome: </strong> {{ $plan->name}}
                </li>
                <li>
                    <strong>Url: </strong> {{ $plan->url}}
                </li>
                <li>
                    <strong>Descrição: </strong> {{ $plan->description}}
                </li>
                <li>
                    <strong>Valor: </strong> R$ {{ number_format($plan->value, 2, ',','.')}}
                </li>
            </ul>
    </div>
</div>
@stop