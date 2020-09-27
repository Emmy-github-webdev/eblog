@extends('layouts.app')
@section('title') {{ $article->title}} @endsection
@section('data-page-id', 'article')


@section('content')
    <div class="article" id="article" data-token="{{ $token }}" data-id="{{ $article->id}}">
    <p><a href="https://www.halfwaytoyota.com/content/think-toyota-hilux-think-halfway-toyota.html?utm_source=Google&utm_medium=Prog&utm_campaign=D%26C_July2020&gclid=Cj0KCQjwqrb7BRDlARIsACwGad4pYSYXG6TKoEBLb2vvkERQgrRSX2xi6N6Q-UW3nDfoheO0tKIe9TIaAsWmEALw_wcB" target="_blank"><img src="/images/advert/toyota.gif" alt=""></a></p>
        <div class="text-center">
            <i v-show="loading" class="fa fa-spinner" style="font-size: 3rem; padding-bottom: 3rem; color: #0a0a0a;"></i>
        </div>
        
        <div class="row">
            <div class="large-8 columns" style="border-right: 1px solid #E3E5E8;">

                <section class="item-container" class="fa fa-spinner fa-spin" v-if="loading == false">
                    
                    <div class="row column">
                        <nav aria-label="You are here:" role="navigation">
                            <h2 width="100%"><b>@{{article.title}}</b></h2>
                            <br> <br>
                            <ul class="breadcrumbs" width="100%">
                                <li><a :href="'/article/category/' + category.title">@{{category.name}}</a></li>
                                <li>News</li>
                                <li>@{{article.created_at}}</li>
                                <br>
                                <div class="social-media">
                                <ul>
                                    <li>Kindly share this story: </li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                                </div>
                                
                            </ul>
                            
                        </nav>
                        

                        <div >
                            <img :src=" '/' + article.image_path" width="100%" height="500" class="thumbnail">
                            <p> @{{article.image_name}}</p>
                        </div>
                        <br> <br>

                        <div><b>By  @{{article.written}}</b></div>
                        <br>

                        <div style="white-space: pre-line"> @{{article.content}} </div>
                    </div>
               </section>
               <hr>
               <p><a href="https://www.tdafrica.com/hp-ebx360-dragonfly?gclid=Cj0KCQjwqrb7BRDlARIsACwGad65OvGbsG2Acny1Vgp6NHndOamMfite8noIQsa9j90JsO27kikjBLEaAjTbEALw_wcB" target="_blank"><img src="/images/advert/hp1.png" alt=""></a></p>


               <section class="home" v-if="loading == false">
            <div class="display-similar">
                <div class="row medium-up-2 large-up-2">
                    <h2>Similar Articles</h2>
                    <br>
                    <div class="small-6 column" v-cloak v-for="similar in similarArticles">
                        <a :href="'/product/' + similar.id">
                            <div class="card" data-equalizer-watch>
                                <div class="card-section">
                                    <img :src="'/' + similar.image_path" width="200" height="200">
                                </div>
                                <div class="card-section">
                                    <p>
                                        @{{ stringLimit(similar.title, 50) }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

            </div>
             

            <div class="large-4 columns">

                <aside>

                <div class="row small-up-1">

                    <div class="column text-center">
                        <a href="https://www.whogohost.com/host/cart.php?a=add&sld=enteryourdomain&tld=.ng&domain=register&utm_source=Google&utm_medium=Display&utm_campaign=.NG%20%20-%20Google%20Display%20Ad" target="_blank"><img src="/images/advert/whogohost.png" alt=""></a>
                    </div>
                    </div>

                    <br>

                    <div class="row column">
                    <a href="https://brandlifedigital.com/mitsumi/?gclid=Cj0KCQjwqrb7BRDlARIsACwGad5ZORfogerouY3iR4vEFlzXBQ5kPFLSeRNpApp3f0oA2KyskRcc5JkaAoVKEALw_wcB" target="_blank"><img src="/images/advert/hp.png" alt=""></a>
                    </div>

                    <br>

                    <div class="row column">
                        <p><a href="https://uiyty.com/product/mens-casual-genuine-leather-comfortable-snow-shoes-ankle-boots/?gclid=EAIaIQobChMI25KR5--_6wIVBoGFCh3NggKhEAEYASAAEgKfPvD_BwE" target="_blank"><img src="/images/advert/shoe-advert.jpg" alt="advertisement of ShamWow"></a></p>
                    </div>

                    <br>

                    <div class="row column">
                        <p><a href="https://www.volvocars.com/za?utm_source=DV360&utm_medium=Display_Banner&utm_campaign=Volvo_Q3_Awareness&utm_content=AlwaysOn&dclid=CjgKEAjwh7H7BRCDn4mWnI3w_QoSJAAITfcGth54d4P_fyUFyjg5yOp24yXyqLQRTCcYXXZdla4QX_D_BwE" target="_blank"><img src="/images/advert/volvo.jpg" alt="advertisement of ShamWow"></a></p>
                    </div>

                </aside>

            </div>
            </div>

    </div>
   
@stop