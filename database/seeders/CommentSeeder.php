<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $commentsSeed = [
            [
                'user_id' => 2,
                'post_id' => 1,
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis necessitatibus in quidem cupiditate consequatur blanditiis iusto pariatur nobis beatae tenetur quos magnam eos, ut, corrupti repellat, obcaecati sunt quod.'
            ],
            [
                'user_id' => 3,
                'post_id' => 1,
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis necessitatibus in quidem cupiditate consequatur blanditiis iusto pariatur nobis beatae tenetur quos magnam eos, ut, corrupti repellat, obcaecati sunt quod.'
            ],
            [
                'user_id' => 4,
                'post_id' => 2,
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis necessitatibus in quidem cupiditate consequatur blanditiis iusto pariatur nobis beatae tenetur quos magnam eos, ut, corrupti repellat, obcaecati sunt quod.'
            ],
        ];

        foreach($commentsSeed as $comment){
            Comment::create($comment);
        }
    }
}
