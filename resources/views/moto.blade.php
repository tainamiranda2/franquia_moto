@extends('layouts.main')
@section('titulo', 'Mdados')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>

<div class="form-container">
    @include('layouts.sidebar')
    <form action="{{Route("adicionarMoto")}}" method="POST" >
        @csrf
        <div class="titulo-form">Moto</div>
        <div class="row g-3">
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
                <select class="form-control js-example-basic-single" name="loja_id" id="loja_id">
                    <option value="">Selecione uma loja</option>
                    @foreach ($lojas as $loja)
                        <option value="{{ $loja->id }}">{{ $loja->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Fornecedor:</label>
                <select class="form-control" name="forncedor_id" id="forncedor_id">
                    <option value="">Selecione um fornecedor</option>
                    @foreach ($fornecedores as $forncedor)
                        <option value="{{ $forncedor->id }}">{{ $forncedor->nome }}</option>
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
