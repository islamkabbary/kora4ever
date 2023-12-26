@extends('website.master_website')


@section('title', 'Live-Match | All Matches')
@section('mainContainer')
    <style>
        @media (min-width: 768px) {
            .customPageHiro {
                margin-top: 100px;
                padding: 0px 75px !important;
            }
        }

        @media (min-width: 425px) {
            .customPageHiro {
                margin-top: 100px;
                padding: 0px 20px;
            }
        }
    </style>
    <div class="row InnerContainer customPageHiro">
        <div class="RightInner">
            <div>
                <div class="HeaderAllMatches">
                    {{-- <div class="paddingContent">
                        <div class="row ChMatchesH">
                            <div class="row MatchHeaderTitle">
                                <p> جميع المباريات</p>
                            </div>
                        </div>
                        <div class="row Week-calendar">
                            <div dir="rtl" class="swiper swiperWeeksBlocks">
                                <ul class="swiper-wrapper swiper-WeekBlock ">
                                    <li class="swiper-slide">
                                        <a href="matches/allmatches?date=06/10/2022">
                                            10 يونيو 2022
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="matches/allmatches?date=06/11/2022">
                                            11 يونيو 2022
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="matches/allmatches?date=06/12/2022">
                                            12 يونيو 2022
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="matches/allmatches?date=06/13/2022">
                                            13 يونيو 2022
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="matches/allmatches?date=06/14/2022">
                                            14 يونيو 2022
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="matches/allmatches?date=06/15/2022">
                                            15 يونيو 2022
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="matches/allmatches?date=06/16/2022">
                                            16 يونيو 2022
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="matches/allmatches?date=06/17/2022">
                                            17 يونيو 2022
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="matches/allmatches?date=06/18/2022">
                                            18 يونيو 2022
                                        </a>
                                    </li>
                                </ul>

                                <div class="swiper-next swiper-next-WeekBlock"><i class="fa fa-chevron-right"
                                        aria-hidden="true"></i></div>
                                <div class="swiper-prev swiper-prev-WeekBlock"><i class="fa fa-chevron-left"
                                        aria-hidden="true"></i></div>
                            </div>
                            <div class=" Match-calendar">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="row ">
                            <div id="datepicker" class="calendar "></div>
                        </div>
                    </div> --}}
                    {{-- <div class="row filterAllMatches">
                        <div class="filterNews">
                            <i class="fa fa-filter" aria-hidden="true"></i>
                            <div class="dropdown">
                                <button class="dropbtn CHdropdownWeek ">
                                    كل البطولات
                                </button>
                                <div class="dropdown-content" id="CHdropWeek1">
                                    @foreach (App\Models\Championship::take(7)->get() as $leauge)
                                    <a href="#" class="filterLeagues" LeagueId="{{ $leauge->id }}">{{ __("messages.$leauge->name") }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"> 0 مباريات <span>Live stream </span></a></li>
                                <li class="breadcrumb-item"><a class="leagueNum" href="#"> 4 بطولة</a></li>
                                <li class="matchNum breadcrumb-item active" aria-current="page"> 15 مباراة</li>
                            </ol>
                        </nav>
                    </div> --}}
                </div>
                @if ($matches->count() > 0)
                    @foreach ($matches as $matche)
                        @php
                            $leauge = App\Models\Championship::where('id', $matche[0]['championship_id'])
                                ->whereHas('matches', function ($q) {
                                    $q->where('date', Carbon\Carbon::today()->toDateString());
                                })
                                ->first();
                        @endphp
                        @if ($leauge)
                            <h4 LeagueId="{{ $leauge->id }}" class="CHNameleague matchListArea">
                                {{ $leauge->name }}</h4>
                        @endif
                        @foreach ($matche as $match)
                            @if ($match->date == Carbon\Carbon::today()->toDateString())
                                <div class=" divListMatch matchListArea" LeagueId="73">
                                    <ul class="LICardMatch">
                                        <li class="row" matchid="{{ $match->id }}">
                                            <div class="row CHcenterBlock">
                                                <div class="row MPageRightALEftOneMatch ChMatchesTeam ">
                                                    <div class="MPageRightOneMatch" id="MPageRightOneMatch_61152">
                                                        <div class="MPageImageOneMatchHeight">
                                                            @php
                                                            if($match->teamOne){
                                                                $path = $match->teamOne->logo;
                                                                $name = $match->teamOne->name;
                                                            }else {
                                                                $path = null;
                                                                $name = null;
                                                            }
                                                            @endphp
                                                            <a href="{{ route('team', ['id' => $match->team1]) }}">
                                                                <img src='{{ env('APP_ENV') . "storage/" . $path }}' class="MPagegmImageflag"
                                                                    title="{{$name}}"
                                                                    alt="{{ $name }}">
                                                            </a>
                                                        </div>
                                                        <p class="MPageMatchClubName">
                                                            <a href="{{ route('team', ['id' => $match->team1]) }}">
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
                                                                    <p>{{ $match->status = __('messages.secound half') }}
                                                                    </p>
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
                                                                    <p>{{ $match->status = __('messages.end fisrt half') }}
                                                                    </p>
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
                                                                    <p>{{ Carbon\Carbon::createFromFormat('H:i:s', $match->time)->format('h:i a') }}
                                                                    </p>
                                                                </div>
                                                                <div class="MPageLeftInCenter">
                                                                    <p> -- </p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <div class="MPageCenterTOPInCenter">
                                                            <a href="{{ route('MatchDetails', ['id'=>$match->id]) }}"
                                                                class="moreDtls">
                                                                تفاصيل المباراة
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="MPageLeftOneMatch" id="MPageLeftOneMatch_61152">
                                                        <div class="MPageImageOneMatchHeight">
                                                            @php
                                                            if($match->teamTwo){
                                                                $path2 = $match->teamTwo->logo;
                                                                $name = $match->teamTwo->name;
                                                            }else {
                                                                $path2 = null;
                                                                $name = null;
                                                            }
                                                            @endphp
                                                            <a href="{{ route('team', ['id' => $match->team2]) }}">
                                                                <img src='{{ env('APP_ENV') . "storage/" . $path2 }}'
                                                                    title="{{$name }}"
                                                                    alt="{{$name}}"
                                                                    class="MPagegmImageflag">
                                                            </a>
                                                        </div>
                                                        <p class="MPageMatchClubName">
                                                            <a href="{{ route('team', ['id' => $match->team2]) }}">
                                                                {{ $name }}
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row CHMore">
                                                    المزيد
                                                    <img src="images/them/Icon-arrow-back.png" alt="Icon" />
                                                </div>
                                                <div class="row CHTv-CHStad">
                                                    <div class="row">
                                                        <div class="row CHstadium">
                                                            <img src="images/CHstadium.png" alt="stad" />
                                                            <p>
                                                                المقاولون العرب
                                                            </p>
                                                        </div>
                                                        <div class="row CHtv">
                                                            <img src="images/Iconawesome-tv.png" alt="tv" />
                                                            <p>
                                                                On Time Sport HD
                                                            </p>
                                                        </div>
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
                                                                    @php
                                                                        $Team = \App\Models\Team::find($one->team_id);
                                                                        if($Team){
                                                                            $name = $Team->name;
                                                                        }else {
                                                                            $name = null;
                                                                        }
                                                                    @endphp
                                                            <ul class="row DetailsStatistics">
                                                                <li>
                                                                    <p>#</p>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('team', ['id' => $one->team_id]) }}">
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
                                                {{-- <div class="matchLiveStream">
                                                    <a href="LiveStreams?date=28/09/2021">
                                                        <img src="images/LiveStreamBlack.png" />
                                                    </a>
                                                </div> --}}
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <li class="row" matchid="0">
                                    <div class="row newSectionHeadBlock">
                                        <div class="row newSectionHeadTitle">
                                            <p class="text-center"> {{ __('messages.No matches today') }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    @endforeach
                @endif
            </div>
        </div>
        <div class="LeftInner">
            @livewire('left-side-bar-component', ['league' => $match->leauge->id ?? 9])
        </div>
    </div>
@endsection
