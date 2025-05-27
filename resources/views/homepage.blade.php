@extends('layouts.public')

@section('title', 'Početna')

@section('content')
    
  @include('partials.usluge')
  @include('partials.katalog')
        
  @include('partials.about')
  @include('partials.clients')
  @include('partials.contact')
  
@endsection