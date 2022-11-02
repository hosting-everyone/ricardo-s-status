<?php

namespace App\Events\Incidents;

use App\Models\Incident;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class IncidentUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Incident $incident;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Incident $incident)
    {
        $this->incident = $incident;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}