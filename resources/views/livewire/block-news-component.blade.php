<div>
    <div class="newAddedSection">
        <div class="row BlackHeaderBlock">
            <a href="{{ route('championship', ['id'=>$leauge->id]) }}">
                <p class="TitleBlocksHeader">
                    {{ $leauge->name }}
                </p>
            </a>
        </div>
        <div>
            <div class="newHomeSections">
                @foreach ($fourNews as $news)
                <div class="newSectionView">
                    <div class="secondNewsBlockImage">
                        <a href="{{ route('Article', ['id' => $news->id]) }}">
                            @if ($news->media->first())
                            <img class="secondNewsImage" width="310px" height="206px"
                                src="{{ env('APP_URL') . 'storage/' . $news->media->first()->url }}"
                                onerror="this.src='images/them/onerror/Large789x539.png';">
                            @endif
                        </a>
                    </div>
                    <div class="secondNewsTitleON">
                        <h3>
                            <a href="{{ route('Article', ['id' => $news->id]) }}">
                                {{ $news->title }}
                            </a>
                        </h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
