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
                        <a href="Article/26567/مران-الزمالك-مشاركة-شيكابالا-وحفني-وتأهيل-حازم-والمثلوثي-واوناجم">
                            <img class="secondNewsImage"
                                src="{{ env('APP_URL') . 'storage/' . $news->media->first()->url }}"
                                onerror="this.src='images/them/onerror/Large789x539.png';">
                        </a>
                    </div>
                    <div class="secondNewsTitleON">
                        <h3>
                            <a href="Article/26567/مران-الزمالك-مشاركة-شيكابالا-وحفني-وتأهيل-حازم-والمثلوثي-واوناجم">
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
