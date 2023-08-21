@extends('vistorias.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb py-3">
            <div class="float-left">
                <h3>Histórico</h3>
            </div>
           
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('vistorias.create') }}"> Cadastrar</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Foto motorista</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th></th>
            
        </tr>
        @foreach ($vistorias as $vistoria)
        
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $vistoria->selfie }}" width="100px"></td>
            <td>{{ $vistoria->nome }}</td>
            <td>{{ $vistoria->cpf }}</td>
            <td class="d-flex text-center justify-center">
                           <a class="btn btn-info" href="{{ route('vistorias.show',$vistoria->id) }}">Visualizar</a>
      
                
            </td>
            
        </tr>
       
        @endforeach
        
    </table>
    {!! $vistorias->links() !!}
        
@endsection