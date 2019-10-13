@extends('layouts.customLayout')
@section('link')
  <a href={{route('ctusr.index')}}>Back</a>
@endsection
@section('content')
  <form class="insert-data" action="{{route('ctusr.update',$cat -> id)}}" method="post">
    @csrf
    @method('POST')
    <p id="string-request">Fill All The Fields</p>
    <div class="form-item">
      <label for="name">Name</label>
      <input type="text" name="name" value="{{$cat -> name}}">
    </div>
    <div class="form-item">
      <label for="race">Race</label>
      <input type="text" name="race" value="{{$cat -> race}}">
    </div>
    <div class="form-item">
      <label for="cat_rfid">Cat_Number</label>
      <input type="text" name="cat_rfid" value="{{$cat -> cat_rfid}}">
    </div>
    <button id="btn-update" type="submit" >Update</button>
  </form>
@endsection
