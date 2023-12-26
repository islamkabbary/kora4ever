@extends('website.master_website')
@section('mainContainer')
    <div class="row InnerContainer customHeder">
        <div class="row SearchWordContainer">
            <a href=""> {{ $tag->name }}</a>
        </div>
        <div class="RightInner">
            <div class="tab-Result Active">
                <div class="allnewsDiv">
                    <div class="SearchResultBlock">
                        @foreach ($news as $post)
                            <div class="SecondNews">
                                <div class="secondNewsBlockImage">
                                    <a href="{{ route('Article', ['id' => $post->id]) }}">
                                        <img src="{{ env('APP_URL') . 'storage/' . $post->media[0]->url }}"
                                            onerror="this.src='images/onerror/Large329x224.png'" class="OneSResultImage"
                                            title="{{ $post->title }}" alt="{{ $post->title }}">
                                    </a>
                                </div>
                                <div class="secondNewsTitleON">
                                    <h3>
                                        <a href="{{ route('Article', ['id' => $post->id]) }}">
                                            {{ $post->title }}
                                        </a>
                                    </h3>
                                    <div class="ArticleDateBlock">
                                        <div class="row ArticleDate">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <p> {{ $post->created_at->diffForHumans() }} </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row ArticleTagSmall">
                                            @foreach ($post->tags->take(2) as $tag)
                                                <div class="AOneTagSmall">
                                                    <a href="{{ route('TagNews', ['id' => $tag->id]) }}">
                                                        <p>{{ $tag->name }} </p>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pt-2">
                        {{-- {{ $news->links() }} --}}
                    </div>
                </div>
            </div>
            <div id="pager" class="pagination">
            </div>
        </div>
        <div class="LeftInner">
            @livewire('left-side-bar-component', ['league' => 9])
        </div>
    </div>
@endsection
