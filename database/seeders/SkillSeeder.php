<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                'language'=>'HTML',
                'value'=>100,
                "created_at"=>now()

            ],
            [
                'language'=>'CSS',
                'value'=>90,
                "created_at"=>now()
            ],
            [
                'language'=>'Javascript',
                'value'=>75,
                "created_at"=>now()
            ],
            [
                'language'=>'PHP',
                'value'=>80,
                "created_at"=>now()
            ],
            [
                'language'=>'Wordpress',
                'value'=>90,
                "created_at"=>now()
            ],
            [
                'language'=>'Photoshop',
                'value'=>55,
                "created_at"=>now()
            ],

        ]);
    }
}
