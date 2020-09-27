<?php
$router = new AltoRouter;
$router->map('GET', '/', 'App\Controllers\IndexController@show', 
             'home');
$router->map('GET', '/featured', 'App\Controllers\IndexController@featuredArticle', 
             'faetured_article');
$router->map('GET', '/breaking', 'App\Controllers\IndexController@breakingNews', 
             'breaking_news');
$router->map('GET', '/justin', 'App\Controllers\IndexController@justinNews', 
             'just-in_news');
$router->map('GET', '/latest', 'App\Controllers\IndexController@latestNews', 
             'latest_news');
$router->map('GET', '/politics', 'App\Controllers\IndexController@politicsNews', 
             'politics_news');
$router->map('GET', '/business', 'App\Controllers\IndexController@businessNews', 
             'business_news');
$router->map('GET', '/sport', 'App\Controllers\IndexController@sportNews', 
             'sport_news');
$router->map('GET', '/entertainment', 'App\Controllers\IndexController@entertainmentNews', 
             'entertainment_news');
$router->map('GET', '/colum', 'App\Controllers\IndexController@columnsNews', 
             'columns_news');
$router->map('GET', '/education', 'App\Controllers\IndexController@educationNews', 
             'education_news');    
$router->map('GET', '/health', 'App\Controllers\IndexController@healthNews', 
             'health_news');  
$router->map('GET', '/relationship', 'App\Controllers\IndexController@relationshipNews', 
             'relationship_news');   
$router->map('GET', '/technology', 'App\Controllers\IndexController@technologyNews', 
             'technology_news');  
$router->map('GET', '/metro', 'App\Controllers\IndexController@metroNews', 
             'metro_news');   
$router->map('GET', '/others', 'App\Controllers\IndexController@othersNews', 
             'others_news');  
$router->map('GET', '/article/[i:id]', 'App\Controllers\NewsController@show', 
             'article');
$router->map('GET', '/article-details/[i:id]', 'App\Controllers\NewsController@get', 
             'article_details');

$router->map('GET', '/articles/category/[*:title]?', 'App\Controllers\CategoryController@show', 
             'article_category');
$router->map('POST', '/articles/category/load-more', 'App\Controllers\CategoryController@loadMoreArticles', 
        'load_more_article_category');









require_once __DIR__ .'/auth.php';           
require_once __DIR__ .'/admin.php';