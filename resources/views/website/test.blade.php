<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="charset=utf-8" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="images/them/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta name="application-name" content="koraplus" />
    <meta name="msapplication-starturl" content="http://koraplus.com/" />
    <meta name="msapplication-tooltip" content="koraplus" />
    <title>كورة بلس - شاهد مباريات الدوري المصري حصريًا </title>
    <meta name="description" content="تابع أخر الأخبار من كل البطولات وشاهد مباريات الدوري المصري حصريا" />
    <meta name="keywords" content="" />
    <link rel="canonical" href="https://koraplus.com/" />
    <meta property="og:locale" content="ar_AR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="كورة بلس - شاهد مباريات الدوري المصري حصريًا " />
    <meta property="og:description" content="تابع أخر الأخبار من كل البطولات وشاهد مباريات الدوري المصري حصريا" />
    <meta property="og:url" content="http://koraplus.com/" />
    <meta property="og:site_name" content="كورة بلس" />
    <meta property="fb:app_id" content="395017902296517" />
    <meta property="og:image" content="http://koraplus.com/images/them/onerror/Large789x539.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="تابع أخر الأخبار من كل البطولات وشاهد مباريات الدوري المصري حصريا" />
    <meta name="twitter:title" content="كورة بلس - شاهد مباريات الدوري المصري حصريًا" />
    <meta name="twitter:image:src" content="http://koraplus.com/images/them/onerror/Large789x539.png" />
    <meta name="twitter:site" content="كورة بلس" />
    <link rel="canonical" href="https://koraplus.com/" />
    <link href='{{ asset('Content/style.css') }}' media="all" rel='stylesheet' type='text/css'>
    <link href='{{ asset('Content/responsive.css') }}' media="all" rel='stylesheet' type='text/css'>
    <link href='{{ asset('Content/swiper-bundle.min.css') }}' media="all" rel='stylesheet' type='text/css'>
    {{-- <link href='{{ asset('Content/jQueryUI.css') }}' media="all" rel='stylesheet' type='text/css'> --}}
    <link href='{{ asset('Content/font-awesome.min.css') }}' media="all" rel='stylesheet' type='text/css'>
    <script src="{{ asset('Scripts/jquery-v3.4.1.min.j') }}s"></script>
    <link rel="stylesheet" href="{{ asset('Content/lightgallery.css') }}" />
    <link rel="stylesheet" href="{{ asset('Content/lg-zoom.css') }}" />
    <link rel="stylesheet" href="{{ asset('Content/justifiedGallery.css') }}" />
    <link rel="stylesheet" href="{{ asset('Content/lg-thumbnail.css') }}" />
</head>

<body>
    @livewire('header-component')
    {{-- @livewire('slide-match-component') --}}
    {{-- @livewire('slide-news-component') --}}
    <div class="mainContainer">
        @livewire('news-hero-page-component')
        {{-- @livewire('block-news-component') --}}
        {{-- @livewire('slide-more-news-component') --}}
        {{-- @livewire('tv-news-component') --}}
        {{-- @livewire('slide-team-component') --}}
        {{-- @livewire('tabs-slide-news-component') --}}
    </div>

    <footer>
        <div class="footermenu">
            <ul class="row">
                <li>
                    <a href="{{ env("APP_URL") }}" target="_blank">الرئيسية</a>
                </li>
                <li>
                    <a href="#">الأخبار</a>
                </li>
                <li>
                    <a href="#">TV+</a>
                </li>
                <li>
                    <a href="#">المباريات</a>
                </li>
                <li>
                    <a href="#">كورة مصرية</a>
                </li>
                <li>
                    <a href="#">كورة أوروبية</a>
                </li>
                <li>
                    <a href="#">رياضات أخرى</a>
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
                <li>
                    <a href="#">للإعلان</a>
                </li>
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
            <a href="#" rel="nofollow">
                <img class="tiktoklogo" src="images/them/redtiktoklogo.png" />
            </a>
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
