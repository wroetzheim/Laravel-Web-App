@extends('layouts/cardLayout')

@section('header')

@stop

@section('content')
    <div class="mdl-cell mdl-cell--12-col mdl-color--white mdl-shadow--2dp content mdl-color-text--grey-800">
        <div class="mdl-grid relative">
            <div class="mdl-card__menu">
                @include('cards/socialShare')
            </div>
            <div class="mdl-cell mdl-cell--12-col">
                <h1>{{$card->title}}</h1>

            </div>
            <div class="mdl-cell mdl-cell--12-col">
                <p>{{$card->body}}</p>
                @if (count($card->notes) > 0)
                    <h4>Card Notes</h4>
                    <ul>
                        @foreach ($card->notes as $note)
                            <li>
                                {{$note->body}} -
                                {{$note->user->name}}
                                <span><a href="/notes/{{$note->id}}/edit">Edit</a></span>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--3-col">Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
          <div class="mdl-cell mdl-cell--3-col">Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
          <div class="mdl-cell mdl-cell--3-col">Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
          <div class="mdl-cell mdl-cell--3-col">Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
        </div>
    </div>
    <div class="mdl-cell mdl-cell--12-col mdl-color--white mdl-shadow--2dp content mdl-color-text--grey-800">
        <div class="mdl-grid">
            @if (count($errors))
                <div class="mdl-cell mdl-cell--12-col alert--error alert">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <div class="mdl-cell">
                <form class="" action="/cards/{{$card->id}}/notes" method="POST">
                    <div class="mdl-textfield mdl-js-textfield">
                        <textarea id="body" name="body" class="mdl-textfield__input" required>{{old('body')}}</textarea>
                        <label class="mdl-textfield__label" for="body">Add Note</label>
                    </div>
                    <button class="mdl-button mdl-js-button mdl-button--raised block" type="submit">Add Note</button>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@stop
