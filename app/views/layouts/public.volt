<div id="settings_btn"><span id="trigger" class="settings"></span></div>
<div class="container">
    <div id="pt-main" class="pt-perspective">

        <div class="mp-pusher" id="mp-pusher">

            <!-- mp-menu -->
            <nav id="mp-menu" class="mp-menu">
                <div class="mp-level">

                    <h2 class="icon icon-world">Search</h2>

                    <ul>
                        <li class="icon icon-arrow-left">

                            <a class="icon icon-display search" href="#">
                                <div class="typeahead-wrapper">

                                    {{ form('action': 'search') }}
                                        {{ form.render('csrf', ['value': security.getToken()]) }}
                                        {{ form.render('source', ['class': 'source']) }}
                                        {{ form.render('search') }}
                                    {{ endForm() }}

                                    <!--<input class="source" type="search" placeholder="source" value="">-->
                                </div>
                            </a>

                        </li>
                    </ul>

                    <h2 class="icon icon-world">Feeds</h2>
                    <ul>
                        <li class="icon icon-arrow-left">
                            <a class="icon icon-display" href="#">Technology</a>

                            <div class="mp-level">
                                <h2 class="icon icon-display">Technology</h2>
                                <ul>
                                    {% for singleSource in source %}
                                    <li><a href="/source/{{ singleSource.getName() }}">{{ singleSource.getName() }}</a></li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </li>
                        <!--<li class="icon icon-arrow-left">
                            <a class="icon icon-display" href="#">Entertainment</a>

                            <div class="mp-level">
                                <h2 class="icon icon-display">Entertainment</h2>
                                <ul>
                                    <li><a href="#">Hello</a></li>
                                    <li><a href="#">e!</a></li>


                                </ul>
                            </div>
                        </li>-->
                    </ul>

                </div>

            </nav>
            <!-- /mp-menu -->

            <div class="pt-page pt-page-1">
                <div id="headline">
                    <div class="bottom">
                        <img src="images/logo.png" height="153" width="99" class="main"/>

                        <h1>Made with love by the Phalcon Team</h1>

                            {{ link_to("privacy", "Privacy Policy") }}
                            {{ link_to("terms", "Terms") }}

                        <h2>&copy; 2013 Phalcon Team.</h2>

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