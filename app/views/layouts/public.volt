<div id="settings_btn"><span id="trigger" class="settings"></span></div>
<div class="container">
    <div id="pt-main" class="pt-perspective">

        <div class="mp-pusher" id="mp-pusher">

            <!-- mp-menu -->
            <nav id="mp-menu" class="mp-menu">
                <div class="mp-level">

                    <ul>
                        <li class="icon icon-arrow-left">
                            {{ link_to("session/login", "login") }}
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
                        <li class="icon icon-arrow-left">
                            <a class="icon icon-display" href="#">Entertainment</a>

                            <div class="mp-level">
                                <h2 class="icon icon-display">Entertainment</h2>
                                <ul>
                                    <li><a href="#">Hello</a></li>
                                    <li><a href="#">e!</a></li>


                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>

            </nav>
            <!-- /mp-menu -->

            <div class="pt-page pt-page-1">

                {{ partial("layouts/footer") }}

                <div class="wrapper">
                    <div class="inner">

                        {{ content() }}

                    </div>

                    <!-- @Ben this seems to be wrong -->
                    {{ partial("layouts/advert") }}

                </div>
            </div>

        </div>
        <!-- /pusher -->
    </div>
</div>