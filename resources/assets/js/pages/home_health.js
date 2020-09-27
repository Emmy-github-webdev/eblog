(function (){
    'use strict';
    ACMESTORE.home.homehealth = function () {
         var app = new Vue({
            el:'#healthnews',
            data: {
                health: [],
                loading: false
            },
    
            methods: {
                gethealthArticle: function () {
                    this.loading = true;
                    axios.get('/health').then(function (response){
                        console.log(response.data);
                        app.health = response.data.health;
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
                this.gethealthArticle();
            }
         });
     }
})();