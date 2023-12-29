<div>
    <div>
        <div class="row ChMatchesH">
            <div class="row MatchHeaderTitle">
                <p> ترتيب الفرق فى {{ $name_leauge }}</p>
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
                    @foreach ($rankingOfTeams as $i => $team)
                        @php
                            $Realteam = \App\Models\Team::find($team->team_id);
                        @endphp
                        @if ($Realteam)
                            <ul class="row DetailsStatistics">
                                <li>
                                    <p>{{ $i + 1 }}</p>
                                </li>
                                <li>
                                    @php
                                        $team_name = $Realteam->name;
                                    @endphp
                                    <a href="#">
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
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
