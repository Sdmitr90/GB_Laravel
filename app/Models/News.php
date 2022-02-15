<?php

namespace App\Models;
//use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'news_name',
        'news_description',
        'categories_id'
    ];

    public static function getNews()
    {
        return static::query()
            ->get();
    }

    public static function getNewsById(int $Id)
    {
        return static::query()
            ->where('id', $Id)
            ->get();
    }

    public static function getByCategoryId(int $categoryId)
    {
        return static::query()
            ->where('categories_id', $categoryId)
            ->get();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

//    private $news = [
//        1 => [
//            'title' => 'news category 1',
//            1 => ['news 1', 'содержимое первой новости'],
//            2 => ['news 2','содержимое второй новости'],
//        ],
//        2 => [
//            'title' => 'news category 2',
//            1 => ['news 1', 'содержимое первой новости'],
//            2 => ['news 2','содержимое второй новости'],
//        ]
//    ];

//    /**
//     * @return array
//     */
//    public function getNews()
//    {
//        return $this->news;
//    }
//
//    public function getNewsDB(){
//
//        return DB::select('SELECT n.id as news_id, n.news_name as news, n.news_description as news_description, c.id as categories_id, c.category_name FROM news as n join categories as c on c.id = n.categories_id');
//    }

}
