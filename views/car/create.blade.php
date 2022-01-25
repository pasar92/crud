@extends('layouts.app')

@section('content')

@if ($errors->any())
<div calss="alert alert-danger"> There were some problems with your input.
    <ul>
      @foreach ($errors->all() as $error )
      <li>{{$error}}</li>
      @endforeach
    </ul>
      
</div>
@endif

<form action="{{route('car.store')}}" method="POST" class="container">
  @csrf
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Kenteken</strong>
        <input type="text" name="license_plate" class="form-control" placeholder="license_plate">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Merk</strong>
        <input type="text" name="brand" class="form-control" placeholder="brand">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Type</strong>
        <input type="text" name="model" class="form-control" placeholder="model">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Omschrijving</strong>
        <input type="text" name="description" class="form-control" placeholder="description">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Prijs</strong>
        <input type="number" name="price" class="form-control" placeholder="price">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong><label for="gps">GPS</strong></label>
        <input type="checkbox" name="gps"  placeholder="gps" >
      </div>
    </div>
  </div>  
  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
@endsection
