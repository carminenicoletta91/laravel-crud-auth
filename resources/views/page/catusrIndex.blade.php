@extends('layouts.customLayout')
@section('link')
  <div class="create-new">
    <span>Add New</span><a id="addnew" href="{{route('ctusr.create')}}"><i class="fas fa-plus"></i></a>

  </div>

@endsection
@section('content')


  @foreach ($cats as $cat)

    <div class="box cat">
      <p>Name: {{$cat -> name}}</p>
      <p>Race: {{$cat -> race}}</p>
      <p>Cat_Number: {{$cat -> cat_rfid}}</p>
      <a href={{route('ctusr.edit',$cat -> id)}}><i class="far fa-edit"></i></a>
      <a href={{route('ctusr.destroy',$cat -> id)}}><i class="fas fa-trash"></i></a>
    </div>

  @endforeach

@endsection
