<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" type="text/css" href="/css/core-landing.css" />
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="/css/newsletter.css" />

    {{ partial("helpers/analytics") }}

</head>
<body>

<div class="overlay"></div>
<div class="overlay-top"></div>
<!-- CONTENT -->
<section id="content">

    <aside>
        <a href="#" class="logo">
            <img src="images/logo.png" alt="">
        </a>
    </aside>
    <!-- /aside -->

    <article id="maincontent">
        <h1>News From Hundreds of Sources In One Spot</h1>
        <p><strong>ReadForMe</strong> is a central silo for all your news. You can archive and share specific articles, publications and blogs. Create a single document from all your saved articles and read them on any device. Update daily, weekly, or monthly. Whatever fits your schedule. No-BS, just the good stuff.</p>
        <p>Beautifully crafted with attention to detail. We have focused our time and effort on bringing you the best user experience possible. Every little detail has been carefully thought through and we will continuously bring you updates with great new features.</p>
    </article>
    <!-- /#maincontent -->

</section>
<!-- /#content -->

<!-- NEWSLETTER -->
<section id="newsletter" class="">
    <article>
        <aside>
            &nbsp;
        </aside>
        <div id="feed-form">
            <h2>Get notified when we launch!</h2>

            {% if success === 'false' %}

                <h3>There was an error please try again:</h3>
                <br/>
                <br/>

            {% else %}

                <p>Leave your email address and we will notify you when our journey starts:</p>
                <br/>
                <br/>

            {% endif %}

            {{ form() }}
                {{ form.render('csrf', ['value': security.getToken()]) }}
                {{ form.render('email', ['class': 'source']) }}
                {{ form.render('add', ['value': '']) }}
            {{ endForm() }}

            <div class="success-block"></div>
        </div>
    </article>
</section>
<!-- /#newsletter -->

<script type="text/javascript" src="/js/jquery10.8.min.js"></script>
<script src="/js/typeahead.js"></script>

</body>
</html>
