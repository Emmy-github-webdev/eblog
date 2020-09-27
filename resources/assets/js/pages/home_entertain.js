(function (){
    'use strict';
     ACMESTORE.home.homeentertainment = function () {
         var app = new Vue({
            el:'#entertainment',
            data: {
                entertainment: [],
                loading: false
            },
    
            methods: {
                getentertainmentArticle: function () {
                    this.loading = true;
                    axios.get('/entertainment').then(function (response){
                        console.log(response.data);
                        app.entertainment = response.data.entertainment;
                        app.loading = false;
                    });
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
                this.getentertainmentArticle();
            }
         });
     }
    })();