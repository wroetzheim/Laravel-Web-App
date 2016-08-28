@extends('cardLayout')


@section('content')
<h1>Cards</h1>

@foreach ($cards as $card)
    <li>{{$card->title}}</li>
@endforeach
@stop
