<?php


//for admin routes
$router->map('GET', '/admin', 'App\Controllers\Admin\DashboardController@show', 'admin_dashboard');

$router->map('POST', '/admin', 'App\Controllers\Admin\DashboardController@get', 'admin_form');



//News Category

$router->map('GET', '/admin/news/categories', 
            'App\Controllers\Admin\NewsCategoryController@show', 
            'news_category');

$router->map('POST', '/admin/news/categories', 
            'App\Controllers\Admin\NewsCategoryController@creates', 
            'create_news_category');

$router->map('POST', '/admin/news/categories/[i:id]/edit', 
            'App\Controllers\Admin\NewsCategoryController@edit', 
            'edit_news_category');

$router->map('POST', '/admin/news/categories/[i:id]/delete', 
            'App\Controllers\Admin\NewsCategoryController@delete',
            'delete_news_category');

// New Management
$router->map('GET', '/admin/news/create', 
            'App\Controllers\Admin\ArticleController@showCreateNewsForm', 
            'create_news_form');

$router->map('POST', '/admin/news/create', 
            'App\Controllers\Admin\ArticleController@createNews', 
            'create_news');

 $router->map('GET', '/admin/articles', 
            'App\Controllers\Admin\ArticleController@show', 
            'show_articles');     
            
            
 $router->map('GET', '/admin/news/[i:id]/edit', 
            'App\Controllers\Admin\ArticleController@showEditNewsForm', 
            'edit_news_form');

$router->map('POST', '/admin/news/edit', 
            'App\Controllers\Admin\ArticleController@edit', 
            'edit_news');        
            
$router->map('POST', '/admin/article/[i:id]/delete', 
            'App\Controllers\Admin\ArticleController@delete', 
            'delete_news');  
?>