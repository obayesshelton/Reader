<div id="st-accordion" class="st-accordion">
    <ul>

        {% for articleSingle in article %}

            <li>

                <div class="post_number">1</div>

                <a href="#" class="title">
                    <strong>{{ articleSingle.getTitle() }}</strong> (matthewn)
                </a>

                <div class="author">2 days ago</div>
                <div class="meta">
                    <a data-toggle="modal" href="/remote/6220820-3b8dc" data-target="#modal">
                        <span class="label pull-right">74 comments</span>
                    </a>
                </div>
                <div class="points"><strong>169 points</strong></div>

                <div class="clear"></div>

                <div class="st-content">
                    {{ articleSingle.getDescription() }}
                </div>
            </li>

        {% endfor %}

    </ul>
</div>