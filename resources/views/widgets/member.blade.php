    @if (!empty($members))
        <ul class="userBox">
        @foreach($members as $item)
            <li class="item">
                <img src="{{ $item['image_url'] }}{{ $STATIC_VERSION }}" alt="{{ $item['username'] }}"/>
                <div class="mark">
                    <h3 class="title">{{ $item['username'] }}</h3>
                    @if (!empty($item['titles']))
                    <p class="info">{{ $item['titles'] }}</p>
                    @endif
                </div>
            </li>
        @endforeach
        @if ($loadMore)
            <li class="item">
                <a href="javascript:;" class="loadmore" data-brand="{{ $brandId }}" data-team="{{ $teamType }}" data-size="{{ $pageSize }}">更多》</a>
            </li>
        @endif
        </ul>
    @endif
    