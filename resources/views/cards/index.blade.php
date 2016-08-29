@extends('cardLayout')


@section('content')
    <div class="mdl-cell mdl-cell--12-col">
        <h1 class="mdl-typography--display-3">Cards</h1>
    </div>
    @foreach ($cards as $card)
            <div class="mdl-card mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-shadow--2dp card-centered">
                <div class="mdl-card__menu">


                      <!-- Right aligned menu below button -->
                      <button id="card-{{$card->id}}" class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect">
                        <i class="material-icons">share</i>
                      </button>

                      <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                          for="card-{{$card->id}}">
                            <li class="mdl-menu__item">
                                <a href="//getpocket.com/save?url={{url('/cards')}}/{{$card->id}}&title={{$card->title}}" target="_blank" title="Add to Pocket">Save to Pocket</a>
                            </li>
                        </ul>

                </div>
                <div class="mdl-card__title">
                    <h3 class="mdl-card__title-text">
                        {{$card->title}}
                    </h3>
                </div>
                <div class="mdl-card__supporting-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Aenan convallis.</p>
                  </div>
                <div class="mdl-card__actions">
                    <a href="http://en.wikipedia.org/wiki/Sky_Tower_%28Auckland%29">Wikipedia entry</a>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    View
                  </a>
                </div>
            </div>
    @endforeach
    <div class="mdl-cell--12-col">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--3-col">Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
          <div class="mdl-cell mdl-cell--3-col">Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
          <div class="mdl-cell mdl-cell--3-col">Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
          <div class="mdl-cell mdl-cell--3-col">Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
        </div>
        <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>
        <p>Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    </div>




@stop
