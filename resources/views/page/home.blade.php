@extends('layout/main')

@section('content')
  <div class="container">
    <h1 class="m-3">Treni in partenza oggi</h1>
    {{-- Metodo noioso --}}

    <table class="table table-hover">
      <thead>
        <tr>
          {{-- METODO CON FAKER --}}
          {{-- <th scope="col">Azienda</th>
          <th scope="col">Stazione di Partenza</th>
          <th scope="col">Stazione di Arrivo</th>   
          <th scope="col">Data di Partenza</th>
          <th scope="col">Data di Arrivo</th>
          <th scope="col">Orario di Partenza</th>
          <th scope="col">Orario di Arrivo</th>  
          <th scope="col">Codice Treno</th>
          <th scope="col">Numero Carrozze</th>
          <th scope="col">In Orario</th>
          <th scope="col">Cancellato</th>    --}}

          {{-- METODO CON FILE CSV --}}
          <th scope="col">Azienda</th>
          <th scope="col">Stazione di Partenza</th>
          <th scope="col">Stazione di Arrivo</th>   
          <th scope="col">Data di Partenza</th>
          <th scope="col">Data di Arrivo</th>
          <th scope="col">Codice Treno</th>
          <th scope="col">Numero Carrozze</th>
          <th scope="col">In Orario</th>
          <th scope="col">Cancellato</th> 
        </tr>
      </thead>
      <tbody>
        @foreach($trains as $singleTrain)
          <tr class="{{$singleTrain->cancelled ? 'cancelled' : ''}}">
            {{-- METODO CON FAKER --}}
            {{-- <td>{{$singleTrain->azienda}}</td>
            <td>{{$singleTrain->stazione_partenza}}</td>
            <td>{{$singleTrain->stazione_arrivo}}</td>
            <td>{{$singleTrain->data_partenza}}</td>
            <td>{{$singleTrain->data_arrivo}}</td>
            <td>{{$singleTrain->orario_partenza}}</td>
            <td>{{$singleTrain->orario_arrivo}}</td>
            <td>{{$singleTrain->cod_treno}}</td>
            <td>{{$singleTrain->n_carrozze}}</td>
            <td>{{$singleTrain->in_orario ? 'Si' : 'No'}}</td>
            <td>{{$singleTrain->cancellato ? 'Si' : 'No'}}</td> --}}

            {{-- METODO CON FILE CSV --}}
            <td>{{$singleTrain->company}}</td>
            <td>{{$singleTrain->departure_station}}</td>
            <td>{{$singleTrain->arrival_station}}</td>
            <td>{{$singleTrain->departure_time}}</td>
            <td>{{$singleTrain->arrival_time}}</td>
            <td>{{$singleTrain->train_code}}</td>
            <td>{{$singleTrain->wagons_number}}</td>
            <td>{{$singleTrain->on_time ? 'Si' : 'No'}}</td>
            <td>{{$singleTrain->cancelled ? 'Si' : 'No'}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <hr>

    {{-- Metodo dinamico --}}

    {{-- <table class="table-dark table-hover table-bordered p-2">
      <thead>
        @foreach($trains as $item)
          @foreach($item as $key => $treno)
            @if($key <> 'id' && $key <> 'created_at' && $key <> 'updated_at')
              <th class="scope">{{$key}}</th>
            @endif
          @endforeach
        @endforeach
      </thead>
      <tbody>
        @foreach($trains as $singleTrain)
          @foreach($singleTrain as $key => $value)
            @if($key <> 'id' && $key <> 'created_at' && $key <> 'updated_at')
              <td>{{$value}}</td>
            @endif
          @endforeach
        @endforeach
      </tbody>
    </table> --}}
  </div>
@endsection