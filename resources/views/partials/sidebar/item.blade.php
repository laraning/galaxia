<li class="@if($first == true) m-t-30 @endif">
    <a href="{{ $item->url }}" class="@isset($item->baseline) detailed @endisset">
        <span class="title">{{ $item->title }}</span>
        @isset($item->baseline)
        <span class="details">{{ $item->baseline }}</span>
        @endisset
        @if($item->children->count() > 0)
            <span class="arrow"></span>
        @endif
    </a>
    <span class="icon-thumbnail"><i class="{{ $item->thumbnail }}"></i></span>
@if($close)
</li>
@endif