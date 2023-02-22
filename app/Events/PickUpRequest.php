<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PickUpRequest implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $lat,$lng,$id,$name,$check;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($lng,$lat,$id,$name,$check)
    {
        $this->lng=$lng;
        $this->lat=$lat;
        $this->id=$id;
        $this->name=$name;
        $this->check=$check;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('updateTracker');
    }
}
