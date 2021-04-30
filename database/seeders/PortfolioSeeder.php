<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            [
                'image'=>'img/portfolio/portfolio-1.jpg',
                "filter"=>"filter-app",
            ],
            [
                'image'=>'img/portfolio/portfolio-2.jpg',
                "filter"=>"filter-web",
            ],
            [
                'image'=>'img/portfolio/portfolio-3.jpg',
                "filter"=>"filter-card",
            ],
            [
                'image'=>'img/portfolio/portfolio-4.jpg',
                "filter"=>"filter-app",
            ],
            [
                'image'=>'img/portfolio/portfolio-5.jpg',
                "filter"=>"filter-web",
            ],
            [
                'image'=>'img/portfolio/portfolio-6.jpg',
                "filter"=>"filter-card",
            ],
            [
                'image'=>'img/portfolio/portfolio-7.jpg',
                "filter"=>"filter-app",
            ],
            [
                'image'=>'img/portfolio/portfolio-8.jpg',
                "filter"=>"filter-web",
            ],
            [
                'image'=>'img/portfolio/portfolio-9.jpg',
                "filter"=>"filter-card",
            ],





        ]);
    }
}
