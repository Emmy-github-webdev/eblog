<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use App\Models\Category;



class Article extends model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $fillable = ['title', 'written', 'content', 'featured', 'category_id', 'image_path', 'image_name'];
    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function transform($data)
    {
        
        $articles = [];

        foreach ($data as $item){
            $added = new Carbon($item->created_at);
            array_push($articles, [
                'id' => $item->id,
                'title' => $item->title,
                'written' => $item->written,
                'content' => $item->content,
                'featured' => $item->featured,
                'category_id' => $item->category_id,
                'category_name' => Category::where('id', $item->category_id)->first()->name,
                'image_path' => $item->image_path,
                'image_name' => $item->image_name,
                'added' => $added->toDayDateTimeString()
            ]);
        }

        return $articles;
    }

}