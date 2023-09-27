@extends('layouts.main')
@section('titulo', 'Mdados')
@section('content')

<div class="form-container">
    @include('layouts.sidebar')
    <form action="{{Route("adicionarLoja")}}" method="POST" >
        @csrf
        <div class="titulo-form">Loja</div>
        <div class="row g-3">
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Nome:</label>
                <input  required ="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da loja">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">CEP:</label>
                <input  required type="text" class="form-control" id="cep" name="cep" placeholder="Digite o cep">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Estado:</label>
                <input required type="text" class="form-control" id="estado" name="estado" placeholder="Digite o estado">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Cidade:</label>
                <input required type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a cidade">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Bairro:</label>
                <input required type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o bairro">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Rua:</label>
                <input  required type="text" class="form-control" id="rua" name="rua" placeholder="Digite a rua">
            </div>
            <div class="col-md-12 col-md">
                <label for="name" class="form-label">Complemento:</label>
                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="opcional">
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-save">Salvar</button>
            <button type="button" class="btn btn-cancel">Cancelar</button>
        </div>
    </form>
</div>

<script>
    $(document).ready(function () {
        $('#cep').mask('00000-000');
    });
</script>
<script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>
@endsection