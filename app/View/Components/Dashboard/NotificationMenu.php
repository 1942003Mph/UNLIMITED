<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\View\Component;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class NotificationMenu extends Component
{
    public $notification ;
    public $newcount ;
    /**
     * Create a new component instance.
     */
    public function __construct($count = 10)
    {
        // $user = auth()->user();
        // $this->notification = $user->notification()->take()->get();
        // $this->newcount = $user->unreadNotifications()->count();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.notification-menu');
    }
}
