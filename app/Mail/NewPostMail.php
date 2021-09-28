<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewPostMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $_post = null;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($post)
    {
        $this->_post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->from(config('mail.from.address'), config('mail.from.name'))
            ->subject($this->_post['title'])
            ->view('mail.post')
            ->with([
                'description' => $this->_post['description'],
                'title' => $this->_post['title']
            ]);

        return $mail;
    }
}
