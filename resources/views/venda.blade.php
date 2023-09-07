@extends('layouts.main')
@section('titulo', 'Mdados')
@section('content')

<div class="conteudo">
    <form action="{{}}" method="POST" >
        @csrf
        <h1>Venda</h1>
        <div class="dados">
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Descrição:</label>
                <input  required ="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição da venda">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Data:</label>
                <input required type="date" class="form-control" id="data" name="data">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Valor:</label>
                <input required type="text" class="form-control" id="valor_total" name="valor_total" placeholder="Digite o valor total">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Método de pagamento:</label>
                <input required type="text" class="form-control" id="metodo_de_pagamento" name="metodo_de_pagamento" placeholder="Digite o metodo de pagamento">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Cliente:</label>
                <input required type="text" class="form-control" id="cliente" name="cliente" placeholder="Digite o cliente">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Funcionário:</label>
                <input required type="text" class="form-control" id="funcionário" name="funcionário" placeholder="Digite o funcionário">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Loja:</label>
                <input required type="text" class="form-control" id="loja" name="loja" placeholder="Digite a loja">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Moto:</label>
                <input required type="text" class="form-control" id="moto" name="moto" placeholder="Digite a moto">
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-save">Salvar</button>
            <button type="button" class="btn btn-cancel">Cancelar</button>
        </div>
    </form>
</div>

<script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>
@endsection
