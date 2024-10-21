<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('books')
        ->insert([
            [
                'auhtor_id'       => '1',
                'author_name'   => 'Herry',
                'slug'     => 'dad-story',
                'title' => "Dad, I Want to Hear Your Story",
                'publish_date'          => '1988',
                'category_id'   => '1',
                'genre' => 'Dad, I Want to Hear Your Story',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '1',
                'author_name'   => 'Herry',
                'slug'     => 'spooky-cutie',
                'title' => "Spooky Cutie",
                'publish_date'          => '1998',
                'category_id'   => '2',
                'genre' => 'Spooky Cutie',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '1',
                'author_name'   => 'Herry',
                'slug'     => 'onyx-storm',
                'title' => "Onyx Storm",
                'publish_date'          => '2000',
                'category_id'   => '3',
                'genre' => 'Onyx Storm',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '1',
                'author_name'   => 'Herry',
                'slug'     => 'good-energy',
                'title' => "Good Energy",
                'publish_date'          => '1877',
                'category_id'   => '4',
                'genre' => 'Good Energy',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '1',
                'author_name'   => 'Herry',
                'slug'     => 'the-message',
                'title' => "The Message",
                'publish_date'          => '2000',
                'category_id'   => '5',
                'genre' => 'The Message',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '2',
                'author_name'   => 'Potter',
                'slug'     => 'cozy-friends',
                'title' => "Cozy Friends",
                'publish_date'          => '1988',
                'category_id'   => '1',
                'genre' => 'Cozy Friends',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '2',
                'author_name'   => 'Potter',
                'slug'     => 'little-corner',
                'title' => "Little Corner",
                'publish_date'          => '1998',
                'category_id'   => '2',
                'genre' => 'Little Corner',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '2',
                'author_name'   => 'Potter',
                'slug'     => 'the-women-novel',
                'title' => "The Women: A Novel",
                'publish_date'          => '2000',
                'category_id'   => '3',
                'genre' => 'The Women: A Novel',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '2',
                'author_name'   => 'Potter',
                'slug'     => 'the-anxious-generation',
                'title' => "The Anxious Generation",
                'publish_date'          => '1877',
                'category_id'   => '4',
                'genre' => 'The Anxious Generation',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '2',
                'author_name'   => 'Potter',
                'slug'     => 'fuzzy-hygge',
                'title' => "Fuzzy Hygge",
                'publish_date'          => '2000',
                'category_id'   => '5',
                'genre' => 'Fuzzy Hygge',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '3',
                'author_name'   => 'Alex',
                'slug'     => 'my-first-learn-to-write',
                'title' => "My First Learn-to-Write",
                'publish_date'          => '1988',
                'category_id'   => '1',
                'genre' => '"My First Learn-to-Write',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '3',
                'author_name'   => 'Alex',
                'slug'     => 'iron-flame',
                'title' => "Iron Flame (The Empyrean2)",
                'publish_date'          => '1998',
                'category_id'   => '2',
                'genre' => 'Iron Flame (The Empyrean2)',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '3',
                'author_name'   => 'Alex',
                'slug'     => 'the-book-of-bill',
                'title' => "The Book of Bill (Gravity Falls)",
                'publish_date'          => '2000',
                'category_id'   => '3',
                'genre' => 'The Book of Bill (Gravity Falls)',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '3',
                'author_name'   => 'Alex',
                'slug'     => 'the-spooky-bus',
                'title' => "The Spooky Wheels on the Bus",
                'publish_date'          => '1877',
                'category_id'   => '4',
                'genre' => 'The Spooky Wheels on the Bus',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '3',
                'author_name'   => 'Alex',
                'slug'     => 'the-wildrobot',
                'title' => "The Wild Robot (Volume 1)",
                'publish_date'          => '2000',
                'category_id'   => '5',
                'genre' => 'The Wild Robot (Volume 1)',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '4',
                'author_name'   => 'Malina',
                'slug'     => 'how-to-retire',
                'title' => "How to Retire",
                'publish_date'          => '1988',
                'category_id'   => '1',
                'genre' => 'How to Retire',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '4',
                'author_name'   => 'Malina',
                'slug'     => 'the-body-keeps-the-score',
                'title' => "The Body Keeps the Score",
                'publish_date'          => '1998',
                'category_id'   => '2',
                'genre' => 'The Body Keeps the Score',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '4',
                'author_name'   => 'Malina',
                'slug'     => 'the48laws',
                'title' => "The 48 Laws of Power",
                'publish_date'          => '2000',
                'category_id'   => '3',
                'genre' => 'The 48 Laws of Power',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '4',
                'author_name'   => 'Malina',
                'slug'     => 'Wildrobotescapes',
                'title' => "Wild Robot Escapes",
                'publish_date'          => '1877',
                'category_id'   => '4',
                'genre' => 'Wild Robot Escapes',
                'created_at'    => Carbon::now()
            ],
            [
                'auhtor_id'       => '4',
                'author_name'   => 'Malina',
                'slug'     => 'toxic-empathy',
                'title' => "Toxic Empathy",
                'publish_date'          => '2000',
                'category_id'   => '5',
                'genre' => 'Toxic Empathy',
                'created_at'    => Carbon::now()
            ],
        ]);
    }
}
