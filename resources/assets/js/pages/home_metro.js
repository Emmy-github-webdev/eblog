(function (){
    'use strict';
    ACMESTORE.home.homemetro = function () {
         var app = new Vue({
            el:'#metro',
            data: {
                metro: [],
                loading: false
            },
    
            methods: {
                getmetroArticle: function () {
                    this.loading = true;
                    axios.get('/metro').then(function (response){
                        console.log(response.data);
                        app.metro = response.data.metro;
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
                this.getmetroArticle();
            }
         });
     }
})();