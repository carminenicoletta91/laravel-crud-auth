@extends('layouts.customLayout')
@section('link')
  <a href="{{route('ctusr.create')}}">Create New Cat</a>

@endsection
@section('content')


  @foreach ($cats as $cat)

    <div class="box cat">
      <p>Name: {{$cat -> name}}</p>
      <p>Race: {{$cat -> race}}</p>
      <p>Cat_Number: {{$cat -> cat_rfid}}</p>
      <a href={{route('ctusr.edit',$cat -> id)}}>Edit This</a>
      <a href={{route('ctusr.destroy',$cat -> id)}}>Delete This</a>
    </div>

  @endforeach

@endsection
