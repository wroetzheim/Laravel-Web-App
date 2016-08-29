<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{elixir('css/app.css')}}">
    <!-- Fonts -->

    <!-- Styles -->
    <script src="{{elixir('js/app.js')}}"></script>

</head>
<body>
    <div id="container" class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout--fixed-header">
          <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Title</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
              <a class="mdl-navigation__link" href="">Link</a>
              <a class="mdl-navigation__link" href="">Link</a>
              <a class="mdl-navigation__link" href="">Link</a>
              <a class="mdl-navigation__link" href="">Link</a>
            </nav>
          </div>
        </header>
        <div class="mdl-layout__drawer">
          <span class="mdl-layout-title">Title</span>
          <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
          </nav>
        </div>
          <main>
              
            @yield('content')
            <footer class="mdl-mini-footer footer">
                <div class="footer-content">
                    <p>Here is where the footer content will go.</p>
                    @yield('footer')
                </div>
                <div class="mdl-mini-footer__left-section">
                    <h4>Links</h4>
                    <div class="mdl-logo">Title</div>
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Code Charity</a></li>
                        <li><a href="#">GitHub</a></li>
                    </ul>
                    <div class="mdl-logo">Second Section</div>
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="#">Alpha</a></li>
                        <li><a href="#">Beta</a></li>
                        <li><a href="#">Capa</a></li>
                    </ul>
                </div>
                <div class="mdl-mini-footer__right-section">
                    <h4>Contact</h4>
                    <form action="#">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label footer-contact">
                            <input class="mdl-textfield__input" type="email" id="email" />
                            <label class="mdl-textfield__label" for="email">Email</label>
                            <span class="mdl-textfield__error">An email address must contain a single @</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield footer-contact">
                            <textarea class="mdl-textfield__input" type="text" rows= "3" id="message" ></textarea>
                            <label class="mdl-textfield__label" for="message">Message</label>
                        </div>
                        <submit class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Submit</submit>
                    </form>
                </div>
            </footer>
        </main>
    </div>



</body>
</html>
