<!-- mp-menu -->
<nav id="mp-menu" class="mp-menu">
    <div class="mp-level">

        <h2 class="icon icon-world">Search</h2>

        <ul>
            <li class="icon icon-arrow-left">

                <a class="icon icon-display search" href="#">
                    <div class="typeahead-wrapper">
                        <input class="source" type="search" placeholder="source" value="">
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