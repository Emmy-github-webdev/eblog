(function (){
    'use strict';
    ACMESTORE.home.homeothers = function () {
         var app = new Vue({
            el:'#othernews',
            data: {
                others: [],
                loading: false
            },
    
            methods: {
                getothersArticle: function () {
                    this.loading = true;
                    axios.get('/others').then(function (response){
                        console.log(response.data);
                        app.others = response.data.others;
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
                this.getothersArticle();
            }
         });
     }
})();