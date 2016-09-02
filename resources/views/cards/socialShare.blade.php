
<button id="card-{{$card->id}}" class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect">
    <i class="material-icons">share</i>
</button>

<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
  for="card-{{$card->id}}">
    <li class="mdl-menu__item">
        <a href="//getpocket.com/save?url={{url('/cards')}}/{{$card->id}}&title={{$card->title}}" target="_blank" title="Add to Pocket">Save to Pocket</a>
    </li>
    <li class="mdl-menu__item">
        <a href="https://www.facebook.com/sharer/sharer.php?u={{url('/cards')}}/{{$card->id}}" target="_blank" title="Share on Facebook">Facebook</a>
    </li>
    <li class="mdl-menu__item">
        <a href="https://twitter.com/intent/tweet?text={{$card->title}} at {{url('/cards')}}/{{$card->id}}" target="_blank" title="Tweet">Twitter</a>
    </li>

</ul>
