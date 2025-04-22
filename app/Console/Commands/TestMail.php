<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class TestMail extends Command
{
    protected $signature = 'mail:test';
    protected $description = 'Test email configuration';

    public function handle()
    {
        $this->info('Testing email configuration...');
        
        $testData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'subject' => 'Test Email',
            'message' => 'This is a test email to verify the mail configuration.',
        ];

        try {
            $this->info('Attempting to send test email to: kumarniilesh843127@gmail.com');
            Mail::to('kumarniilesh843127@gmail.com')->send(new ContactFormMail($testData));
            $this->info('Test email sent successfully!');
        } catch (\Exception $e) {
            $this->error('Failed to send email: ' . $e->getMessage());
        }
    }
}
