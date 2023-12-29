<div class="championshipsNews">
    @foreach ($news as $post)
        <div class="SecondNews">
            <div class="secondNewsBlockImage">
                <a href="{{ route('Article', ['id' => $post->id]) }}">
                    @if ($post->media->first())
                        <img src="{{ env('APP_URL') . 'storage/' . $post->media->first()->url }}" class="OneSResultImage"
                            onerror="this.src='{{ asset('images/them/onerror/Large789x539.png') }}'"
                            title="{{ $post->title }}">
                    @endif
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
                        <p>{{ $post->created_at->diffForHumans() }}</p>
                    </div>
                </div>
                <div>
                    <div class="row ArticleTagSmall">
                        @if ($post->tags)
                            @foreach ($post->tags->take(2) as $tag)
                                <div class="AOneTagSmall">
                                    <a href="{{ route('TagNews', ['id' => $tag->id]) }}">
                                        <p>{{ $tag->name }} </p>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="AOneTagSmall">
                                <a href="{{ route('TagNews', ['id' => 1]) }}">
                                    <p>أخبار</p>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{ $news->links() }}
</div>
