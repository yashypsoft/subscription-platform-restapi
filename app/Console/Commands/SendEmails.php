<?php

namespace App\Console\Commands;

use App\Jobs\NewPostEmailJob;
use App\Models\Post;
use App\Models\User;
use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send {post}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a email to a user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $postId = $this->argument('post');
        $post = Post::find($postId);
        if ($post && $post->is_mail_send != 1) {
            $userEmails = User::query()
                ->join('website_subscriber', 'users.id', '=', 'website_subscriber.subscriber_id')
                ->select(
                    'users.email',
                )
                ->where('website_subscriber.website_id', $post->website_id)
                ->get()->toArray();
            $userEmails = array_column($userEmails, 'email');
            $job = new NewPostEmailJob($userEmails, $post);
            dispatch($job);
            $post->is_mail_send = 1;
            $post->save();
            $this->info("Mail Send Successfully.");
        } else {
            $this->info("Nothing pending to send for this post.");
        }
    }
}
