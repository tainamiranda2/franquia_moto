@extends('layouts.main')
@section('titulo', 'Mdados')
@section('content')
<div class="conteudo">
    @include('layouts.sidebar')
    <div class="form-container">
        <div class="titulo-form">Fornecedor</div> 
        <form action="{{Route("adicionarFornecedor")}}" method="POST" >
            @csrf
            <div class="row g-3">
                <div class="col-md-6 col-md">
                    <label for="name" class="form-label">Nome:</label>
                    <input  required ="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
                </div>
                <div class="col-md-6 col-md">
                    <label for="name" class="form-label">Email:</label>
                    <input required type="email" class="form-control" id="email" name="email" placeholder="Digite o email">
                </div>
                <div class="col-md-6 col-md">
                    <label for="name" class="form-label">CPF ou CNPJ:</label>
                    <input required type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" placeholder="Digite o cpf ou cnpj">
                </div>
                <div class="col-md-6 col-md">
                    <label for="name" class="form-label">Telefone:</label>
                    <input required type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone">
                </div>
                <div class="col-md-12 col-md">
                    <label for="name" class="form-label">CEP:</label>
                    <input required type="text" class="form-control" id="cep" name="cep" placeholder="Digite o cep">
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-save">Salvar</button>
                <button type="button" class="btn btn-cancel">Cancelar</button>
            </div>
        </form>
    </div>
</div>
@endsection
