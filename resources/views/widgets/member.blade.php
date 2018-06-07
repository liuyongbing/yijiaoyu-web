    @if (!empty($members))
        <div class="p2">
            <h3 class="title">教练团队</h3>
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
                <li class="item">
                    <a href="javascript:;" class="loadmore">更多》</a>
                </li>
            @endif
            </ul>
        </div>
    @endif

@section('script')
<script src="{{ asset(elixir('js/brands.js')) }}{{ $STATIC_VERSION }}"></script>
<script type="text/javascript">
$(function() {
    var page = 2;
    $('.loadmore').click(function() {
        $.ajax({
            method: "GET",
            url: "{{ route('members.index') }}",
            data: { 
                'brand_id' : '{{ $brandId }}',
                'team_type' : '{{ $teamType }}',
                'page' : page,
                'page_size': '{{ $pageSize }}'
            },
            dataType: 'json',
            success: function(response) {
                var dataStr = '';
                if (response.items)
                {
                    $(response.items).each(function(i, item) {
                        dataStr += '<li class="item">';
                        dataStr += '    <img src="' + item.image_url + '" alt="' + item.username + '" />';
                        dataStr += '    <div class="mark">';
                        dataStr += '        <h3 class="title">' + item.username + '</h3>';
                        dataStr += '    </div>';
                        dataStr += '</li>';
                    })
                    page += 1;
                    
                    $(".loadmore").parent().before(dataStr);
                }
                if (false == response.loadmore)
                {
                    $('.loadmore').parent().hide();
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown)
            {
                alert('服务器错误');
            }
        })
    }) 
});
</script>
@endsection