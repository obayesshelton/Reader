<div id="settings_btn"><span id="trigger" class="settings"></span></div>
<div class="container">
    <div id="pt-main" class="pt-perspective">

        <div class="mp-pusher" id="mp-pusher">

            <!-- mp-menu -->
            <nav id="mp-menu" class="mp-menu">
                <div class="mp-level">

                    <h2 class="icon icon-display">Search</h2>

                    <h2 class="icon icon-display">{{ auth.getName() }}</h2>

                    <ul class="nav">
                        <li>{{ link_to('users/changePassword', 'Change Password') }}</li>
                        <li>{{ link_to('session/logout', 'Logout') }}</li>
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

                    <!-- @Ben this seems to be wrong with viewing via the browser -->
                    <!--{{ partial("layouts/advert") }}-->

                </div>
            </div>

        </div>
        <!-- /pusher -->
    </div>
</div>