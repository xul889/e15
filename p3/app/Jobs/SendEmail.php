<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\HelloEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $email;
    public $title;
    public $content;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email,$title,$content)
    {
        $this->email = $email;
        $this->title = $title;
        $this->content = $content;
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //send a mailable email
        Mail::to($this->email)->send(new HelloEmail($this->title,$this->content));
    }
}
