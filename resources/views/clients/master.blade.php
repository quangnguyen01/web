<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N693E2K967"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-N693E2K967');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&family=STIX+Two+Text&display=swap"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/assets/css/index.css">
    @yield('custom_css')
    <style>
        .toolbar {
            position: fixed;
            bottom: 60px;
            right: 22px;
            z-index: 99999999;
        }
        .toolbar ul {
            padding: 0px;
            margin: 0px;
            list-style: none;
        }
        .toolbar ul li {
            position: relative;
        }
        .toolbar ul li .box-show {
            padding-top: 10px;
        }
        .toolbar ul li .box-show img {
            width: 40px;
            height: 40px;
        }
        .toolbar ul li span {
            font-weight: 400;
            color: #333;
            position: absolute;
            top: 50%;
            right: calc(100% + 10px);
            right: -webkit-calc(100% + 10px);
            right: -moz-calc(100% + 10px);
            margin-top: -12.5px;
            font-size: 14px;
            height: 25px;
            line-height: 25px;
            padding: 0 10px;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
        }
    </style>
    <title>HDNTech</title>
</head>
<body>
<!--Header-->
@include('clients.components.header')
<div class="toolbar">
    <ul>
        <li>
            <a href="tel:0868883322" id="devvn_contact_1" title="Hotline" class="animation_zoom">
                <div class="box-show"><img width="64" height="64" src="https://hdntech.vn/wp-content/themes/hdn/images/call.png" class="attachment-full size-full entered lazyloaded" alt="" data-lazy-src="https://hdntech.vn/wp-content/themes/hdn/images/call.png" data-ll-status="loaded"><noscript><img width="64" height="64" src="https://hdntech.vn/wp-content/themes/hdn/images/call.png" class="attachment-full size-full" alt="" /></noscript></div>
                <span>Hotline</span>
            </a>
        </li>
        <li>
            <a href="https://zalo.me/2820439685183295678" target="_blank" id="devvn_contact_2" title="Chat Zalo" class="animation_swing">
                <div class="box-show"><img width="63" height="63" src="https://hdntech.vn/wp-content/themes/hdn/images/zalo-2.png" class="attachment-full size-full entered lazyloaded" alt="" data-lazy-src="https://hdntech.vn/wp-content/themes/hdn./images/zalo-2.png" data-ll-status="loaded"><noscript><img width="63" height="63" src="https://hdntech.vn/wp-content/themes/hdn/images/zalo-2.png" class="attachment-full size-full" alt="" /></noscript></div>
                <span>Chat Zalo</span>
            </a>
        </li>
        <li>
            <a href="https://m.me/hdntech" target="_blank" id="devvn_contact_3" title="Chat Facebook" class="animation_tada">
                <div class="box-show"><img width="60" height="60" src="https://hdntech.vn/wp-content/themes/hdn/images/mess.png" class="attachment-full size-full entered lazyloaded" alt="" data-lazy-src="https://hdntech.vn/wp-content/themes/hdn./images/mess.png" data-ll-status="loaded"><noscript><img width="60" height="60" src="https://hdntech.vn/wp-content/themes/hdn/images/mess.png" class="attachment-full size-full" alt="" /></noscript></div>
                <span>Chat Facebook</span>
            </a>
        </li>
    </ul>
</div>
@yield('banner')

<!--Content-->
<section>
    @yield('content')
</section>

@yield('end_banner')
<!--Footer-->
@include('clients.components.footer')

<script src="/assets/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>
<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.validate.min.js"></script>
@yield('custom_js')
<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "106388918419014");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v11.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>
