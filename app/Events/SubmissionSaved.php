<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Submission;

class SubmissionSaved
{
    use Dispatchable, SerializesModels;

    public $submission;

    public function __construct(Submission $submission)
    {
        $this->submission = $submission;
    }
}