<style>
    .pagination{
    justify-content:center;
    margin-top:30px;
}

.pagination .page-link{
    border-radius:50%;
    width:42px;
    height:42px;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:0 5px;
    color:#0d6efd;
    border:1px solid #ddd;
}

.pagination .page-item.active .page-link{
    background:#0d6efd;
    border-color:#0d6efd;
    color:#fff;
}

.pagination .page-link:hover{
    background:#0d6efd;
    color:#fff;
}
</style>
@if ($paginator->hasPages())
<nav class="d-flex justify-content-center my-4">
    <ul class="pagination mb-0">

        {{-- Previous --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">&laquo;</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}">&laquo;</a>
            </li>
        @endif

        {{-- Pages --}}
        @foreach ($elements as $element)

            @if (is_string($element))
                <li class="page-item disabled">
                    <span class="page-link">{{ $element }}</span>
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach
            @endif

        @endforeach

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}">&raquo;</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">&raquo;</span>
            </li>
        @endif

    </ul>
</nav>
@endif
