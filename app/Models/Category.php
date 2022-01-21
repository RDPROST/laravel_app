<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

     private $categories = [
        1 => [
            'name' => 'test'
        ],
        2 => [
            'name' => 'test 1'
        ],
        3 => [
            'name' => 'test 2'
        ],
    ];

    public function getAllCategories(): array
    {
        return $this->categories;
    }

    public function getCategoryById($id): array
    {
        return $this->categories[$id];
    }

    public function createCategory($arr)
    {
        $this->categories[] = $arr;
    }
}
