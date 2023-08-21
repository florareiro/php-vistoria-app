@extends('vistorias.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb py-3 ">
        <div class="float-left">
            <h3>Cadastrar</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('vistorias.index') }}"> Voltar</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('vistorias.store') }}" class="table table-bordered p-3 mb-5" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h4>Dados do motorista</h2>
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control mb-2" placeholder="">
                <strong>CPF:</strong>
                <input type="text" name="cpf" class="form-control mb-2" placeholder="">
                <strong>RG:</strong>
                <input type="text" name="rg" class="form-control mb-2" placeholder="">
                <strong>Telefone:</strong>
                <input type="number" name="telefone" class="form-control mb-2" placeholder="">
                <strong>Endereço:</strong>
                <input type="text" name="endereco" class="form-control mb-2" placeholder="">
                <strong>CNH:</strong>
                <input type="text" name="cnh" class="form-control mb-2"placeholder="">
                <strong>Selfie do motorista</strong>
                <input type="file" name="selfie" class="form-control mb-2"placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h4>Dados do veículo: </h4>
            <div class="form-group">
                <strong>Placa:</strong>
                <input type="text" name="placa" class="form-control mb-2"placeholder="">
                <strong>Chassi:</strong>
                <input type="text" name="chassi" class="form-control mb-2" placeholder="">
                <strong>Renavam:</strong>
                <input type="text" name="renavam" class="form-control mb-2"placeholder="">
                <strong>UF:</strong>
                <input type="text" name="uf" class="form-control mb-2"placeholder="">
                <strong>Marca:</strong>
                <input type="text" name="marca" class="form-control mb-2"placeholder="">
                <strong>Modelo:</strong>
                <input type="text" name="modelo" class="form-control mb-2"placeholder="">
                <strong>Km:</strong>
                <input type="number" name="km" class="form-control mb-2"placeholder="">
                <strong>Nível de combustível</strong>
                <input type="numeric" name="nivel_combustivel" class="form-control mb-2"placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h4>Imagens do veículo</h4>
            <div class="form-group">
                <strong>Placa:</strong>
                <input type="file" name="foto_placa" class="form-control mb-2" placeholder="">
                <strong>Dianteira:</strong>
                <input type="file" name="foto_dianteira" class="form-control mb-2" placeholder="">
                <strong>Traseira:</strong>
                <input type="file" name="foto_traseira" class="form-control mb-2" placeholder="">
                <strong>Hodometro:</strong>
                <input type="file" name="foto_hodometro" class="form-control mb-2" placeholder="">
                <strong>Banco dianteiro:</strong>
                <input type="file" name="foto_banco" class="form-control mb-2" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mb-4">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection