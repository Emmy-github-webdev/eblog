(function (){
    'use strict';
     ACMESTORE.home.homeJustIn = function () {
         var app = new Vue({
            el:'#justin',
            data: {
                justin: [],
                loading: false
            },
    
            methods: {
                getjustinArticle: function () {
                    this.loading = true;
                    axios.get('/justin').then(function (response){
                        console.log(response.data);
                        app.justin = response.data.justin;
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
                this.getjustinArticle();
            }
         });
     }
    })();