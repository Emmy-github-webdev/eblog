@extends('admin.layout.base')
@section('title', 'Edit Article')
@section('data-page-id', 'adminArticle')

@section('content')
<div class="edit-article">
    <div class="grid-x grid-padding-x">
        <div class="cell medium-11">
            <h2>Edit {{ $article->name }}</h2> <hr />
        </div>
    </div>
    
    @include('includes.message')
    
    <form method="post" action="/admin/news/edit" enctype="multipart/form-data">
        <div class="small-12 medium-11">
            <div class="grid-x grid-padding-x">
                <div class="small-12 medium-6 cell">
                <label>Article Title:
                    <input type="text" name="title" value="{{ $article->title }}">
                </label>
                </div>
    
                <div class="small-12 medium-6 cell">
                    <label>Article Category:
                        <select name="category" id="article-category">
                            <option value="{{ $article->category->id }}">
                                {{ $article->category->name }}
                            </option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
              
                <div class="small-12 medium-6 cell">
                    <label>Featured:
                        <select name="featured">
                            <option value="{{ $article->featured }}">
                                {{ $article->featured  }}
                            </option>
                            @for($i = 0; $i <= 18; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </label>
                </div>
    
                <div class="small-12 medium-6 cell">
                    <br />
                   <div class="input-group">
                       <span class="input-group-label">Article Image:</span>
                       <input type="file" name="NewsImage" class="input-group-field">
                   </div>
                </div>

                <div class="small-12 medium-6 cell">
                    <label>Written By:
                        <input type="text" name="written" value="{{ $article->written }}">
                    </label>
                </div>

                <div class="small-12 medium-6 cell">
                    <label>Image Name:
                        <input type="text" name="image_name" value="{{ $article->image_name }}">
                    </label>
                </div>
                
                <div class="small-12 cell">
                    <label>Content:
                   <textarea name="content" rows="20" cols="50">{{$article->content}}</textarea>
                   <!--  <textarea name="content">{{$article->content}}</textarea>
                    <script>
                            CKEDITOR.replace( 'content' );
                            
                    </script> -->
                    </label>
                    <input type="hidden" name="token" value="{{ \App\Classes\CSRFToken::_token() }}">
                    <input type="hidden" name="article_id" value="{{ $article->id }}">
                    <input class="button warning float-right" type="submit" value="Update Article">
                </div> 
            </div>
        </div>
    </form>

    <!--Delet Button-->
    <div class="grid-x grid-padding-x">
        <div class="small-12 medium-11">
            <table data-form="deleteForm">
                <tr style="border: 1px solid #ffffff; !important">
                    <td style="border: 1px solid #ffffff; !important">
                        <form method="POST" action="/admin/article/{{$article->id}}/delete" class="delete-item">
                            <input type="hidden" name="token" value="{{ \App\Classes\CSRFToken::_token() }}">
                            <button type="submit" class="button alert">Delete Article</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>
@include('includes.delete-modal')
@endsection