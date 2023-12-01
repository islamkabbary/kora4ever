@extends('website.master_website')


@section('title', 'Live-Match | Match Details')
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
    {{-- start content --}}
    <div class="row InnerContainer customPageHiro">
        <div class="StatisticsGreenStad">
            <div class="StatisticsAbsolute">
                <div class="MPageOneMatchBlock">
                    <div class="MPageCenterTOPInCenter">
                        <h3 class="MPageTOPInCenterA">
                            <a href="{{ route('championship', ['id' => $match->leauge->id]) }}">
                                {{ $match->leauge->name }}
                            </a>
                        </h3>
                    </div>
                    <div class="row MPageRightALEftOneMatch">
                        <div class="MPageRightOneMatch">
                            <div class="MPageImageOneMatchHeight">
                                <a href="{{ route('team', ['id' => $match->team1]) }}">
                                    @php
                                        $path = $match->teamOne->logo;
                                    @endphp
                                    <img src='{{ asset("$path") }}' class="MPagegmImageflag"
                                        title="{{ $match->teamOne->name }}" alt="{{ $match->teamOne->name }}">
                                </a>
                            </div>
                            <p class="MPageMatchClubName">
                                <a href="{{ route('team', ['id' => $match->team1]) }}">
                                    {{ $match->teamOne->name }}
                                </a>
                            </p>
                        </div>
                        <div class="MPageCenterOneMatch">
                            @if ($match->date == Carbon\Carbon::today()->toDateString())
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
                                            <h4>{{ $match->status = __('messages.end fisrt half') }}</h4>
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
                                    <p class="MPageTOPInCenterA">
                                        {{ Carbon\Carbon::parse($match->date)->translatedFormat('D d M Y ') }}{{ Carbon\Carbon::createFromFormat('H:i:s', $match->time)->translatedFormat('h:i a') }}
                                    </p>
                                    <p class="MPageTOPInCenterA">
                                        {{-- {{ Carbon\Carbon::createFromFormat('H:i:s', $match->time)->translatedFormat('h:i a') }} --}}
                                    </p>
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
                                <div class="MPageCenterTOPInCenter">
                                    <p class="MPageTOPInCenterA">
                                        {{ Carbon\Carbon::parse($match->date)->translatedFormat('D d M Y ') }}
                                    </p>
                                </div>
                            @endif
                        </div>
                        <div class="MPageLeftOneMatch">
                            <div class="MPageImageOneMatchHeight">
                                <a href="{{ route('team', ['id' => $match->team2]) }}">
                                    @php
                                        $path2 = $match->teamTwo->logo;
                                    @endphp
                                    <img src='{{ asset("$path2") }}' title="{{ $match->teamTwo->name }}"
                                        alt="{{ $match->teamTwo->name }}" class="MPagegmImageflag">
                                </a>
                            </div>
                            <p class="MPageMatchClubName">
                                <a href="{{ route('team', ['id' => $match->team2]) }}">
                                    {{ $match->teamTwo->name }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <ul class="row TwotabsMatchPage">
            <li class="OneTabMatch">
                <a href="" title="TabContent2">أحداث المباراة</a>
            </li>
        </ul> --}}
        <div class="RightInner">
            <div class="MatchDetailsTabContent" id="TabContent1">
                <div>
                    <div class="row MatchHeaderTitle">
                        <p>ترتيب الفريفين</p>
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
                                        <a href="{{ route('team', ['id' => $one->team_id]) }}">
                                            {{ \App\Models\Team::find($one->team_id)->name }}
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
                <div class="allnewsDiv">
                    <div class="row MatchHeaderTitle">
                        <p>أخبار تابعة</p>
                    </div>
                    <div class="SearchResultBlock">
                        @if ($affiliateNews)
                            @foreach ($affiliateNews as $news)
                                <div class="SecondNews">
                                    <a href="{{ route('Article', ['id' => $news->id]) }}">
                                        <img class="OneCollectionImg" src="{{ $news->photos->pop()->path }}"
                                            onerror="this.src='images/onerror/Large789x539.png'">
                                    </a>
                                    <div class="row OneCollectionBG">
                                        <img src="{{ asset('images/Iconcamera.png') }}" class="IconTitle" alt="IconTitle">
                                        <h3 class="OneCollectionTitle">
                                            <a href="{{ route('Article', ['id' => $news->id]) }}">
                                                {{ $news->title }}
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="row ArticleDateBlock">
                                        <div class="row ArticleDate">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <p>{{ Carbon\Carbon::parse($news->created_at)->format('d-m-Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="LeftInner">
            @livewire('left-side-bar-component', ['league' => $match->leauge->id])
        </div>
    </div>
    {{-- end content --}}
@endsection
