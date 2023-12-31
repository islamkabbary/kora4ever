<div>
    <div class="row TV-writersBlockArea customHeder">
        <div class="RightTvSection ">
            <div class="NewBlock">
                <div class="NewsRightBlock">
                    @php
                        $tags = [];
                    @endphp
                    @if ($main_news)
                        <div class="OneNews">
                            <div class="LeaguesNews">
                                @if ($main_news && count($main_news->tags)>0)
                                    <a href="{{ route('TagNews', ['id' => $main_news->tags->first()->id]) }}">
                                        <p>
                                            {{ $tags[] = $main_news->get_tag($tags,$main_news->tags) }}
                                        </p>
                                    </a>
                                @endif
                            </div>
                            <a href="{{ route('Article', ['id' => $main_news->id]) }}">
                                @if ($main_news->media->first())
                                <img src="{{ env('APP_URL') . 'storage/' . $main_news->media->first()->url }}" onerror="this.src='images/them/onerror/Large789x539.png';">
                                @endif
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
                                    @if (count($news->tags) > 0)
                                    <a href="{{ route('TagNews', ['id' => $news->tags->first()->id]) }}">
                                        <p>
                                            {{ $tags[] = $news->get_tag($tags,$news->tags) }}
                                        </p>
                                    </a>
                                    @endif
                                </div>
                                <a href="{{ route('Article', ['id' => $news->id]) }}">
                                    @if (count($news->media) > 0)
                                    <img src="{{ env('APP_URL') . 'storage/' . $news->media->first()->url }}" onerror="this.src='images/them/onerror/Large789x539.png';">
                                    @endif
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
                                @if (count($news->tags) > 0)
                                <a href="{{ route('TagNews', ['id' => $news->tags->first()->id]) }}">
                                    <p>
                                        {{ $tags[] =  $news->get_tag($tags,$news->tags) }}
                                    </p>
                                </a>
                                @endif
                            </div>
                            <a href="{{ route('Article', ['id' => $news->id]) }}">
                                @if (count($news->media) > 0)
                                <img src="{{ env('APP_URL') . 'storage/' . $news->media->first()->url }}" onerror="this.src='images/them/onerror/Large789x539.png';">
                                @endif
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
