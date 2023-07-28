<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postsSeed = [
            [
                'title' => 'Post One',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 1,
                'user_id' => 1,
                'image' => 'https://pixabay.com/get/gf8be99e82a7c7a49c23e6d901ca2b387be70da49bebc530b88869384942fe439a117811b54c948870b656f26642895945ae8947485eda9662678e3cf4c38fb96_1280.jpg'
            ],
            [
                'title' => 'Post Two',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 2,
                'user_id' => 2,
                'image' => 'https://pixabay.com/get/gf8be99e82a7c7a49c23e6d901ca2b387be70da49bebc530b88869384942fe439a117811b54c948870b656f26642895945ae8947485eda9662678e3cf4c38fb96_1280.jpg'
            ],
            [
                'title' => 'Post Three',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 3,
                'user_id' => 3,
                'image' => 'https://pixabay.com/get/gf8be99e82a7c7a49c23e6d901ca2b387be70da49bebc530b88869384942fe439a117811b54c948870b656f26642895945ae8947485eda9662678e3cf4c38fb96_1280.jpg'
            ],
            [
                'title' => 'Post Four',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 1,
                'user_id' => 2,
                'image' => 'https://pixabay.com/get/gf8be99e82a7c7a49c23e6d901ca2b387be70da49bebc530b88869384942fe439a117811b54c948870b656f26642895945ae8947485eda9662678e3cf4c38fb96_1280.jpg'
            ],
            [
                'title' => 'Post Five',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 2,
                'user_id' => 4,
                'image' => 'https://pixabay.com/get/gf8be99e82a7c7a49c23e6d901ca2b387be70da49bebc530b88869384942fe439a117811b54c948870b656f26642895945ae8947485eda9662678e3cf4c38fb96_1280.jpg'
            ],
            [
                'title' => 'Post Six',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 3,
                'user_id' => 5,
                'image' => 'https://pixabay.com/get/gf8be99e82a7c7a49c23e6d901ca2b387be70da49bebc530b88869384942fe439a117811b54c948870b656f26642895945ae8947485eda9662678e3cf4c38fb96_1280.jpg'
            ],
        ];

        foreach($postsSeed as $post){
            Post::create($post);
        };
    }
}
