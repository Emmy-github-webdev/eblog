(function (){
    'use strict';
     ACMESTORE.home.homeeducation = function () {
         var app = new Vue({
            el:'#education',
            data: {
                education: [],
                loading: false
            },
    
            methods: {
                geteducationArticle: function () {
                    this.loading = true;
                    axios.get('/education').then(function (response){
                        console.log(response.data);
                        app.education = response.data.education;
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
                this.geteducationArticle();
            }
         });
     }
    })();