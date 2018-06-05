            <ul class="userBox">
            @foreach($members as $item)
                <li class="item">
                    <img src="{{ $item['image_url'] }}{{ $STATIC_VERSION }}" alt="{{ $item['username'] }}"/>
                    <div class="mark">
                        <h3 class="title">{{ $item['username'] }}</h3>
                    </div>
                </li>
            @endforeach
            @if ($loadMore)
                <li class="item loadmore">
                    <a href="javascript:;">更多>></a>
                </li>
            @endif
            </ul>