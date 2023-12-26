@extends('website.master_website')
@section('mainContainer')
    {{-- start content --}}
    <input type="hidden" value="1" id="tabNum" />
    <div class="row TV-writersBlockArea customHeder">
        <div class="RightTvSection ">
            <div class="row Team">
                <div class="HeaderTeamCon">
                    <div class="row Head-Team">
                        <div class="LogoTeam">
                            <img src="{{ env('APP_URL') . 'storage/' . $leauge->logo }}" alt="{{ $leauge->name }}"
                                title="{{ $leauge->name }}">
                        </div>
                        <div class="NameTeam">
                            <h3>
                                {{ $leauge->name }}
                            </h3>
                            <span>
                                تابع الدوري
                            </span>
                            <div class="ArticleShareArea" style="border:none">
                                <div class="shareiconAbs">
                                    <img src="{{ asset('images/shareicon.png') }}" alt="shareicon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="row listUl">
                        <li>
                            <a href="" title="Chtab1">
                                أخبار
                            </a>
                        </li>
                        <li>
                            <a href="" title="Chtab3">
                                مباريات
                            </a>
                        </li>
                        <li>
                            <a href="" title="Chtab5">
                                ترتيب الفرق
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="AllTeamsBlockInners">
                    <div class="swiperTeamsInners">
                        <div class="swiper-wrapper">
                            @foreach ($teams as $team)
                                <div class="swiper-slide">
                                    <div class="ImageSliderFixedHeight">
                                        <a href="{{ route('team', ['id' => $team->id]) }}">
                                            <img src="{{ env('APP_URL') . 'storage/' . $team->logo }}"
                                                title="{{ $team->name }}" alt="{{ $team->name }}">
                                        </a>
                                    </div>
                                    <a href="#">{{ $team->name }}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                    <div class="swiper-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                </div>
            </div>
            <div id="Chtab1" class="championshipsBlock ss">
                <div class="championshipsNews">
                    @foreach ($news as $post)
                        <div class="SecondNews">
                            <div class="secondNewsBlockImage">
                                <a href="{{ route('Article', ['id' => $post->id]) }}">
                                    @if ($post->media->first())
                                        <img src="{{ env('APP_URL') . 'storage/' . $post->media->first()->url }}"
                                            class="OneSResultImage"
                                            onerror="this.src='{{ asset('images/onerror/Large789x539.png') }}'"
                                            title="{{ $post->title }}">
                                    @endif
                                </a>
                            </div>
                            <div class="secondNewsTitleON">
                                <h3>
                                    <a href="{{ route('Article', ['id' => $post->id]) }}">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <div class="ArticleDateBlock">
                                    <div class="row ArticleDate">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <p>{{ $post->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="row ArticleTagSmall">
                                        @if ($post->tags)
                                            @foreach ($post->tags->take(2) as $tag)
                                                <div class="AOneTagSmall">
                                                    <a href="{{ route('TagNews', ['id' => $tag->id]) }}">
                                                        <p>{{ $tag->name }} </p>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="AOneTagSmall">
                                                <a href="{{ route('TagNews', ['id' => 1]) }}">
                                                    <p>أخبار</p>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div id="Chtab3" class="championshipsBlock">
                <div class="row ChMatchesH">
                    <div class="row MatchHeaderTitle">
                        <p> جميع المباريات</p>
                    </div>
                    <div class="filterNews">
                        <i class="fa fa-filter" aria-hidden="true"></i>
                        <div class="dropdown">
                            <button class="dropbtn CHdropdownTeam">
                                <p> الفرق</p>
                            </button>
                            <div class="dropdown-content" id="CHdropdownTeam1">
                                <a href="{{ route('championship', ['id' => $leauge->id]) }}">All teams</a>
                                @foreach ($teams as $teams)
                                    <a href="{{ route('team', ['id' => $teams->id]) }}">
                                        {{ $teams->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div style="position:relative">
                    <div class="row Week-calendar">
                        {{-- <div dir="rtl" class="swiper swiperWeeksBlocks">
                            <ul class="swiper-wrapper swiper-WeekBlock ">
                                <li class="swiper-slide">
                                    <a href="championships/1400/الدوري-المصري-الممتاز?date=06/11/2022">
                                        11 يونيو 2022
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="championships/1400/الدوري-المصري-الممتاز?date=06/12/2022">
                                        12 يونيو 2022
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="championships/1400/الدوري-المصري-الممتاز?date=06/13/2022">
                                        13 يونيو 2022
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="championships/1400/الدوري-المصري-الممتاز?date=06/14/2022">
                                        14 يونيو 2022
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="championships/1400/الدوري-المصري-الممتاز?date=06/15/2022">
                                        15 يونيو 2022
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="championships/1400/الدوري-المصري-الممتاز?date=06/16/2022">
                                        16 يونيو 2022
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="championships/1400/الدوري-المصري-الممتاز?date=06/17/2022">
                                        17 يونيو 2022
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="championships/1400/الدوري-المصري-الممتاز?date=06/18/2022">
                                        18 يونيو 2022
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="championships/1400/الدوري-المصري-الممتاز?date=06/19/2022">
                                        19 يونيو 2022
                                    </a>
                                </li>
                            </ul>

                            <div class="swiper-next swiper-next-WeekBlock"><i class="fa fa-chevron-right"
                                    aria-hidden="true"></i></div>
                            <div class="swiper-prev swiper-prev-WeekBlock"><i class="fa fa-chevron-left"
                                    aria-hidden="true"></i></div>
                        </div> --}}
                        <div></div>
                        {{-- <div class=" Match-calendar">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div> --}}
                    </div>
                    <div class="row ">
                        <div id="datepicker" class="calendar "></div>
                    </div>
                </div>
                @if ($matches->count() > 0)
                    <h4 class="CHNameleague">{{ $leauge->name }}</h4>
                @endif
                <div class=" divListMatch">
                    <ul class="LICardMatch">
                        @if ($matches->count() > 0)
                            @foreach ($matches as $match)
                                <li class="row" matchid="{{ $match->id }}">
                                    <div class="row CHcenterBlock">
                                        <div class="row MPageRightALEftOneMatch ChMatchesTeam ">
                                            <div class="MPageRightOneMatch" id="MPageRightOneMatch_61152">
                                                <div class="MPageImageOneMatchHeight">
                                                    @php
                                                        $path = $match->teamOne->logo;
                                                        $name = $match->teamOne->name;
                                                    @endphp
                                                    <a href="">
                                                        <img src='{{ asset("$path") }}' class="MPagegmImageflag"
                                                            title="{{ $name }}" alt="{{ $name }}">
                                                    </a>
                                                </div>
                                                <p class="MPageMatchClubName">
                                                    <a href="">
                                                        {{ $name }}
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="MPageCenterOneMatch">
                                                @if (date('H:i') >= date('H:i', strtotime(Carbon\Carbon::parse($match->time)->subMinutes(30))) &&
                                                        $match->time >= date('H:i'))
                                                    <div class="row MPageCenterBlockInCenter">
                                                        <div class="MPageRightInCenter">
                                                            <p> -- </p>
                                                        </div>
                                                        <div class="MPageCenterInCenter">
                                                            <p>{{ $match->status = __('messages.start soon') }}</p>
                                                        </div>
                                                        <div class="MPageLeftInCenter">
                                                            <p> -- </p>
                                                        </div>
                                                    </div>
                                                @elseif (date('H:i', strtotime(Carbon\Carbon::parse($match->time)->addMinutes(112))) < date('H:i'))
                                                    <div class="row MPageCenterBlockInCenter">
                                                        <div class="MPageRightInCenter">
                                                            <p> {{ $match->result_team1 ?? 0 }} </p>
                                                        </div>
                                                        <div class="MPageCenterInCenter">
                                                            <p>{{ $match->status = __('messages.end') }}</p>
                                                        </div>
                                                        <div class="MPageLeftInCenter">
                                                            <p> {{ $match->result_team2 ?? 0 }} </p>
                                                        </div>
                                                    </div>
                                                @elseif (date('H:i', strtotime(Carbon\Carbon::parse($match->time)->addMinutes(62))) < date('H:i'))
                                                    <div class="row MPageCenterBlockInCenter">
                                                        <div class="MPageRightInCenter">
                                                            <p> {{ $match->result_team1 ?? 0 }} </p>
                                                        </div>
                                                        <div class="MPageCenterInCenter">
                                                            <p>{{ $match->status = __('messages.secound half') }}</p>
                                                        </div>
                                                        <div class="MPageLeftInCenter">
                                                            <p> {{ $match->result_team2 ?? 0 }} </p>
                                                        </div>
                                                    </div>
                                                @elseif (date('H:i', strtotime(Carbon\Carbon::parse($match->time)->addMinutes(47))) < date('H:i'))
                                                    <div class="row MPageCenterBlockInCenter">
                                                        <div class="MPageRightInCenter">
                                                            <p> {{ $match->result_team1 ?? 0 }} </p>
                                                        </div>
                                                        <div class="MPageCenterInCenter">
                                                            <p>{{ $match->status = __('messages.end fisrt half') }}</p>
                                                        </div>
                                                        <div class="MPageLeftInCenter">
                                                            <p> {{ $match->result_team2 ?? 0 }} </p>
                                                        </div>
                                                    </div>
                                                @elseif (date('H:i', strtotime(Carbon\Carbon::parse($match->time))) < date('H:i'))
                                                    <div class="row MPageCenterBlockInCenter">
                                                        <div class="MPageRightInCenter">
                                                            <p> {{ $match->result_team1 ?? 0 }} </p>
                                                        </div>
                                                        <div class="MPageCenterInCenter">
                                                            <p>{{ $match->status = __('messages.fisrt half') }}</p>
                                                        </div>
                                                        <div class="MPageLeftInCenter">
                                                            <p> {{ $match->result_team2 ?? 0 }} </p>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="row MPageCenterBlockInCenter">
                                                        <div class="MPageRightInCenter">
                                                            <p> -- </p>
                                                        </div>
                                                        <div class="MPageCenterInCenter">
                                                            <p>{{ $match->status = __('messages.start soon') }}</p>
                                                        </div>
                                                        <div class="MPageLeftInCenter">
                                                            <p> -- </p>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="MPageCenterTOPInCenter">
                                                    <p class="MPageTOPInCenterA">
                                                        {{ Carbon\Carbon::createFromFormat('H:i:s', $match->time)->format('h:i a') }}
                                                    </p>
                                                    <a href="MatchDetails/61152/مباريات-دولية-ودية-كوريا-الجنوبية-مصر"
                                                        class="moreDtls">
                                                        تفاصيل المباراة
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="MPageLeftOneMatch" id="MPageLeftOneMatch_61152">
                                                <div class="MPageImageOneMatchHeight">
                                                    @php
                                                        $path2 = $match->teamTwo->logo;
                                                        $name = $match->teamTwo->name;
                                                    @endphp
                                                    <a href="">
                                                        <img src='{{ asset("$path2") }}' title="{{ $name }}"
                                                            alt="{{ $name }}" class="MPagegmImageflag">
                                                    </a>
                                                </div>
                                                <p class="MPageMatchClubName">
                                                    <a href="">
                                                        {{ $name }}
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $twoTeams = App\Models\TeamHasLeauge::whereIn('team_id', [$match->team1, $match->team2])
                                            ->where('championship_id', $match->leauge->id)
                                            ->orderBy('points', 'DESC')
                                            ->get();
                                    @endphp
                                    <div class="CHShowDetails">
                                        <div class="TeamsStatistics MatchPageStatistics">
                                            <ul class="row CHfirsttableMath">
                                                <li>
                                                    <p>#</p>
                                                </li>
                                                <li>
                                                    <p>الفريق</p>
                                                </li>
                                                <li>
                                                    <p>ل</p>
                                                </li>
                                                <li>
                                                    <p>ف</p>
                                                </li>
                                                <li>
                                                    <p>ه</p>
                                                </li>
                                                <li>
                                                    <p>ت</p>
                                                </li>
                                                <li>
                                                    <p>ن</p>
                                                </li>
                                            </ul>
                                            <div>
                                                @foreach ($twoTeams as $one)
                                                    <ul class="row DetailsStatistics">
                                                        <li>
                                                            <p>#</p>
                                                        </li>
                                                        <li>
                                                            @php
                                                                $name = \App\Models\Team::find($one->team_id)->name;
                                                            @endphp
                                                            <a href="">
                                                                {{ $name }}
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <p>{{ $one->played }}</p>
                                                        </li>
                                                        <li>
                                                            <p>{{ $one->won }}</p>
                                                        </li>
                                                        <li>
                                                            <p>{{ $one->drawn }}</p>
                                                        </li>
                                                        <li>
                                                            <p>{{ $one->lost }}</p>
                                                        </li>
                                                        <li>
                                                            <p>{{ $one->points }}</p>
                                                        </li>
                                                    </ul>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @else
                            <li class="row" matchid="0">
                                <div class="row newSectionHeadBlock">
                                    <div class="row newSectionHeadTitle">
                                        <p class="text-center">
                                            {{ __('messages.No Matches For This championship For Today') }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div id="Chtab5" class="championshipsBlock">
                <div>
                    <div class="row ChMatchesH">
                        <div class="row MatchHeaderTitle">
                            <p> ترتيب الفرق فى {{ $leauge->name }}</p>
                        </div>
                    </div>
                </div>
                <div class="Group-Championships">
                    <div class="head-Group">
                        <a href="">
                        </a>
                    </div>
                    <div class="TableChamNad">
                        <div class="TeamsStatistics MatchPageStatistics">
                            <ul class="row HeadStatistics">
                                <li>
                                    <p>الترتيب</p>
                                </li>
                                <li>
                                    <p>الفريق</p>
                                </li>
                                <li>
                                    <p>ل</p>
                                </li>
                                <li>
                                    <p>ف</p>
                                </li>
                                <li>
                                    <p>ه</p>
                                </li>
                                <li>
                                    <p>ت</p>
                                </li>
                                <li>
                                    <p>له</p>
                                </li>
                                <li>
                                    <p>عليه</p>
                                </li>
                                <li>
                                    <p>نقاط</p>
                                </li>
                            </ul>
                            <div>
                                @foreach ($table as $i => $team)
                                    <ul class="row DetailsStatistics">
                                        <li>
                                            <p>{{ $i + 1 }}</p>
                                        </li>
                                        <li>
                                            <a href="#">
                                                @php
                                                    $team_name = \App\Models\Team::find($team->team_id)->name;
                                                @endphp
                                                {{ $team_name }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">{{ $team->played }}</a>
                                        </li>
                                        <li>
                                            <p>{{ $team->won }}</p>
                                        </li>
                                        <li>
                                            <p>{{ $team->drawn }}</p>
                                        </li>
                                        <li>
                                            <p>{{ $team->lost }}</p>
                                        </li>
                                        <li>
                                            <p>{{ $team->gf }}</p>
                                        </li>
                                        <li>
                                            <p>{{ $team->ga }}</p>
                                        </li>
                                        <li>
                                            <p>{{ $team->gd }}</p>
                                        </li>
                                    </ul>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Chtab7" class="championshipsBlock">
                <div class="row AlbumleftBlock">
                    <div class="Noresult">
                        <p> لا توجد البومات</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="LeftTvSection">
            @livewire('left-side-bar-component', ['league' => $leauge->id])
        </div>
    </div>
    {{-- end content --}}
@endsection
