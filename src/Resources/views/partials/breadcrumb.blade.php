<ol class="breadcrumb">
    @foreach($items as $item)
        <li class="breadcrumb-item"><a href="{{ $item->link }}">{{ $item->label }}</a></li>
    @endforeach
</ol>
