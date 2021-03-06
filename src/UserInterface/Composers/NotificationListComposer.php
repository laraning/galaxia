<?php

namespace Laraning\Galaxia\UserInterface\Composers;

use Illuminate\View\View;
use Laraning\Galaxia\Models\Notification;
use Laraning\Galaxia\UserInterface\Widgets\Notification\NotificationLink;
use Laraning\Galaxia\UserInterface\Widgets\Notification\NotificationList;

class NotificationListComposer
{
    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        // Verify if this user have notifications.
        Notification::fromThisUser();

        //dd(Notification::fromThisUser()->toSql());
        $notifications = new NotificationList();
        /*

        $link1 = new NotificationLink();
        $link1->title = 'My title';
        $link1->baseline = 'Action done';
        $link1->info = '1 hour ago';
        $link1->thumbnail = 'fa fa-exclamation-triangle';
        $link1->color = 'text-danger';
        $link1->read = false;

        $notifications->add($link1);

        */
        $view->with('notifications', $notifications->list())
             ->with('footer', $notifications->footer());
    }
}
