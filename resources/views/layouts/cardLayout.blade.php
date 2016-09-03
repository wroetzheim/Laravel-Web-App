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
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header fixed">
          <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Will App</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                @include('layouts.nav.navLinks')
            </nav>
          </div>
        </header>
        <div class="mdl-layout__drawer fixed">
          <span class="mdl-layout-title">Will App</span>
          <nav class="mdl-navigation">
              @include('layouts.nav.navLinks')
          </nav>
        </div>
        <div class="ribbon-container">
            @if (Session::has('flash_message'))
                <div class="alert alert--{{Session::get('flash_message_level')}}">
                    {{ Session::get('flash_message') }}
                </div>
            @endif
            <div class="ribbon">
            </div>
        </div>
        <main class="mdl-layout__content">
            <div class="mdl-grid content-grid">
                @yield('content')
            </div>
        </main>
        <footer class="mdl-mega-footer footer">
            <div class="mdl-mega-footer__top-section">
                <p>Here is where the footer top content will go.</p>
                @yield('footer')
            </div>
            <div class="mdl-mega-footer__middle-section">
                <div class="mdl-mega-footer__left-section">
                    <h4 class="mdl-typography--display-3">Links</h4>
                    <div class="mdl-logo footer-link-title">Section Title</div>
                    <ul class="mdl-mega-footer__link-list">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Code Charity</a></li>
                        <li><a href="#">GitHub</a></li>
                    </ul>
                    <div class="mdl-logo footer-link-title">Second Section</div>
                    <ul class="mdl-mega-footer__link-list">
                        <li><a href="#">Alpha</a></li>
                        <li><a href="#">Beta</a></li>
                        <li><a href="#">Capa</a></li>
                    </ul>
                </div>

                <div class="mdl-mega-footer__right-section">
                    <h4 class="mdl-typography--display-3">Contact</h4>
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
            </div>
            <div class="mdl-mega-footer__bottom-section">
                <div class="mdl-logo">
                  Mega-Footer Bottom Section Heading
                </div>
                <ul class="mdl-mega-footer__link-list">
                    <li><a href="">Link A</a></li>
                    <li><a href="">Link B</a></li>
                </ul>
            </div>
        </footer>

    </div>



</body>
</html>
