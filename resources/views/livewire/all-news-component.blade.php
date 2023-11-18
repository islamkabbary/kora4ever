<div>
    <div class="row TV-writersBlockArea customHeder">
        <div class="RightTvSection ">
            <div class="allnewsDiv NewsPage">
                <div class="row ArticleLatestTitleBlock">
                    <div class="row MatchHeaderTitle">
                        <p>كل الأخبار</p>
                    </div>
                </div>
                <div class="SearchResultBlock">
                    @for ($i = 0; $i < 12; $i++)
                        {{-- @foreach ($news->unique('title') as $news) --}}
                        <div class="SecondNews">
                            <div class="secondNewsBlockImage">
                                <a href="{{ route('Article', ['id' => $news->id]) }}">
                                    <img src="{{ env('APP_URL') . '/storage/' . $news->media[0]->url }}"
                                        onerror="this.src='{{ asset('images/mainlogo.png') }}'" class="OneSResultImage">
                                </a>
                            </div>
                            <div class="secondNewsTitleON NewsTitleONTw">
                                <h3>
                                    <a href="{{ route('Article', ['id' => $news->id]) }}">
                                        {{ \Illuminate\Support\Str::words($news->title, 18) }}
                                    </a>
                                </h3>
                                <div class="ArticleDateBlock">
                                    <div class="row ArticleDate">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <p>{{ $news->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="row ArticleTagSmall">
                                        @if ($news->tags)
                                            @foreach ($news->tags->take(2) as $tag)
                                                <div class="AOneTagSmall">
                                                    <a href="TagNews/{{ $tag->id }}">
                                                        <p>{{ $tag->name }} </p>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="AOneTagSmall">
                                                <a href="TagNews/1">
                                                    <p>أخبار</p>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- @endforeach --}}
                    @endfor
                </div>
                <!-- Pagination START -->
                <div class="pt-2">
                    {{-- {{ $news->links() }} --}}
                </div>
                <!-- Pagination END -->
            </div>
            {{--
                //CHAMPIONS
            <div id="pagerAllNews" class="pagination">
            </div>
            <h4 class="CHNameleagueLiveStreams">
                <a class="A-GetAllChampions" href="{{ route('AllChampions') }}">
                    <p>بطولات</p>
                    <img src="images/ArrowLiveStreams.png" alt="ArrowLiveStreams">
                </a>
            </h4>
            <div class="row DivAllCHAMPIONS">
                @foreach ($leauges as $leauge)
                    <div class="allchampionsBlockArea" leaguename="{duge->name}}">
                        <div class="radiusImgBlock">
                            <a href="{{ route('championships', ['id' => $leauge->id]) }}">
                                <img src="{{ asset($leauge->logo) }}" onerror="this.src='images/mainlogo.png'"
                                    class="radiusBlockImg allchampionsBlockImage">
                            </a>
                        </div>
                        <div class="row RedBar text-white">
                            <a href="{{ route('championships', ['id' => $leauge->id]) }}">
                                {{ __('messages.' . $leauge->name) }}
                                {{ $leauge->name }}
                            </a>
                        </div>
                        <div class="row UnderRedBar">
                            <div class="row RightUnderRedBar">
                                <p>موسم 2023 </p>
                            </div>
                            <div class="row LeftUnderRedBar">
                                <p>{{ $leauge->teams->count() }}</p>
                                <p>فريق</p>
                            </div>
                        </div>
                        <div class="BlackBar">
                            <img src="{{ asset('images/mainlogo.png') }}">
                        </div>
                    </div>
                @endforeach
            </div> --}}
        </div>
        <div class="LeftTvSection">
        @livewire('slide-match-component')
            @livewire('left-side-bar-component', ['league' => 9])
        </div>
    </div>
</div>
