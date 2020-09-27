(function (){
    'use strict';
    ACMESTORE.home.hometechnology = function () {
         var app = new Vue({
            el:'#technews',
            data: {
                technology: [],
                loading: false
            },
    
            methods: {
                gettechnologyArticle: function () {
                    this.loading = true;
                    axios.get('/technology').then(function (response){
                        console.log(response.data);
                        app.technology = response.data.technology;
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
                this.gettechnologyArticle();
            }
         });
     }
})();