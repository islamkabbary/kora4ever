<div>
    <div class="row TV-writersBlockArea customHeder">
        <div class="RightTvSection ">
            <div class="NewBlock">
                <div class="NewsRightBlock">
                    @if ($main_news)
                        <div class="OneNews">
                            <div class="LeaguesNews">
                                @if ($main_news && count($main_news->tags)>0)
                                    <a href="{{ route('TagNews', ['id' => $main_news->tags->first()->id]) }}">
                                        <p>
                                            {{ $main_news->tags->first()->name }}
                                        </p>
                                    </a>
                                @endif
                            </div>
                            <a href="{{ route('Article', ['id' => $main_news->id]) }}">
                                <img src="{{ env('APP_URL') . 'storage/' . $main_news->media->first()->url }}">
                            </a>
                            <div class="OneNewsTitleON">
                                <h3>
                                    <a class="OneNewsTitleOne"
                                        href="{{ route('Article', ['id' => $main_news->id]) }}">{{ $main_news->title }}</a>
                                </h3>
                            </div>
                            <a href="{{ route('Article', ['id' => $main_news->id]) }}">
                                <span class="overlay"></span>
                            </a>
                        </div>
                    @endif
                    <div class="RTwoNewsLeft">
                        @foreach ($five_main_news as $news)
                            <div class="OneNews">
                                <div class="LeaguesNews">
                                    @if ($main_news->tags->first())
                                    <a href="{{ route('TagNews', ['id' => $main_news->tags->first()->id]) }}">
                                        <p>
                                            {{ $news->tags ? $news->tags->pop()->name : $news->tags->first()->name }}
                                        </p>
                                    </a>
                                    @endif
                                </div>
                                <a href="{{ route('Article', ['id' => $news->id]) }}">
                                    <img src="{{ env('APP_URL') . 'storage/' . $news->media->first()->url }}">
                                </a>
                                <div class="OneNewsTitleON">
                                    <h3>
                                        <a class="OneNewsTitleONA"
                                            href="{{ route('Article', ['id' => $news->id]) }}">{{ $news->title }}</a>
                                    </h3>
                                </div>
                                <a href="{{ route('Article', ['id' => $news->id]) }}">
                                    <span class="overlay"></span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row NewsleftBlock">
                    @foreach ($threeNewsUnderMain as $news)
                        <div class="OneNews">
                            <div class="LeaguesNews">
                                @if ($news->tags->first())
                                <a href="{{ route('TagNews', ['id' => $news->tags->first()->id]) }}">
                                    <p>
                                        {{ $news->tags->first()->name ? $news->tags->first()->name : $news->tags->first()->name }}
                                    </p>
                                </a>
                                @endif
                            </div>
                            <a href="{{ route('Article', ['id' => $news->id]) }}">
                                <img src="{{ env('APP_URL') . 'storage/' . $news->media->first()->url }}">
                            </a>
                            <div class="OneNewsTitleON">
                                <h3>
                                    <a class="OneNewsTitleONA"
                                        href="{{ route('Article', ['id' => $news->id]) }}">{{ $news->title }}</a>
                                </h3>
                            </div>
                            <a href="{{ route('Article', ['id' => $news->id]) }}">
                                <span class="overlay"></span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="LeftTvSection">
            @livewire('slide-match-component')
        </div>
    </div>
</div>
