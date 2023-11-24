<div>
    <div class="row DaysTabs">
        <ul class="row">
            <li><a class="tagA" href="" title="tab1">مباريات امس</a></li>
            <li><a class="tagA" href="" title="tab2">مباريات اليوم</a></li>
            <li><a class="tagA" href="" title="tab3">مباريات الغد</a></li>
        </ul>
    </div>
    <div
        style="height: 605px;overflow: auto;display: flex;flex-direction: column;gap: 12px;padding: 5px;position: relative">
        @if ($yesterday->count() > 0)
            <div class="MatchInnerBlock" id="tab1" style="display:none">
                @foreach ($yesterday as $yesterday)
                    <div class="OneMatchBlock">
                        <div class="CenterTOPInCenter">
                            <a href="{{ route('championship', ['id' => $yesterday->leauge->id]) }}">
                                @php
                                    $name = $yesterday->leauge->name;
                                @endphp
                                <h3 class="TOPInCenterA">
                                    {{ __("messages.$name") }}
                                </h3>
                            </a>
                        </div>
                        <a href="MatchDetails/61135/تصفيات-كاس-الامم-الافريقيى-غينيا-بيساو-موريشيوس">
                            <div class="row RightALEftOneMatch">
                                <div class="RightOneMatch">
                                    <div class="ImageOneMatchHeight">
                                        <img src="{{ $yesterday->teamOne->logo }}"
                                            onerror="this.src='images/mainlogo.png';"
                                            title="{{ __('messages.' . $yesterday->teamOne['name']) }}"
                                            alt="{{ __('messages.' . $yesterday->teamOne['name']) }}">
                                    </div>
                                    <p class="MatchClubName">
                                        {{ __('messages.' . $yesterday->teamOne['name']) }}
                                    </p>
                                </div>
                                <div class="CenterOneMatch">
                                    <div class="row CenterBlockInCenter">
                                        <div class="RightInCenter">
                                            <p>{{ $yesterday->teamOne['result_team1'] ?? '0' }}
                                            </p>
                                        </div>
                                        <div class="CenterInCenter matchStatusFinished">
                                            <p> {{ __('messages.end') }} </p>
                                        </div>
                                        <div class="LeftInCenter">
                                            <p>{{ $yesterday->teamOne['result_team1'] ?? '0' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="LeftOneMatch">
                                    <div class="ImageOneMatchHeight">
                                        <img src="{{ $yesterday->teamTwo->logo }}"
                                            onerror="this.src='images/mainlogo.png';"
                                            title="{{ __('messages.' . $yesterday->teamTwo['name']) }}"
                                            alt="{{ __('messages.' . $yesterday->teamTwo['name']) }}"
                                            class="gmImageflag">
                                    </div>
                                    <p class="MatchClubName">
                                        {{ __('messages.' . $yesterday->teamTwo['name']) }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="MatchInnerBlock" id="tab1" style="display:none">
                <div class="NoMatchesToday">
                    <p>لا توجد مباريات</p>
                </div>
            </div>
        @endif
        @if ($today->count() > 0)
            <div class="MatchInnerBlock" id="tab2" style="display:none">
                @foreach ($today as $i => $today)
                    <div class="OneMatchBlock">
                        <div class="CenterTOPInCenter">
                            <a href="{{ route('championship', ['id' => $today->leauge->id]) }}">
                                <h3 class="TOPInCenterA">
                                    {{ __('messages.' . $today->leauge->name) }}
                                </h3>
                            </a>
                        </div>
                        <a href="MatchDetails/61135/تصفيات-كاس-الامم-الافريقيى-غينيا-بيساو-موريشيوس">
                            <div class="row RightALEftOneMatch">
                                <div class="RightOneMatch">
                                    <div class="ImageOneMatchHeight">
                                        <img src="{{ $today->teamOne->logo }}"
                                            onerror="this.src='images/them/mainlogo.png';"
                                            title="{{ __('messages.' . $today->teamOne['name']) }}"
                                            alt="{{ __('messages.' . $today->teamOne['name']) }}">
                                    </div>
                                    <p class="MatchClubName">
                                        {{ __('messages.' . $today->teamOne['name']) }}
                                    </p>
                                </div>
                                @if (date('H:i') >= date('H:i', strtotime(Carbon\Carbon::parse($today->time)->subMinutes(30))) &&
                                        $today->time >= date('H:i'))
                                    {{-- Start Soon --}}
                                    <div class="CenterOneMatch">
                                        <div class="row CenterBlockInCenter">
                                            <div class="RightInCenter">
                                                <p> - </p>
                                            </div>
                                            <div class="CenterInCenter matchStatusFinished">
                                                <p>{{ $today->status = __('messages.start soon') }}</p>
                                            </div>
                                            <div class="LeftInCenter">
                                                <p> - </p>
                                            </div>
                                        </div>
                                        <div class="CenterTOPInCenter">
                                            <p class="TOPInCenterA">
                                                {{ Carbon\Carbon::createFromFormat('H:i:s', $today->time)->translatedFormat('h:i a') }}
                                            </p>
                                        </div>
                                    </div>
                                @elseif (date('H:i', strtotime(Carbon\Carbon::parse($today->time)->addMinutes(112))) < date('H:i'))
                                    {{-- end Match --}}
                                    <div class="CenterOneMatch">
                                        <div class="row CenterBlockInCenter">
                                            <div class="RightInCenter">
                                                <p>{{ $today->result_team1 ?? 0 }}</p>
                                            </div>
                                            <div class="CenterInCenter matchStatusFinished">
                                                <p>{{ $today->status = __('messages.end') }}</p>
                                            </div>
                                            <div class="LeftInCenter">
                                                <p>{{ $today->result_team2 ?? 0 }}</p>
                                            </div>
                                        </div>
                                        <div class="CenterTOPInCenter">
                                            <p class="TOPInCenterA">
                                                {{ Carbon\Carbon::createFromFormat('H:i:s', $today->time)->format('h:i a') }}

                                            </p>
                                        </div>
                                    </div>
                                @elseif (date('H:i', strtotime(Carbon\Carbon::parse($today->time)->addMinutes(62))) < date('H:i'))
                                    {{-- secound half --}}
                                    <div class="CenterOneMatch">
                                        <div class="row CenterBlockInCenter">
                                            <div class="RightInCenter">
                                                <p>{{ $today->result_team1 ?? 0 }}</p>
                                            </div>
                                            <div class="CenterInCenter matchStatusFinished">
                                                <p> {{ $today->status = __('messages.secound half') }} </p>
                                            </div>
                                            <div class="LeftInCenter">
                                                <p>{{ $today->result_team2 ?? 0 }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @elseif (date('H:i', strtotime(Carbon\Carbon::parse($today->time)->addMinutes(47))) < date('H:i'))
                                    {{-- end fisrt half --}}
                                    <div class="CenterOneMatch">
                                        <div class="row CenterBlockInCenter">
                                            <div class="RightInCenter">
                                                <p>{{ $today->result_team1 ?? 0 }}</p>
                                            </div>
                                            <div class="CenterInCenter matchStatusFinished">
                                                <p>{{ $today->status = __('messages.end fisrt half') }}</p>
                                            </div>
                                            <div class="LeftInCenter">
                                                <p>{{ $today->result_team2 ?? 0 }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @elseif (date('H:i', strtotime(Carbon\Carbon::parse($today->time))) < date('H:i'))
                                    {{-- fisrt half --}}
                                    <div class="CenterOneMatch">
                                        <div class="row CenterBlockInCenter">
                                            <div class="RightInCenter">
                                                <p>{{ $today->result_team1 ?? 0 }}</p>
                                            </div>
                                            <div class="CenterInCenter matchStatusFinished">
                                                <p>{{ $today->status = __('messages.fisrt half') }}</p>
                                            </div>
                                            <div class="LeftInCenter">
                                                <p>{{ $today->result_team2 ?? 0 }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    {{--   --}}
                                    <div class="CenterOneMatch">
                                        <div class="row CenterBlockInCenter">
                                            <div class="RightInCenter">
                                                <p> - </p>
                                            </div>
                                            <div class="CenterInCenter matchStatusFinished matchStatusFinished">
                                                <p>لم تبدأ</p>
                                            </div>
                                            <div class="LeftInCenter">
                                                <p> - </p>
                                            </div>
                                        </div>
                                        <div class="CenterTOPInCenter">
                                            <p class="TOPInCenterA">
                                                {{ Carbon\Carbon::createFromFormat('H:i:s', $today->time)->translatedFormat('h:i a') }}
                                            </p>
                                        </div>
                                    </div>
                                @endif
                                <div class="LeftOneMatch">
                                    <div class="ImageOneMatchHeight">
                                        <img src="{{ $today->teamTwo->logo }}"
                                            onerror="this.src='images/them/mainlogo.png';"
                                            title="{{ __('messages.' . $today->teamTwo['name']) }}"
                                            alt="{{ __('messages.' . $today->teamTwo['name']) }}"
                                            class="gmImageflag">
                                    </div>
                                    <p class="MatchClubName">{{ __('messages.' . $today->teamTwo['name']) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="MatchInnerBlock" id="tab2" style="display:none">
                <div
                    class="swiperMatchCenter swiper-container-initialized swiper-container-horizontal swiper-container-rtl">
                    <div class=" swiper-wrapper d-flex justify-items-center" id="swiper-wrapper-2659d5ed14d5862f"
                        aria-live="off">
                        <div class="NoMatchesToday">
                            <p>لا توجد مباريات</p>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        @endif
        @if ($tomorrow->count() > 0)
            <div class="MatchInnerBlock" id="tab3" style="display:none">
                @foreach ($tomorrow as $tommorow)
                    <div class="OneMatchBlock">
                        <div class="CenterTOPInCenter">
                            <a href="{{ route('championship', ['id' => $tommorow->leauge->id]) }}">
                                <h3 class="TOPInCenterA">
                                    {{ __('messages.' . $tommorow->leauge->name) }}
                                </h3>
                            </a>
                        </div>
                        <a href="MatchDetails/61135/تصفيات-كاس-الامم-الافريقيى-غينيا-بيساو-موريشيوس">
                            <div class="row RightALEftOneMatch">
                                <div class="RightOneMatch">
                                    <div class="ImageOneMatchHeight">
                                        <img src="{{ $tommorow->teamOne->logo }}"
                                            onerror="this.src='images/mainlogo.png';"
                                            title="{{ __('messages.' . $tommorow->teamOne['name']) }}"
                                            alt="{{ __('messages.' . $tommorow->teamOne['name']) }}">
                                    </div>
                                    <p class="MatchClubName">
                                        {{ __('messages.' . $tommorow->teamOne['name']) }}
                                    </p>
                                </div>
                                <div class="CenterOneMatch">
                                    <div class="row CenterBlockInCenter">
                                        <div class="RightInCenter">
                                            <p></p>
                                        </div>
                                        <div class="CenterInCenter">
                                            <p>{{ __('messages.did not start') }}</p>
                                        </div>
                                        <div class="LeftInCenter">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="CenterTOPInCenter">
                                        <p class="TOPInCenterA">
                                            {{ Carbon\Carbon::createFromFormat('H:i:s', $tommorow->time)->translatedFormat('h:i a') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="LeftOneMatch">
                                    <div class="ImageOneMatchHeight">
                                        <img src="{{ $tommorow->teamTwo->logo }}"
                                            onerror="this.src='images/mainlogo.png';"
                                            title="{{ __('messages.' . $tommorow->teamTwo['name']) }}"
                                            alt="{{ __('messages.' . $tommorow->teamTwo['name']) }}"
                                            class="gmImageflag">
                                    </div>
                                    <p class="MatchClubName">
                                        {{ __('messages.' . $tommorow->teamTwo['name']) }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="MatchInnerBlock" id="tab3" style="display:none">
                <div class="NoMatchesToday">
                    <p>لا توجد مباريات</p>
                </div>
            </div>
        @endif
    </div>
</div>
