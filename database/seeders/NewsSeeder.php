<?php
namespace Database\Seeders;

use App\Models\news;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    public function run()
    {
        Article::create([
            'title' => 'Sample Article 1',
            'author' => 'John Doe',
            'image_url' => 'https://via.placeholder.com/400x300',
            'published_at' => now(),
            'content' => 'This is a sample article.',
        ]);

    }
}

