<div>
    <div class="row MainView" style="display: flex">
        <div class="rightContainer">
            <div class="NewBlock">
                <div class="NewsRightBlock">
                    <div class="OneNews">
                        <div class="LeaguesNews">
                            <a href="section/31/كأس-أمم-إفريقيا/1">
                                <p>
                                    {{ $news[0]->tags[0]->name }}
                                </p>
                            </a>
                        </div>
                        <a href="{{ route('Article', ['id' => $news[0]->id]) }}">
                            <img src="{{ env('APP_URL') . '/storage/' . $news[0]->media[0]->url }}"
                                title="{{ $news[0]->tags[0]->name }}" alt="{{ $news[0]->tags[0]->name }}">
                        </a>
                        <div class="OneNewsTitleON">
                            <h3>
                                <a class="OneNewsTitleOne"
                                    href="{{ route('Article', ['id' => $news[0]->id]) }}">{{ $news[0]->title }}</a>
                            </h3>
                        </div>
                        <a href="{{ route('Article', ['id' => $news[0]->id]) }}">
                            <span class="overlay"></span>
                        </a>
                    </div>
                    <div class="RTwoNewsLeft">
                        <div class="OneNews">
                            <div class="LeaguesNews">
                                <a href="section/31/كأس-أمم-إفريقيا/1">
                                    <p>
                                        {{ $news[0]->tags[1]->name ? $news[0]->tags[1]->name : $news[0]->tags[0]->name }}
                                    </p>
                                </a>
                            </div>
                            <a href="{{ route('Article', ['id' => $news[0]->id]) }}">
                                <img src="{{ env('APP_URL') . '/storage/' . $news[0]->media[0]->url }}"
                                    title="{{ $news[0]->tags[0]->name }}" alt="{{ $news[0]->tags[0]->name }}">
                            </a>
                            <div class="OneNewsTitleON">
                                <h3>
                                    <a class="OneNewsTitleONA"
                                        href="{{ route('Article', ['id' => $news[0]->id]) }}">{{ $news[0]->title }}</a>
                                </h3>
                            </div>
                            <a href="{{ route('Article', ['id' => $news[0]->id]) }}">
                                <span class="overlay"></span>
                            </a>
                        </div>
                        <div class="OneNews">
                            <div class="LeaguesNews">
                                <a href="section/31/كأس-أمم-إفريقيا/1">
                                    <p>
                                        {{ $news[0]->tags[2]->name ? $news[0]->tags[2]->name : $news[0]->tags[0]->name }}
                                    </p>
                                </a>
                            </div>
                            <a href="{{ route('Article', ['id' => $news[0]->id]) }}">
                                <img src="{{ env('APP_URL') . '/storage/' . $news[0]->media[0]->url }}"
                                    title="{{ $news[0]->tags[0]->name }}" alt="{{ $news[0]->tags[0]->name }}">
                            </a>
                            <div class="OneNewsTitleON">
                                <h3>
                                    <a class="OneNewsTitleONA"
                                        href="{{ route('Article', ['id' => $news[0]->id]) }}">{{ $news[0]->title }}</a>
                                </h3>
                            </div>
                            <a href="{{ route('Article', ['id' => $news[0]->id]) }}">
                                <span class="overlay"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row NewsleftBlock">
                    <div class="OneNews">
                        <div class="LeaguesNews">
                            <a href="section/31/كأس-أمم-إفريقيا/1">
                                <p>
                                    {{ $news[0]->tags[3]->name ? $news[0]->tags[3]->name : $news[0]->tags[0]->name }}
                                </p>
                            </a>
                        </div>
                        <a href="{{ route('Article', ['id' => $news[0]->id]) }}">
                            <img src="{{ env('APP_URL') . '/storage/' . $news[0]->media[0]->url }}"
                                title="{{ $news[0]->tags[0]->name }}" alt="{{ $news[0]->tags[0]->name }}">
                        </a>
                        <div class="OneNewsTitleON">
                            <h3>
                                <a class="OneNewsTitleONA"
                                    href="{{ route('Article', ['id' => $news[0]->id]) }}">{{ $news[0]->title }}</a>
                            </h3>
                        </div>
                        <a href="{{ route('Article', ['id' => $news[0]->id]) }}">
                            <span class="overlay"></span>
                        </a>
                    </div>
                    <div class="OneNews">
                        <div class="LeaguesNews">
                            <a href="section/31/كأس-أمم-إفريقيا/1">
                                <p>
                                    {{ $news[0]->tags[0]->name }}
                                </p>
                            </a>
                        </div>
                        <a href="{{ route('Article', ['id' => $news[0]->id]) }}">
                            <img src="{{ env('APP_URL') . '/storage/' . $news[0]->media[0]->url }}"
                                title="{{ $news[0]->tags[0]->name }}" alt="{{ $news[0]->tags[0]->name }}">
                        </a>
                        <div class="OneNewsTitleON">
                            <h3>
                                <a class="OneNewsTitleONA"
                                    href="{{ route('Article', ['id' => $news[0]->id]) }}">{{ $news[0]->title }}</a>
                            </h3>
                        </div>
                        <a href="{{ route('Article', ['id' => $news[0]->id]) }}">
                            <span class="overlay"></span>
                        </a>
                    </div>
                    <div class="OneNews">
                        <div class="LeaguesNews">
                            <a href="section/31/كأس-أمم-إفريقيا/1">
                                <p>
                                    {{ $news[0]->tags[0]->name }}
                                </p>
                            </a>
                        </div>
                        <a href="{{ route('Article', ['id' => $news[0]->id]) }}">
                            <img src="{{ env('APP_URL') . '/storage/' . $news[0]->media[0]->url }}"
                                title="{{ $news[0]->tags[0]->name }}" alt="{{ $news[0]->tags[0]->name }}">
                        </a>
                        <div class="OneNewsTitleON">
                            <h3>
                                <a class="OneNewsTitleONA"
                                    href="{{ route('Article', ['id' => $news[0]->id]) }}">{{ $news[0]->title }}</a>
                            </h3>
                        </div>
                        <a href="{{ route('Article', ['id' => $news[0]->id]) }}">
                            <span class="overlay"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="TabsVideoDontMiss">
            <div class="swiper mySwiperTabs">
                <div class="swiper-wrapper tabsDMHeader">
                    <div class="swiper-slide tab-link current" data-tab="tab-1">
                        <p> الدوري المصري </p>
                    </div>
                    <div class="swiper-slide tab-link " data-tab="tab-2">
                        <p> الدوري الانجليزي </p>
                    </div>
                    <div class="swiper-slide tab-link" data-tab="tab-3">
                        <p> الدوري الاسباني </p>
                    </div>
                    {{-- <div class="swiper-slide tab-link" data-tab="tab-4">
                        <p> الدوري السعودي </p>
                    </div> --}}
                </div>
            </div>
            <div id="tab-1" class="tab-content current">
                @livewire('statistics-component', ['leauge' => 9])
            </div>
            <div id="tab-2" class="tab-content">
                @livewire('statistics-component', ['leauge' => 1])
            </div>
            <div id="tab-3" class="tab-content">
                @livewire('statistics-component', ['leauge' => 3])
            </div>
            {{-- <div id="tab-4" class="tab-content">
                @livewire('statistics-component', ['leauge' => 12])
            </div> --}}
        </div>
    </div>
</div>
