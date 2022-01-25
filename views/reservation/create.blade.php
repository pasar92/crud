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

<form action="{{route('reservation.store')}}" method="POST">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="start">Start Datum</label>
      <input type="date" id="reservation-start" name="start" class="form-control" placeholder="Start">

    </div>
    <div class="form-group col-md-6">
        <label for="start">End Datum</label>
        <input type="date" id="reservation-start" name="end" class="form-control" placeholder="End">

      </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="car_id"> Auto</label>
      <select class="custom-select" name="car_id" id="reservation-car-id">
        @foreach ($cars as $car)
        <option value="{{$car->id}}">{{$car->brand}} - {{$car->model}}</option>
        @endforeach
      </select>
    </div>
  </div>
  

  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  

</form>
@endsection