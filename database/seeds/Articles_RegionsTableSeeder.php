<?php

use Illuminate\Database\Seeder;

class Articles_RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_region')->insert([
            'article_id' => 1,
            'region_id' => 4
        ]);
        DB::table('article_region')->insert([
            'article_id' => 2,
            'region_id' => 4
        ]);
        DB::table('article_region')->insert([
            'article_id' => 3,
            'region_id' => 2
        ]);
        DB::table('article_region')->insert([
            'article_id' => 3,
            'region_id' => 3
        ]);
    }
}
