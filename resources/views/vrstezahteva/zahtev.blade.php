@extends('layouts.jedanzahtev')

@section('title', 'Bug')

@section('content')
    <div  >
      <h2 class="text-center m3" >Detalji zahteva: <br> <span class="fw-bolder">{{$zahtev['naziv']}}</span></h2>
    <table class="table table-striped">
        <tbody>
                <tr class="w-50">
                    <th>Zahtev ID:</th>
                    <td>{{$zahtev['zahtev_id']}}</td>
                </tr>
                <tr>
                    <th>Datum kreiranja:</th>
                    <td>{{$zahtev['datum_kreiranja']}}</td>
                </tr>
                <tr>
                    <th>Podnosilac:</th>
                    <td>{{$zahtev['podnosilac_zahteva']}}</td>
                </tr>
                <tr>
                    <th>Sadržaj:</th>
                    <td>{{$zahtev['sadrzaj']}}</td>
                </tr>
                <tr>
                    <th>Status:</th>
                    <td>
                      {{$zahtev['status_zahteva']}}
                    </td>
                </tr>
                <tr>
                    <th>Vrsta:</th>
                    <td>{{$zahtev['vrsta']}}</td>
                </tr>
                <tr>
                    <th>Prioritet:</th>
                    <td>
                      {{$zahtev['prioritet']}}
                    </td>
                </tr>
        </tbody>
      </table>
    </div>
    <div class="btn btn-primary w3-center"><a style="color: white" href="{{route('katalog')}}">Nazad na katalog</a></div>

  
@endsection