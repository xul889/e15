<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SentLog;
use App\Models\Email;
use App\Models\User;
class SentLogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed sent logs based on emails and users
        $emails = Email::all();
        $users = User::all();
        foreach ($emails as $email) {
            foreach ($users as $user) {
                $sent_log = new SentLog();
                $sent_log->email_id = $email->id;
                $sent_log->user_id = $user->id;
               //sent time sometime in the past month 
                $sent_log->sent_at = date('Y-m-d', strtotime('-'.rand(1, 30).' days'));
                $sent_log->save();
            }
        }
    
         

    }
}
