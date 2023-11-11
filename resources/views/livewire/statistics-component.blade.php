<div>
    <div class="StatisticsBlockArea">
        <div class="swiperStatistics">
            {{-- <div class="row BlackHeaderBlock">
                <a href="#" class="row">
                    <p class="TitleBlocksHeader">
                        احصائيات {{ __('messages.' . App\Models\Leauge::find($leauge)->name) }}
                    </p>
                    <img src="{{ asset('images/redcorner.png') }}">
                </a>
            </div> --}}
            <div class="TeamsStatistics">
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
                        <p>ت</p>
                    </li>
                    <li>
                        <p>ه</p>
                    </li>
                    <li>
                        <p>ن</p>
                    </li>
                </ul>
                @foreach ($statistc as $stat)
                    <div>
                        <ul class="row DetailsStatistics">
                            <li>
                                <p>{{ $loop->iteration }}</p>
                            </li>
                            <li><a>{{ \App\Models\Team::find($stat->team_id)->name }}</a>
                            </li>
                            {{-- <li><a
                                    href="{{ route('team', ['id' => \App\Models\Teams::find($stat->team_id)->id]) }}">{{ __('messages.' . \App\Models\Teams::find($stat->team_id)->name) }}</a>
                            </li> --}}
                            <li>
                                <p>{{ $stat->played }}</p>
                            </li>
                            <li>
                                <p>{{ $stat->won }}</p>
                            </li>
                            <li>
                                <p>{{ $stat->drawn }}</p>
                            </li>
                            <li>
                                <p>{{ $stat->lost }}</p>
                            </li>
                            <li>
                                <p>{{ $stat->points }}</p>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
            <div class="row BlackHeaderBlock morechampionship">
                {{-- <a href="{{ route('championships', ['id' => App\Models\Leauge::find($leauge)->id]) }}" class="row" --}}
                {{-- data-ur1313m3t="true"> --}}
                <p class="TitleBlocksHeader">
                    المزيد
                </p>
                <i class="fa fa-plus" aria-hidden="true"></i>
                {{-- </a> --}}
            </div>
        </div>
    </div>
</div>
