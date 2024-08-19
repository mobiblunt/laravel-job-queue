<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Queue;
use App\Jobs\ProcessSubmission;

class SubmissionTest extends TestCase
{
    public function test_submission_api()
    {
        Queue::fake();

        $response = $this->postJson('/api/submit', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'message' => 'Test message',
        ]);

        $response->assertStatus(202);

        Queue::assertPushed(ProcessSubmission::class);
    }
}