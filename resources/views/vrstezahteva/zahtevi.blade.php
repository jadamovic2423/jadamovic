@extends('layouts.zahtevi')

@section('title', 'Bug')

@section('content')
    <table class="table m-5">
    <thead class="table-primary">
      <tr>
        <th>Vrsta</th>
        <th colspan="2">Naziv</th>
      </tr>
    </thead>
    <tbody>
        @foreach($bugovi as $bug)
                    <tr>
                        <td>{{ $bug->vrsta }}</td>
                        <td>{{ $bug->naziv }}</td>
                        <td><a href="{{ route('zahtev', ['id' => $bug->zahtev_id]) }}" class="text-decoration-none"><button class="btn btn-primary">Opširnije</button></a></td>
                    </tr>
        @endforeach
    </tbody>
  </table>
<div class="btn btn-primary w3-center"><a style="color: white" href="{{route('home')}}">Nazad na početnu</a></div>
  
@endsection