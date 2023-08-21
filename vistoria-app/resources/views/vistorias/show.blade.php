@extends('vistorias.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-5">
        <div class="float-left">
            <a class="btn btn-primary" href="{{ route('vistorias.index') }}"> Voltar</a>
        </div>
        <div class="float-right">
            <button class="btn btn-success" id="printButton"> Imprimir</button>
        </div>
    </div>
</div>

<!-- area para impressão -->
<div id="printableArea" class="table table-bordered p-3">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="float-right">
                    <img src="/logo1.jpg" alt="" width="180px">
                </div>
                <div class="float-left mt-2">
                    <strong>Nº de identificação:</strong>
                    {{ $vistoria->id }}
                    <br>
                    <strong>Data de criação:</strong>
                    {{$vistoria ->created_at}}
                </div>
            </div>
        </div>
        <!-- dados do motorista -->
        <h5 class="my-2">Dados do motorista</h5>
        <div class="form-group">
            <strong>Nome:</strong>
            {{ $vistoria->nome }}
            <br>
        
            <strong>CPF:</strong>
            {{ $vistoria->cpf }}
            <br>
       
            <strong>RG:</strong>
            {{ $vistoria->rg }}
            <br>
       
            <strong>Telefone:</strong>
            {{ $vistoria->telefone }}
            <br>

            <strong>Endereço:</strong>
            {{ $vistoria->endereco }}
            <br>

            <strong>Cnh:</strong>
            {{ $vistoria->cnh }}
            <br>
     
            <strong>Selfie:</strong>
            <img src="/image/{{ $vistoria->selfie }}" width="50px">
        </div>
        <!-- fim dados do motorista -->

        <!-- dados vaiculo -->
        <h5 class="my-2">Dados do veículo</h5>
        <div class="form-group">
            <strong>Placa:</strong>
            {{ $vistoria->placa }}
            <br>

            <strong>Chassi:</strong>
            {{ $vistoria->chassi }}
            <br>

            <strong>Renavam:</strong>
            {{ $vistoria->renavam }}
            <br>

            <strong>UF:</strong>
            {{ $vistoria->uf }}
            <br>

            <strong>Marca:</strong>
            {{ $vistoria->marca }}
            <br>

            <strong>Modelo:</strong>
            {{ $vistoria->modelo }}
            <br>

            <strong>KM:</strong>
            {{ $vistoria->km}}
            <br>

            <strong>Nível de combustível:</strong>
            {{ $vistoria->nivel_combustivel}}
        </div>
        <!-- fim dados do veiculo  -->

        <!-- imagens veiculo  -->
        <h5>Imagens do veículo</h5>
        <div class="form-group">
            <strong>Placa:</strong>
            <img src="/image/{{ $vistoria->foto_placa }}" width="50px">
            <br>

            <strong>Dianteira:</strong>
            <img src="/image/{{ $vistoria->foto_dianteira }}" width="50px">
            <br>

            <strong>Traseira:</strong>
            <img src="/image/{{ $vistoria->foto_traseira }}" width="50px">
            <br>

            <strong>Hodometro:</strong>
            <img src="/image/{{ $vistoria->foto_hodometro }}" width="50px">
            <br>

            <strong>Banco Dianteiro:</strong>
            <img src="/image/{{ $vistoria->foto_banco }}" width="50px">
            <br>
        </div>
        <!-- fim imagens do veiculo  -->
</div>
<!-- fim area de impressao  -->
<script>
    document.getElementById('printButton').addEventListener('click', function() {
        var printableArea = document.getElementById('printableArea');
        var originalContent = document.body.innerHTML;

        document.body.innerHTML = printableArea.innerHTML;
        window.print();
        document.body.innerHTML = originalContent;
    });
</script>
@endsection
