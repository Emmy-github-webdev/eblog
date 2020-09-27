@extends('admin.layout.base')
@section('title', 'Create Article')
@section('data-page-id', 'adminArticle')

@section('content')

<div class="add-articles">
    <div class="grid-x grid-padding-x">
        <div class="column medium-11">
            <h2>Add New Article</h2> <hr />
        </div>
    </div>
    
    @include('includes.message')

           
<form method="post" action="/admin/news/create" enctype="multipart/form-data">
        <div class="small-12 medium-11">
            <div class="grid-x grid-padding-x">
                <div class="small-12 medium-6 cell">
                    <label>Title:
                        <input type="text" name="title" placeholder="Enter news title"
                            value="{{ \App\Classes\Request::old('post', 'title') }}">
                    </label>
                </div>
    
                <div class="small-12 medium-6 cell">
                    <label>News Category:
                        <select name="category" id="news-category">
                            <option value="{{ \App\Classes\Request::old('post', 'category')?:"" }}">
                                {{ \App\Classes\Request::old('post', 'category')?:"Select Category" }}
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
                            <option value="{{ \App\Classes\Request::old('post', 'featured')?:"" }}">
                                {{ \App\Classes\Request::old('post', 'featured')?:"Select featured ID" }}
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
                       <span class="input-group-label">Image:</span>
                       <input type="file" name="newsImage" class="input-group-field">
                   </div>
                </div>

                <div class="small-12 medium-6 cell">
                    <label>Written By:
                        <input type="text" name="written" placeholder="Written by "
                            value="{{ \App\Classes\Request::old('post', 'written') }}">
                    </label>
                </div>

                <div class="small-12 medium-6 cell">
                    <label>Image Name:
                        <input type="text" name="image_name" placeholder="Enter image capture"
                            value="{{ \App\Classes\Request::old('post', 'image_name') }}">
                    </label>
                </div>
                
                <div class="small-12 cell">
                    <label>Content:
                   <textarea name="content" placeholder="Enter News Content Here" rows="20" cols="50">{{\App\Classes\Request::old('post', 'content')}}</textarea> 
                   <!--  <textarea name="content" placeholder="Enter News Content Here">{{\App\Classes\Request::old('post', 'content')}}</textarea>
                    <script>
                            CKEDITOR.replace( 'content' );
                            
                    </script> -->
                    
                    </label>
                    <input type="hidden" name="token" value="{{ \App\Classes\CSRFToken::_token() }}">
                    <button class="button alert" type="reset">Reset</button>
                    <input class="button success float-right" type="submit" value="Save">
                </div>
            </div>
        </div>
    </form>
    
   
</div>
     
    @include('includes.delete-modal')
@endsection