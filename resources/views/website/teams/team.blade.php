@extends('website.master_website')
@section('mainContainer')
    {{-- start content --}}
    <input type="hidden" value="1" id="tabNum" />
    <div class="row InnerContainer customHeder">
        <div class="RightInner">
            <div class="row Team">
                <div class="HeaderTeamCon">
                    <div class="row Head-Team">
                        <div class="LogoTeam">
                            <img src="{{ env('APP_URL') . 'storage/' . $team->logo }}"
                                title="{{ __("messages.$team->name") }}" alt="{{ __("messages.$team->name") }}">
                        </div>
                        <div class="NameTeam">
                            <h3>
                                {{ __("messages.$team->name") }}
                            </h3>
                        </div>
                    </div>
                    <ul class="row listUl">
                        <li class="AvtiveLi">
                            <a href="" title="Teamtab1">
                                نظرة عامة
                            </a>
                        </li>
                        <li>
                            <a href="" title="Teamtab2">
                                مباريات
                            </a>
                        </li>
                        <li>
                            <a href="" title="Teamtab3">
                                أخبار
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="Teamtab1" class="TeamTabsBlock">
                <ul class="row statsTeam">
                </ul>
                <div class="NumTeamOFCHamp">
                    <div class="row newSectionHeadBlock">
                        <div class="row newSectionHeadTitle">
                            ترتيب {{ __("messages.$team->name") }}
                        </div>
                    </div>
                    @foreach ($leagues as $league)
                        <div class="TableChamNad">
                            <div class="row Head-Team">
                                <div class="LogoTeam-League">
                                    <img src="{{ env('APP_URL') . 'storage/' . $league->logo }}" alt="logo league">
                                </div>
                                @php
                                    $result = \App\Models\TeamHasLeauge::where('team_id', $team->id)
                                        ->where('championship_id', $league->id)
                                        ->first();
                                @endphp
                                <div class="NameTeam">
                                    <h3>
                                        <a href="#">
                                            {{ __("messages.$team->name") }}
                                        </a>
                                    </h3>
                                </div>
                            </div>

                            <div class="TeamsStatistics MatchPageStatistics">
                                <ul class="row HeadStatistics">
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
                                        <p>له</p>
                                    </li>
                                    <li>
                                        <p>عليه</p>
                                    </li>
                                    <li>
                                        <p>فرق</p>
                                    </li>
                                    <li>
                                        <p>ن</p>
                                    </li>
                                </ul>
                                <div>
                                    <ul class="row DetailsStatistics">
                                        <li>
                                            <p>2</p>
                                        </li>
                                        <li>
                                            <a
                                                href="{{ route('team', ['id' => $team->id]) }}">{{ __("messages.$team->name") }}</a>
                                        </li>
                                        <li>
                                            <p>{{ $result->played }}</p>
                                        </li>
                                        <li>
                                            <p>{{ $result->won }}</p>
                                        </li>
                                        <li>
                                            <p>{{ $result->drawn }}</p>
                                        </li>
                                        <li>
                                            <p>{{ $result->lost }}</p>
                                        </li>
                                        <li>
                                            <p>{{ $result->ga }}</p>
                                        </li>
                                        <li>
                                            <p>{{ $result->gd }}</p>
                                        </li>
                                        <li>
                                            <p>{{ $result->gf }}</p>
                                        </li>
                                        <li>
                                            <p>{{ $result->points }}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div id="Teamtab2" class="TeamTabsBlock">
                <div class="row ChMatchesH">
                    <div class="row MatchHeaderTitle">
                        <p> جميع المباريات</p>
                    </div>
                    <div class="filterNews">
                        <i class="fa fa-filter" aria-hidden="true"></i>
                        <div class="dropdown">
                            <button class="dropbtn TeamdropdownWeek ">
                                <p> كل البطولات</p>
                            </button>
                            <div class="dropdown-content" id="TeamdropWeek1">
                                <a href="/team/207/الأهلي?team=0"> كل البطولات</a>
                                @foreach ($leagues as $leauge)
                                    <a href="/team/207/الأهلي?league=1359"> {{ __('messages.' . $leauge->name) }} </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $allMatches['today'] = \App\Models\Matche::where('date', Carbon\Carbon::today()->toDateString())->get();
                @endphp
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
                                                            title="{{ __("messages.$name") }}"
                                                            alt="{{ __("messages.$name") }}">
                                                    </a>
                                                </div>
                                                <p class="MPageMatchClubName">
                                                    <a href="">
                                                        {{ __("messages.$name") }}
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="MPageCenterOneMatch">
                                                @if (date('H:i') >= date('H:i', strtotime(Carbon\Carbon::parse($match->time)->subMinutes(30))) && $match->time >= date('H:i'))
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
                                                        <img src='{{ asset("$path2") }}'
                                                            title="{{ __("messages.$name") }}"
                                                            alt="{{ __("messages.$name") }}" class="MPagegmImageflag">
                                                    </a>
                                                </div>
                                                <p class="MPageMatchClubName">
                                                    <a href="">
                                                        {{ __("messages.$name") }}
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
                                                                {{ __("messages.$name") }}
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
                                        <p class="text-center"> {{ __('messages.No Matches For This Team For Today') }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div id="Teamtab3" class="TeamTabsBlock">
                @if (count($news) > 0)
                    <div class="letestNewsTeam">
                        <div class="row newSectionHeadBlock">
                            <div class="row newSectionHeadTitle">
                                <a href="">
                                    آخر الأخبار
                                </a>
                            </div>
                        </div>
                        <div class="championshipsNews">
                            @foreach ($news as $post)
                                <div class="SecondNews">
                                    <div class="secondNewsBlockImage">
                                        <a href="{{ route('Article', ['id' => $post->id]) }}">
                                            <img src="{{ env('APP_URL') . 'storage/' . $post->media[0]->url }}"
                                                class="OneSResultImage" title="{{ $post->title }}">
                                        </a>
                                    </div>
                                    <div class="secondNewsTitleON">
                                        <h3>
                                            <a href="{{ route('Article', ['id' => $post->id]) }}">
                                                {{ $post->title }}
                                            </a>
                                        </h3>
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
                                        <div class="ArticleDateBlock">
                                            <div class="row ArticleDate">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                <p> {{ $post->created_at->diffForHumans() }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="row newSectionHeadBlock">
                        <div class="row newSectionHeadTitle">
                            <p class="text-center"> {{ __('messages.No News For This Team For Now') }} </p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="LeftInner">
            @livewire('left-side-bar-component', ['league' => $leauge->id])
        </div>
    </div>
    {{-- end content --}}
@endsection
