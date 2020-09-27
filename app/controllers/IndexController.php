<?php

namespace App\Controllers;
use App\Classes\Mail;
use App\Models\Article;
use App\Classes\CSRFToken;

class IndexController extends BaseController
{
    public function show()
    {
        $token = CSRFToken::_token();
        return view('home', compact('token'));
    }

    public function featuredArticle(){
        $article = Article::where('featured', 1)->OrderBy('created_at', 'desc')->limit(1)->get();
        echo json_encode(['featured' => $article]);
    }

    public function breakingNews(){
        $article = Article::where('featured', 2)->OrderBy('created_at', 'desc')->limit(5)->get();
        echo json_encode(['breaking' => $article]);
    }

    public function justinNews(){
        $article = Article::where('featured', 3)->OrderBy('created_at', 'desc')->limit(6)->get();
        echo json_encode(['justin' => $article]);
    }

    public function latestNews(){
        $article = Article::where('featured', 4)->OrderBy('created_at', 'desc')->limit(6)->get();
        echo json_encode(['latest' => $article]);
    }

    public function politicsNews(){
        $article = Article::where('featured', 5)->OrderBy('created_at', 'desc')->limit(6)->get();
        echo json_encode(['politics' => $article]);

    }

    public function businessNews(){
        $article = Article::where('featured', 6)->OrderBy('created_at', 'desc')->limit(6)->get();
        echo json_encode(['business' => $article]);
    }

    public function sportNews(){
        $article = Article::where('featured', 7)->OrderBy('created_at', 'desc')->limit(5)->get();
        echo json_encode(['sport' => $article]);
    }

    public function entertainmentNews(){
        $article = Article::where('featured', 8)->OrderBy('created_at', 'desc')->limit(5)->get();
        echo json_encode(['entertainment' => $article]);
    }

    public function columnsNews(){
        $article = Article::where('featured', 9)->OrderBy('created_at', 'desc')->limit(5)->get();
        echo json_encode(['colum' => $article]);
    }

    public function educationNews(){
        $article = Article::where('featured', 10)->OrderBy('created_at', 'desc')->limit(5)->get();
        echo json_encode(['education' => $article]);
    }

    public function healthNews(){
        $article = Article::where('featured', 11)->OrderBy('created_at', 'desc')->limit(4)->get();
        echo json_encode(['health' => $article]);
    }

    public function relationshipNews(){
        $article = Article::where('featured', 12)->OrderBy('created_at', 'desc')->limit(4)->get();
        echo json_encode(['relationship' => $article]);
    }

    public function technologyNews(){
        $article = Article::where('featured', 13)->OrderBy('created_at', 'desc')->limit(8)->get();
        echo json_encode(['technology' => $article]);
    }

    public function metroNews(){
        $article = Article::where('featured', 14)->OrderBy('created_at', 'desc')->limit(5)->get();
        echo json_encode(['metro' => $article]);
    }

    public function othersNews(){
        $article = Article::where('featured', 15)->OrderBy('created_at', 'desc')->limit(16)->get();
        echo json_encode(['others' => $article]);
    }
}