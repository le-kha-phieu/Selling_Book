<ul class="paginate">
    @if ($products->lastPage() > 1)
        <li class="arrow-paginate">
            <a href="{{ $products->previousPageUrl() }}" rel="prev">
                <i class="fa-solid fa-angle-left"></i>
            </a>
        </li>
        <li class="{{ ($products->currentPage() == 1) ? ' paginate-active' : '' }}">
            <a href="{{ $products->url($products->onFirstPage()) }}">1</a>
        </li>
        <?php
            $start = $products->currentPage() - 2;
            $end = $products->currentPage() + 2;
            if ($start < 1) {
                $start = 1;
                $end += 1;
            } 
            if ($end >= $products->lastPage()) {
                $end = $products->lastPage();
            }
        ?>
        @if ($products->currentPage() > 3)
            <li><span>...</span></li>
        @endif
        @for ($i = $start + 1; $i < $end; $i++)
                <li class="{{ ($products->currentPage() == $i) ? ' paginate-active' : '' }}">
                    <a href="{{ $products->url($i) }}">{{$i}}</a>
                </li>
        @endfor
        @if ($products->currentPage()+2 < $products->lastPage())
            <li><span>...</span></li>
        @endif
        <li class="{{ ($products->currentPage() == $products->lastPage()) ? ' paginate-active' : '' }}">
            <a href="{{ $products->url($products->lastPage()) }}">{{ $products->lastPage() }}</a>
        </li>
        <li class="arrow-paginate">
            <a href="{{ $products->nextPageUrl() }}" rel="next">
                <i class="fa-solid fa-angle-right"></i>
            </a>
        </li>
    @endif
</ul>
