@extends('layouts.cardLayout')


@section('content')
<div class="mdl-cell mdl-cell--12-col">
  <h1 class="mdl-typography--display-3 page-title">About</h1>
</div>
<div class="mdl-cell mdl-cell--12-col mdl-color--white mdl-shadow--2dp content mdl-color-text--grey-800">
  <div class="mdl-grid">
    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
    <p>Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>
    <p>Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    <p>This site is powered by Laravel version {{app()::VERSION}}</p>
  </div>

</div>
@stop
