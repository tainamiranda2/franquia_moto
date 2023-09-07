@extends('layouts.main')
@section('titulo', 'Mdados')
@section('content')

<div class="conteudo">
    <form action="{{}}" method="POST" >
        @csrf
        <h1>Cliente </h1>
        <div class="dados">
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Nome:</label>
                <input  required ="text" class="form-control" id="loja" name="loja" placeholder="Digite o nome">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Emal:</label>
                <input required type="email" class="form-control" id="email" name="email" placeholder="Digite o email">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">CPF:</label>
                <input required type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o cpf">
            </div>
            <div class="col-md-6 col-md">
                <label for="name" class="form-label">Telefone:</label>
                <input required type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone">
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-save">Salvar</button>
            <button type="button" class="btn btn-cancel">Cancelar</button>
        </div>
    </form>
</div>

<script>
    $(document).ready(function () {
        $('#cpf').mask('000.000.000-00');
        $('#telefone').mask('(00) 00000-0000');
    }); 
</script>

<script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>
@endsection
