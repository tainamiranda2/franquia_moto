@extends('layouts.main')
@section('titulo', 'Mdados')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>

<div class="form-container">
    @include('layouts.sidebar')
    <form action="{{Route("adicionarVenda")}}" method="POST" >
        @csrf
        <div class="titulo-form">Venda</div>
        <div class="row g-3">
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Descrição:</label>
                <input  required ="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição da venda">
            </div>
           
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Valor:</label>
                <input required type="text" class="form-control" id="valor_total" name="valor_total" placeholder="Digite o valor total">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Método de pagamento:</label>
                <select  class="form-control"  name="metodo_pagamento_id" id="metodo_pagamento_id">
                <option value="">Selecione um método de pagamento</option>
                @foreach ($metodosPagamento as $metodo)
                    <option value="{{ $metodo->id }}">{{ $metodo->nome }}</option>
                @endforeach
             </select>
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Cliente:</label>
                <select  class="form-control"  name="cliente_id" id="cliente_id">
            <option value="">Selecione um cliente</option>
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
            @endforeach
        </select>
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Funcionário:</label>
                <select  class="form-control"  name="funcionario_id" id="funcionario_id">
                <option value="">Selecione um funcionário</option>
                @foreach ($funcionarios as $funcionario)
                    <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                @endforeach
            </select>
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Loja:</label>
                <select  class="form-control"  name="loja_id" id="loja_id">
                <option value="">Selecione uma loja</option>
                @foreach ($lojas as $loja)
                    <option value="{{ $loja->id }}">{{ $loja->nome }}</option>
                @endforeach
            </select>
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Moto:</label>
                <select  class="form-control"  name="moto_id" id="moto_id">
                <option value="">Selecione uma moto</option>
                @foreach ($motos as $moto)
                    <option value="{{ $moto->id }}">{{ $moto->nome }}</option>
                @endforeach
                </select>
           
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-save">Salvar</button>
            <button type="button" class="btn btn-cancel">Cancelar</button>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
<script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>
@endsection
