(function (){
    'use strict';
     ACMESTORE.home.homepolitics = function () {
         var app = new Vue({
            el:'#politics',
            data: {
                politics: [],
                loading: false
            },
    
            methods: {
                getpoliticsArticle: function () {
                    this.loading = true;
                    axios.get('/politics').then(function (response){
                        console.log(response.data);
                        app.politics = response.data.politics;
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
                this.getpoliticsArticle();
            }
         });
     }
    })();