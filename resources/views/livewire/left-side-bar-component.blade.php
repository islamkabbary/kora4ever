<div>
    {{-- الأكثر قراءة --}}
    <div class="mostWatched articlemostWatched">
        <div class="HeadWatched">
            <h3>الأكثر قراءة</h3>
        </div>
        <ul class="listWatched">
            @foreach ($most as $i => $post)
                <li>
                    <span>{{ $i + 1 }}</span>
                    <a href="{{ route('Article', ['id' => $post->id]) }}"> {{ $post->title }} </a>
                </li>
            @endforeach
            <li>
                {{-- <img src="{{ asset('images/logo03.png') }}" alt="logo03"> --}}
            </li>
        </ul>
    </div>
    {{-- احصائيات الدوري المصري --}}
    @livewire('statistics-component', ['leauge' => $egyptianLeague->id])
    {{-- <div class="DivNewsLeft margin20">
        <div class="NewsBlobkFull">
            @foreach ($news->photos as $photo)
                <img src="{{ env('APP_URL') . 'storage/' . $news->media[0]->url }}" onerror="this.src='images/onerror/Large329x224.png'">
            @endforeach
            <a href="{{ route('Article', ['id' => $news->id]) }}"> {{ $news->title }}</a>
        </div>
        <div class="row DivTwoNews">
            <div class="NewsCon">
                <a href="#" class="d-flex NewsCon">
                    @foreach ($news->photos as $photo)
                        <img src="{{ env('APP_URL') . 'storage/' . $news->media[0]->url }}" onerror="this.src='images/onerror/Large214x146.png'">
                    @endforeach
                    <p>{{ $news->title }}</p>
                </a>
            </div>
            <div class="NewsCon">
                <a href="{{ route('Article', ['id' => $news[2]->id]) }}" class="d-flex NewsCon">
                    @foreach ($news[2]->photos as $photo)
                        <img src="{{ $photo->path }}" onerror="this.src='images/onerror/Large214x146.png'">
                    @endforeach
                    <p>{{ $news[2]->title }}</p>
                </a>
            </div>
            <div class="NewsCon">
                <a href="{{ route('Article', ['id' => $news[3]->id]) }}" class="d-flex NewsCon">
                    @foreach ($news[3]->photos as $photo)
                        <img src="{{ $photo->path }}" onerror="this.src='images/onerror/Large214x146.png'"
                            alt="{{ $news[3]->title }}">
                    @endforeach
                    <p>{{ $news[3]->title }}</p>
                </a>
            </div>
            <div class="NewsCon">
                <a href="{{ route('Article', ['id' => $news[4]->id]) }}" class="d-flex NewsCon">
                    @foreach ($news[4]->photos as $photo)
                        <img src="{{ $photo->path }}" onerror="this.src='images/onerror/Large214x146.png'"
                            alt="{{ $news[4]->title }} ">
                    @endforeach
                    <p>{{ $news[4]->title }}</p>
                </a>
            </div>
        </div>
    </div>
    <div class="LeftTvSection margin20">
    </div> --}}
</div>
