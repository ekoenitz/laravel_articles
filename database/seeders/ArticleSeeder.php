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
            [
                'id' => 7,
                'title' => 'Long News A',
                'description' => 'Long article by A, sourced from https://en.wikipedia.org/wiki/Battle_of_Chikhori',
                'content' => "The Battle of Chikhori was fought between the armies of King George VIII of Georgia and the rebellious nobles led by a royal kinsman Bagrat in 1463. It took place near the fortress Chikhori in the district of Argveti in western Georgia, and ended in the king's decisive defeat.\n
                The battle was the culmination of a fierce and extended internal struggle for hegemony in Georgia that began after the brief reign of Vakhtang IV (1442-1446), and would eventually end with fission of the kingdom. The rebellion against Vakhtang’s brother and successor George VIII, whose legitimacy was disputed, was fomented in western and southern provinces of the Kingdom of Georgia. The western Georgian dukes rallied behind George’s relative Bagrat in a powerful coalition and met the royal army on the battlefield at Chikhori. George was defeated, and Bagrat was crowned king of Imereti at Kutaisi. But in return for their aid, the new monarch was obliged to create a principality for each of his four major allies. Henceforth, the Gelovani family in Svaneti, the Sharvashidze in Abkhazia, the Dadiani in Mingrelia, and the Vardanidze-Gurieli in Guria ruled as semi-independent princes.\n
                Odishi (Mingrelia), Guria, Abkhazia, Svaneti and Samtskhe – dominated by their own feudal clans.",
                'genre' => Genres::NEWS,
                'author_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 8,
                'title' => 'Long News B',
                'description' => 'Long article by B, sourced from https://en.wikipedia.org/wiki/Battle_of_Chikhori',
                'content' => "The Battle of Chikhori was fought between the armies of King George VIII of Georgia and the rebellious nobles led by a royal kinsman Bagrat in 1463. It took place near the fortress Chikhori in the district of Argveti in western Georgia, and ended in the king's decisive defeat.\n
                The battle was the culmination of a fierce and extended internal struggle for hegemony in Georgia that began after the brief reign of Vakhtang IV (1442-1446), and would eventually end with fission of the kingdom. The rebellion against Vakhtang’s brother and successor George VIII, whose legitimacy was disputed, was fomented in western and southern provinces of the Kingdom of Georgia. The western Georgian dukes rallied behind George’s relative Bagrat in a powerful coalition and met the royal army on the battlefield at Chikhori. George was defeated, and Bagrat was crowned king of Imereti at Kutaisi. But in return for their aid, the new monarch was obliged to create a principality for each of his four major allies. Henceforth, the Gelovani family in Svaneti, the Sharvashidze in Abkhazia, the Dadiani in Mingrelia, and the Vardanidze-Gurieli in Guria ruled as semi-independent princes.\n
                Odishi (Mingrelia), Guria, Abkhazia, Svaneti and Samtskhe – dominated by their own feudal clans.",
                'genre' => Genres::NEWS,
                'author_id' => 2,
                'created_at' => Carbon::now(),
            ]
        ], 'id');
    }
}
