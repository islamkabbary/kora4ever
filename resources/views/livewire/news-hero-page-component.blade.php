<div>
    <div class="row TV-writersBlockArea customHeder">
        <div class="RightTvSection ">
            <div class="NewBlock">
                <div class="NewsRightBlock">
                    <div class="OneNews">
                        <div class="LeaguesNews">
                            <a href="{{ route('TagNews', ['id' => $main_news->tags[0]->id]) }}">
                                <p>
                                    {{ $main_news->tags[0]->name }}
                                </p>
                            </a>
                        </div>
                        <a href="{{ route('Article', ['id' => $main_news->id]) }}">
                            <img src="{{ env('APP_URL') . '/storage/' . $main_news->media[0]->url }}"
                                title="{{ $main_news->tags[0]->name }}" alt="{{ $main_news->tags[0]->name }}">
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
                    <div class="RTwoNewsLeft">
                        @foreach ($five_main_news as $news)
                        <div class="OneNews">
                            <div class="LeaguesNews">
                                <a href="{{ route('TagNews', ['id' => $main_news->tags[0]->id]) }}">
                                    <p>
                                        {{ $news->tags[1]->name ? $news->tags[1]->name : $news->tags[0]->name }}
                                    </p>
                                </a>
                            </div>
                            <a href="{{ route('Article', ['id' => $news->id]) }}">
                                <img src="{{ env('APP_URL') . '/storage/' . $news->media[0]->url }}"
                                    title="{{ $news->tags[0]->name }}" alt="{{ $news->tags[0]->name }}">
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
                            <a href="{{ route('TagNews', ['id' => $news->tags[0]->id]) }}">
                                <p>
                                    {{ $news->tags[0]->name ? $news->tags[0]->name : $news->tags[0]->name }}
                                </p>
                            </a>
                        </div>
                        <a href="{{ route('Article', ['id' => $news->id]) }}">
                            <img src="{{ env('APP_URL') . '/storage/' . $news->media[0]->url }}"
                                title="{{ $news->tags[0]->name }}" alt="{{ $news->tags[0]->name }}">
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
