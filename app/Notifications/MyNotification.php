<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MyNotification extends Notification
{
    use Queueable;
private $enrollmentData;
public $message;
public $order;
    /**
     * Create a new notification instance.
     */
    public function __construct($enrollmentData)
    {
        $this->enrollmentData = $enrollmentData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];

    }

    /**
     * Get the mail representation of the notification.
     */
    // public function toMail(object $notifiable): MailMessage
    // {
    //     // return (new MailMessage)
    //     //             ->line($this->enrollmentData['body'])
    //     //             ->action($this->enrollmentData['enrollmentText'],$this->enrollmentData['url'])
    //     //             ->line($this->enrollmentData['Tankyou']);

    // }
    
public function toDatabase($notifiable)
{
    return $this->message = [
        'title' => "New Order (#",
        'body' => "New Order #",
        'url' =>url('/admin') ,
        'click_action' => "",
         'others' => [
            'type' => 1,
            "id" =>1 ,
            
        ],
    ];
}

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
