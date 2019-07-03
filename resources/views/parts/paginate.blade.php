
@if ($paginator->hasPages())
    <ul class="styled-pagination text-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())


        @else
            <li class="prev">
                <a href="{{ $paginator->previousPageUrl() }}"><span class="fa fa-chevron-left"></span></a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)


            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a href="{{ $url }}" class="active">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())

            <li class="next">
                <a href="{{ $paginator->nextPageUrl() }}"><span class="fa fa-chevron-right"></span></a>
            </li>
        @else


        @endif
    </ul>
@endif
