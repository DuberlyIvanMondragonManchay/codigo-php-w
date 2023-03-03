
@extends('layouts.app')
@section('content')

<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    
@php
		echo "cantidad: " . count($productos);
@endphp

    <ul>
				@foreach ($productos as $producto)
				  <li>{{ $producto['id'] }} - {{ $producto['nombre'] }}</li>
				@endforeach

    </ul>
 

@endsection

