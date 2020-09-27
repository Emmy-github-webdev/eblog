<?php

namespace App\Controllers;

use App\Models\Article;
use App\Classes\CSRFToken;
use App\Classes\Request;

class NewsController extends BaseController
{
    public function show($id)
    {
        $token = CSRFToken::_token();
        $article = Article::where('id', $id)->first();
        return view('article', compact('token', 'article'));
    }

    public function get($id)
    {
        $article = Article::where('id', $id)->with(['category'])->first();
        if($article){
            
           $similarArticles = Article::where('category_id', $article->category_id)
                ->where('id', '!=', $id)->inRandomOrder()->limit(8)->get();
            
            echo json_encode([
                'article' => $article, 'category' => $article->category,
                 'similarArticles' => $similarArticles
            ]);
            exit;
        }
        header('HTTP/1.1 422 Uprocessable Entity', true, 422);
        echo 'Article not found';
        exit;
    }


}