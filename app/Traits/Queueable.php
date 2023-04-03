<?php

namespace App\Traits;

use Illuminate\Contracts\Queue\Queue;

trait Queueable
{
    public function toQueue(): void
    {
        $queue = app(Queue::class);
        $queue->push($this, null, $this->queueName());
    }

    public function queueName(): string
    {
        return 'default';
    }
}