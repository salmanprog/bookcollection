<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Book;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('category')
        ->insert([
            [
                'title' => "Literature",
                'slug'     => 'literature',
                'created_at'    => Carbon::now()
            ],
            [
                'title' => "Music",
                'slug'     => 'music',
                'created_at'    => Carbon::now()
            ],
            [
                'title' => "Art",
                'slug'     => 'art',
                'created_at'    => Carbon::now()
            ],
            [
                'title' => "History",
                'slug'     => 'history',
                'created_at'    => Carbon::now()
            ],
            [
                'title' => "Development",
                'slug'     => 'development',
                'created_at'    => Carbon::now()
            ],
        ]);
    }
}
