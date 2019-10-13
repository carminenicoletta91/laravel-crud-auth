@extends('layouts.customLayout')
@section('link')
  <a id="back" href={{route('ctusr.index')}}><i class="fas fa-hand-point-left"></i></a>
@endsection
@section('content')
  <form class="insert-data" action="{{route('ctusr.store')}}" method="post">
    @csrf
    @method('POST')
    <p id="string-request">Fill All The Fields</p>
    <div class="form-item">
      <label for="name">Name</label>
      <input type="text" name="name" value="">
    </div>
    <div class="form-item">
      <label for="race">Race</label>
      <input type="text" name="race" value="">
    </div>
    <div class="form-item">
      <label for="cat_rfid">Cat_Number</label>
      <input type="text" name="cat_rfid" value="">
    </div>
    <button id="btn-create" type="submit" >Creates</button>
  </form>
@endsection
