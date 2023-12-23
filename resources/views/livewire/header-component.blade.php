<div>
    <header>
        <div class="row">
            <div class="row rightHeader">

                <div class="MobileMenuicon">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>

                <div class="Mainlogo">
                    {{-- <a href="/"><img src="{{ asset('images/them/mainlogo.png') }}" class="" alt="mainlogo" title=""></a> --}}
                </div>
            </div>
            <div class="row leftHeader">
                <div class="Mainmenu">
                    <ul class="row">
                        <li>
                            <a href="{{ env('APP_URL') }}" target="_self">الرئيسية</a>
                        </li>
                        <li>
                            <a href="{{ route('all_news') }}" target="_self">الأخبار</a>
                        </li>
                        <li>
                            <a href="{{ route('all_matches') }}" target="_parent">المباريات</a>
                        </li>
                        <li>
                            <a href="{{ route('championship', ['id' => 9]) }}" target="_self">الدوري المصري</a>
                        </li>
                        <li>
                            <a href="{{ route('championship', ['id' => 1]) }}" target="_parent">الدوري الانجليزي</a>
                        </li>
                        <li>
                            <a href="{{ route('championship', ['id' => 3]) }}" target="_self">الدوري الاسباني</a>
                        </li>
                        <li>
                            <a href="{{ route('championship', ['id' => 25]) }}" target="_self">الدوري السعودي</a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="row loginAndlive">
                    <div class="WLiveStream">
                        <a href="LiveStreams">
                            <div class="WLiveStreamWord">
                                <p>بث مباشر </p>
                                <img src="images/them/WLiveStreamMobile.png" />
                            </div>
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="row SearchAreaBlock">
            <div class="SearchAreaBlockSpace">
                <div action="" class="row">
                    <input type="search" class="SearchAreaInput" id="topSearchInput" placeholder="ابحث هنا">
                    <button type="button" class="SearchAreaBtn" id="topSearchBtn"><i
                            class="fa fa-search searchHeaderBtn" aria-hidden="true"></i></button>
                </div>
                <div class="CloseSearchAreaBlock">
                    <div class="row CloseSearchAreaBlockIn">
                        <p><i class="fa fa-times" aria-hidden="true"></i>أغلاق</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="MenuFullWidth">
            <div class="row centerBurger">

                <div class="socialIconsBlock">
                    <p>تواصل معنا</p>
                    <div class="socialIcons">
                        <a href="https://www.tiktok.com/@koraplus" target="_blank" rel="nofollow">
                            <img class="tiktoklogo" src="images/them/tiktoklogo.png" />
                        </a>
                        <a href="https://www.facebook.com/koraplus" target="_blank" rel="nofollow">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/koraplus" target="_blank" rel="nofollow">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/korapluseg" target="_blank" rel="nofollow">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCoTREVo1yJwXXDY0TbTA4EQ" target="_blank"
                            rel="nofollow">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

            <ul class="row MainMenuUL">
                <li class="firstLevel">
                    <h2><a href="{{ route('all_news') }}" target="_self">أخبار</a></h2>
                    <ul>
                        {{-- <li>
                            <a href="Section/48/%D8%A3%D8%AE%D8%A8%D8%A7%D8%B1-%D9%85%D8%B5%D8%B1%D9%8A%D8%A9/1"
                                target="_self">
                                أخبار م
                            </a>
                        </li> --}}
                        <li>
                            <a href="{{ route('championship', ['id' => 9]) }}" target="_self">الدوري المصري</a>
                        </li>
                        <li>
                            <a href="{{ route('championship', ['id' => 1]) }}" target="_parent">الدوري الانجليزي</a>
                        </li>
                        <li>
                            <a href="{{ route('championship', ['id' => 3]) }}" target="_self">الدوري الاسباني</a>
                        </li>
                        <li>
                            <a href="{{ route('championship', ['id' => 25]) }}" target="_self">الدوري السعودي</a>
                        </li>
                    </ul>
                </li>
               {{-- <li class="firstLevel">
                    <h2><a href="section/35/كورة-مصرية/1" target="_parent">كورة مصرية</a></h2>
                    <ul>
                        <li>
                            <a href="championships/1400/%D8%A7%D9%84%D8%AF%D9%88%D8%B1%D9%8A-%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A-%D8%A7%D9%84%D9%85%D9%85%D8%AA%D8%A7%D8%B2"
                                target="_parent">
                                الدوري المصري
                            </a>
                        </li>
                        <li>
                            <a href="championships/2410/كأس-مصر" target="_parent">
                                كأس مصر
                            </a>
                        </li>
                        <li>
                            <a href="Section/38/%D8%AF%D9%88%D8%B1%D9%8A-%D8%A7%D9%84%D9%82%D8%B3%D9%85-%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%8A/1"
                                target="_parent">
                                دوري القسم الثاني
                            </a>
                        </li>
                        <li>
                            <a href="championships/1407/كأس-رابطة-المحترفين-المصرية" target="_parent">
                                كأس الرابطة
                            </a>
                        </li>
                    </ul>
                </li>
                 <li class="firstLevel">
                    <h2><a href="#" target="_parent">TV+</a></h2>
                    <ul>
                        <li>
                            <a href="TagVideos/516/عاجل-بلس/1" target="_parent">
                                عاجل بلس
                            </a>
                        </li>
                        <li>
                            <a href="https://koraplus.com/Program/Index?ID=129" target="_parent">
                                الاستوديو التحليلي
                            </a>
                        </li>
                        <li>
                            <a href="SearchVideos/%D8%AA%D8%A7%D8%AA%D8%B4-%D8%B3%D9%83%D8%B1%D9%8A%D9%86/1"
                                target="_parent">
                                تاتش سكرين
                            </a>
                        </li>
                        <li>
                            <a href="https://koraplus.com/Program/Index?ID=131" target="_parent">
                                بوكسينج داي
                            </a>
                        </li>
                        <li>
                            <a href="https://koraplus.com/Program/Index?ID=132" target="_parent">
                                أبطال بلس
                            </a>
                        </li>
                        <li>
                            <a href="https://koraplus.com/Program/Index?ID=130" target="_parent">
                                فوتبول شات
                            </a>
                        </li>
                        <li>
                            <a href="https://koraplus.com/Program/Index?ID=133" target="_parent">
                                VAR بلس
                            </a>
                        </li>
                        <li>
                            <a href="TagVideos/58/%D8%A7%D9%84%D8%AF%D9%88%D8%B1%D9%8A-%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A/1"
                                target="_parent">
                                فيديوهات الدوري المصري
                            </a>
                        </li>
                        <li>
                            <a href="SearchVideos/فيديو-بلس/1" target="_parent">
                                فيديو بلس
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="firstLevel">
                    <h2><a href="#" target="_parent">كورة أوروبية</a></h2>
                    <ul>
                        <li>
                            <a href="championships/1366/الدوري-الإنجليزي-الممتاز" target="_parent">
                                الدوري الإنجليزي
                            </a>
                        </li>
                        <li>
                            <a href="championships/1370/الدوري-الإسباني" target="_parent">
                                الدوري الإسباني
                            </a>
                        </li>
                        <li>
                            <a href="championships/1369/الدوري-الإيطالي" target="_parent">
                                الدوري الايطالي
                            </a>
                        </li>
                        <li>
                            <a href="championships/1367/الدوري-الألماني" target="_parent">
                                الدوري الالماني
                            </a>
                        </li>
                        <li>
                            <a href="championships/1380/الدوري-الفرنسي" target="_parent">
                                الدوري الفرنسي
                            </a>
                        </li>
                        <li>
                            <a href="championships/1368/%D8%AF%D9%88%D8%B1%D9%8A-%D8%A3%D8%A8%D8%B7%D8%A7%D9%84-%D8%A3%D9%88%D8%B1%D9%88%D8%A8%D8%A7"
                                target="_parent">
                                دوري أبطال أوروبا
                            </a>
                        </li>
                        <li>
                            <a href="Section/49/%D8%A3%D8%AE%D8%A8%D8%A7%D8%B1-%D8%B9%D8%A7%D9%84%D9%85%D9%8A%D8%A9/1"
                                target="_parent">
                                أخبار عالمية
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="firstLevel">
                    <h2><a href="#" target="_parent">كورة أفريقية</a></h2>
                    <ul>
                        <li>
                            <a href="championships/1389/دوري-أبطال-أفريقيا" target="_parent">
                                دوري أبطال إفريقيا
                            </a>
                        </li>
                        <li>
                            <a href="championships/1390/كأس-الكونفيدرالية-الأفريقية" target="_parent">
                                كأس الكونفدرالية
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="firstLevel">
                    <h2><a href="#" target="_parent">كورة خليجي</a></h2>
                    <ul>
                        <li>
                            <a href="championships/1384/دوري-المحترفين-السعودي" target="_parent">
                                الدوري السعودي
                            </a>
                        </li>
                        <li>
                            <a href="championships/1386/دوري-الخليج-العربي" target="_parent">
                                الدوري الإماراتي
                            </a>
                        </li>
                        <li>
                            <a href="Section/43/دوري-نجوم-قطر/1" target="_parent">
                                دوري نجوم قطر
                            </a>
                        </li>
                        <li>
                            <a href="Section/45/دوري-المحترفين-العماني/1" target="_parent">
                                دوري المحترفين العماني
                            </a>
                        </li>
                        <li>
                            <a href="Section/46/الدوري-الكويتي/1" target="_parent">
                                الدوري الكويتي
                            </a>
                        </li>
                        <li>
                            <a href="Section/50/%D8%A3%D8%AE%D8%A8%D8%A7%D8%B1-%D8%B9%D8%B1%D8%A8%D9%8A%D8%A9/1"
                                target="_parent">
                                دوريات أخرى
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="firstLevel">
                    <h2><a href="Section/37/كورة-نسائية/1" target="_blank">كورة نسائية</a></h2>
                    <ul>
                        <li>
                            <a href="Section/64/مصر-والعالم/1" target="_blank">
                                مصر والعالم
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="firstLevel">
                    <h2><a href="Section/14/رياضات-أخرى/1" target="_self">رياضات أخرى</a></h2>
                    <ul>
                        <li>
                            <a href="OtherSports/6/%D9%83%D8%B1%D8%A9-%D8%A7%D9%84%D8%B3%D9%84%D8%A9" target="_self">
                                كرة السلة
                            </a>
                        </li>
                        <li>
                            <a href="OtherSports/7/%D8%A7%D9%84%D9%83%D8%B1%D8%A9-%D8%A7%D9%84%D8%B7%D8%A7%D8%A6%D8%B1%D8%A9"
                                target="_self">
                                الكرة الطائرة
                            </a>
                        </li>
                        <li>
                            <a href="OtherSports/8/%D9%83%D8%B1%D8%A9-%D9%8A%D8%AF" target="_self">
                                كرة اليد
                            </a>
                        </li>
                        <li>
                            <a href="OtherSports/9/%D8%AA%D9%86%D8%B3" target="_self">
                                تنس
                            </a>
                        </li>
                        <li>
                            <a href="OtherSports/10/%D8%A7%D8%B3%D9%83%D9%88%D8%A7%D8%B4" target="_self">
                                اسكواش
                            </a>
                        </li>
                        <li>
                            <a href="OtherSports/11/%D8%B3%D8%A8%D8%A7%D8%AD%D8%A9" target="_self">
                                سباحة
                            </a>
                        </li>
                        <li>
                            <a href="https://koraplus.com/TagNews/1498/%D8%AA%D9%86%D8%B3-%D8%A7%D9%84%D8%B7%D8%A7%D9%88%D9%84%D8%A9/1"
                                target="_self">
                                تنس الطاولة
                            </a>
                        </li>
                        <li>
                            <a href="OtherSports/12/%D8%A3%D9%84%D8%B9%D8%A7%D8%A8-%D9%82%D9%88%D9%89" target="_self">
                                ألعاب القوى
                            </a>
                        </li>
                        <li>
                            <a href="https://koraplus.com/TagNews/964/%D8%A7%D9%84%D8%B3%D9%84%D8%A7%D8%AD/1"
                                target="_self">
                                السلاح
                            </a>
                        </li>
                        <li>
                            <a href="https://koraplus.com/TagNews/403/%D8%A7%D9%84%D8%B1%D9%85%D8%A7%D9%8A%D8%A9/1"
                                target="_self">
                                الرماية
                            </a>
                        </li>
                        <li>
                            <a href="https://koraplus.com/TagNews/302/%D8%A7%D9%84%D8%AA%D8%A7%D9%8A%D9%83%D9%88%D9%86%D8%AF%D9%88/1https://koraplus.com/TagNews/302/%D8%A7%D9%84%D8%AA%D8%A7%D9%8A%D9%83%D9%88%D9%86%D8%AF%D9%88/1"
                                target="_self">
                                التايكوندو
                            </a>
                        </li>
                        <li>
                            <a href="https://koraplus.com/TagNews/537/%D8%A7%D9%84%D9%85%D8%B5%D8%A7%D8%B1%D8%B9%D8%A9/1"
                                target="_self">
                                المصارعة
                            </a>
                        </li>
                        <li>
                            <a href="OtherSports/13/%D9%83%D9%85%D8%A7%D9%84-%D8%A3%D8%AC%D8%B3%D8%A7%D9%85"
                                target="_self">
                                كمال الأجسام
                            </a>
                        </li>
                        <li>
                            <a href="https://koraplus.com/TagNews/1354/%D8%A7%D9%84%D8%AF%D8%B1%D8%A7%D8%AC%D8%A7%D8%AA/1"
                                target="_self">
                                الدراجات
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </header>
</div>
