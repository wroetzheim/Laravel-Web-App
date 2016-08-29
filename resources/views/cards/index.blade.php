@extends('cardLayout')


@section('content')
<h1>Cards</h1>

@foreach ($cards as $card)
    <li>{{$card->title}}</li>


@endforeach
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--3-col">Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
  <div class="mdl-cell mdl-cell--3-col">Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
  <div class="mdl-cell mdl-cell--3-col">Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
  <div class="mdl-cell mdl-cell--3-col">Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
</div>
<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
<p>Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>
<p>Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
@stop
