<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
class EmailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emails = [
            ['title' => 'Merry Christmas', 'content' => 'Hi, 
            May the holy Christmas night bring warmth, happiness, and well-being into your life. 
            Let the lights of Christmas guide you to success and prosperity and bring peace in your life. Merry Christmas dear friend.'],
            ['title' => 'Happy New Year', 'content' => 'Hi,
            May each challenge you face this year gives you courage, hope, and success. Hoping you have a great year ahead of you. 
            May Lord bless you, dear best friend. Happy New Year.'],
            ['title' => 'Happy Birthday', 'content' => 'My Dear Friend, 
            On your special day only wishes are not enough to show my love for you. It’s an opportunity for me to share my lovely memories along with you.
            I remember when we were in school.
            I was badly injured can’t able to prepare for my crucial finals on that time you were there for me who sit beside me long night and prepared me for that extreme time.'],
            ['title' => "Happy Valentine's Day", 'content' => 'Hi,
            Whether you’re throwing up or breaking up, you want your girlfriend right there! 
            I don’t trust women who don’t go to their girlfriends.'],
            ['title' => "Happy Mother's Day", 'content' => "Happy Mother's Day to you."],
            ['title' => "Happy Father's Day", 'content' => "Happy Father's Day to you."],
            ['title' => 'Happy Graduation', 'content' => 'Happy Graduation to you.'],
            ['title' => 'Happy New Year', 'content' => 'Happy New Year to you and your family.'],
        ];
        //seed the emails table with created_at and updated_at timestamps

        foreach ($emails as $email) {
            $faker = Factory::create();
            $email['created_at'] = $faker->dateTimeBetween('-1 years', 'last month');
            $email['updated_at'] = $faker->dateTimeThisMonth();
            \App\Models\Email::create($email);
        }

        
    }
}
