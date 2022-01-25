@extends('layouts.app')

@section('content')

<h2 class= "font-semibold text-x1 text-gray-800 leading-tight">
  {{__('Dashboard')}}
  Hello from show car!!
</h2>
{{$car}}
<h2>antaal reserveringen</h2>
{{$car->reservation}}
@endsection