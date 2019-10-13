@extends('layouts.customLayout')
@section('content')
  @guest
    <p>Effettua login o registrati</p>
  @else
    <p>Ciao User Benvenuto</p>
  @endguest
  
@endsection
