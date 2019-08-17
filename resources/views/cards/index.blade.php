@extends('layouts.cardLayout')


@section('content')
    <div class="mdl-cell mdl-cell--12-col">
        <h1 class="mdl-typography--display-3 page-title">Recipes</h1>
    </div>
    @foreach ($cards as $card)
            <div class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-shadow--2dp">
                <div class="mdl-card__menu">
                    <!-- Right aligned menu below button -->
                    @include('cards/socialShare')
                </div>
                <div class="mdl-card__title">
                    <h3 class="mdl-card__title-text">
                        {{$card->title}}
                    </h3>
                </div>
                <div class="card-image" style="background-image: url({{url($card->file)}})">
                <div class="mdl-card__supporting-text">
                    <p>{{$card->description}}</p>
                </div>
                <div class="mdl-card__actions">
                    <p>Created by: {{$card->user->name}}</p>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="/cards/{{$card->createSlug()}}">
                    View
                  </a>
                </div>
            </div>
    @endforeach
    <div class="mdl-cell mdl-cell--12-col mdl-color--white mdl-shadow--2dp content mdl-color-text--grey-800">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--3-col">Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
          <div class="mdl-cell mdl-cell--3-col">Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
          <div class="mdl-cell mdl-cell--3-col">Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
          <div class="mdl-cell mdl-cell--3-col">Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
        </div>
        <div class="mdl-grid">
            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
            <p>Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>
            <p>Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
    </div>
    <div class="mdl-cell mdl-cell--12-col mdl-color--white mdl-shadow--2dp content mdl-color-text--grey-800">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
                <h3>Add New Recipe</h3>
            </div>
            @if (count($errors))
                <div class="mdl-cell mdl-cell--12-col alert--error alert">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <div class="mdl-cell">
                <form class="" action="/cards/add" method="POST" enctype="multipart/form-data">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label block">
                        <input class="mdl-textfield__input" name="title" type="text" id="title" required value="{{old('title')}}">
                        <label class="mdl-textfield__label" for="title">Recipe Title</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label block">
                        <textarea id="body" name="description" class="mdl-textfield__input" required>{{old('description')}}</textarea>
                        <label class="mdl-textfield__label" for="description">Recipe Description</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label block">
                        <input type="file" id="file" name="file" class="mdl-textfield__input" required>{{old('file')}}</input>
                        <label for="file">Choose a file</label>
                    </div>
                    <button class="mdl-button mdl-js-button mdl-button--raised block" type="submit">Add Recipe</button>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>




@stop
