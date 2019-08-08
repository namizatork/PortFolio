<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Laravel好きのサーバーサイドエンジニア歴3年目の並里です。エンジニアのポートフォリオが少なかったのでしっかり作ってみました。">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@namizatop">
        <meta property="og:url" content="https://namizatork.com">
        <meta property="og:title" content="並里ポートフォリオ">
        <meta property="og:description" content="Laravel好きのサーバーサイドエンジニア歴3年目の並里です。エンジニアのポートフォリオが少なかったのでしっかり作ってみました。">
        <meta property="og:image" content="https://namizatork.com/images/twitter_ogp.png">

        <title>PortFolio</title>

        <!-- Vuetify -->
        <link href="https://cdn.jsdelivr.net/npm/vuetify@1.x/dist/vuetify.min.css" rel="stylesheet">

        <!-- Style -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <link href="{{ mix('/css/style.css') }}" rel="stylesheet">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126220551-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-126220551-1');
		</script>
    </head>
    <body>
        <!-- View Contents -->
        <div id="app"></div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
