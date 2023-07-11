<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['id'=>1, 'name'=>'Travel','slug'=>'travel'],
            ['id'=>2, 'name'=>'Sports','slug'=>'sports'],
            ['id'=>3, 'name'=>'Nature','slug'=>'nature'],
            ['id'=>4, 'name'=>'Opinion','slug'=>'opinion'],
        ];

        foreach($categories as $cat) {
            Category::create($cat);
        }
    }
}
