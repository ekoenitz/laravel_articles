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
                'title' => json_encode([
                    'en' => 'News A',
                    'ja' => 'ニュースA'
                ]),
                'description' => json_encode([
                    'en' => 'A happened',
                    'ja' => 'Aによってニュース'    
                ]),
                'content' => json_encode([
                    'en' => 'A happened and it was really interesting',
                    'ja' => 'ニュースA'
                ]),
                'genre' => Genres::NEWS,
                'author_id' => 1,
                'created_at' => Carbon::now(),
                'viewers' => json_encode([]),
            ],
            [
                'id' => 2,
                'title' => json_encode([
                    'en' => 'News B',
                    'ja' => 'ニュースB'
                ]),
                'description' => json_encode([
                    'en' => 'B happened',
                    'ja' => 'Bによってニュース'    
                ]),
                'content' => json_encode([
                    'en' => 'B happened and it was really interesting',
                    'ja' => 'ニュースB'
                ]),
                'genre' => Genres::NEWS,
                'author_id' => 2,
                'created_at' => Carbon::now(),
                'viewers' => json_encode([]),
            ],
            [
                'id' => 3,
                'title' => json_encode([
                    'en' => 'Sports A',
                    'ja' => 'スポーツA'
                ]),
                'description' => json_encode([
                    'en' => 'A won',
                    'ja' => 'Aによってスポーツ'    
                ]),
                'content' => json_encode([
                    'en' => 'A won and it was really interesting',
                    'ja' => 'スポーツA'
                ]),
                'genre' => Genres::SPORTS,
                'author_id' => 1,
                'created_at' => Carbon::now(),
                'viewers' => json_encode([]),
            ],
            [
                'id' => 4,
                'title' => json_encode([
                    'en' => 'Sports B',
                    'ja' => 'スポーツB'
                ]),
                'description' => json_encode([
                    'en' => 'B won',
                    'ja' => 'Bによってスポーツ'    
                ]),
                'content' => json_encode([
                    'en' => 'B won and it was really interesting',
                    'ja' => 'スポーツB'
                ]),
                'genre' => Genres::SPORTS,
                'author_id' => 2,
                'created_at' => Carbon::now(),
                'viewers' => json_encode([]),
            ],
            [
                'id' => 5,
                'title' => json_encode([
                    'en' => 'Culture A',
                    'ja' => '文化A'
                ]),
                'description' => json_encode([
                    'en' => 'A Released',
                    'ja' => 'Aによって文化'    
                ]),
                'content' => json_encode([
                    'en' => 'A released and it was really interesting',
                    'ja' => '文化A'
                ]),
                'genre' => Genres::CULTURE,
                'author_id' => 1,
                'created_at' => Carbon::now(),
                'viewers' => json_encode([]),
            ],
            [
                'id' => 6,
                'title' => json_encode([
                    'en' => 'Culture B',
                    'ja' => '文化B'
                ]),
                'description' => json_encode([
                    'en' => 'B Released',
                    'ja' => 'Bによって文化'    
                ]),
                'content' => json_encode([
                    'en' => 'B released and it was really interesting',
                    'ja' => '文化B'
                ]),
                'genre' => Genres::CULTURE,
                'author_id' => 2,
                'created_at' => Carbon::now(),
                'viewers' => json_encode([]),
            ],
            [
                'id' => 7,
                'title' => json_encode([
                    'en' => 'Long News A',
                    'ja' => '長いニュースA'
                ]),
                'description' => json_encode([
                    'en' => 'Long article by A, sourced from https://en.wikipedia.org/wiki/Battle_of_Chikhori',
                    'ja' => 'Aによって長いニュース'    
                ]),
                'content' => json_encode([
                    'en' => "The Battle of Chikhori was fought between the armies of King George VIII of Georgia and the rebellious nobles led by a royal kinsman Bagrat in 1463. It took place near the fortress Chikhori in the district of Argveti in western Georgia, and ended in the king's decisive defeat.\n
                    The battle was the culmination of a fierce and extended internal struggle for hegemony in Georgia that began after the brief reign of Vakhtang IV (1442-1446), and would eventually end with fission of the kingdom. The rebellion against Vakhtang’s brother and successor George VIII, whose legitimacy was disputed, was fomented in western and southern provinces of the Kingdom of Georgia. The western Georgian dukes rallied behind George’s relative Bagrat in a powerful coalition and met the royal army on the battlefield at Chikhori. George was defeated, and Bagrat was crowned king of Imereti at Kutaisi. But in return for their aid, the new monarch was obliged to create a principality for each of his four major allies. Henceforth, the Gelovani family in Svaneti, the Sharvashidze in Abkhazia, the Dadiani in Mingrelia, and the Vardanidze-Gurieli in Guria ruled as semi-independent princes.\n
                    Odishi (Mingrelia), Guria, Abkhazia, Svaneti and Samtskhe – dominated by their own feudal clans.",
                    'ja' => "長いニュース日本語"
                ]),
                'genre' => Genres::NEWS,
                'author_id' => 1,
                'created_at' => Carbon::now(),
                'viewers' => json_encode([]),
            ],
            [
                'id' => 8,
                'title' => json_encode([
                    'en' => 'Long News B',
                    'ja' => '長いニュースB'
                ]),
                'description' => json_encode([
                    'en' => 'Long article by B, sourced from https://en.wikipedia.org/wiki/Battle_of_Chikhori',
                    'ja' => 'Bによって長いニュース'    
                ]),
                'content' => json_encode([
                    'en' => "The Battle of Chikhori was fought between the armies of King George VIII of Georgia and the rebellious nobles led by a royal kinsman Bagrat in 1463. It took place near the fortress Chikhori in the district of Argveti in western Georgia, and ended in the king's decisive defeat.\n
                    The battle was the culmination of a fierce and extended internal struggle for hegemony in Georgia that began after the brief reign of Vakhtang IV (1442-1446), and would eventually end with fission of the kingdom. The rebellion against Vakhtang’s brother and successor George VIII, whose legitimacy was disputed, was fomented in western and southern provinces of the Kingdom of Georgia. The western Georgian dukes rallied behind George’s relative Bagrat in a powerful coalition and met the royal army on the battlefield at Chikhori. George was defeated, and Bagrat was crowned king of Imereti at Kutaisi. But in return for their aid, the new monarch was obliged to create a principality for each of his four major allies. Henceforth, the Gelovani family in Svaneti, the Sharvashidze in Abkhazia, the Dadiani in Mingrelia, and the Vardanidze-Gurieli in Guria ruled as semi-independent princes.\n
                    Odishi (Mingrelia), Guria, Abkhazia, Svaneti and Samtskhe – dominated by their own feudal clans.",
                    'ja' => "長いニュース日本語"
                ]),
                'genre' => Genres::NEWS,
                'author_id' => 2,
                'created_at' => Carbon::now(),
                'viewers' => json_encode([]),
            ]
        ], 'id');
    }
}
