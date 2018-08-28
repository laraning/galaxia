<li class="p-r-10 inline">
    <div class="dropdown">
        <a href="javascript:;" id="notification-center" class="header-icon pg pg-world" data-toggle="dropdown">
        <span class="bubble"></span>
        </a>
        <!-- START Notification Dropdown -->
        <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
            <!-- START Notification -->
            <div class="notification-panel">
                <!-- START Notification Body-->
                <div class="notification-body scrollable">
                    @foreach($notifications as $notification)
                    <!-- START Notification Item-->
                    <div class="notification-item @if(!$notification->read) unread @endif clearfix">
                        <div class="heading">
                            <a href="#" class="{{ $notification->color }} pull-left">
                            <i class="{{ $notification->thumbnail }} m-r-10"></i>
                            <span class="bold">{{ $notification->title }}</span>
                            <span class="fs-12 m-l-10">{{ $notification->baseline }}</span>
                            </a>
                            <span class="pull-right time">{{ $notification->info }}</span>
                        </div>
                        <!-- START Notification Item Right Side-->
                        @if($notification->read)
                        <div class="option">
                            <a href="#" class="mark"></a>
                        </div>
                        @else
                        <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                            <a href="#" class="mark"></a>
                        </div>
                        @endif
                        <!-- END Notification Item Right Side-->
                    </div>
                    @endforeach
                    <!-- END Notification Item-->
                </div>
                <!-- END Notification Body-->
                <!-- START Notification Footer-->
                @isset($footer)
                <div class="notification-footer text-center">
                    <a href="{{ $footer->url }}" class="">{{ $footer->title }}</a>
                    </a>
                </div>
                @endisset
                <!-- START Notification Footer-->
            </div>
            <!-- END Notification -->
        </div>
        <!-- END Notification Dropdown -->
    </div>
</li>
