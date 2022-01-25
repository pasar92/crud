@extends('layouts.app')

@section('content')

<div class="row container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Reservation table</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('reservation.create') }}"> Make a new reservation</a>
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
            <th>Start</th>
            <th>End</th>
            <th>Car</th>
            <th>User</th>
            <th>Date created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($reservations as $reservation)
        <tr>
          <td>{{$reservation->start}}</td>
          <td>{{$reservation->end}}</td>
          <td>{{$reservation->car->brand}}</td>
          <td>{{$reservation->user->name}}</td>
          <td>{{ date_format($reservation->created_at, 'j M Y')}}</td>
          <td>
                <form action="{{ route('reservation.destroy',$reservation->id) }}" method="POST">
                  
                    <a class="btn btn-info" href="{{ route('reservation.show',$reservation->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('reservation.edit',$reservation->id) }}">Edit
                    <i clas="fas fa-edit fa-lg"></i></a>
   
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