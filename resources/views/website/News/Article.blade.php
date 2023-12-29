@extends('website.master_website')
@section('mainContainer')
    <style>
        @media (min-width: 768px) {
            .customPageHiro {
                margin-top: 100px;
                padding: 0px 75px !important;
            }
        }
        @media (min-width: 425px) {
            .customPageHiro {
                margin-top: 100px;
                padding: 0px 20px;
            }
        }
    </style>
    {{-- start content --}}
    <div class="row InnerContainer customPageHiro">
        <div class="RightInner">
            <div class="articlebody" title="{{ $news->title }}" newsid="26557">
                <div class="articleMainTitle">
                    <h1>{{ $news->title }}</h1>
                </div>
                <div class="row">
                    <div class="ArticleTimeAndAuthor">
                        <div class="row AuthorIconBlock">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            <p> كتب : {{ $news->created_by_user ? $news->created_by_user->name : 'إسلام قباري' }} </p>
                        </div>
                        <div class="row TimeIconBlock">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <p>{{ $news->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
                <div>
                    @if ($news->video_url)
                        <div class="detailsMainImage">
                            <iframe width="660" height="415" src="https://www.youtube.com/embed/{{ $post->video_url }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    @else
                        <div class="detailsMainImage">
                            <img src="{{ env('APP_URL') . 'storage/' . $news->media->first()->url }}"
                                onerror="this.src='images/them/onerror/Large789x539.png';" title="{{ $news->title }}"
                                alt="{{ $news->title }}">
                            <div class="imageCaption">
                                <p>{{ $news->title }}</p>
                            </div>
                        </div>
                    @endif

                </div>

                <div class="ArticleContent">
                    <p>
                        {!! $news->body !!}
                </div>

                <div class="row ArticleTagsBlock clear">
                    @foreach ($news->tags as $tag)
                        <div class="AOneTagSmall">
                            <a href="{{ route('TagNews', ['id' => $tag->id]) }}">
                                <p>{{ $tag->name }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="ArticleLatestNews">
                    <h4 class="CHNameleagueLiveStreams">
                        <a class="A-GetAllChampions">
                            <p>اخر الاخبار</p>
                            {{-- <img src="{{ asset('images/ArrowLiveStreams.png') }}" alt="ArrowLiveStreams"> --}}
                        </a>
                    </h4>
                    <div class="row">
                        @php
                            $last = App\Models\News::orderBy('id', 'desc')
                                ->take(3)
                                ->get();
                        @endphp
                        @foreach ($last as $last_post)
                            <div class="OneCollection">
                                <div class="secondNewsBlockImage">
                                    <a href="{{ route('Article', ['id' => $last_post->id]) }}">
                                        <img src="{{ env('APP_URL') . 'storage/' . $last_post->media->first()->url }}"
                                        onerror="this.src='images/them/onerror/Large789x539.png';"
                                            class="OneCollectionImg">
                                    </a>
                                </div>
                                <div class="row OneCollectionBG">
                                    <h3 class="OneCollectionTitle">
                                        <a href="{{ route('Article', ['id' => $last_post->id]) }}">
                                            {{ $last_post->title }}
                                        </a>
                                    </h3>
                                </div>
                                <div class="row ArticleDateBlock">
                                    <div class="row ArticleTagSmall">
                                        @foreach ($last_post->tags->take(2) as $tag)
                                            <div class="AOneTagSmall">
                                                <a href="{{ route('TagNews', ['id' => $tag->id]) }}">
                                                    <p>{{ $tag->name }}</p>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="row ArticleDateBlock">
                                    <div class="row ArticleDate">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <p>{{ $last_post->created_at->diffForHumans() }} </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- @if ($video && $video->count() > 0)
                    <div class="ArticleLatestNews">
                        <h4 class="CHNameleagueLiveStreams">
                            <a class="A-GetAllChampions">
                                <p>احدث الفيديوهات </p>
                                <img src="{{ asset('images/ArrowLiveStreams.png') }}" alt="ArrowLiveStreams">
                            </a>
                        </h4>
                        <div class="row">
                            @foreach ($video as $video_post)
                                <div class="OneCollection">
                                    <div class="secondNewsBlockImage">
                                        <a href="{{ route('Article', ['id' => $video_post->id]) }}">
                                            <img src="{{ asset($video_post->photos[0]->path) }}"
                                                onerror="this.src={{ asset('images/onerror/Large329x224.png') }}"
                                                class="OneCollectionImg" alt="{{ $video_post->title }} ">
                                            <img src="{{ asset('images/tvicon.png') }}" class="IconPlayTVs" alt="tvicon">
                                        </a>
                                    </div>
                                    <div class="row OneCollectionBG">
                                        <h3 class="OneCollectionTitle">
                                            <a href="{{ route('Article', ['id' => $video_post->id]) }}">
                                                {{ $video_post->title }}
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="row ArticleDateBlock">
                                        @foreach ($post->tags as $tag)
                                            <div class="AOneTagSmall">
                                                <a href="{{ route('TagNews', ['id' => $tag->id]) }}">
                                                    <p>{{ __('messages.' . $tag->name) }}</p>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="row ArticleDateBlock">
                                        <div class="row ArticleDate">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <p>
                                                {{ $video_post->created_at->diffForHumans() }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                @endif --}}
            </div>
        </div>
        <div class="LeftInner fixedMostRead">
            @livewire('left-side-bar-component', ['league' => $news->leauge->id])
        </div>
        {{-- <script>
            $(document).ready(function() {
                if (($("#divcont").attr("data-id") != "3840254") && ($("#divcont").attr("data-id") != "384108"))
                    $('span').removeAttr('style');
                $('p').removeAttr('style');
                $('strong').removeAttr('style');
                $('#articleBody div').removeAttr('style');
            });
        </script> --}}
    </div>
    {{-- end content --}}
@endsection
