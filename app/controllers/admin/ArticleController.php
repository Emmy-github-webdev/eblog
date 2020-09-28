<?php
namespace App\Controllers\Admin;

use App\Classes\CSRFToken;
use App\Classes\Redirect;
use App\Classes\Request;
use App\Classes\Session;
use App\Classes\UploadFile;
use App\Classes\ValidateRequest;
use App\Models\Category;
use App\Models\Article;
use App\controllers\BaseController;

class ArticleController extends BaseController
{
    public $table_name = 'articles';
    public $categories;
    public $articles;
    public $links;
    
    public function __construct()
    {
        $this->categories = Category::all();
        $total = Article::all()->count();
       list($this->articles, $this->links) = paginate(3, $total, $this->table_name, new Article);
    }

    public function show()
    {
      
        $articles = $this->articles;
        $links = $this->links;
        return view('admin/articles', compact('articles', 'links'));

    }

    public function showEditNewsForm($id)
    {
        $categories = $this->categories;
        $article = Article::where('id', $id)->with('category')->first();
        return view('/admin/news/edit', compact('article', 'categories'));
    }
    
    public function showCreateNewsForm()
    {
        $categories = $this->categories;
        return view('admin/news/create', compact('categories'));
    }
    
    public function createNews()
    {
        if(Request::has('post')){
            $request = Request::get('post');
            $file_error = [];
            
            if(CSRFToken::verifyCSRFToken($request->token)){
                $rules = [
                  'title' => ['required' => true],
                  'written' => ['required' => true],
                  'content' => ['required' => true],
                  'featured' => ['required' => true],
                  'image_name' => ['required' => true],
                  'category' => ['required' => true]
                ];
                
                $validate = new ValidateRequest;
                $validate->abide($_POST, $rules);

                $file = Request::get('file');
                isset($file->newsImage->name)? $filename = $file->newsImage->name : $filename = '';
                

                if(empty($filename)){
                    $file_error['newsImage'] = ['The Article image is required'];
                }else if(!UploadFile::isImage($filename)){
                    $file_error['newsImage'] = ['The image is invalid, please try again.'];
                }
                
                if($validate->hasError()){
                    $response = $validate->getErrorMessages();
                    count($file_error) ? $errors = array_merge($response, $file_error) : $errors = $response;

                    return view('admin/news/categories', [
                        'categories' => $this->categories, 'errors' => $errors
                    ]);
                }

                $ds = DIRECTORY_SEPARATOR;
                $temp_file = $file->newsImage->tmp_name;
                $image_path =  UploadFile::move($temp_file, "images{$ds}uploads{$ds}products", $filename)->path();


                //process form data
                Article::create([
                    'title' => $request->title,
                    'content' => $request->content,
                    'written' => $request->written,
                    'featured' => $request->featured,
                    'category_id' => $request->category,
                    'image_path' => $image_path,
                    'image_name' => $request->image_name,
                    
                ]);

                Request::refresh();
                
                
                return view('admin/news/create', [
                    'categories' => $this->categories, 'success' => 'Article Created'
                ]);
            }
            throw new \Exception('Token mismatch');
        }
        
        return null;
    }
    
    public function edit($id)
    {
        if(Request::has('post')){
            $request = Request::get('post');
            $file_error = [];
            
            if(CSRFToken::verifyCSRFToken($request->token)){
                $rules = [
                  'title' => ['required' => true],
                  'written' => ['required' => true],
                  'content' => ['required' => true],
                  'featured' => ['required' => true],
                  'image_name' => ['required' => true],
                  'category' => ['required' => true]
                ];
                
                $validate = new ValidateRequest;
                $validate->abide($_POST, $rules);

                $file = Request::get('file');
                isset($file->newsImage->name)? $filename = $file->newsImage->name : $filename = '';
                

                 if(isset($file->newsImage->name) && UploadFile::isImage($filename)){
                    $file_error['newsImage'] = ['The image is invalid, please try again.'];
                }
                
                if($validate->hasError()){
                    $response = $validate->getErrorMessages();
                    count($file_error) ? $errors = array_merge($response, $file_error) : $errors = $response;

                    return view('admin/news/categories', [
                        'categories' => $this->categories, 'errors' => $errors
                    ]);
                }

                $article = Article::findOrFail($request->article_id);
                $article->title = $request->title;
                $article->written = $request->written;
                $article->content = $request->content;
                $article->image_name = $request->image_name;
                $article->featured = $request->featured;
                $article->category_id = $request->category;
               
                
                if($filename){
                    $ds = DIRECTORY_SEPARATOR;
                    $old_image_path = BASE_PATH."{$ds}public{$ds}$product->image_path";

                    $temp_file = $file->newsImage->tmp_name;
                    $image_path =  UploadFile::move($temp_file, "images{$ds}uploads{$ds}products", $filename)->path();

                    unlink($old_image_path);
                    $article->image_path = $image_path;
    
                }

                $article->save();

                
                Session::add('success', 'Record Updated');
                Redirect::to('/admin/articles');
            }
           // throw new \Exception('Token mismatch');
        }
        
        return null;
    }
    
    public function delete($id)
    {
        if(Request::has('post')){
            $request = Request::get('post');
            
            if(CSRFToken::verifyCSRFToken($request->token)){
                Article::destroy($id);
                Session::add('success', 'Article Deleted');
                Redirect::to('/admin/articles');
            }
           // throw new \Exception('Token mismatch');
        }
        
        return null;
    }
}