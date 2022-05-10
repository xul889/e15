<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Email;
use App\Models\User;
class EmailUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $emails = Email::all();
        foreach ($users as $user) {
            foreach ($emails as $email) {
                $user->emails()->attach($email);
            }
        }
    }
}
