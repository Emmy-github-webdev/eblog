(function (){
    'use strict';
     ACMESTORE.article.details = function () {
         var app = new Vue({
            el:'#article',
            data: {
                article: [],
                category: [],
                similarArticles: [],
                articleId: $('#article').data('id'),
                loading: false
            },
    
            methods: {
                getArticleDetails: function () {
                    this.loading = true;
                   setTimeout(function () {
                    axios.get('/article-details/' + app.articleId).then(function (response){
                        app.article = response.data.article;
                        app.category = response.data.category;
                        app.similarArticles = response.data.similarArticles;
                        app.loading = false;
                    });
                   }, 1000);
                },
                stringLimit: function (string, value){
                    if(string.length > value){
                        return string.substring(0, value) + '...';
                    }else{
                        return string;
                    }
                }
               
            },
    
            created: function () {
                this.getArticleDetails();
            }
         });
     }
    })();