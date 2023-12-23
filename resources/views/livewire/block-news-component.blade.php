<div>
    <div class="newAddedSection">
        <div class="row BlackHeaderBlock">
            <a href="section/35/كورة-مصرية/1">
                <p class="TitleBlocksHeader">
                    {{ $nameLeauge }}
                </p>
                {{-- <img src="images/them/redcorner.png"> --}}
            </a>
        </div>
        <div>
            <div class="newHomeSections">
                @foreach ($fourNews as $news)
                <div class="newSectionView">
                    <div class="secondNewsBlockImage">
                        <a href="{{ route('Article', ['id' => $main_news->id]) }}">
                            @if ($main_news->media->first())
                            <img class="secondNewsImage"
                                src="{{ env('APP_URL') . 'storage/' . $news->media->first()->url }}"
                                onerror="this.src='images/them/onerror/Large789x539.png';">
                            @endif
                        </a>
                    </div>
                    <div class="secondNewsTitleON">
                        <h3>
                            <a href="{{ route('Article', ['id' => $main_news->id]) }}">
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
