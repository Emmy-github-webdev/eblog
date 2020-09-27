<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;



class Category extends model
{
    use SoftDeletes;
    public $timestamps = true;
    public $table = 'categories';
    protected $fillable = ['name', 'title'];
    protected $dates = ['deleted_at'];


    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function transform($data)
    {
        
        $categories = [];

        foreach ($data as $item){
            $added = new Carbon($item->created_at);
            array_push($categories, [
                'id' => $item->id,
                'name' => $item->name,
                'title' => $item->title,
                'added' => $added->toDayDateTimeString()
            ]);
        }

        return $categories;
    }

    public function scopeFindByTitle($queryBuilder, $title){
        return $queryBuilder->where('title', $title)->first();
    }

}