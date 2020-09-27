(function (){
    'use strict';
     ACMESTORE.home.homesport = function () {
         var app = new Vue({
            el:'#sport',
            data: {
                sport: [],
                loading: false
            },
    
            methods: {
                getsportArticle: function () {
                    this.loading = true;
                    axios.get('/sport').then(function (response){
                        console.log(response.data);
                        app.sport = response.data.sport;
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
                this.getsportArticle();
            }
         });
     }
    })();