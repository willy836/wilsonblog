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
                'name' => 'Programming',
                'slug' => 'programming'
            ],
            [
                'name' => 'Medicine',
                'slug' => 'medicine'
            ],
            [
                'name' => 'Nature',
                'slug' => 'nature'
            ]
        ];

        foreach($categoriesSeed as $category){
            Category::create($category);
        }
    }
}
