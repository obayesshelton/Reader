<div id="settings_btn"><span id="trigger" class="settings"></span></div>
<div class="container">
    <div id="pt-main" class="pt-perspective">

        <div class="mp-pusher" id="mp-pusher">

            <!-- mp-menu -->
            <nav id="mp-menu" class="mp-menu">
                <div class="mp-level">

                    <h2 class="icon icon-display">Search</h2>

                    {{ form('action': 'search') }}
                        {{ form.render('csrf', ['value': security.getToken()]) }}
                        {{ form.render('source', ['class': 'source']) }}
                        {{ form.render('search') }}
                    {{ endForm() }}

                    <h2 class="icon icon-display">{{ auth.getName() }}</h2>

                    <ul class="nav">
                        <li>{{ link_to('users/changePassword', 'Change Password') }}</li>
                        <li>{{ link_to('session/logout', 'Logout') }}</li>
                    </ul>

                </div>
            </nav>
            <!-- /mp-menu -->

            <div class="pt-page pt-page-1">
                <div id="headline">
                    <div class="bottom">
                        <img src="images/logo.png" height="153" width="99" class="main"/>

                        <h1>Made with love by the Reader Team</h1>

                            {{ link_to("privacy", "Privacy Policy") }},
                            {{ link_to("terms", "Terms") }},
                            {{ link_to("about", "About") }},
                            {{ link_to("advertise", "Advertise") }},
                            {{ link_to("faq", "FAQ") }},

                        <h2>&copy; 2015 Reader.</h2>

                    </div>
                </div>

                <div class="wrapper">
                    <div class="inner">

                        {{ content() }}

                    </div>
                </div>
            </div>

        </div>
        <!-- /pusher -->
    </div>
</div>