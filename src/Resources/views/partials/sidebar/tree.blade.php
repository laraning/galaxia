<div class="sidebar-menu">
    <!-- BEGIN SIDEBAR MENU ITEMS-->
    <ul class="menu-items">
        @foreach($sidebar->getTree() as $item)
            @if($loop->iteration == 1)
                @include('galaxia-ui::partials.sidebar.item', ['first' => true, 'item' => $item, 'close' => false])
            @else
                @include('galaxia-ui::partials.sidebar.item', ['first' => false, 'item' => $item, 'close' => false])
            @endif
            @if($item->children->count() > 0)
                <ul class="sub-menu">
                @foreach($item->children as $child)
                    @include('galaxia-ui::partials.sidebar.item', ['first' => false, 'item' => $child, 'close' => true])
                @endforeach
                </ul>
            @else
            </li>
            @endif
        @endforeach
    </ul>
    <div class="clearfix"></div>
</div>
