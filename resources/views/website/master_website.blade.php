<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="charset=utf-8" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    {{-- <link href="images/them/favicon.ico" rel="shortcut icon" type="image/x-icon" /> --}}
    <meta name="application-name" content="kora4ever" />
    <meta name="msapplication-starturl" content="https://kora4ever.com//" />
    <meta name="msapplication-tooltip" content="kora4ever" />
    <title>كورة فور ايفر - اخبار الدوري المصري حصريًا </title>
    <meta name="description" content="موقع كورة فور ايفر تابع كل اخبار البطولات العالمية" />
    <meta name="keywords" content="" />
    <link rel="canonical" href="https://kora4ever.com" />
    <meta property="fb:app_id" content="395017902296517" />
    <link rel="canonical" href="https://kora4ever.com" />
    <link href='{{ asset('Content/style.css?v=2') }}' media="all" rel='stylesheet' type='text/css'>
    <link href='{{ asset('Content/responsive.css') }}' media="all" rel='stylesheet' type='text/css'>
    <link href='{{ asset('Content/swiper-bundle.min.css') }}' media="all" rel='stylesheet' type='text/css'>
    <link href='{{ asset('Content/font-awesome.min.css') }}' media="all" rel='stylesheet' type='text/css'>
    <script src="{{ asset('Scripts/jquery-v3.4.1.min.j') }}s"></script>
    <link rel="stylesheet" href="{{ asset('Content/lightgallery.css?v=1') }}" />
    <link rel="stylesheet" href="{{ asset('Content/lg-zoom.css?v=1') }}" />
    <link rel="stylesheet" href="{{ asset('Content/justifiedGallery.css?v=1') }}" />
    <link rel="stylesheet" href="{{ asset('Content/lg-thumbnail.css?v=1') }}" />
</head>

<body>
    @livewire('header-component')
    <div class="mainContainer">
        @yield('mainContainer')
    </div>

    <footer>
        <div class="footermenu">
            <ul class="row">
                <li>
                    <a href="{{ env('APP_URL') }}" target="_blank">الرئيسية</a>
                </li>
                <li>
                    <a href="{{ route('all_news') }}">الأخبار</a>
                </li>
                <li class="">
                    <a href="{{ route('all_matches') }}" target="_parent">المباريات</a>
                </li>
                <li>
                    <a href="#">سياسة الخصوصية</a>
                </li>
                <li>
                    <a href="#">إتصل بنا</a>
                </li>
                <li>
                    <a href="#">من نحن </a>
                </li>
                {{-- <li>
                    <a href="#">للإعلان</a>
                </li> --}}
            </ul>
        </div>
        <div class="footerCopyRight">
            <div class="row copyRight">
                <p> © 2023</p>
                <h1>Kora 4 Ever</h1>
                <p>تم تصميمه و تطويره بواسطة فريق</p>
            </div>
        </div>
        <div class="row socialIconsFooter">
            {{-- <a href="#" rel="nofollow">
                <img class="tiktoklogo" src="images/them/redtiktoklogo.png" />
            </a> --}}
            <a href="#" rel="nofollow">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="#" rel="nofollow">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="#" rel="nofollow">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="#" rel="nofollow">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
            </a>
            <a href="#" rel="nofollow">
                <i class="fa fa-rss" aria-hidden="true"></i>
            </a>
        </div>
    </footer>
    <script src="{{ asset('Scripts/breaking-news-ticker.min.js') }}"></script>
    <script src="{{ asset('Scripts/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('Scripts/Mainfunctios.js') }}"></script>
    <script src="{{ asset('Scripts/GeneralScript.js') }}"></script>
    {{-- <script src="{{ asset('Scripts/jqueryui.js') }}"></script> --}}
    {{-- <script src="{{ asset('Scripts/datepicker-ar.js') }}"></script> --}}
    <script src="{{ asset('Scripts/jquery.cookie.js') }}"></script>
    {{-- <script src="{{ asset('Scripts/poll.js') }}"></script> --}}
    <script src="{{ asset('Scripts/jquery.li-scroller-rtl.1.0.js') }}"></script>
</body>

</html>
