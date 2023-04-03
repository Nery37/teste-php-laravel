<?php

namespace App\Services;

use Illuminate\Contracts\Queue\Queue;

class DocumentImporter
{
    protected $queue;

    public function __construct(Queue $queue)
    {
        $this->queue = $queue;
    }

    public function queueStatus(): array
    {
        return [
            'size' => $this->queue->size()
        ];
    }
}
