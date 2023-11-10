<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="charset=utf-8" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="images/them/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta name="application-name" content="koraplus" />
    <meta name="msapplication-starturl" content="https://kora4ever.be3o.com//" />
    <meta name="msapplication-tooltip" content="koraplus" />
    <title>كورة فور ايفر - شاهد مباريات الدوري المصري حصريًا </title>
    <meta name="description" content="تابع أخر الأخبار من كل البطولات وشاهد مباريات الدوري المصري حصريا" />
    <meta name="keywords" content="" />
    <link rel="canonical" href="https://kora4ever.be3o.com/" />
    <meta property="og:locale" content="ar_AR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content=">كورة فور ايفر - شاهد مباريات الدوري المصري حصريًا " />
    <meta property="og:description" content="تابع أخر الأخبار من كل البطولات وشاهد مباريات الدوري المصري حصريا" />
    <meta property="og:url" content="https://kora4ever.be3o.com//" />
    <meta property="og:site_name" content="كورة فور ايفر" />
    <meta property="fb:app_id" content="395017902296517" />
    {{-- <meta property="og:image" content="https://kora4ever.be3o.com//images/them/onerror/Large789x539.png" /> --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="تابع أخر الأخبار من كل البطولات وشاهد مباريات الدوري المصري حصريا" />
    <meta name="twitter:title" content="كورة فور ايفر - شاهد مباريات الدوري المصري حصريًا" />
    {{-- <meta name="twitter:image:src" content="https://kora4ever.be3o.com//images/them/onerror/Large789x539.png" /> --}}
    <meta name="twitter:site" content="كورة فور ايفر" />
    <link rel="canonical" href="https://kora4ever.be3o.com/" />
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
    @livewire('slide-match-component')
    {{-- @livewire('slide-news-component') --}}
    {{-- <div class="mainContainer"> --}}
    {{-- start content --}}
    <div class="row InnerContainer">
        <div class="RightInner">
            <div class="articlebody" title="{{ $post->title }}" newsid="{{ $post->id }}">
                <div class="articleMainTitle">
                    <h1>{{ $post->title }}</h1>
                </div>
                <div class="row">

                    <div class="ArticleTimeAndAuthor">
                        <div class="row AuthorIconBlock">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            <p> كتب : {{ $post->created_by_user->name }} </p>
                        </div>
                        <div class="row TimeIconBlock">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <p>{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
                <div>
                    @if ($post->video_url)
                        <div class="detailsMainImage">
                            <iframe width="660" height="415"
                                src="https://www.youtube.com/embed/{{ $post->video_url }}" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    @else
                        <div class="detailsMainImage">
                            <img src="{{ env('APP_URL') . '/storage/' . $post->media[0]->url }}"
                                onerror="this.src='images/mainlogo.png'" title="{{ $post->title }}"
                                alt="{{ $post->title }}">
                            <div class="imageCaption">
                                <p>{{ $post->title }}</p>
                            </div>
                        </div>
                    @endif

                </div>

                <div class="ArticleContent">
                    <p>
                        {!! $post->body !!}
                        {{-- </p>
                    <div class="RelatedNewsLeft" id="After_F_Paragraph">
                        <div>
                            <div class="RelatedNewsLeftHead">
                                <h3>أخبار متعلقة</h3>
                            </div>
                            <div class="RelatedNewsLeftInner">
                                <div class="row OneRelatedLeft">
                                    <img src="https://koraplus.com/images/2022/4/large-4/287187409720220420030333333.jpg"
                                        onerror="this.src='images/onerror/Large214x146.png'" class="RelatedNewsLeftImg"
                                        alt="أنس أسامة">
                                    <h3 class="TitleOneRelatedLeft">
                                        <a href="/Article/{{ $post->id }}">
                                            صفحة الزمالك تتراجع وتُعيد صورة أنس أسامة بعد إزالتها
                                        </a>
                                    </h3>
                                </div>
                                <div class="row OneRelatedLeft">
                                    <img src="https://koraplus.com/images/2022/6/large-4/2871874097202206031214161416.jpg"
                                        onerror="this.src='images/onerror/Large214x146.png'" class="RelatedNewsLeftImg"
                                        alt="أنس أسامة">
                                    <h3 class="TitleOneRelatedLeft">
                                        <a href="/Article/{{ $post->id }}">
                                            اتحاد السلة يوضح لـ &quot;كورة بلس&quot; كيفية التعامل مع قضية أنس أسامة
                                        </a>
                                    </h3>
                                </div>
                                <div class="row OneRelatedLeft">
                                    <img src="https://koraplus.com/images/2022/6/large-4/162671102047720220609024908498.jpg"
                                        onerror="this.src='images/onerror/Large214x146.png'" class="RelatedNewsLeftImg"
                                        alt="أنس أسامة">
                                    <h3 class="TitleOneRelatedLeft">
                                        <a href="/Article/{{ $post->id }}">
                                            الاتحاد السكندري يعلن ضم أنس أسامة 3 مواسم في صفقة انتقال حر
                                        </a>
                                    </h3>
                                </div>
                                <div class="row OneRelatedLeft">
                                    <img src="https://koraplus.com/images/2022/6/large-4/16481779176272202206080145224522.jpg"
                                        onerror="this.src='images/onerror/Large214x146.png'" class="RelatedNewsLeftImg"
                                        alt="سلة الزمالك">
                                    <h3 class="TitleOneRelatedLeft">
                                        <a href="/Article/{{ $post->id }}">
                                            في حالة رحيل أنس أسامة.. تعرف على قائمة سلة الزمالك للموسم الجديد
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="row ArticleTagsBlock clear">
                    @foreach ($post->tags as $tag)
                        <div class="AOneTagSmall">
                            {{-- <a href="{{ route('TagNews', ['id' => $tag->id]) }}"> --}}
                            <a href="#">
                                <p>{{ $tag->name }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="ArticleLatestNews">
                    {{-- <h4 class="CHNameleagueLiveStreams">
                        <a class="A-GetAllChampions">
                            <p>اخر الاخبار</p>
                            <img src="{{ asset('images/ArrowLiveStreams.png') }}" alt="ArrowLiveStreams">
                        </a>
                    </h4> --}}
                    <div class="row">
                        {{-- @foreach ($last as $last_post)
                            <div class="OneCollection">
                                <div class="secondNewsBlockImage">
                                    <a href="{{ route('Article', ['id' => $last_post->id]) }}">
                                        <img src="{{ asset($last_post->photos[0]->path) }}"
                                            onerror="this.src={{ asset('images/onerror/Large329x224.png') }}"
                                            class="OneCollectionImg">
                                    </a>
                                </div>
                                <div class="row OneCollectionBG">
                                    <h3 class="OneCollectionTitle">
                                        <a href="{{ route('Article', ['id' => $last_post->id]) }}">
                                            {{ $last_post->title }}
                                        </a>
                                    </h3>
                                </div>
                                <div class="row ArticleDateBlock">
                                    <div class="row ArticleTagSmall">
                                        @foreach ($last_post->tags->take(2) as $tag)
                                            <div class="AOneTagSmall">
                                                <a href="{{ route('TagNews', ['id'=>$tag->id]) }}">
                                                    <p>{{ __('messages.'.$tag->name) }}</p>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="row ArticleDateBlock">
                                    <div class="row ArticleDate">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <p>{{$last_post->created_at->diffForHumans()}} </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach --}}
                    </div>
                </div>
                {{-- @if ($video && $video->count() > 0)
                    <div class="ArticleLatestNews">
                        <h4 class="CHNameleagueLiveStreams">
                            <a class="A-GetAllChampions">
                                <p>احدث الفيديوهات </p>
                                <img src="{{ asset('images/ArrowLiveStreams.png') }}" alt="ArrowLiveStreams">
                            </a>
                        </h4>
                        <div class="row">
                            @foreach ($video as $video_post)
                                <div class="OneCollection">
                                    <div class="secondNewsBlockImage">
                                        <a href="{{ route('Article', ['id' => $video_post->id]) }}">
                                            <img src="{{ asset($video_post->photos[0]->path) }}"
                                                onerror="this.src={{ asset('images/onerror/Large329x224.png') }}"
                                                class="OneCollectionImg" alt="{{$video_post->title}} ">
                                            <img src="{{ asset('images/tvicon.png') }}" class="IconPlayTVs"
                                                alt="tvicon">
                                        </a>
                                    </div>
                                    <div class="row OneCollectionBG">
                                        <h3 class="OneCollectionTitle">
                                            <a href="{{ route('Article', ['id' => $video_post->id]) }}">
                                                {{ $video_post->title }}
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="row ArticleDateBlock">
                                        @foreach ($post->tags as $tag)
                                            <div class="AOneTagSmall">
                                                <a href="{{ route('TagNews', ['id' => $tag->id]) }}">
                                                    <p>{{ __('messages.'.$tag->name) }}</p>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="row ArticleDateBlock">
                                        <div class="row ArticleDate">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <p>
                                                {{$video_post->created_at->diffForHumans()}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                @endif --}}
            </div>
        </div>
        <div class="LeftInner fixedMostRead">
            {{-- @livewire('left-side-bar-component') --}}
        </div>
    </div>
    {{-- end content --}}

    {{-- </div> --}}

    <footer>
        <div class="footermenu">
            <ul class="row">
                <li>
                    <a href="{{ env('APP_URL') }}" target="_blank">الرئيسية</a>
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
