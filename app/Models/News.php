<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    private $news = [
        1 => [
            'img' => 'https://images.ctfassets.net/hrltx12pl8hq/7yQR5uJhwEkRfjwMFJ7bUK/dc52a0913e8ff8b5c276177890eb0129/offset_comp_772626-opt.jpg?fit=fill&w=800&h=300',
            'title' => 'News 1',
            'description' => 'Testing description for news.',
            'category_id' => 1
        ],
        2 => [
            'img' => 'https://images.ctfassets.net/hrltx12pl8hq/7yQR5uJhwEkRfjwMFJ7bUK/dc52a0913e8ff8b5c276177890eb0129/offset_comp_772626-opt.jpg?fit=fill&w=800&h=300',
            'title' => 'News 2',
            'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
            'category_id' => 2
        ],
        3 => [
            'img' => 'https://images.ctfassets.net/hrltx12pl8hq/7yQR5uJhwEkRfjwMFJ7bUK/dc52a0913e8ff8b5c276177890eb0129/offset_comp_772626-opt.jpg?fit=fill&w=800&h=300',
            'title' => 'News 3',
            'description' => 'Testing description for news.',
            'category_id' => 3
        ],
        4 => [
            'img' => 'https://images.ctfassets.net/hrltx12pl8hq/7yQR5uJhwEkRfjwMFJ7bUK/dc52a0913e8ff8b5c276177890eb0129/offset_comp_772626-opt.jpg?fit=fill&w=800&h=300',
            'title' => 'News 4',
            'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
            'category_id' => 1
        ]
    ];

    public function getAll(): array
    {
        return $this->news;
    }

    public function getById(int $id): array
    {
        return $this->news[$id];
    }

    public function createNews($arr){
        $this->news[] = $arr;
    }
}
