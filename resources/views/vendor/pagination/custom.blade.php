@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-center mt-8 mb-8">
        <div class="flex space-x-3">
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <a href="{{ $paginator->previousPageUrl() }}" class="px-6 h-12 flex items-center justify-center bg-[#F9F1E7] text-[#333333] rounded-lg hover:bg-[#f5efe6]">
                    Previous
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="w-12 h-12 flex items-center justify-center bg-[#84cc16] text-white rounded-lg">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="w-12 h-12 flex items-center justify-center bg-[#F9F1E7] text-[#333333] rounded-lg hover:bg-[#f5efe6]">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="px-6 h-12 flex items-center justify-center bg-[#F9F1E7] text-[#333333] rounded-lg hover:bg-[#f5efe6]">
                    Next
                </a>
            @endif
        </div>
    </nav>
@endif 