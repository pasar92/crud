@extends('layouts.app')

@section('content')


<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('car.create') }}"> Create New car</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>nummer</th>
            <th>Kenteken</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Omschrijving</th>
            <th>GPS</th>
            <th>Prijs</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($cars as $car)
        <tr>
            <td>{{ $car->id }}</td>
            <td>{{ $car->license_plate }}</td>
            <td>{{ $car->brand }}</td>
            <td>{{ $car->model }}</td>
            <td>{{ $car->description }}</td>
            <td>{{ $car->gps }}</td>
            <td>{{ $car->price }}</td>
            <td>
                <form action="{{ route('car.destroy',$car->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('car.show',$car->id) }}">Show
                      <i class ="fas fa-eye text-success fa-lg"></i>
                    </a>
    
                    <a class="btn btn-primary" href="{{ route('car.edit',$car->id) }}">Edit
                      <i clas="fas fa-edit fa-lg"></i>
                    </a>  
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" title="delete" class="btn btn-danger">Delete
                      <i class="fas fa-trash fa-lg text-danger"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  




@endsection