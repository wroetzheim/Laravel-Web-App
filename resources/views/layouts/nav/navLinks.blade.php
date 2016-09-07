<a class="mdl-navigation__link" href="/">Recipes</a>
<a class="mdl-navigation__link" href="/about">About</a>
@if (!Auth::user())
<a class="mdl-navigation__link" href="/login">Login</a>
<a class="mdl-navigation__link" href="/register">Register</a>
@endif
@if (Auth::user())
    <a class="mdl-navigation__link" href="/home">Member</a>
    <a class="mdl-navigation__link" href="/logout">Logout</a>
@endif