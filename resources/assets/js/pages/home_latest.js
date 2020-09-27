(function (){
    'use strict';
     ACMESTORE.home.homeLatest = function () {
         var app = new Vue({
            el:'#latest',
            data: {
                latest: [],
                loading: false
            },
    
            methods: {
                getlatestArticle: function () {
                    this.loading = true;
                    axios.get('/latest').then(function (response){
                        console.log(response.data);
                        app.latest = response.data.latest;
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
                this.getlatestArticle();
            }
         });
     }
    })();