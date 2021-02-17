<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Beach";
        $category->save();

        $category = new Category();
        $category->name = "Mountain";
        $category->save();
    }
}
