<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                'nom'=>'Smith',
                "prenom"=>'Alex',
                "textAbout"=> 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
                'job'=> 'UI/UX Designer & Web Developer.',
                "description"=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'birthday'=>'1 mars 1995',
                'website'=>'www.example.com',
                "phone"=>"1234567890",
                "city"=>"New York, USA",
                "age"=>30,
                "degree" => "master",
                "email" => "email@example.com",
                "freelance" => "Available",
                "created_at" =>now(),
            ],
        ]);
    }
}
