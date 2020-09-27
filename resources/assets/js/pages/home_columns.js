(function (){
    'use strict';
     ACMESTORE.home.homecolumns = function () {
         var app = new Vue({
            el:'#colum',
            data: {
                colum: [],
                loading: false
            },
    
            methods: {
                getcolumnsArticle: function () {
                    this.loading = true;
                    axios.get('/colum').then(function (response){
                        console.log(response.data);
                        app.colum = response.data.colum;
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
                this.getcolumnsArticle();
            }
         });
     }
    })();