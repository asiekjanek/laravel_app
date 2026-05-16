<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $post1 = Post::create([
            'title' => 'Pierwszy post',
            'content' => 'To jest treść pierwszego posta.'
        ]);

        $post2 = Post::create([
            'title' => 'Drugi post',
            'content' => 'To jest treść drugiego posta.'
        ]);

        $category1 = Category::create([
            'name' => 'Laravel'
        ]);

        $category2 = Category::create([
            'name' => 'PHP'
        ]);

        $category3 = Category::create([
            'name' => 'Bazy danych'
        ]);

        $post1->categories()->attach([$category1->id, $category2->id]);
        $post2->categories()->attach([$category2->id, $category3->id]);
    }
}