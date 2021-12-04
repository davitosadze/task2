<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'video_link' => "https://www.youtube.com/watch?v=ag1Zlb8StUQ",
            'description' => "In this video, we will use expo react native to create push notification. To get the latest Udemy coupon and news, subscribe our telegram channel",
            'video_title' => "Expo | React Native | Push Notification",
            'channel_name' => "ckmobile"
        ]);

        DB::table('videos')->insert([
            'video_link' => "https://www.youtube.com/watch?v=jD7yJtIzjXE",
            'description' => "Send emojis in your push notifications using NativeNotify.com! React Native Expo Push Notifications.",
            'video_title' => "Emojis | Expo Push Notifications | React Native",
            'channel_name' => "Native Notify"
        ]);

        DB::table('videos')->insert([
            'video_link' => "https://www.youtube.com/watch?v=pU2ukeS2JTE",
            'description' => "Check out the official music video for 'Rise & Fall' by Craig David ft. Sting",
            'video_title' => "Craig David - Rise & Fall ft. Sting (Official Video)",
            'channel_name' => "Craig David"
        ]);

        DB::table('videos')->insert([
            'video_link' => "https://www.youtube.com/watch?v=Ole8X2YHXM8",
            'description' => "ქეთევან ყანჩაშვილი, უჩა გოგოხია, გიორგი ჭუმბურიძე, ირაკლი ვეშაგურიძე, გიგა ნასარიძე, ლაშა ბოჟაძე.",
            'video_title' => "რა? სად? როდის? - ტელემაყურებელი ლაშა ბოჟაძის ექვსეულის წინააღმდეგ",
            'channel_name' => "რა? სად? როდის?"
        ]);

        DB::table('videos')->insert([
            'video_link' => "https://www.youtube.com/watch?v=eqtKikvrc4w",
            'description' => "formula.ge",
            'video_title' => "ჩცდ - სერია 20 (სეზონი 18)",
            'channel_name' => "ჩემი ცოლის დაქალები"
        ]);
    }
}
