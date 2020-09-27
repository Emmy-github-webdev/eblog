(function (){
    'use strict';
     ACMESTORE.home.homeBreakingNews = function () {
         var app = new Vue({
            el:'#breakingnews',
            data: {
                breaking: [],
                loading: false
            },
    
            methods: {
                getBreakingNews: function () {
                    this.loading = true;
                    axios.get('/breaking').then(function (response){
                        console.log(response.data);
                        app.breaking = response.data.breaking;
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
                this.getBreakingNews();
            }
         });
     }
    })();