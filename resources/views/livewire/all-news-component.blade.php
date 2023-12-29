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
                    @foreach ($all_news as $news)
                        <div class="SecondNews">
                            <div class="secondNewsBlockImage">
                                <a href="{{ route('Article', ['id' => $news->id]) }}">
                                    <img src="{{ env('APP_URL') . 'storage/' . $news->media->first()->url }}"
                                    width="310px" height="206px"
                                    onerror="this.src='{{ asset('images/them/onerror/Large789x539.png') }}'"
                                    class="OneSResultImage">
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
                                                    <a href="{{ route('TagNews', ['id'=>$tag->id]) }}">
                                                        <p>{{ $tag->name }} </p>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="AOneTagSmall">
                                                <a href="{{ route('TagNews', ['id'=>$tag->id]) }}">
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
                <!-- Pagination START -->
                <div class="pt-2">
                    {{ $all_news->links() }}
                </div>
                <!-- Pagination END -->
            </div>
        </div>
        <div class="LeftTvSection">
            @livewire('slide-match-component')
            @livewire('left-side-bar-component', ['league' => 9])
        </div>
    </div>
</div>
