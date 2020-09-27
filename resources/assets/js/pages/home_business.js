(function (){
    'use strict';
     ACMESTORE.home.homebusiness = function () {
         var app = new Vue({
            el:'#business',
            data: {
                business: [],
                loading: false
            },
    
            methods: {
                getbusinessArticle: function () {
                    this.loading = true;
                    axios.get('/business').then(function (response){
                        console.log(response.data);
                        app.business = response.data.business;
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
                this.getbusinessArticle();
            }
         });
     }
    })();