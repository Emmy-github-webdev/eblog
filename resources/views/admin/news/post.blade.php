@extends('admin.layout.base')
@section('title', 'Manage Articles')
@section('data-page-id', 'adminArticle')

@section('content')
<div class="articles">
    <div class="grid-x grid-padding-x">
        <div class="cell medium-11">
            <h2>Manage Articles</h2> <hr />
        </div>
    </div>
    
    @include('includes.message')
    
    <div class="grid-x grid-padding-x">
        <div class="small-12 medium-11 cell">
             <a href="/admin/news/create" class="button float-right">
                 <i class="fa fa-plus"></i>Add New Article
             </a>
         </div>
               
    </div>
        
    <div class="grid-x grid-padding-x">
        <div class="small-12 medium-11 cell">
            @if(count($articles))
                <table class="hover unstriped" data-form="deleteForm">
                    <thead>
                    <tr><th>Image</th><th>Title</th><th>Written By</th><th>Content</th>
                        <th>Featured</th><th>Category</th><th>Date Created</th><th width="70">Action</th></tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>
                                    <img src="/{{ $article['image_path'] }}" alt="image"
                                    height="40" width="40">
                                </td>
                                <td>{{ $article['title'] }}</td>
                                <td>{{ $article['written'] }}</td>
                                <td  style="white-space: pre-line">{{str_limit($article['content'], $limit = 50, $end = '...') }}</td>
                                <td>{{ $article['featured'] }}</td>
                                <td>{{ $article['category_name'] }}</td>
                                <td>{{ $article['added'] }}</td>
                                <td width="70" class="text-right">
                                    <span data-tooltip aria-haspopup="true" class="has-tip top"
                                          data-disable-hover="false" tabindex="1"
                                          title="Edit Article">
                                        <a href="/admin/news/{{$article['id']}}/edit">
                                            Edit <i class="fa fa-edit"></i></a>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $links !!}
            @else
                <h2>You have not created any article</h2>
            @endif
        </div>
    </div>
</div>
@endsection