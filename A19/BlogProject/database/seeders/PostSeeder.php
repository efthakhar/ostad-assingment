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
        $posts = [
            [
                'title'=> 'Example Post Title One' ,
                'slug'=> 'Example Post slug One' ,
                'excerpt'=> 'Example Post excerpt One' ,
                'content'=> 
                'Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente?  Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente? Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente?' ,
                'blog_img_url' => '/img/img1.png',
                'published_at' => '2020:6:10',
                'category_id' => 1,
                'author_id' => 1,
            ],

            [
                'title'=> 'Example Post Title Two' ,
                'slug'=> 'Example Post slug Two' ,
                'excerpt'=> 'Example Post excerpt Two' ,
                'content'=> 
                'Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente?  Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente? Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente?' ,
                'blog_img_url' => '/img/img3.webp',
                'published_at' => '2020:6:10',
                'category_id' => 2,
                'author_id' => 1,
            ],
            [
                'title'=> 'Example Post Title Three' ,
                'slug'=> 'Example Post slug Three' ,
                'excerpt'=> 'Example Post excerpt Three' ,
                'content'=> 
                'Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente?  Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente? Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente?' ,
                'blog_img_url' => '/img/img5.webp',
                'published_at' => '2020:6:10',
                'category_id' => 3,
                'author_id' => 2,
            ],
            [
                'title'=> 'Example Post Title four' ,
                'slug'=> 'Example Post slug Four' ,
                'excerpt'=> 'Example Post excerpt Four' ,
                'content'=> 
                'Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente?  Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente? Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente?' ,
                'blog_img_url' => '/img/img3.webp',
                'published_at' => '2020:6:10',
                'category_id' => 4,
                'author_id' => 1,
            ],
            [
                'title'=> 'Example Post Title five' ,
                'slug'=> 'Example Post slug five' ,
                'excerpt'=> 'Example Post excerpt five' ,
                'content'=> 
                'Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente?  Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente? Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente?' ,
                'blog_img_url' => '/img/img4.jpg',
                'published_at' => '2020:6:10',
                'category_id' => 4,
                'author_id' => 1,
            ],
            [
                'title'=> 'Example Post Title 6' ,
                'slug'=> 'Example Post slug 6' ,
                'excerpt'=> 'Example Post excerpt 6' ,
                'content'=> 
                'Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente?  Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente? Example Post content One Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quo dolores sapiente?' ,
                'blog_img_url' => '/img/img2.webp',
                'published_at' => '2020:6:10',
                'category_id' => 2,
                'author_id' => 1,
            ],
        ];

        foreach($posts as $post) {
            Post::create($post);
        }
    }
}
