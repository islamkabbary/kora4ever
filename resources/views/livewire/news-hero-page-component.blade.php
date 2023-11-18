<div>
    <div class="row TV-writersBlockArea customHeder">
        <div class="RightTvSection ">
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
        <div class="LeftTvSection">
            @livewire('slide-match-component')
        </div>
    </div>
</div>
