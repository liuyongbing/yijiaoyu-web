<?php $size = isset($size) ? $size : 10; ?>
<?php $totalPage = ceil($total / max($size, 1)); ?>
<?php $filters = isset($filters) ? $filters : []; ?>

<div class="pagination">
    <ul class="paginationUl">        
        @if ($page > 1)
            <li class="item">
                <a href="{{ route($route, array_merge($filters, ['page'=>1])) }}">
                    首页
                </a>
            </li>
        @endif

        @if ($page != 1)
            <li class="item">
                <a href="{{ route($route, array_merge($filters, ['page'=>$page-1])) }}">
                    上一页
                </a>
            </li>
        @endif

        @for ($i = $page > 3 ? ($page - 3):1 ; $i <= ($page > $totalPage-2 ? $totalPage:($page + 3)); $i++)
            @if (abs($page - $i) > 3)
                @continue
            @endif

            @if (abs($page - $i) > 2)
                <li class="item disabled"><a>...</a></li>
                @continue
            @endif

            <li class="item">
                <a class="@if ($i == $page) active @endif" href="{{ route($route, array_merge($filters, ['page'=>$i])) }}">{{ $i }}</a>
            </li>
        @endfor

        @if ($page < $totalPage)
            <li class="item">
                <a href="{{ route($route, array_merge($filters, ['page'=>$page+1])) }}">
                    下一页
                </a>
            </li>
        @endif
        @if ($page != $totalPage && $totalPage !=0)
            <li class="item">
                <a href="{{ route($route, array_merge($filters, ['page'=>$totalPage])) }}">
                    末页
                </a>
            </li>
        @endif
    </ul>
</div>