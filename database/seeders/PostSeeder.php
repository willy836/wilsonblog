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
                'title' => "Mastering Laravel: Unleashing the Power of PHP's Finest Framework",
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 1,
                'user_id' => 1,
                'image' => 'https://images.unsplash.com/photo-1599507593362-50fa53ed1b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80'
            ],
            [
                'title' => 'Medical Imaging: How CT Scans Guide Procedures Such as Surgery',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 2,
                'user_id' => 2,
                'image' => 'https://images.unsplash.com/photo-1666214280165-20e3d73d70bf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80'
            ],
            [
                'title' => "Beyond the Horizon: Embracing Bliss on the Beaches of the Ocean",
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 3,
                'user_id' => 3,
                'image' => 'https://images.unsplash.com/photo-1611915458524-e79e11828001?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1476&q=80'
            ],
            [
                'title' => "Laravel Tips and Tricks: Supercharge Your Development Workflow Now!",
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 1,
                'user_id' => 2,
                'image' => 'https://images.unsplash.com/photo-1599507593362-50fa53ed1b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80'
            ],
            [
                'title' => "CT Scan: Peering Inside the Body's Hidden World for Precision Diagnosis",
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 2,
                'user_id' => 4,
                'image' => 'https://images.unsplash.com/photo-1666214280165-20e3d73d70bf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80'
            ],
            [
                'title' => "The Call of the Sea: Embracing the Beauty in Nature's Oceanic Wonderland",
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 3,
                'user_id' => 5,
                'image' => 'https://images.unsplash.com/photo-1611915458524-e79e11828001?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1476&q=80'
            ],
            [
                'title' => "PHP Development 101: A Beginner's Guide to Building Dynamic Websites",
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos earum optio omnis, nostrum pariatur, tempora quos illum ut officia illo saepe voluptatibus magnam itaque libero ex beatae ullam quae architecto necessitatibus perspiciatis culpa dolorem iusto soluta sit. Perspiciatis, molestiae esse!',
                'category_id' => 1,
                'user_id' => 1,
                'image' => 'https://images.unsplash.com/photo-1599507593362-50fa53ed1b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80'
            ],
        ];

        foreach($postsSeed as $post){
            Post::create($post);
        };
    }
}
