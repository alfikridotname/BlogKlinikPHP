<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name'=>'HTML',
        	'slug'=>str_slug('HTML')
        ]);

        Category::create([
        	'name'=>'PHP',
        	'slug'=>str_slug('PHP')
        ]);
    }
}
