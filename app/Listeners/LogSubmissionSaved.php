<?php

namespace App\Listeners;

use App\Events\SubmissionSaved;
use Illuminate\Support\Facades\Log;

class LogSubmissionSaved
{
    public function handle(SubmissionSaved $event)
    {
        Log::info("Submission saved successfully", [
            'name' => $event->submission->name,
            'email' => $event->submission->email,
        ]);
    }
}