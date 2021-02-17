<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = new Article();
        $article->user_id = 2;
        $article->category_id = 1;
        $article->title = 'Rio de Janiero, Brazil';
        $article->description = "This is Rio de Janiero beach";
        $article->image = "rio-de-janiero.jpg";
        $article->save();

        $article = new Article();
        $article->user_id = 3;
        $article->category_id = 1;
        $article->title = "McWay Falls, United States";
        $article->description = "This is McWay Falls beach";
        $article->image = "mcway-falls.jpg";
        $article->save();

        $article = new Article();
        $article->user_id = 3;
        $article->category_id = 2;
        $article->title = "Pine Forest, United States";
        $article->description = "This is Pine Forest mountains";
        $article->image = "pine-forest.jpg";
        $article->save();

        $article = new Article();
        $article->user_id = 2;
        $article->category_id = 2;
        $article->title = "Weisshorn, Switzerland";
        $article->description = "This is Weisshorn mountains";
        $article->image = "weisshorn.jpg";
        $article->save();


        $article = new Article();
        $article->user_id = 3;
        $article->category_id = 1;
        $article->title = 'Manhattan Beach, United States';
        $article->description = "This is Manhattan beach";
        $article->image = "manhattan-beach.jpg";
        $article->save();

        $article = new Article();
        $article->user_id = 2;
        $article->category_id = 1;
        $article->title = 'Tofino, Canada';
        $article->description = "This is Tofino beach";
        $article->image = "tofino.jpg";
        $article->save();

        $article = new Article();
        $article->user_id = 2;
        $article->category_id = 1;
        $article->title = 'Cape Town, South Africa';
        $article->description = "This is Cape Town beach";
        $article->image = "cape-town.jpg";
        $article->save();

        $article = new Article();
        $article->user_id = 3;
        $article->category_id = 1;
        $article->title = 'Pulau Peutjang, Indonesia';
        $article->description = "This is Pulau Peutjang beach";
        $article->image = "pulau-peutjang.jpg";
        $article->save();

        $article = new Article();
        $article->user_id = 2;
        $article->category_id = 2;
        $article->title = 'Kluane Park, Canada';
        $article->description = "This is Kluane Park mountains";
        $article->image = "kluane-park.jpg";
        $article->save();

        $article = new Article();
        $article->user_id = 2;
        $article->category_id = 2;
        $article->title = 'Zion Park, United States';
        $article->description = "This is Zion Park mountains";
        $article->image = "zion-park.jpg";
        $article->save();

        $article = new Article();
        $article->user_id = 3;
        $article->category_id = 2;
        $article->title = 'Bromo, Indonesia';
        $article->description = "This is Bromo mountains";
        $article->image = "bromo.jpg";
        $article->save();
    }
}
