@extends('layouts.app')
@section('title') 
Categories
@if(isset($category) && $showBreadCrumbs) - {{ $category->name}} @endif
@endsection
@section('data-page-id', 'categories')


@section('content')
<div class="home">
    <div class="row">

  <div class="row small-up-2 medium-up-4 large-up-5">

    <section class="article" data-token="{{ $token }}" data-urlParams="{{$urlParams}}" id="article">
      @if(isset($category) && showBreadCrumbs)
        <div class="grid-x cell">
          <nav aria-lable="You are here:" role="navigation">
            <ul class="showBreadCrumbs">
              <li><a :href="/article/category/{{$category->title}}">{{ $category->name}}</a></li>
            </ul>
          </nav>
        </div>
        @else
        <h2>Categories</h2>
        <h5>Coming soon ...</h5>
      @endif
     <!--  <div class="row medium-up-2 large-up-4">
        <div class="medium-12 column" v-cloak v-for="article in articles">
          <a :href="'/article/' + article.id">
            <div class="card" data-equalizer-watch>
            <div class="card-section">
            <img :src="'/' + article.image_path" width="100%" alt="image for article">
            </div>
            </div>
            <p><b>@{{stringLimit(article.title, 58) }} </b>
          </a>
        </div>
      </div> -->
  </section>

  </div>

  <hr>




</div>
@stop