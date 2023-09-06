@extends('layouts.main')
@section('titulo', 'Mdados')
@section('content')

<div class="styles">
    <div class="conteudo">
        <div class="form">
            <h1>Cliente</h1>
            <div class="dados">
                <div class="col-md-6 col-md">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="name" placeholder="Digite o nome da loja">
                </div>
                <div class="col-md-6 col-md">
                    <label for="name" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" id="name" placeholder="Digite o nome da loja">
                </div>
                <div class="col-md-6 col-md">
                    <label for="name" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="name" placeholder="Digite o nome da loja">
                </div>
                <div class="col-md-6 col-md">
                    <label for="name" class="form-label">CPF:</label>
                    <input type="text" class="form-control" id="name" placeholder="Digite o nome da loja">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-save">Salvar</button>
                <button type="button" class="btn btn-cancel">Cancelar</button>
            </div>
        </div>
    </div>
</div>
    <script src="https://kit.fontawesome.com/02f2b4886a.js" crossorigin="anonymous"></script>
@endsection