@extends('layouts.e-commerce')

@section('content')

@foreach ($categories as $cat)
<ul><h1>{{$cat->name}}</h1>
    @foreach ($cat->products as $prod )
    <li> {{$prod->name}} ({{$prod->sale_price}}) </li>

    @endforeach


</ul>

@endforeach




@endsection
