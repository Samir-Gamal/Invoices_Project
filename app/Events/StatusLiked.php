<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class StatusLiked
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $id_user;
    public $username;
    public $age;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($data)
    {
       
        $this->id_user  = $data['id_user'];
        $this->username  = $data['username'];
        $this->age  = $data['age'];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('status-liked');
    }
}