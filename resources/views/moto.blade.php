@extends('layouts.main')
@section('titulo', 'Mdados')
@section('content')

<div class="conteudo">
    <form action="{{Route("adicionarMoto")}}" method="POST" >
        @csrf
        <h1>Moto</h1>
        <div class="dados">
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Nome:</label>
                <input  required ="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da moto">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Ano:</label>
                <input required type="date" class="form-control" id="ano" name="ano" placeholder="Digite o ano da moto">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Marca:</label>
                <input required type="text" class="form-control" id="marca" name="marca" placeholder="Digite a marca">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Modelo:</label>
                <input required type="text" class="form-control" id="modelo" name="modelo" placeholder="Digite a modelo">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Preço:</label>
                <input required type="number" class="form-control" id="preco" name="preco" placeholder="Digite a preço">
            </div>
           

            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Loja:</label>
                <input required type="text" class="form-control" id="loja_id" name="loja_id" placeholder="Digite a loja">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Fornecedor:</label>
                <input required type="text" class="form-control" id="fornecedor_id" name="fornecedor_id" placeholder="Digite a fornecedor">
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
