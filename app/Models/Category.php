<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_name',
        'category_description'
    ];

    public static function getCategories()
    {
        return static::query()
            ->get();
    }

    public static function getCategoriesById(int $Id)
    {
        return static::query()
            ->where('id', $Id)
            ->get();
    }

    public function rules()
    {
        return [
            'categories_name' => 'required|min:10|max:50|unique:categories',
            'categories_description' => 'max:1000| required'
        ];
    }
}
