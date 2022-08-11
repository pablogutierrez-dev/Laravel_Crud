@if($paginator->hasPages())
    <div class="pagination__links">

        {{-- previous page --}}
        @if($paginator->onFirstPage())
        <button class="btn__prev-next" disabled>Prev</button>
        @else
        <button class="btn__prev-next" wire:click='previousPage'>Prev</button>
        @endif
        {{-- end previous page --}}

        {{-- pagination numbers --}}
        @foreach ($elements as $element )
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <button class="btn__numbers btn__numbers-1" wire:click='gotoPage({{ $page }})'>{{ $page }}</button>
                    @else
                        <button class="btn__numbers btn__numbers-2" wire:click='gotoPage({{ $page }})'>{{ $page }}</button>
                    @endif
                @endforeach     
            @endif
        @endforeach  
        {{-- pagination numbers end --}}

        {{-- next page --}}
        @if($paginator->hasMorePages())
        <button class="btn__prev-next" wire:click='nextPage'>Next</button>
        @else
        <button class="btn__prev-next" disabled>Next</button>
        @endif
        {{-- end next page --}}
    </div>
    
@endif
    
