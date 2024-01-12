<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Enums\Genres;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->upsert([
            [
                'id' => 1,
                'title' => 'News A',
                'description' => 'A happened',
                'content' => 'A happened and it was really interesting',
                'genre' => Genres::NEWS,
                'author_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'title' => 'News B',
                'description' => 'B happened',
                'content' => 'B happened and it was really interesting',
                'genre' => Genres::NEWS,
                'author_id' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'title' => 'Sports A',
                'description' => 'A won',
                'content' => 'A won and it was really interesting',
                'genre' => Genres::SPORTS,
                'author_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'title' => 'Sports B',
                'description' => 'B won',
                'content' => 'B won and it was really interesting',
                'genre' => Genres::SPORTS,
                'author_id' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'title' => 'Culture A',
                'description' => 'A released',
                'content' => 'A released and it was really interesting',
                'genre' => Genres::CULTURE,
                'author_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'title' => 'Culture B',
                'description' => 'B released',
                'content' => 'B released and it was really interesting',
                'genre' => Genres::CULTURE,
                'author_id' => 2,
                'created_at' => Carbon::now(),
            ],
        ], 'id');
    }
}
