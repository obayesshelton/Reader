<!DOCTYPE html>
<html>
    <head>
        <title>feed.me</title>
        <link rel="stylesheet" type="text/css" href="/css/default.css"/>
        <link rel="stylesheet" type="text/css" href="/css/core.css"/>
        <link rel="stylesheet" type="text/css" href="/css/multilevelmenu.css"/>
        <link rel="stylesheet" type="text/css" href="/css/component.css"/>
        <link rel="stylesheet" type="text/css" href="/css/animations.css"/>

        {{ partial("layouts/analytics") }}

    </head>
<body>

		{{ content() }}

<script src="/js/modernizr.custom.js"></script>
<script src="/js/jquery10.8.min.js"></script>
<script src="/js/jquery.dlmenu.js"></script>
<script src="/js/classie.js"></script>
<script src="/js/mlpushmenu.js"></script>
<script>
    new mlPushMenu(document.getElementById('mp-menu'), document.getElementById('trigger'));
</script>
<script src="/js/pagetransitions.js"></script>
<script src="/js/core.js"></script>

<script type="text/javascript" src="/js/jquery.accordion.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script src="/js/typeahead.js"></script>
<script type="text/javascript">
    $(function () {

        $('.st-accordion').accordion({
            oneOpenedItem: true
        });

    });
</script>
<script>
    var states = new Bloodhound({
        datumTokenizer: function(d) {
            return Bloodhound.tokenizers.whitespace(d.val);
        },
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        local: {{ sourceSearch }}
    });

    states.initialize();

    $('.source').typeahead({
                highlight: true
            },
            {
                displayKey: 'val',
                source: states.ttAdapter()
            });
</script>
</body>
</html>
