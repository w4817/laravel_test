<?php

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (News::count() == 0){
            News::create([
               'title' => 'interisting news 1',
                'content' => 'some content for news 1',
                'image' => 'images/image1.jpg'
            ]);
            News::create([
                'title' => 'interisting news 2',
                'image' => 'images/image2.png'
            ]);
            News::create([
                'title' => 'interisting news 3',
            ]);
        }
    }
}
