@extends('layouts.cardLayout')


@section('content')
    <div class="mdl-cell mdl-cell--12-col mdl-color--white mdl-shadow--2dp content mdl-color-text--grey-800">
        <div class="mdl-grid relative">
            <div class="mdl-cell">
                <i class="material-icons edit-form">mode_edit</i>
                <h1>Edit Note</h1>
            </div>
            <div class="mdl-cell">
                <div class="mdl-grid">
                <form action="/notes/{{$note->id}}" method="POST">
                    {{ method_field('PATCH')}}
                    <div class="mdl-textfield mdl-js-textfield">
                        <textarea id="edit-body" name="body" class="mdl-textfield__input">{{$note->body}}</textarea>
                        <label class="mdl-textfield__label" for="edit-body">Edit Note</label>
                    </div>
                    <button class="mdl-button mdl-js-button mdl-button--raised block" type="submit">Update Note</button>
                    {{ csrf_field() }}
                </form>
            </div>
            </div>
        </div>
    </div>
@stop
