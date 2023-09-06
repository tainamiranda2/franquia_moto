@extends('layouts.main')
@section('titulo', 'Mdados')
@section('content')

<div class="conteudo">
    <form action="{{Route("adicionarLoja")}}" method="POST" >
        @csrf
        <h1>Loja</h1>
        <div class="dados">
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Loja:</label>
                <input type="text" class="form-control" id="loja" name="loja" placeholder="Digite o nome da loja">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite o estado">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a cidade">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Bairro:</label>
                <input type="text" class="form-control" id="Bairro" name="bairro" placeholder="Digite o bairro">
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