@extends('layout/main')

@section('content')
  <div class="container">
    <h1 class="m-3">Treni in partenza oggi</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Azienda</th>
          <th scope="col">Stazione di Partenza</th>
          <th scope="col">Stazione di Arrivo</th>   
          <th scope="col">Data di Partenza</th>
          <th scope="col">Data di Arrivo</th>
          <th scope="col">Orario di Partenza</th>
          <th scope="col">Orario di Arrivo</th>  
          <th scope="col">Codice Treno</th>
          <th scope="col">Numero Carrozze</th>
          <th scope="col">In Orario</th>
          <th scope="col">Cancellato</th>   
        </tr>
      </thead>
      <tbody>
        @foreach($trains as $singleTrain)
          <tr>
            <td>{{$singleTrain->azienda}}</td>
            <td>{{$singleTrain->stazione_partenza}}</td>
            <td>{{$singleTrain->stazione_arrivo}}</td>
            <td>{{$singleTrain->data_partenza}}</td>
            <td>{{$singleTrain->data_arrivo}}</td>
            <td>{{$singleTrain->orario_partenza}}</td>
            <td>{{$singleTrain->orario_arrivo}}</td>
            <td>{{$singleTrain->cod_treno}}</td>
            <td>{{$singleTrain->n_carrozze}}</td>
            <td>{{$singleTrain->in_orario}}</td>
            <td>{{$singleTrain->cancellato}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <hr>
    <table>
      <thead>
        @foreach($trains as $key => $item)
          <th>{{$key}}</th>
        @endforeach
      </thead>
    </table>
  </div>
@endsection