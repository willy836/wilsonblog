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
        $categoriesSeed = [
            [
                'name' => 'Web Development',
                'slug' => 'development'
            ],
            [
                'name' => 'Food',
                'slug' => 'food'
            ],
            [
                'name' => 'Hobby',
                'slug' => 'hobby'
            ]
        ];

        foreach($categoriesSeed as $category){
            Category::create($category);
        }
    }
}
