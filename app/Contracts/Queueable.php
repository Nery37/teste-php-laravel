<?php

namespace App\Contracts;

interface Queueable
{
    public function toQueue(): void;

    public function queueName(): string;
}