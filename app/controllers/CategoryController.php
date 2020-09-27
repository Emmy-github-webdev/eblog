<?php

namespace App\Controllers;
use App\Classes\Request;
use App\Models\Article;
use App\Models\Category;
use App\Classes\CSRFToken;

class CategoryController extends BaseController
{
    public function show(array $params)
    {
        $showBreadCrumbs = true;
        if(isset($params['title']) && $params['title']!== null){
            $category = Category::FindByTitle($params['title']);

            if(!$category){
                throw new \RuntimeException(
                    sprintf('No category with the title %s found', $params['title'])
                );
            }
            $urlparams = json_encode(['title' => $category->title]);
        }else{
            $category = Category::all();
            $showBreadCrumbs = false;
        }
        $token = CSRFToken::_token();
       
        return view('categories', compact('token', 'article', 'showBreadCrumbs', 'urlparams'));
    }

    public function loadMoreArticles(){
         $request = Request::get('post');
        if (CSRFToken::verifyCSRFToken($request->token, false)) {
            $count = $request->count;
            $category = null;
            if(isset($request->title)){
                $category = Category::findByTitle($request->title);
            }
                
            $item_per_page = $count + $request->next;
            if($category){
                $articles = Article::where('category_id', $category->id)->get();
            }else {
                $articles = Article::get();
            }
            echo json_encode(['articles' => $articles, 'count' => count($articles)]);
        }
    }

}