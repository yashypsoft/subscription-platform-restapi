<?php

namespace App\Jobs;

use App\Mail\NewPostMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class NewPostEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $_emails = null;
    protected $_post = null;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($emails, $post)
    {
        $this->_emails = $emails;
        $this->_post = $post;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->_emails)->send(new NewPostMail($this->_post));
    }
}
